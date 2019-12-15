<?php

namespace App\Api;

class ApiError
{
    public static function errorMenssage($message, $code)
    {
        return [
            'data' => [
                'message' => $message,
                'code' => $code
            ]
        ];
    }
}