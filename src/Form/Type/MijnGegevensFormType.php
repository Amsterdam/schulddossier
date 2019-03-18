<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Form\Type;

use Doctrine\ORM\EntityRepository;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Gebruiker;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MijnGegevensFormType extends AbstractType
{
    private $security;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        /** @var Gebruiker $user */
        $user = $this->security->getUser();

        $builder->add('naam', TextType::class, [
            'required' => true
        ]);

        $builder->add('telefoonnummer', TextType::class, [
            'required' => false
        ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault('data_class', Gebruiker::class);
        $resolver->setDefault('validation_groups', false);
    }
}
