<?php

declare(strict_types=1);

namespace GemeenteAmsterdam\FixxxSchuldhulp\Security\Voter;

use Exception;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Dossier;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Gebruiker;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\AccessDecisionManagerInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;

class DossierVoter extends Voter
{
    const ACCESS = 'access';

    /**
     * @var AccessDecisionManagerInterface
     */
    private $decisionManager;

    public function __construct(AccessDecisionManagerInterface $decisionManager)
    {
        $this->decisionManager = $decisionManager;
    }

    /**
     * Determines if the attribute and subject are supported by this voter.
     *
     * @param string $attribute An attribute
     * @param mixed  $subject   The subject to secure, e.g. an object the user wants to access or any other PHP type
     *
     * @return bool True if the attribute and subject are supported, false otherwise
     */
    protected function supports($attribute, $subject): bool
    {
        if (!in_array($attribute, [self::ACCESS])) {
            return false;
        }

        if (!$subject instanceof Dossier) {
            return false;
        }

        return true;
    }

    /**
     * Perform a single access check operation on a given attribute, subject and token.
     * It is safe to assume that $attribute and $subject already passed the "supports()" method check.
     *
     * @param string         $attribute
     * @param mixed          $dossier
     * @param TokenInterface $token
     *
     * @return bool
     * @throws Exception
     */
    protected function voteOnAttribute($attribute, $dossier, TokenInterface $token): bool
    {
        $user = $token->getUser();

        if (!$user instanceof Gebruiker) {
            throw new Exception('Cannot authorize this user');
        }

        if ($this->decisionManager->decide($token, ['ROLE_SHV'])) {
            if ($user->getOrganisaties()->contains($dossier->getOrganisatie()) === false) {
                return false;
            }
        }
        if (
            ($user->getType() === Gebruiker::TYPE_GKA || $user->getType() === Gebruiker::TYPE_GKA_APPBEHEERDER)
            &&
            !$dossier->isEersteKeerVerzondenAanGKA()
            ) {
            return false;
        }

        return true;
    }
}
