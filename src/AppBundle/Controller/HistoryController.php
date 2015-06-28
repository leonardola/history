<?php
/**
 * Created by IntelliJ IDEA.
 * User: leonardoalbuquerque
 * Date: 27/06/15
 * Time: 20:30
 */

namespace AppBundle\Controller;

use AppBundle\Document\History;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("/history")
 * Class HistoryController
 * @package AppBundle\Controller
 */
class HistoryController extends Controller{

    /**
     * @Route("/create")
     * @param name
     * @param text
     */
    public function create(Request $request){

        $post = $request->request->all();

        $historyId = $this->get("history")->createHistory($post);

        return new Response(json_encode(array('status'=>false,'historyId'=>$historyId)), 200);
    }

    /**
     * @Route("/addPart")
     * @param text
     * @param historyId
     * @return
     */
    public function addPart(Request $request){

        $post = $request->request->all();

        $this->get("history")->addTextToHistory($post);

        return new Response(json_encode(array('status'=>true)), 200);
    }
}