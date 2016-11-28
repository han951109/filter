<?php
/**
 * Created by PhpStorm.
 * User: han
 * Date: 2016/11/28
 * Time: 19:12
 */
include 'Validate.php';
$validate = new Validate();
$email = 'onedayin2013@shawn.com';
$int = '589';
$ip = '2001:0db8:85a3:08d3:1319:8a2e:0370:7334';
$url = 'http://www.baidu.com';
$validate->validateEmail($email);
$validate->valiadeInt($int);
$validate->valiadeIp($ip);
$validate->valiadeUrl($url);