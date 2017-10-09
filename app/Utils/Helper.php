<?php
namespace App\Utils;

class Helper
{
    static $REGULAR_CHAT = 1;
    static  $NEED_TO_BE_CONFIRMED_CHAT = 2;
    static $WAIT_FOR_APPROVAL_CHAT = 3;
    static $BLANK_CHAT = 4;
    static $NEED_TO_SEND_CONFIRMATION = 5;

    public static function parseChatTypeAsString($type) {
        switch($type){
            case 1:
                return 'REGULAR';
                break;
            case 2:
                return 'NEED_TO_BE_CONFIRMED';
                break;
            case 3:
                return 'WAITING_FOR_APPROVAL';
                break;
            case 4:
                return 'BLANK_CHAT';
                break;
            case 5:
                return 'NEED_TO_SEND_CONFIRMATION';
                break;
            default:
                return 'BLANK_CHAT';
        }
    }
    public static function getChatType($chat, $user){
        if(empty($chat)){
            return self::$BLANK_CHAT;
        }
        if($chat->type==2) {
            return self::$REGULAR_CHAT;
        }
        if($chat->is_confirmed == true) {
            return self::$REGULAR_CHAT;
        }
        if(is_null($chat->is_confirmed)){
            return self::$NEED_TO_SEND_CONFIRMATION;
        }
        if(!empty($chat->verification)) {
            if($chat->verification->from == $user->id){
                return self::$WAIT_FOR_APPROVAL_CHAT;
            }
            return self::$NEED_TO_BE_CONFIRMED_CHAT;
        }
        return self::$NEED_TO_BE_CONFIRMED_CHAT;
    }
}