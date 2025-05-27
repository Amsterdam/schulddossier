<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Form\Type;

use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Gebruiker;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Organisatie;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Team;
use GemeenteAmsterdam\FixxxSchuldhulp\Repository\GebruikerRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
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

    public function __construct(
        AuthorizationCheckerInterface $authorizationChecker,
        TokenStorageInterface $tokenStorage
    ) {
        $this->authorizationChecker = $authorizationChecker;
        $this->tokenStorage = $tokenStorage;
        $this->user = $tokenStorage->getToken()->getUser();
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->add('naam', TextType::class, [
            'required' => false
        ]);
        $builder->add('status', ChoiceType::class, [
            'required' => false,
            'expanded' => true,
            'multiple' => true,
            'choices' => [
                'bezig_shv' => 'bezig_shv',
                'compleet_shv' => 'compleet_shv',
                'gecontroleerd_shv' => 'gecontroleerd_shv',
                'verzonden_shv' => 'verzonden_shv',
                'compleet_gka' => 'compleet_gka',
                'dossier_gecontroleerd_gka' => 'dossier_gecontroleerd_gka',
                'afgesloten_gka' => 'afgesloten_gka',
            ]
        ]);

        if (!$this->authorizationChecker->isGranted('ROLE_SHV') && !$this->authorizationChecker->isGranted(
                'ROLE_SHV_KEYUSER'
            )) {
            $builder->add('organisaties', EntityType::class, [
                'required' => false,
                'label' => 'Organisaties',
                'class' => Organisatie::class,
                'multiple' => true,
                'expanded' => false,
                'placeholder' => 'Alle organisaties'
            ]);
        }

        $builder->add('teamGka', EntityType::class, [
            'required' => false,
            'class' => Team::class,
            'multiple' => false,
            'expanded' => false,
            'placeholder' => 'Alle teams'
        ]);
        $builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event): void {
            $form = $event->getForm();
            $data = $event->getData();

            $form->add('medewerkerOrganisatie', EntityType::class, [
                'required' => false,
                'label' => 'Medewerker organisatie',
                'class' => Gebruiker::class,
                'multiple' => false,
                'expanded' => false,
                'query_builder' => function (GebruikerRepository $repository) {
                    if ($this->user->getType() === Gebruiker::TYPE_SHV || $this->user->getType(
                        ) === Gebruiker::TYPE_SHV_KEYUSER) {
                        return $repository->findAllByTypeAndOrganisatieRaw(
                            [Gebruiker::TYPE_SHV, Gebruiker::TYPE_SHV_KEYUSER, Gebruiker::TYPE_ONBEKEND],
                            $this->user->getOrganisaties()
                        );
                    } else {
                        return $repository->findAllRaw();
                    }
                },
                'placeholder' => 'Alle medewerkers'
            ]);
        });
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefault('choice_translation_domain', false);
    }
}
