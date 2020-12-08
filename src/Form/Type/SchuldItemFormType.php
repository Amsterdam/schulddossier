<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Form\Type;

use Doctrine\ORM\EntityManagerInterface;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Schuldeiser;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\SchuldItem;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\DataTransformer\IdToSchuldeiserTransformer;
use Psr\Log\LoggerInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Valid;

class SchuldItemFormType extends AbstractType
{

    private $logger;
    protected $em;
    /**
     * @var IdToSchuldeiserTransformer
     */
    private $idToSchuldeiserTransformer;

    public function __construct(EntityManagerInterface $em, LoggerInterface $logger, IdToSchuldeiserTransformer $idToSchuldeiserTransformer)
    {
        $this->em = $em;
        $this->logger = $logger;
        $this->idToSchuldeiserTransformer = $idToSchuldeiserTransformer;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('verwijderd', CheckboxType::class, [
            'required' => false
        ]);

        $builder->add('schuldeiser', HiddenType::class, [
            'invalid_message' => 'The selected schuldeiser cannot be found.',
//            'required' => true,
//            'error_bubbling'=>false,
        ]);

        $builder->get('schuldeiser')->addModelTransformer($this->idToSchuldeiserTransformer);

        $builder->add('incassant', HiddenType::class, [
            'invalid_message' => 'The selected incassant cannot be found.',
        ]);

        $builder->get('incassant')->addModelTransformer($this->idToSchuldeiserTransformer);

        $builder->add('referentie', TextType::class, [
            'label' => 'Referentie *',
            'required' => true
        ]);
        $builder->add('type', ChoiceType::class, [
            'label' => 'Type *',
            'required' => true,
            'choices' => SchuldItem::getTypes()
        ]);
        $builder->add('bedrag', NumberType::class, [
            'label' => 'Bedrag *',
            'required' => true,
        ]);
        $builder->add('bedragOorspronkelijk', NumberType::class, [
            'label' => 'Oorspronkelijk bedrag',
            'required' => false,
        ]);
        $builder->add('vastStelDatum', DateType::class, [
            'html5' => false,
            'attr' => ['data-decorator' => 'rome', 'data-max' => (new \DateTime('now'))->format("d-m-Y")],
            'format' => 'dd-MM-yyyy',
            'widget' => 'single_text',
            'label' => 'Contactdatum *',
            'required' => true
        ]);
        $builder->add('ontstaansDatum', DateType::class, [
            'html5' => false,
            'attr' => ['data-decorator' => 'rome'],
            'format' => 'dd-MM-yyyy',
            'widget' => 'single_text',
            'label' => 'Ontstaansdatum',
            'required' => false
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
        $builder->add('removeFile', CollectionType::class, [
            'mapped' => false,
            'entry_type' => HiddenType::class,
            'entry_options' => ['required' => false],
            'allow_add' => true,
            'prototype_name' => '__name__',
            'by_reference' => false,
        ]);
        $builder->add('toevoegingOnbekendeSchuldeiser', TextareaType::class, [
            'label' => 'Informatie onbekende schuldeiser *',
            'attr' => ['placeholder' => 'Naam/Adres/E-mail/Telefoon/IBAN'],
            'required' => false
        ]);

        $builder->add('aantekening', CreateAantekeningFormType::class, [
            'mapped' => false,
            'required' => false,
            'constraints' => [
                new Valid()
            ]
        ]);

        $builder->addEventListener(FormEvents::PRE_SUBMIT, function (FormEvent $event) {
            $data = $event->getData();
            unset($data['file']['__name__']);
            unset($data['removeFile']['__name__']);
            $event->setData($data);
        });
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault('data_class', SchuldItem::class);
        $resolver->setDefault('choice_translation_domain', false);
    }
}
