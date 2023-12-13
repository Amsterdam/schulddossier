<?php

declare(strict_types=1);

namespace GemeenteAmsterdam\FixxxSchuldhulp\Form\Event;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityNotFoundException;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Gebruiker;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Organisatie;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\OrganisatieMedewerkerType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class TransformMedewerkerOrganisatie implements EventSubscriberInterface
{
    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    /**
     * TransformMedewerkerOrganisatie constructor.
     *
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @inheritdoc
     * @return array
     */
    public static function getSubscribedEvents(): array
    {
        return [
            FormEvents::PRE_SET_DATA => 'onPreSetData',
            FormEvents::PRE_SUBMIT => 'onPreSubmit',
        ];
    }

    /**
     * @param FormEvent $event
     */
    public function onPreSetData(FormEvent $event)
    {
        $form = $event->getForm();
        $data = $event->getData();

        $organisatieGebruiker = 0;

        if (!empty($data->getOrganisatie())) {
            $organisatie = $data->getOrganisatie()->getId();
            $medewerkerOrganisatie = $data->getMedewerkerOrganisatie()->getId();
            $organisatieGebruiker = $organisatie . '_' . $medewerkerOrganisatie;
        }

        $form->add('organisatieGebruiker', OrganisatieMedewerkerType::class, [
            'label' => 'Organisatie gebruiker *',
            'required' => true,
            'multiple' => false,
            'expanded' => false,
            'mapped' => false,
            'data' => $organisatieGebruiker,
            'help' => 'DB: gebruiker.naam - gebruiker.email'
        ])->setData($organisatieGebruiker);
    }

    /**
     * @param FormEvent $event
     *
     * @throws EntityNotFoundException
     */
    public function onPreSubmit(FormEvent $event)
    {
        $form = $event->getForm();
        $data = $event->getData();

        if (empty($data['organisatieGebruiker'])) {
            return;
        }

        $ids = explode('_', $data['organisatieGebruiker']);

        $organisatie = $this->entityManager->getRepository(Organisatie::class)->find($ids[0]);
        if (empty($organisatie)) {
            throw new EntityNotFoundException('Organisatie with the following id does not exist: ' . $ids[0]);
        }

        $medewerkerOrganisatie = $this->entityManager->getRepository(Gebruiker::class)->find($ids[1]);
        if (empty($medewerkerOrganisatie)) {
            throw new EntityNotFoundException('Gebruiker with the following id does not exist: ' . $ids[1]);
        }

        $data['organisatie'] = $organisatie->getId();
        $data['medewerkerOrganisatie'] = $medewerkerOrganisatie->getId();

        $form->add('organisatie', EntityType::class, [
            'required' => true,
            'class' => Organisatie::class,
            'multiple' => false,
            'expanded' => false,
            'label_attr' => ['class' => 'hidden'],
            'attr' => ['class' => 'hidden'],
        ])->setData($organisatie->getId());

        $form->add('medewerkerOrganisatie', EntityType::class, [
            'label' => 'Organisatie gebruiker *',
            'required' => true,
            'class' => Gebruiker::class,
            'multiple' => false,
            'label_attr' => ['class' => 'hidden'],
            'attr' => ['class' => 'hidden'],
        ])->setData($medewerkerOrganisatie->getId());

        $event->setData($data);
    }
}
