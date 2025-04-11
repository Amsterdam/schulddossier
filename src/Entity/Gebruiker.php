<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Serializable;
use Symfony\Component\Security\Core\User\EquatableInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass="GemeenteAmsterdam\FixxxSchuldhulp\Repository\GebruikerRepository")
 * @ORM\Table(
 *  uniqueConstraints={
 *      @ORM\UniqueConstraint(name="uq_username", columns={"username"}),
 *      @ORM\UniqueConstraint(name="uq_email", columns={"email"})
 *  },
 *  indexes={
 *      @ORM\Index(name="idx_verwijderd_datetime", columns={"verwijderd_date_time"}),
 *  })
 * )
 * @UniqueEntity("email")
 * @UniqueEntity("username")
 */
class Gebruiker implements UserInterface, \Serializable, EquatableInterface
{
    const TYPE_ADMIN = 'admin';

    const TYPE_GKA = 'gka';
    const TYPE_GKA_APPBEHEERDER = 'gka_appbeheerder';

    const TYPE_SHV = 'shv';
    const TYPE_SHV_KEYUSER = 'shv_keyuser';

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
     * @var Organisatie[]|ArrayCollection
     * @ORM\ManyToMany(targetEntity="Organisatie")
     * @ORM\JoinTable(
     *  joinColumns={@ORM\JoinColumn(name="gebruiker_id", referencedColumnName="id")},
     *  inverseJoinColumns={@ORM\JoinColumn(name="organisatie_id", referencedColumnName="id")}
     * )
     */
    private $organisaties;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=false)
     */
    private $enabled;

    /**
     * @var \DateTime|NULL
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $verwijderdDateTime;

    public function __construct()
    {
        $this->enabled = true;
        $this->organisaties = new ArrayCollection();
    }

    /**
     * {@inheritDoc}
     * @see \Symfony\Component\Security\Core\User\UserInterface::getRoles()
     */
    public function getRoles(): array
    {
        return ['ROLE_USER', 'ROLE_' . strtoupper($this->getType())];
    }

    /**
     * {@inheritDoc}
     * @see \Symfony\Component\Security\Core\User\UserInterface::getSalt()
     */
    public function getSalt(): ?string
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
    public function getUsername(): string
    {
        return $this->username;
    }

    public function getUserIdentifier(): string
    {
        return $this->username;
    }

    /**
     * {@inheritDoc}
     * @see \Symfony\Component\Security\Core\User\UserInterface::getPassword()
     */
    public function getPassword(): ?string
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
    public function setPasswordChangedDateTime(?\DateTime $passwordChangedDateTime)
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
        if (empty($this->telefoonnummer)) {
            $this->telefoonnummer = '';
        }
        return $this->telefoonnummer;
    }

    public function setTelefoonnummer($telefoonnummer)
    {
        $this->telefoonnummer = $telefoonnummer;
    }

    public function getTeamGka(): Team
    {
        return $this->teamGka;
    }

    public function setTeamGka(?Team $teamGka = null): void
    {
        $this->teamGka = $teamGka;
    }

    public function getOrganisaties(): ArrayCollection|array
    {
        return $this->organisaties;
    }

    public function addOrganisatie(Organisatie $organisatie): void
    {
        if ($this->hasOrganisatie($organisatie) === false) {
            $this->organisaties->add($organisatie);
        }
    }

    public function hasOrganisatie(Organisatie $organisatie)
    {
        return $this->organisaties->contains($organisatie);
    }

    public function removeOrganisatie(Organisatie $organisatie)
    {
        if ($this->hasOrganisatie($organisatie) === true) {
            $this->organisaties->removeElement($organisatie);
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

    public function isVerwijderd()
    {
        return (bool)$this->verwijderdDateTime;
    }

    public function setVerwijderd($verwijderdDateTime)
    {
        $this->verwijderdDateTime = $verwijderdDateTime;
        $this->setEnabled(false);
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
    public static function getTypes(?string $type = null)
    {
        $defaultTypes = [];
        switch ($type) {
            case self::TYPE_SHV_KEYUSER:
                $defaultTypes['Schuldhulpverlener/Bewindvoerder']['Dossierbehandelaar'] = self::TYPE_SHV;
                $defaultTypes['Schuldhulpverlener/Bewindvoerder']['Key User'] = self::TYPE_SHV_KEYUSER;
                break;

            case self::TYPE_GKA_APPBEHEERDER:
                $defaultTypes['GKA']['GKA-Dossierbehandelaar'] = self::TYPE_GKA;
                $defaultTypes['GKA']['App Beheerder'] = self::TYPE_GKA_APPBEHEERDER;
                $defaultTypes['Schuldhulpverlener/Bewindvoerder']['Dossierbehandelaar'] = self::TYPE_SHV;
                $defaultTypes['Schuldhulpverlener/Bewindvoerder']['Key User'] = self::TYPE_SHV_KEYUSER;
                break;

            case self::TYPE_ADMIN:
            case 'ALL_TYPES':
                $defaultTypes['Applicatie'][ucfirst(self::TYPE_ADMIN)] = self::TYPE_ADMIN;
                $defaultTypes['Applicatie'][ucfirst(self::TYPE_ONBEKEND)] = self::TYPE_ONBEKEND;
                $defaultTypes['GKA']['GKA-Dossierbehandelaar'] = self::TYPE_GKA;
                $defaultTypes['GKA']['App Beheerder'] = self::TYPE_GKA_APPBEHEERDER;
                $defaultTypes['Schuldhulpverlener/Bewindvoerder']['Dossierbehandelaar'] = self::TYPE_SHV;
                $defaultTypes['Schuldhulpverlener/Bewindvoerder']['Key User'] = self::TYPE_SHV_KEYUSER;

                break;
        }
        return $defaultTypes;
    }

    public static function getTypesList()
    {
        return [
            self::TYPE_SHV,
            self::TYPE_SHV_KEYUSER,
            self::TYPE_GKA,
            self::TYPE_GKA_APPBEHEERDER,
            self::TYPE_ADMIN,
            self::TYPE_ONBEKEND
        ];
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

    /**
     * The equality comparison should neither be done by referential equality
     * nor by comparing identities (i.e. getId() === getId()).
     *
     * However, you do not need to compare every attribute, but only those that
     * are relevant for assessing whether re-authentication is required.
     *
     * @return bool
     */
    public function isEqualTo(UserInterface $user): bool
    {
        /* @var $user Gebruiker */
        if (
            $user->getId() !== $this->getId() ||
            $user->getEmail() !== $this->getEmail() ||
            $user->getTelefoonnummer() !== $this->getTelefoonnummer() ||
            $user->getUserIdentifier() !== $this->getUserIdentifier() ||
            $user->getType() !== $this->getType() ||
            $user->isEnabled() !== $this->isEnabled()
        ) {
            return false;
        }

        return true;
    }

    /**
     * Check if current user is part of a Schuldhulpverlener organisation, based on the following roles:
     *     Gebruiker::TYPE_SHV,
     *     Gebruiker::TYPE_SHV_KEYUSER,
     *
     * @return bool
     */
    public function isSchuldhulpverlener(): bool
    {
        return in_array($this->getType(), [
            self::TYPE_SHV,
            self::TYPE_SHV_KEYUSER,
        ], true);
    }

    /**
     * Checks whether the user is a Schuldhulpverlener Key User
     * This check can be used to check if a user has access by having one of the following role:
     *     Gebruiker::TYPE_SHV_KEYUSER,
     *
     * @return bool
     */
    public function isShvKeyUser(): bool
    {
        return $this->getType() === self::TYPE_SHV_KEYUSER;
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
     * Checks wether the user is either a Application Admin, a GKA Admin or a Schuldhulpverlener Key User
     * This check can be used to check if a user has access by having one of the following roles:
     *     Gebruiker::TYPE_ADMIN,
     *     Gebruiker::TYPE_GKA_APPBEHEEDER,
     *     Gebruiker::TYPE_SHV_KEYUSER,
     *
     * @return bool
     */
    public function isGkaAppBeheerderOrShvKeyUserOrApplicationAdmin(): bool
    {
        return in_array($this->getType(), [
            self::TYPE_ADMIN,
            self::TYPE_GKA_APPBEHEERDER,
            self::TYPE_SHV_KEYUSER,
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

    public function anonymize(): void
    {
        $uniqueSuffix = uniqid();
        $this->setUsername("geanonimiseerd-" . $uniqueSuffix);
        $this->setPassword();
        $this->setType(self::TYPE_ONBEKEND);
        $this->setNaam("geanonimiseerde  gebruiker - " . $uniqueSuffix);
        $this->setPasswordChangedDateTime(null);
        $this->setTeamGka(null);
        $this->setEmail($uniqueSuffix . '@schulddossier.amsterdam.nl');
        $this->setEnabled(false);
        $this->setTelefoonnummer('');
        $this->setLastLogin(null);

        foreach ($this->getOrganisaties() as $organisatie) {
            $this->removeOrganisatie($organisatie);
        }
    }
}
