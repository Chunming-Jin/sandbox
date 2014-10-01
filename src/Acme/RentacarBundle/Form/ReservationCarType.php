<?php

namespace Acme\RentacarBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;


/**
 * ReservationLocationType
 * 
 * @author Chunming Jin <maengyi@gmail.com>
 */

class ReservationCarType extends AbstractType
{
    /* (non-PHPdoc)
    * @see \Symfony\Component\Form\AbstractType::buildForm()
    */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('carClass')
        ;
    }
    
    /**
     * @inheritDoc
     */
    public function getName()
    {
        return 'reservation_car';
    }
    
    /**
     * @inheritDoc
     */
    public function getDefaultOptions(array $options)
    {
        return array(
                     'validation_groups' => array('reservation_car'),
                     );
    }

}



