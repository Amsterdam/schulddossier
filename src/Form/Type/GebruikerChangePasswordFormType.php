<?php
namespace GemeenteAmsterdam\FixxxSchuldhulp\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Gebruiker;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Security\Core\Validator\Constraints\UserPassword;
use Symfony\Component\Security\Core\Security;

class GebruikerChangePasswordFormType extends AbstractType
{
    /**
     * @var Security
     */
    private $security;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('currentPassword', PasswordType::class, [
            'required' => true,
            'mapped' => false,
            'label' => 'Huidig wachtwoord *',
            'constraints' => [
                new UserPassword()
            ]
        ]);
        $builder->add('clearPassword', RepeatedType::class, [
            'required' => false,
            'type' => PasswordType::class,
            'first_options' => ['label' => 'Nieuw wachtwoord'],
            'second_options' => ['label' => 'Nieuw wachtwoord (herhaal)'],
        ]);

        $user = $this->security->getUser();

        $builder->addEventListener(FormEvents::SUBMIT, function (FormEvent $event) {
            if ($event->getForm()->get('clearPassword')->getData() !== null && $event->getForm()->get('clearPassword')->getData() !== '') {
                $event->getData()->setPasswordChangedDateTime(new \DateTime());
            }
        });
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault('data_class', Gebruiker::class);
        $resolver->setDefault('choice_translation_domain', false);
        $resolver->setDefault('validation_groups', ['password']);
    }
}