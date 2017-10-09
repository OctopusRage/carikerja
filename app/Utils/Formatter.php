<?php

namespace App\Utils;

class Formatter {
    public static function OkResponse($data) {
        return response()->json([
            'data' => $data
        ], 200);
    }

    public static function validationErrResponse($err_msg) {
        return response()->json([
            'error' => [
                'message' => $err_msg,
            ]
        ], 400);
    }

    public static function unauthorizedResponse(){
        return response()->json([
            'error' => [
                'message' => 'Unauthorized'
            ]
        ], 401);
    }

    public static function internalServerErrResponse($err_msg){
        return response()->json([
           'error' =>[
               'message' => $err_msg
           ]
        ], 500);
    }
}