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


class LuckyController
{
    /**
     * @Route("/lucky/number")
     */
    public function apiNumberAction()
    {
        $data = array(
            'lucky_number' => rand(0, 100),
        );

        return new JsonResponse($data);
    }
}
