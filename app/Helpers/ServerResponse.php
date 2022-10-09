<?php
namespace App\Helpers;
use Illuminate\Support\Facades\Response;


class ServerResponse
{
    /**
     * success
     * @param string $message success message
     * @param Array $data success data
     * @return Array|JSON
     **/
    public static function success($message, Array $data=[])
    {
        $res = ["status" => 'success', "message" => $message , "data" => $data];
        return response()->json($res, 200, []);
    }

    /**
     * fail
     * @param string $message fail message
     * @param Array $data fail data
     * @return Array|JSON
     **/
    public static function fail($message, Array $data=[])
    {
        $res = ["status" => 'fail', "message" => $message , "data" => $data];
        return response()->json($res, 400, []);
    }
}
