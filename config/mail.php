<?php

return [


    'driver' => env('MAIL_DRIVER', 'smtp'),

    'host' => env('MAIL_HOST', 'smtp.163.com'),

    'port' => env('MAIL_PORT', 25),

    'from' => ['address' => 'ddasd2001@163.com', 'name' => 'TongQue_Game'],

    'encryption' => env('MAIL_ENCRYPTION', 'tls'),

    'username' => env('MAIL_USERNAME'),

    'password' => env('MAIL_PASSWORD'),

    'sendmail' => '/usr/sbin/sendmail -bs',

    'pretend' => env('MAIL_PRETEND', false),

];
