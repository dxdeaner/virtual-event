<?php

// Read config
require_once('config.php');

// Connect to the database
$mysqli = new mysqli($_CONFIG['db_host'], $_CONFIG['db_user'], $_CONFIG['db_pass'], $_CONFIG['db_name']);
if ($mysqli->connect_errno) {
  echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

// Start sessions
session_start();

// Load Stripe SDK
require 'vendor/autoload.php';
$stripe = new \Stripe\StripeClient($_CONFIG['stripe_sk']);

// Setup ActiveCampaign
$ac = new ActiveCampaign($_CONFIG['ac_url'], $_CONFIG['ac_key']);

// Save affiliate variables in session
if (!empty($_GET['oid'] ?? '')) { $_SESSION['oid'] = $_GET['oid'] ?? ''; }
if (!empty($_GET['affid'] ?? '')) { $_SESSION['affid'] = $_GET['affid'] ?? ''; }
if (!empty($_GET['sub1'] ?? '')) { $_SESSION['sub1'] = $_GET['sub1'] ?? ''; }
if (!empty($_GET['tid'] ?? '')) { $_SESSION['tid'] = $_GET['tid'] ?? ''; }
if (!empty($_GET['email'] ?? '')) { $_SESSION['email'] = $_GET['email'] ?? ''; }

if ($_REQUEST['muhsession'] ?? '' == "1") { 
  echo '<pre>';
  var_dump($_SESSION); 
  echo '</pre>';
}

// Limit session vars to DB col sizes
if (!empty($_SESSION['affid'] ?? '')) {
    $_SESSION['affid'] = substr($_SESSION['affid'], 0, 6);
}

// Functions
function redirectTo($l) {
    header("Location: $l");
}

function saveRegToSession() {
    $_SESSION['firstname'] = $_REQUEST['firstname'];
    $_SESSION['lastname'] = $_REQUEST['lastname'];
    $_SESSION['email'] = $_REQUEST['email'];
    $_SESSION['phone'] = $_REQUEST['phone'];
    $_SESSION['event_date'] = $_REQUEST['event_date'];
}

function saveRegToDB() {
    global $mysqli;
    $now = date("Y-m-d H:i:s");
    $ip = getIP();
    $firstname = $_SESSION['firstname'];
    $lastname = $_SESSION['lastname'];
    $email = $_SESSION['email'];
    $phone = $_SESSION['phone'];
    $oid = $_SESSION['oid'];
    $affid = $_SESSION['affid'];
    $sub1 = $_SESSION['sub1'];
    $tid = $_SESSION['tid'];
    $sql = "INSERT INTO `registrations` (`firstname`, `lastname`, `email`, `phone`, `oid`, `affid`, `sub1`, `tid`, `ip`, `created_at`) VALUES ('$firstname', '$lastname', '$email', '$phone', '$oid', '$affid', '$sub1', '$tid', '$ip', '$now')";
    $mysqli->query($sql);
}

function getIP() {
  if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip_address = $_SERVER['HTTP_CLIENT_IP'];
  } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
  } else {
    $ip_address = $_SERVER['REMOTE_ADDR'];
  }
  return $ip_address;
}

function addContactToAC($params) {
    global $ac;
    $params["p[{$list_id}]"] = $params['list_id'];
    $params["phone"] = $params['phone'] ?? '';
    $params["field[1,0]"] = $params['affid'] ?? '';
    $params["field[4,0]"] = $params['event_date'] ?? '';
    $params["status[{$list_id}]"] = 1;
    $ac->api("contact/sync", $params);
}

// Process the rest of the page!
