<?php 

$_CONFIG['db_host'] = getenv('DB_HOST');
$_CONFIG['db_user'] = getenv('DB_USER');
$_CONFIG['db_pass'] = getenv('DB_PASS');
$_CONFIG['db_name'] = getenv('DB_NAME');

$_CONFIG['stripe_pk'] = getenv('STRIPE_PK');
$_CONFIG['stripe_sk'] = getenv('STRIPE_SK');

$_CONFIG['ac_url'] = "https://thefamproject.api-us1.com/";
$_CONFIG['ac_key'] = getenv('AC_KEY');
$_CONFIG['ac_list_id'] = "4";
