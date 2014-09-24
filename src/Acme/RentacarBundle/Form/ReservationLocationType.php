<?php

namespace Acme\RentacarBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;


/**
 * ReservationLocationType
 * 
 * @author Chunming Jin <maengyi@gmail.com>
 */

class ReservationLocationType extends AbstractType
{
    /* (non-PHPdoc)
    * @see \Symfony\Component\Form\AbstractType::buildForm()
    */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('departureAt')
            ->add('departureLocation')
            ->add('returnAt')
            ->add('returnLocation')
        ;
    }
     
    
     /* (non-PHPdoc)
      * @see \Symfony\Component\Form\FormTypeInterface::getName()
      */
     public function getName() 
     {
        return 'reservation_location';    
     }

}



