<?php

namespace Acme\RentacarBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

use Acme\RentacarBundle\Entity\Reservation;
use Acme\RentacarBundle\Form\ReservationLocationType;


/**
* ReservationController.
* 
* @author Chunming Jin <maengyi@gmail.com>
*
* @Route("/reservation")
*/

class ReservationController extends AppController
{
    /**
	* @Route("/", name="reservation")
	* @Template
	*/
	public function indexAction(Request $request)
	{
        return array();
	}
	
	/**
	* @Route("/new", name="reservation_new")
	* @Template
	*/
	public function newAction(Request $request)
	{
        $reservation = new Reservation();
        $form = $this->createForm(new ReservationLocationType(), $reservation);
        
        if ($request->getMethod() === 'POST')
        {
            $data = $request->request->get($form->getName());
            $form->submit($data);
            if ($form->isValid())
            {
                $request->getSession()->set('reservation/location', $data);
                return $this->redirect($this->generateUrl('reservation_car'));
            }
        }
//        elseif ($request->getSession()->has('reservation/location'))
//        {
//            echo ("here?");
//            
//            $data = $request->getSession()->get('reservation/location');
//            $data['_token'] = $form['_token']->getData();
//            $form->submit($data);
//        }
        
        return array('form' => $form->createView());
	}
	
	/**
	* @Route("/car", name="reservation_car")
	* @Template
	*/
	public function carAction(Request $request)
	{
	    if ($request->getMethod() === 'POST')
	    {
	        return $this->redirect($this->generateUrl('reservation_option'));
	    }
	    
        return array();
	}
	
	/**
	* @Route("/option", name="reservation_option")
	* @Template
	*/
	public function optionAction(Request $request)
	{
        if ($request->getMethod() === 'POST')
	    {
	        return $this->redirect($this->generateUrl('reservation_confirm'));
	    }
	
		return array();
	}
	
	/**
	* @Route("/confirm", name="reservation_confirm")
	* @Template
	*/
	public function confirmAction(Request $request)
	{
		return array();
	}
	
	/**
	* @Route("/finish", name="reservation_finish")
	* @Template
	*/
	public function finishAction(Request $request)
	{
		return array();
	}
}




