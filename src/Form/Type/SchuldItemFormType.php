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
            'widget' => 'single_text'
        ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault('data_class', SchuldItem::class);
        $resolver->setDefault('choice_translation_domain', false);
    }
}