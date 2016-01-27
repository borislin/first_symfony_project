<?php
/**
 * Created by PhpStorm.
 * User: boris
 * Date: 2016-01-26
 * Time: 5:07 PM
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;


class LuckyController extends Controller
{
    /**
     * @Route("/lucky/number/{count}")
     */
    public function apiNumberAction($count)
    {
        $numbers = array();
        for ($i = 0; $i < $count; $i++) {
            $numbers[] = rand(0, 100);
        }
        $numbersList = implode(', ', $numbers);

//        $html = $this->container->get('templating')->render(
//            'lucky/number.html.twig',
//            array('luckNumberList' => $numbersList)
//        );
//
//        return new Response($html);
        return $this->render(
            'luck/number.html.twig',
            array('luckyNumberList' => $numbersList)
        );
    }
}
