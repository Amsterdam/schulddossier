<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Form;

use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\DossierStatusFormType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Class ChangeDossierStatusType
 *
 * @package GemeenteAmsterdam\FixxxSchuldhulp\Form
 */
class ChangeDossierStatusType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('status', DossierStatusFormType::class, [
                'label' => 'Wijzig status naar',
            ]);

    }
}
