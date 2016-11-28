<?php
/**
 * Created by PhpStorm.
 * User: han
 * Date: 2016/11/28
 * Time: 15:54.
 */
class Validate
{
    private $int_options = array('options' => array('min_range' => 0, 'max_range' => 256)); //设置数字的验证规则
    private $ip_options = FILTER_FLAG_IPV6; //设置ip的验证规则
    private $url_options = 'FILTER_FLAG_QUERY_REQUIRED'; //设置url的验证规则
    public function validateEmail($filterEmail)
    {
        if (filter_var($filterEmail, FILTER_VALIDATE_EMAIL)) {
            $this->sucMsg('email');
        } else {
            $this->failedMsg('email');
        }
    }

    public function valiadeInt($filterInt)
    {
        if (filter_var($filterInt, FILTER_VALIDATE_INT, $this->int_options)) {
            $this->sucMsg('数字');
        } else {
            $this->failedMsg('数字');
        }
    }

    public function valiadeIp($filterIp)
    {
        if (filter_var($filterIp, FILTER_VALIDATE_IP, $this->ip_options)) {
            $this->sucMsg('ip');
        } else {
            $this->failedMsg('ip');
        }
    }

    public function valiadeUrl($filterUrl)
    {
        if (filter_var($filterUrl, FILTER_VALIDATE_URL, $this->url_options)) {
            $this->sucMsg('url');
        } else {
            $this->failedMsg('url');
        }
    }

    public function sucMsg($input)
    {
        echo '您输入的'.$input.'合格<br/>';
    }
    public function failedMsg($input)
    {
        echo '您输入的'.$input.'不合格<br/>';
    }
}
