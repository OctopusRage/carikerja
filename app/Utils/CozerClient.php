<?php
namespace App\Utils;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use GuzzleHttp\Exception\RequestException;

class CozerClient {
    public function __construct($token){
        $this->token = $token;
    }

    public function get_friends($page = 1, $limit = 20){
        $offset = $this->convertPageToOffset($page, $limit);
        $response = $this->callProtectedURL('GET', 'master/friend', [
            'limit' => $limit,
            'offset'  => $offset,
        ]);
        return $response;
    }

    public function get_profile(){
        $response = $this->callProtectedURL('GET', 'profile', []);
        return $response;
    }

   private function callProtectedURL($method = 'POST', $url, $params) {
        $client = new Client();
        $base_uri = env('COZER_BASE_URL');
        $headers = ['Authorization' => $this->token];
        $combined_url = ($base_uri.'/'.$url);
        try {
            $body = ($method == 'POST') ? [ 'form_params' => $params, 'headers' => $headers ] : [ 'query' => $params, 'headers' => $headers ];
            $call = $client->request($method, $combined_url, $body);
        } catch (RequestException $e) {
            $s = $e->getResponse();
            if (empty($s)) {
                $response['status'] = $e->getCode();
                $response['result'] = 'Internal server error';
                return $response;
            }
            $responseBodyAsString = $s->getBody()->getContents();
            $response['status'] = $e->getResponse()->getStatusCode();
            $response['result'] = json_decode($responseBodyAsString);
            return $response;
        }
        $response['status'] = $call->getStatusCode();
        $response['result'] = json_decode($call->getBody()->getContents())->data;
        return $response;
    }

    private function convertPageToOffset($page, $limit){
        $offset = 0;
        if($page == 1) {
            return  $offset;
        } else {
            return $page * $limit + 1;
        }
    }
}