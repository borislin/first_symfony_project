<?php
/**
 * Created by PhpStorm.
 * User: boris
 * Date: 2016-01-26
 * Time: 5:07 PM
 */

namespace AppBundle\Controller;

use AppBundle\Entity\ChangeList;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Product;
use Symfony\Component\Validator\Constraints\DateTime;


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
            'lucky/number.html.twig',
            array('luckyNumberList' => $numbersList)
        );
    }

    /**
     * @Route("/add")
     */
    public function indexAction()
    {
//        #return $this->redirect('http://www.google.com');
//
//        $product = new Product();
//        $product->setName('A Foo Bar');
//        $product->setPrice('19.98');
//        $product->setDescription('Lorem ipsum dolor');
//
//        $em = $this->getDoctrine()->getManager();
//
//        $em->persist($product);
//        $em->flush();
//
//        return new Response('Created product id '.$product->getPrice());
        $changeList = new ChangeList();
        $changeList->setChangeListId(140103);
        $changeList->setUserName("m.rajagopala");
        $changeList->setJobName("ci-apl-hw-main-build-167-201512311310");
        $changeList->setJobId("e30f1deb-b002-11e5-8940-005056871c99");
        $dateTime = new \DateTime("2015-12-31 21:10");
        $changeList->setAggrStartTime($dateTime);
        $dateTime = new \DateTime("2016-01-01 1:15");
        $changeList->setAggrEndTime($dateTime);
        $changeList->setAggrOutcome("error");
        $changeList->setSerialStartTime(null);
        $changeList->setSerialEndTime(null);
        $changeList->setSerialOutcome(null);
        $changeList->setSubmitStartTime(null);
        $changeList->setSubmitEndTime(null);
        $changeList->setSubmitOutcome(null);

        $em = $this->getDoctrine()->getManager();

        $em->persist($changeList);
        $em->flush();

        return new Response('Data have been successfully added into MySQL database!');
    }

//    /**
//     * @Route("/{id}")
//     */
//    public function showAction($id)
//    {
//        $product = $this->getDoctrine()->getRepository('AppBundle:Product')->find($id);
//
//        if (!$product) {
//            throw $this->createNotFoundException('No product found for id '.$id);
//        }
//
//        return new Response('Product price: '.$product->getId());
//    }

//    public function updateAction($id)
//    {
//        $em = $this->getDoctrine()->getManager();
//        $product = $em->getRepository('AppBundle:Product')->find($id);
//
//        if (!$product) {
//
//        }
//    }

    /**
     * @Route("/showtable")
     */
    public function showtableAction()
    {
        $changeListTable = $this->getDoctrine()->getRepository('AppBundle:ChangeList')->findAll();

        //return new Response('Hello Boris!');

//        $product = [
//            ['id' => 1, 'name' => 'apple', 'price' => 1.99, 'description' => 'From California'],
//            ['id' => 2, 'name' => 'peach', 'price' => 0.99, 'description' => 'From China'],
//            ['id' => 3, 'name' => 'strawberry', 'price' => 4.99, 'description' => 'From Chile'],
//        ];

        return $this->render(
            'lucky/table.html.twig',
            array('tableValues' => $changeListTable)
        );
    }

    /**
     * @Route("/table")
     */
    public function tableAction()
    {
        return new Response("Hello Boris!");
    }
}
