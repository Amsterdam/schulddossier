<?php
namespace GemeenteAmsterdam\FixxxSchuldhulp\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Dossier;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Schuldhulpbureau;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Team;
use Doctrine\ORM\EntityRepository;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Gebruiker;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Schuldeiser;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\SchuldItem;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\Valid;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class SchuldItemFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('verwijderd', CheckboxType::class, [
            'required' => false
        ]);
        $builder->add('schuldeiser', EntityType::class, [
            'required' => false,
            'class' => Schuldeiser::class
        ]);
        $builder->add('incassant', EntityType::class, [
            'required' => false,
            'class' => Schuldeiser::class
        ]);
        $builder->add('referentie', TextType::class, [
            'required' => true
        ]);
        $builder->add('type', ChoiceType::class, [
            'required' => true,
            'choices' => SchuldItem::getTypes()
        ]);
        $builder->add('bedrag', NumberType::class, [
            'required' => true,
        ]);
        $builder->add('vastStelDatum', DateType::class, [
            'html5' => true,
            'widget' => 'single_text',
            'label' => 'Contactdatum'
        ]);
        $builder->add('ontstaansDatum', DateType::class, [
            'html5' => true,
            'widget' => 'single_text',
            'label' => 'Ontstaansdatum'
        ]);
        $builder->add('opmerkingen', TextareaType::class, [
            'required' => false,
        ]);
        $builder->add('file', CollectionType::class, [
            'mapped' => false,
            'entry_type' => DocumentFormType::class,
            'entry_options' => ['required' => false],
            'allow_add' => true,
            'allow_delete' => true,
            'prototype_name' => '__name__',
            'by_reference' => false,
            'constraints' => [
                new Valid()
            ]
        ]);

        $builder->addEventListener(FormEvents::PRE_SUBMIT, function (FormEvent $event) {
            $data = $event->getData();
            unset($data['file']['__name__']);
            $event->setData($data);
        });
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault('data_class', SchuldItem::class);
        $resolver->setDefault('choice_translation_domain', false);
    }
}
