<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Context\ExecutionContextInterface;
use Serializable;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;

/**
 * @ORM\Entity(repositoryClass="GemeenteAmsterdam\FixxxSchuldhulp\Repository\GebruikerRepository")
 * @ORM\Table(
 *  uniqueConstraints={
 *      @ORM\UniqueConstraint(name="uq_username", columns={"username"})
 *  }
 * )
 */
class Gebruiker implements UserInterface, \Serializable, AdvancedUserInterface
{
    const TYPE_GKA = 'gka';
    const TYPE_MADI = 'madi';
    const TYPE_ADMIN = 'admin';
    const TYPE_APPBEHEERDER = 'appbeheer';

    /**
     * @var integer
     * @ORM\Id
     * @ORM\Column(type="integer", nullable=false)
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $username;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=false)
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
     * @ORM\Column(type="string", length=10, nullable=false)
     * @Assert\NotBlank
     * @Assert\Choice(callback="getTypes")
     */
    private $type;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=false)
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
     * @var Team
     * @ORM\ManyToOne(targetEntity="Team")
     * @ORM\JoinColumn(name="team_id", referencedColumnName="id", nullable=true)
     */
    private $teamGka;

    /**
     * @var Schuldhulpbureau
     * @ORM\ManyToOne(targetEntity="Schuldhulpbureau")
     * @ORM\JoinColumn(name="schuldhulpbureau_id", referencedColumnName="id", nullable=true)
     */
    private $schuldhulpbureau;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=false)
     */
    private $enabled;

    public function __construct()
    {
        $this->enabled = true;
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

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function setType($type)
    {
        $this->type = $type;
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
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getTeamGka()
    {
        return $this->teamGka;
    }

    public function setTeamGka(Team $teamGka = null)
    {
        $this->teamGka = $teamGka;
    }

    public function getSchuldhulpbureau()
    {
        return $this->schuldhulpbureau;
    }

    public function setSchuldhulpbureau(Schuldhulpbureau $schuldhulpbureau = null)
    {
        $this->schuldhulpbureau = $schuldhulpbureau;
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
            'password' => $this->password,
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
        $this->password = $data['password'];
        $this->enabled = $data['enabled'];
    }

    /**
     * @param string $type
     * @return string[]
     */
    public static function getTypes(string $type = null)
    {
        $defaultTypes = [
            self::TYPE_MADI => self::TYPE_MADI,
            self::TYPE_GKA => self::TYPE_GKA,
            self::TYPE_APPBEHEERDER => self::TYPE_APPBEHEERDER
        ];
        if ($type === self::TYPE_ADMIN) {
            $defaultTypes[self::TYPE_ADMIN] = self::TYPE_ADMIN;
        }
        return $defaultTypes;
    }

    /**
     * @Assert\Callback
     */
    public function isValid(ExecutionContextInterface $context)
    {
        if ($this->getPassword() === null || $this->getPassword() === '') {
            if ($this->getClearPassword() === null || $this->getClearPassword() === '') {
                $context
                    ->buildViolation('A password is required for new users')
                    ->atPath('clearPassword')
                    ->addViolation();
            }
        }
    }
}