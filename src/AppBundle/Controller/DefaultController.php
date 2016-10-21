<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function chart()
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery('SELECT p FROM AppBundle:Fruit p ORDER BY p.value DESC')
            ->setMaxResults(5);

        $fruits = $query->getResult();

        return $this->render('chart.html.twig', array(
            'title' => 'Anychart PHP template',
            'chartData' => json_encode($fruits),
            'chartTitle' => 'Top 5 fruits',
            'fruits' => json_encode($fruits),
        ));
    }

}
