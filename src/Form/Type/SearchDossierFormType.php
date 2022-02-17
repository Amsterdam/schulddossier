<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Form\Type;

use Doctrine\ORM\EntityRepository;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Gebruiker;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Schuldhulpbureau;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Team;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class SearchDossierFormType extends AbstractType
{
    /**
     * @var AuthorizationCheckerInterface
     */
    private $authorizationChecker;

    /**
     * @var TokenStorageInterface
     */
    private $tokenStorage;
    private $user = null;

    public function __construct(AuthorizationCheckerInterface $authorizationChecker, TokenStorageInterface $tokenStorage)
    {
        $this->authorizationChecker = $authorizationChecker;
        $this->tokenStorage = $tokenStorage;
        $this->user = $tokenStorage->getToken()->getUser();
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('naam', TextType::class, [
            'required' => false
        ]);
        $builder->add('status', ChoiceType::class, [
            'required' => false,
            'expanded' => true,
            'multiple' => true,
            'choices' => [
                'bezig_madi' => 'bezig_madi',
                'compleet_madi' => 'compleet_madi',
                'gecontroleerd_madi' => 'gecontroleerd_madi',
                'verzonden_madi' => 'verzonden_madi',
                'compleet_gka' => 'compleet_gka',
                'dossier_gecontroleerd_gka' => 'dossier_gecontroleerd_gka',
                'afgesloten_gka' => 'afgesloten_gka',
            ]
        ]);

        if (!$this->authorizationChecker->isGranted('ROLE_MADI') && !$this->authorizationChecker->isGranted('ROLE_MADI_KEYUSER')) {
            $builder->add('schuldhulpbureaus', EntityType::class, [
                'required' => false,
                'class' => Schuldhulpbureau::class,
                'multiple' => true, //Why was this false?
                'expanded' => false,
                'placeholder' => 'Alle schuldhulpbureau\'s'
            ]);
        }

        $builder->add('teamGka', EntityType::class, [
            'required' => false,
            'class' => Team::class,
            'multiple' => false,
            'expanded' => false,
            'placeholder' => 'Alle teams'
        ]);
        $builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event) {
            $form = $event->getForm();
            $data = $event->getData();

            $form->add('medewerkerSchuldhulpbureau', EntityType::class, [
                'required' => false,
                'class' => Gebruiker::class,
                'multiple' => false,
                'expanded' => false,
                'query_builder' => function (EntityRepository $repository) {
                    if ($this->user->getType() === Gebruiker::TYPE_MADI || $this->user->getType() === Gebruiker::TYPE_MADI_KEYUSER){
                        return $repository->findAllByTypeAndSchuldhulpbureauRaw([Gebruiker::TYPE_MADI, Gebruiker::TYPE_MADI_KEYUSER, Gebruiker::TYPE_ONBEKEND], $this->user->getSchuldhulpbureaus());
                    }else{
                        return $repository->findAllRaw();

                    }
                },
                'placeholder' => 'Alle medewerkers'
            ]);

        });
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault('choice_translation_domain', false);
    }
}
