<?php

namespace App\Utils;
use Qiscus\QiscusSdk;
use Qiscus\QiscusIdentityToken;

class QiscusClient
{
    public function __construct(){
        $this->client = new QiscusSdk(env('QISCUS_SDK_APP_ID'), env('QISCUS_SDK_SECRET'));
        $this->ident = new QiscusIdentityToken(env('QISCUS_SDK_APP_ID'), env('QISCUS_SDK_SECRET'));
    }

    public function authWithNonce($nonce, $email, $name, $image = ''){
        $login = $this->ident->generateIdentityToken($nonce, $email, $name, $image);
        return $login;
    }

    public function getUserRoom($user_email, $page=null, $limit = null) {
        $rooms = $this->client->getUserRooms($user_email, 'single', $page, $limit);
        return $rooms;
    }

    public function getNonce() {
        return $this->ident->getNonce();
    }

    public function getUserProfile($user_email) {
        $user = $this->client->getUserProfile($user_email);
        return $user;
    }

    public function loginOrRegister($email, $password, $display_name, $avatar_url) {
        $user = $this->client->loginOrRegister($email, $password, $display_name, $avatar_url);
    }

    public function verifyJWT($jwt){
        return $this->ident->verifyIdentityToken($jwt);
    }

}