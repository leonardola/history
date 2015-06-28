<?php

namespace AppBundle\Controller;

use AppBundle\Document\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller {
    /**  
     * @Route("/addUser", name="homepage")
     */
    public function indexAction(Request $request){
        $user = new User();
        $user->setName('Cabeção');
        $user->setPassword('123456');

        $dm = $this->get('doctrine_mongodb')->getManager();
        $dm->persist($user);
        $dm->flush();

        return new Response('Created product id '.$user->getId());
    }
}
