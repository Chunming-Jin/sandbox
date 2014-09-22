<?php

namespace Acme\RentacarBundle\Controller;

use Sensio¥Bundle¥FrameworkExtraBundle¥configuration¥Route;
use Sensio¥Bundle¥FrameworkExtraBundle¥Configuration¥Template;
use Symfony¥Component¥HttpFoundtion¥Request;

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
		return array();
	}
	
	/**
	* @Route("/car", name="reservation_car")
	* @Template
	*/
	public function carAction(Request $request)
	{
		return array();
	}
	
	/**
	* @Route("/option", name="reservation_option")
	* @Template
	*/
	public function optionAction(Request $request)
	{
		return array();
	}
	
	/**
	* @Route("/confirm", name="reservation_confrim")
	* @Template
	*/
	public function confrimAction(Request $request)
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




