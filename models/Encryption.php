<?php

namespace app\models;

use Yii;

/**
 * @package app\models
 */
class Encryption
{
    /**
     * @param $pass
     * @return string
     */
    public static function encWOK($pass): string
    {
        return md5($pass);
    }
}