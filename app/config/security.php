<?php

$container->loadFromExtension('security', array(

    'encoders' => array(
        'Symfony\Component\Security\Core\User\User' => array(
            'algorithm' => 'bcrypt',
            'cost' => 15,
        ),
    ),

    'role_hierarchy' => array(
        'ROLE_ADMIN' => 'ROLE_USER'
    ),

    'providers' => array(
        'in_memory' => array(
            'memory' => array(
                'users' => array(
                    'appdev' => array(
                        'password' => base64_decode( $_SERVER["DIAG_PASSWORD"] ),
                        'roles' => 'ROLE_ADMIN',
                    ),
                ),
            ),
        ),
    ),

    'firewalls' => array(
        'secure' => array(
            'pattern'  => '^/.*',
            'anonymous' => true,
            'http_basic' => true,
        ),
    ),

    'access_control' => array(
        array('path' => '^/.*', 'role' => 'ROLE_ADMIN'),
    ),

));


