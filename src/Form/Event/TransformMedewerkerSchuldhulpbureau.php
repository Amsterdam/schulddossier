<?php

declare(strict_types=1);

namespace GemeenteAmsterdam\FixxxSchuldhulp\Form\Event;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityNotFoundException;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Gebruiker;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Schuldhulpbureau;
use GemeenteAmsterdam\FixxxSchuldhulp\Form\Type\SchuldhulpbureauMedewerkerType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class TransformMedewerkerSchuldhulpbureau implements EventSubscriberInterface
{
    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    /**
     * TransformMedewerkerSchuldhulpbureau constructor.
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

        $schuldHulpbureauGebruiker = 0;

        if (!empty($data->getSchuldhulpbureau())) {
            $schuldhulpbureau = $data->getSchuldhulpbureau()->getId();
            $medewerkerSchuldhulpbureau = $data->getMedewerkerSchuldhulpbureau()->getId();
            $schuldHulpbureauGebruiker = $schuldhulpbureau . '_' . $medewerkerSchuldhulpbureau;
        }

        $form->add('schuldHulpbureauGebruiker', SchuldhulpbureauMedewerkerType::class, [
            'required' => true,
            'multiple' => false,
            'expanded' => false,
            'mapped' => false,
            'data' => $schuldHulpbureauGebruiker
        ])->setData($schuldHulpbureauGebruiker);
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

        if (empty($data['schuldHulpbureauGebruiker'])) {
            return;
        }

        $ids = explode('_', $data['schuldHulpbureauGebruiker']);

        $schuldhulpbureau = $this->entityManager->getRepository(Schuldhulpbureau::class)->find($ids[0]);
        if (empty($schuldhulpbureau)) {
            throw new EntityNotFoundException('Schuldhulpbureau with the following id does not exist: ' . $ids[0]);
        }

        $medewerkerSchuldhulpbureau = $this->entityManager->getRepository(Gebruiker::class)->find($ids[1]);
        if (empty($medewerkerSchuldhulpbureau)) {
            throw new EntityNotFoundException('Gebruiker with the following id does not exist: ' . $ids[1]);
        }

        $data['schuldhulpbureau'] = $schuldhulpbureau->getId();
        $data['medewerkerSchuldhulpbureau'] = $medewerkerSchuldhulpbureau->getId();

        $form->add('schuldhulpbureau', EntityType::class, [
            'required' => true,
            'class' => Schuldhulpbureau::class,
            'multiple' => false,
            'expanded' => false,
            'label_attr' => ['class' => 'hidden'],
            'attr' => ['class' => 'hidden'],
        ])->setData($schuldhulpbureau->getId());

        $form->add('medewerkerSchuldhulpbureau', EntityType::class, [
            'required' => true,
            'class' => Gebruiker::class,
            'multiple' => false,
            'label_attr' => ['class' => 'hidden'],
            'attr' => ['class' => 'hidden'],
        ])->setData($medewerkerSchuldhulpbureau->getId());

        $event->setData($data);
    }
}
