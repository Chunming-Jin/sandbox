<?php

namespace Acme\RentacarBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * ReservationOptionType.
 *
 * @author Chunming Jin <maengyi -at- gmail.com>
 */
class ReservationOptionType extends AbstractType
{
    /**
     * @inheritDoc
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('useInsurance', 'checkbox', array(
                'required' => false,
            ))
            ->add('note')
        ;
    }

    /**
     * @inheritDoc
     */
    public function getName()
    {
        return 'reservation_option';
    }

    /**
     * @inheritDoc
     */
    public function getDefaultOptions(array $options)
    {
        return array(
            'validation_groups' => array('reservation_option'),
        );
    }
}
