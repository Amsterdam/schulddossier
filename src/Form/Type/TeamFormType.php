<?php
namespace GemeenteAmsterdam\FixxxSchuldhulp\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Team;
use Symfony\Component\Form\Extension\Core\Type\EmailType;


class TeamFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('naam', TextType::class, [
            'label' => 'Naam *',
            'required' => true
        ]);
        $builder->add('email', EmailType::class, [
            'label' => 'E-mailadres *',
            'required' => true,
        ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault('data_class', Team::class);
        $resolver->setDefault('choice_translation_domain', false);
    }
}