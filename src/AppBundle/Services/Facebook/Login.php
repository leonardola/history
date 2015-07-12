<?php
/**
 * Created by IntelliJ IDEA.
 * User: leonardoalbuquerque
 * Date: 12/07/15
 * Time: 13:05
 */

namespace AppBundle\Services\Facebook;


use AppBundle\Services\Requests\Get;

class Login {

    private $om, $appSecret, $appId;

    public function __construct($om, $appId, $appSecret){
        $this->om = $om;
        $this->appId = $appId;
        $this->appSecret = $appSecret;
    }

    public function login($shortLivedToken){

        $longLivedToken = $this->getLongLivedToken($shortLivedToken);
        $this->saveLongLivedToken($longLivedToken);
    }

    private function getLongLivedToken($shortLivedToken){

        $requestData = "https://graph.facebook.com/oauth/access_token?"
            ."grant_type=fb_exchange_token&"
            ."client_id={$this->appId}&"
            ."client_secret={$this->appSecret}&"
            ."fb_exchange_token={$shortLivedToken}";

        $response = Get::get($requestData);

        return FacebookResponse::formatFacebookTokenResponse($response);
    }

    private function saveLongLivedToken($longLivedToken){
        //$this->om
    }
}