<?php

namespace AppBundle\Controller;

use AppBundle\Document\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
	*apagar
     * @Route("/", name="homepage")
     */
    public function indexAction(){
        $user = new User();
        $user->setName('Cabeção');
        $user->setPassword('123456');

        $dm = $this->get('doctrine_mongodb')->getManager();
        $dm->persist($user);
        $dm->flush();

        return new Response('Created product id '.$user->getId());

    }

    /**
     * @Route("/createHistory")
     */
    public function createHistory(Request $request){

        $post = $request->request->all();

        $historyId = $this->get("history")->createHistory($post);

        return new Response(json_encode(array('status'=>true,'')), 200);
    }

    /**
     * @Route("/saveHistory")
     */
    public function saveHistory(){


        return new Response(json_encode(array('status'=>false)), 200);


    }
}
