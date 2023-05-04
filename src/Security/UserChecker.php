<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Security;

use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Gebruiker;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAccountStatusException;
use Symfony\Component\Security\Core\User\UserCheckerInterface;
use Symfony\Component\Security\Core\User\UserInterface;

class UserChecker implements UserCheckerInterface
{
    private const melding = 'Foutmelding: Je Schulddossier account is uitgeschakeld. Neem contact op met de app beheerder indien je van mening bent dat dit niet klopt.';

    public function checkPreAuth(UserInterface $user): void
    {
        if (!$user instanceof Gebruiker) {
            return;
        }

        if (!$user->isEnabled()) {
            throw new CustomUserMessageAccountStatusException(self::melding);
        }
    }

    public function checkPostAuth(UserInterface $user): void
    {
        $this->checkPreAuth($user);
    }
}