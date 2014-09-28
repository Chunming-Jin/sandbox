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
            ->add('departureAt', 'datetime')
            ->add('departureLocation')
            ->add('returnAt', 'datetime')
            ->add('returnLocation')
        ;
    }
    
    
    /**
     * @inheritDoc
     */
    public function getName()
    {
        return 'reservation_location';
    }
    
    /**
     * @inheritDoc
     */
    public function getDefaultOptions(array $options)
    {
        return array(
                     'validation_groups' => array('reservation_location'),
                     );
    }

}



