<?php
namespace GemeenteAmsterdam\FixxxSchuldhulp\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Organisatie;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Team;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class OrganisatieFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('naam', TextType::class, [
            'label' => 'Naam *',
            'required' => true
        ]);
        $builder->add('emailAdresControle', TextType::class, [
            'label' => 'Controle e-mailadres',
            'required' => false
        ]);
        $builder->add('standaardGkaTeam', EntityType::class, [
            'required' => false,
            'label' => 'Standaard team bij het GKA',
            'class' => Team::class
        ]);
        $builder->add('allegroUsername', TextType::class, [
            'label' => 'Allegro username',
            'required' => false
        ]);
        $builder->add('allegroPassword', TextType::class, [
            'label' => 'Allegro password',
            'required' => false
        ]);
        $builder->add('allegroCheck', CheckboxType::class, [
            'label' => 'Allegro inloggegevens controleren',
            'required' => false,
            'mapped' => false
        ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault('data_class', Organisatie::class);
        $resolver->setDefault('choice_translation_domain', false);
    }
}