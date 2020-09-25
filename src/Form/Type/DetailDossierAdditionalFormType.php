<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Form\Type;

use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Dossier;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Team;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Event\TransformMedewerkerSchuldhulpbureau;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DetailDossierAdditionalFormType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('clientTelefoonnummer', TextType::class, [
            'label' => 'Telefoonnummer',
            'required' => false
        ]);

        $builder->add('clientStraat', TextType::class, [
            'label' => 'Straat',
            'required' => false
        ]);

        $builder->add('clientHuisnummer', TextType::class, [
            'label' => 'Huisnummer',
            'required' => false
        ]);

        $builder->add('clientPostcode', TextType::class, [
            'label' => 'Postcode',
            'required' => false
        ]);

        $builder->add('clientWoonplaats', TextType::class, [
            'label' => 'Woonplaats',
            'required' => false
        ]);

        $builder->add('clientBurgelijkeStaat', ChoiceType::class, [
            'label' => 'Burgelijke staat',
            'required' => false,
            'multiple' => false,
            'expanded' => true,
            'placeholder' => false,
            'choices' => Dossier::getBurgelijkeStaatOpties()
        ]);

        $builder->add('clientBurgelijkeStaatSinds', DateType::class, [
            'label' => 'Burgelijke staat sinds',
            'required' => false,
            'html5' => false,
            'attr' => ['data-decorator' => 'rome'],
            'format' => 'dd-MM-yyyy',
            'widget' => 'single_text',
        ]);

        $builder->add('clientKinderen', CollectionType::class, [
            'label' => 'Geboortedatum inwonende kind(eren)',
            'allow_add' => true,
            'delete_empty' => true,
            'allow_delete' => true,
            'required' => false
        ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault('data_class', Dossier::class);
        $resolver->setDefault('choice_translation_domain', false);
        $resolver->setDefault('disable_group', null);
    }
}
