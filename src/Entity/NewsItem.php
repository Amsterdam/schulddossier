<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="GemeenteAmsterdam\FixxxSchuldhulp\Repository\NewsItemRepository")
 * @ORM\Table
 */
class NewsItem
{
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
     * @Assert\NotBlank
     * @Assert\Length(min=1, max=255)
     */
    private $title;

    /**
     * @var string
     * @ORM\Column(type="text", nullable=true)
     * @Assert\NotBlank
     * @Assert\Length(min=1, max=255)
     * @Assert\Iban
     */
    private $content;

    /**
     * @var bool
     * @ORM\Column(type="boolean", nullable=false)
     */
    private $visibleGka;

    /**
     * @var bool
     * @ORM\Column(type="boolean", nullable=false)
     */
    private $visibleMadi;

    /**
     * @var \DateTime
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $publishedAt;

    /**
     * @var \DateTime
     * @ORM\Column(type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var Gebruiker
     * @ORM\ManyToOne(targetEntity="GemeenteAmsterdam\FixxxSchuldhulp\Entity\Gebruiker")
     * @ORM\JoinColumn(name="created_by_id", referencedColumnName="id", nullable=true)
     */
    private $createdBy;

    /**
     * @var \DateTime
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $lastUpdatedAt;

    /**
     * @var Gebruiker
     * @ORM\ManyToOne(targetEntity="GemeenteAmsterdam\FixxxSchuldhulp\Entity\Gebruiker")
     * @ORM\JoinColumn(name="last_updated_by_id", referencedColumnName="id", nullable=true)
     */
    private $lastUpdatedBy;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getPublishedAt(): ?\DateTimeInterface
    {
        return $this->publishedAt;
    }

    public function setPublishedAt(?\DateTimeInterface $publishedAt): self
    {
        $this->publishedAt = $publishedAt;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getLastUpdatedAt(): ?\DateTimeInterface
    {
        return $this->lastUpdatedAt;
    }

    public function setLastUpdatedAt(?\DateTimeInterface $lastUpdatedAt): self
    {
        $this->lastUpdatedAt = $lastUpdatedAt;

        return $this;
    }

    public function getCreatedBy(): ?Gebruiker
    {
        return $this->createdBy;
    }

    public function setCreatedBy(?Gebruiker $createdBy): self
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    public function getLastUpdatedBy(): ?Gebruiker
    {
        return $this->lastUpdatedBy;
    }

    public function setLastUpdatedBy(?Gebruiker $lastUpdatedBy): self
    {
        $this->lastUpdatedBy = $lastUpdatedBy;

        return $this;
    }

    /**
     * @return bool
     */
    public function isVisibleGka(): bool
    {
        return $this->visibleGka;
    }

    /**
     * @param bool $visibleGka
     * @return NewsItem
     */
    public function setVisibleGka(bool $visibleGka): NewsItem
    {
        $this->visibleGka = $visibleGka;

        return $this;
    }

    /**
     * @return bool
     */
    public function isVisibleMadi(): bool
    {
        return $this->visibleMadi;
    }

    /**
     * @param bool $visibleMadi
     * @return NewsItem
     */
    public function setVisibleMadi(bool $visibleMadi): NewsItem
    {
        $this->visibleMadi = $visibleMadi;

        return $this;
    }
}
