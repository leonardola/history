<?php
/**
 * Created by IntelliJ IDEA.
 * User: leonardoalbuquerque
 * Date: 12/07/15
 * Time: 13:00
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * @Route("/facebookLogin")
 * Class FacebookLoginController
 * @package AppBundle\Controller
 */
class FacebookLoginController extends Controller {

    /**
     * @Route("/login")
     */
    public function login(Request $request){
        $post = $request->request->all();

        $this->get("facebook_login")->login($post["token"]);
    }
}