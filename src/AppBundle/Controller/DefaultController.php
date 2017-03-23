<?php

namespace AppBundle\Controller;

use AppBundle\CsvResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig');
    }

    /**
     * @Route("/export/{from}/{to}")
     */
    public function export2Action($from, $to) {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Customer');
        $customerSales = $repository->getSaleSummaryByCustomer($from, $to);

        $resultData = \AppBundle\CsvFormatter::formatCustomerSales($customerSales);

        return new CsvResponse($resultData);
    }
}
