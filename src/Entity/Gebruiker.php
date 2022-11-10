<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Serializable;
use Symfony\Component\Security\Core\User\EquatableInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass="GemeenteAmsterdam\FixxxSchuldhulp\Repository\GebruikerRepository")
 * @ORM\Table(
 *  uniqueConstraints={
 *      @ORM\UniqueConstraint(name="uq_username", columns={"username"}),
 *      @ORM\UniqueConstraint(name="uq_email", columns={"email"})
 *  }
 * )
 * @UniqueEntity("email")
 * @UniqueEntity("username")
 */
class Gebruiker implements UserInterface, \Serializable, EquatableInterface
{
    const TYPE_ADMIN = 'admin';

    const TYPE_GKA = 'gka';
    const TYPE_GKA_APPBEHEERDER = 'gka_appbeheerder';

    const TYPE_MADI = 'madi';
    const TYPE_MADI_KEYUSER = 'madi_keyuser';

    const TYPE_ONBEKEND = 'onbekend';

    /**
     * @var integer
     * @ORM\Id
     * @ORM\Column(type="integer", nullable=false)
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $username;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $password;

    /**
     * @var string
     * Not mapped to database
     * @Assert\Length(min=8, groups={"password"})
     * @Rollerworks\Component\PasswordStrength\Validator\Constraints\PasswordStrength(minStrength=4, message="Een wachtwoord moet minimaal een cijfer, een speciaal karakter, hoofdletter en kleine letter bevatten en bij elkaar 8 tekens of meer zijn.", minLength=0, groups={"password"})
     */
    private $clearPassword;

    /**
     * @var \DateTime|NULL
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $passwordChangedDateTime;

    /**
     * @var string
     * @ORM\Column(type="string", length=100, nullable=false)
     * @Assert\NotBlank
     * @Assert\Choice(callback="getTypesList")
     */
    private $type;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\NotBlank
     * @Assert\Length(min=1, max=255)
     */
    private $naam;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=false)
     * @Assert\NotBlank
     * @Assert\Email
     * @Assert\Length(min=1, max=255)
     */
    private $email;

    /**
     * @var \DateTime|null
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $lastLogin;

    /**
     * @var string
     * @ORM\Column(type="string", length=12, nullable=true)
     * @Assert\Length(max=12, groups={"mijn-gegevens"})
     */
    private $telefoonnummer;

    /**
     * @var Team
     * @ORM\ManyToOne(targetEntity="Team")
     * @ORM\JoinColumn(name="team_id", referencedColumnName="id", nullable=true)
     */
    private $teamGka;

    /**
     * @var Schuldhulpbureau[]|ArrayCollection
     * @ORM\ManyToMany(targetEntity="Schuldhulpbureau")
     * @ORM\JoinTable(
     *  joinColumns={@ORM\JoinColumn(name="gebruiker_id", referencedColumnName="id")},
     *  inverseJoinColumns={@ORM\JoinColumn(name="schuldhulpbureau_id", referencedColumnName="id")}
     * )
     */
    private $schuldhulpbureaus;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=false)
     */
    private $enabled;

    public function __construct()
    {
        $this->enabled = true;
        $this->schuldhulpbureaus = new ArrayCollection();
    }

    /**
     * {@inheritDoc}
     * @see \Symfony\Component\Security\Core\User\UserInterface::getRoles()
     */
    public function getRoles()
    {
        return ['ROLE_USER', 'ROLE_' . strtoupper($this->getType())];
    }

    /**
     * {@inheritDoc}
     * @see \Symfony\Component\Security\Core\User\UserInterface::getSalt()
     */
    public function getSalt()
    {
        return null;
    }

    /**
     * {@inheritDoc}
     * @see \Symfony\Component\Security\Core\User\UserInterface::eraseCredentials()
     */
    public function eraseCredentials()
    {
        //
    }

    /**
     * {@inheritDoc}
     * @see \Symfony\Component\Security\Core\User\UserInterface::getUsername()
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * {@inheritDoc}
     * @see \Symfony\Component\Security\Core\User\UserInterface::getPassword()
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return string
     */
    public function getClearPassword()
    {
        return $this->clearPassword;
    }

    /**
     * @return \DateTime|NULL
     */
    public function getPasswordChangedDateTime()
    {
        return $this->passwordChangedDateTime;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getNaam()
    {
        return $this->naam;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function setPassword($password = null)
    {
        $this->password = $password;
    }

    public function setType($type)
    {
        $this->type = strtolower(str_replace(' ', '_', $type));
    }

    public function setNaam($naam)
    {
        $this->naam = $naam;
    }

    public function setClearPassword($clearPassword)
    {
        $this->clearPassword = $clearPassword;
    }

    /**
     * @param \DateTime $passwordChangedDateTime
     */
    public function setPasswordChangedDateTime(\DateTime $passwordChangedDateTime = null)
    {
        $this->passwordChangedDateTime = $passwordChangedDateTime;
    }

    public function getEmail()
    {
        return strtolower($this->email);
    }

    public function setEmail($email)
    {
        $this->email = strtolower($email);
        $this->username = $this->getEmail();
    }

    /**
     * @return string
     */
    public function getTelefoonnummer()
    {
        if(empty($this->telefoonnummer)){
            $this->telefoonnummer = '';
        }
        return $this->telefoonnummer;
    }

    public function setTelefoonnummer($telefoonnummer)
    {
        $this->telefoonnummer = $telefoonnummer;
    }

    public function getTeamGka()
    {
        return $this->teamGka;
    }

    public function setTeamGka(Team $teamGka = null)
    {
        $this->teamGka = $teamGka;
    }

    public function getSchuldhulpbureaus()
    {
        return $this->schuldhulpbureaus;
    }

    public function addSchuldhulpbureau(Schuldhulpbureau $schuldhulpbureau)
    {
        if ($this->hasSchuldhulpbureau($schuldhulpbureau) === false) {
            $this->schuldhulpbureaus->add($schuldhulpbureau);
        }
    }

    public function hasSchuldhulpbureau(Schuldhulpbureau $schuldhulpbureau)
    {
        return $this->schuldhulpbureaus->contains($schuldhulpbureau);
    }

    public function removeSchuldhulpbureau(Schuldhulpbureau $schuldhulpbureau)
    {
        if ($this->hasSchuldhulpbureau($schuldhulpbureau) === true) {
            $this->schuldhulpbureaus->removeElement($schuldhulpbureau);
        }
    }

    public function isAccountNonExpired()
    {
        return true;
    }

    public function isAccountNonLocked()
    {
        return true;
    }

    public function isCredentialsNonExpired()
    {
        return true;
    }

    public function isEnabled()
    {
        return $this->enabled;
    }

    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->naam . ' (' . $this->username . ')';
    }

    /**
     * {@inheritDoc}
     * @see Serializable::serialize()
     */
    public function serialize()
    {
        return serialize([
            'id' => $this->id,
            'username' => $this->username,
            'email' => $this->email,
            'telefoonnummer' => $this->telefoonnummer,
            'password' => $this->password,
            'type' => $this->type,
            'enabled' => $this->enabled
        ]);
    }

    /**
     * {@inheritDoc}
     * @see Serializable::unserialize()
     */
    public function unserialize($serialized)
    {
        $data = unserialize($serialized);
        $this->id = $data['id'];
        $this->username = $data['username'];
        $this->email = $data['email'];
        $this->telefoonnummer = $data['telefoonnummer'] ?? '';
        $this->password = $data['password'];
        $this->type = $data['type'];
        $this->enabled = $data['enabled'];
    }

    /**
     * @param string $type
     *
     * @return string[]
     */
    public static function getTypes(string $type = null)
    {
        $defaultTypes = [];
        switch ($type) {
            case self::TYPE_MADI_KEYUSER:
                $defaultTypes['MaDi']['MaDi - Dossierbehandelaar'] = self::TYPE_MADI;
                $defaultTypes['MaDi']['MaDi - Key User'] = self::TYPE_MADI_KEYUSER;
                break;

            case self::TYPE_GKA_APPBEHEERDER:
                $defaultTypes['GKA']['GKA - Dossierbehandelaar'] = self::TYPE_GKA;
                $defaultTypes['GKA']['GKA - App Beheerder'] = self::TYPE_GKA_APPBEHEERDER;
                $defaultTypes['MaDi']['MaDi - Dossierbehandelaar'] = self::TYPE_MADI;
                $defaultTypes['MaDi']['MaDi - Key User'] = self::TYPE_MADI_KEYUSER;
                break;

            case self::TYPE_ADMIN:
            case 'ALL_TYPES':
                $defaultTypes['Applicatie'][ucfirst(self::TYPE_ADMIN)] = self::TYPE_ADMIN;
                $defaultTypes['Applicatie'][ucfirst(self::TYPE_ONBEKEND)] = self::TYPE_ONBEKEND;
                $defaultTypes['GKA']['GKA - Dossierbehandelaar'] = self::TYPE_GKA;
                $defaultTypes['GKA']['GKA - App Beheerder'] = self::TYPE_GKA_APPBEHEERDER;
                $defaultTypes['MaDi']['MaDi - Dossierbehandelaar'] = self::TYPE_MADI;
                $defaultTypes['MaDi']['MaDi - Key User'] = self::TYPE_MADI_KEYUSER;

                break;
        }
        return $defaultTypes;
    }

    public static function getTypesList()
    {
        return [self::TYPE_MADI, self::TYPE_MADI_KEYUSER, self::TYPE_GKA, self::TYPE_GKA_APPBEHEERDER, self::TYPE_ADMIN, self::TYPE_ONBEKEND];
    }

    /**
     * @param Schuldhulpbureau $schuldhulpbureau
     *
     * @return self[]
     */
    public static function getMijnSchuldhulpbureauMedewerkers(Schuldhulpbureau $schuldhulpbureau = null)
    {
        $defaultTypes = [];
        switch ($type) {
            case self::TYPE_MADI_KEYUSER:
                $defaultTypes['MaDi']['MaDi - Dossierbehandelaar'] = self::TYPE_MADI;
                $defaultTypes['MaDi']['MaDi - Key User'] = self::TYPE_MADI_KEYUSER;
                break;

            case self::TYPE_GKA_APPBEHEERDER:
                $defaultTypes['GKA']['GKA - Dossierbehandelaar'] = self::TYPE_GKA;
                $defaultTypes['GKA']['GKA - App Beheerder'] = self::TYPE_GKA_APPBEHEERDER;
                $defaultTypes['MaDi']['MaDi - Dossierbehandelaar'] = self::TYPE_MADI;
                $defaultTypes['MaDi']['MaDi - Key User'] = self::TYPE_MADI_KEYUSER;
                break;

            case self::TYPE_ADMIN:
            case 'ALL_TYPES':
                $defaultTypes['Applicatie'][ucfirst(self::TYPE_ADMIN)] = self::TYPE_ADMIN;
                $defaultTypes['Applicatie'][ucfirst(self::TYPE_ONBEKEND)] = self::TYPE_ONBEKEND;
                $defaultTypes['GKA']['GKA - Dossierbehandelaar'] = self::TYPE_GKA;
                $defaultTypes['GKA']['GKA - App Beheerder'] = self::TYPE_GKA_APPBEHEERDER;
                $defaultTypes['MaDi']['MaDi - Dossierbehandelaar'] = self::TYPE_MADI;
                $defaultTypes['MaDi']['MaDi - Key User'] = self::TYPE_MADI_KEYUSER;

                break;
        }
        return $defaultTypes;
    }

    /**
     * Return the human readable title matching giving Gebruiker::TYPE.
     *
     * @param string $type
     *
     * @return string
     */
    public static function getTitleFromType(string $type): string
    {
        return array_search($type, array_merge(...array_values(self::getTypes('ALL_TYPES'))));
    }

    public function isEqualTo(UserInterface $user)
    {
        /* @var $user Gebruiker */
        if ($user->getId() !== $this->getId()) {
            return false;
        }
        if ($user->getEmail() !== $this->getEmail()) {
            return false;
        }
        if ($user->getTelefoonnummer() !== $this->getTelefoonnummer()) {
            return false;
        }
        if ($user->getUsername() !== $this->getUsername()) {
            return false;
        }
        if ($user->getType() !== $this->getType()) {
            return false;
        }
        if ($user->isEnabled() !== $this->isEnabled()) {
            return false;
        }
        return true;
    }

    /**
     * Check if current user is part of a MaDi organisation, based on the following roles:
     *     Gebruiker::TYPE_MADI,
     *     Gebruiker::TYPE_MADI_KEYUSER,
     *
     * @return bool
     */
    public function isMadi(): bool
    {
        return in_array($this->getType(), [
            self::TYPE_MADI,
            self::TYPE_MADI_KEYUSER,
        ], true);
    }

    /**
     * Checks whether the user is a Madi Key User
     * This check can be used to check if a user has access by having one of the following role:
     *     Gebruiker::TYPE_MADI_KEYUSER,
     *
     * @return bool
     */
    public function isMadiKeyUser(): bool
    {
        return $this->getType() === self::TYPE_MADI_KEYUSER;
    }

    /**
     * Check if current user is part of the Gka organisation, based on the following roles:
     *     Gebruiker::TYPE_GKA,
     *     Gebruiker::TYPE_GKA_APPBEHEERDER,
     *
     * @return bool
     */
    public function isGka(): bool
    {
        return in_array($this->getType(), [
            self::TYPE_GKA,
            self::TYPE_GKA_APPBEHEERDER,
        ], true);
    }
    /**
     * Checks whether the user is a GKA AppBeheerder
     * This check can be used to check if a user has access by having one of the following role:
     *     Gebruiker::TYPE_GKA_APPBEHEERDER,
     *
     * @return bool
     */
    public function isGkaAppBeheerder(): bool
    {
        return $this->getType() === self::TYPE_GKA_APPBEHEERDER;
    }

    /**
     * Checks wether the user is either a Application Admin, a GKA Admin or a Madi Key User
     * This check can be used to check if a user has access by having one of the following roles:
     *     Gebruiker::TYPE_ADMIN,
     *     Gebruiker::TYPE_GKA_APPBEHEEDER,
     *     Gebruiker::TYPE_MADI_KEYUSER,
     *
     * @return bool
     */
    public function isGkaAppBeheerderOrMadiKeyUserOrApplicationAdmin(): bool
    {
        return in_array($this->getType(), [
            self::TYPE_ADMIN,
            self::TYPE_GKA_APPBEHEERDER,
            self::TYPE_MADI_KEYUSER,
        ], true);
    }

    /**
     * Checks whether the user is a Application Admin
     * This check can be used to check if a user has access by having one of the following role:
     *     Gebruiker::TYPE_ADMIN,
     * @return bool
     */
    public function isApplicationAdmin(): bool
    {
        return $this->getType() === self::TYPE_ADMIN;
    }

    /**
     * Checks whether the user is unknown
     * This check can be used to check if a user has access by having one of the following role:
     *     Gebruiker::TYPE_ONBEKEND,
     *
     * @return bool
     */
    public function isUnknown(): bool
    {
        return $this->getType() === self::TYPE_ONBEKEND;
    }

    /**
     * @return \DateTime|null
     */
    public function getLastLogin(): ?\DateTime
    {
        return $this->lastLogin;
    }

    /**
     * @param \DateTime|null $lastLogin
     * @return Gebruiker
     */
    public function setLastLogin(?\DateTime $lastLogin): Gebruiker
    {
        $this->lastLogin = $lastLogin;

        return $this;
    }
}
