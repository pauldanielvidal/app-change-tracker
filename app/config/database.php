<?php
$container->setParameter('database_driver',       'pdo_mysql');

$container->setParameter('database_host',         base64_decode( $_SERVER["RDS_HOSTNAME"])    );
$container->setParameter('database_port',         base64_decode( $_SERVER["RDS_HOSTPORT"])    );
$container->setParameter('database_name',         base64_decode( $_SERVER["RDS_DATABASE"])    );
$container->setParameter('database_user',         base64_decode( $_SERVER["RDS_USERNAME"])    );
$container->setParameter('database_password',     base64_decode( $_SERVER["RDS_PASSWORD"])    );
