<?php
$container->setParameter('database_driver',       'pdo_mysql');

$container->setParameter('database_host',         base64_decode( $_SERVER["RDS__HOSTNAME"])    );
$container->setParameter('database_port',         base64_decode( $_SERVER["RDS__HOSTPORT"])    );
$container->setParameter('database_name',         base64_decode( $_SERVER["RDS__DATABASE"])    );
$container->setParameter('database_user',         base64_decode( $_SERVER["RDS__USERNAME"])    );
$container->setParameter('database_password',     base64_decode( $_SERVER["RDS__PASSWORD"])    );
