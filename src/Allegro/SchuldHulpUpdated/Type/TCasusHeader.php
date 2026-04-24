<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class TCasusHeader
{
    /**
     * @var int
     */
    private int $Relatiecode;

    /**
     * @var int
     */
    private int $Volgnummer;

    /**
     * @var string
     */
    private string $CasusCode;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $Aanmaakdatum;

    /**
     * @var 'csAanmelding' | 'csAanmeldingVoorlopigGeweigerd' | 'csAanmeldingGeweigerd' | 'csAanmeldingVoltooid' | 'csCrisis' | 'csInventarisatie' | 'csAnalyse' | 'csPvA' | 'csFiattering' | 'csSlapend' | 'csAfwijzing' | 'csStop' | 'csInactief' | 'csNone'
     */
    private string $CasusStatus;

    /**
     * @var string
     */
    private string $CasusStatusTekst;

    /**
     * @return int
     */
    public function getRelatiecode(): int
    {
        return $this->Relatiecode;
    }

    /**
     * @param int $Relatiecode
     * @return static
     */
    public function withRelatiecode(int $Relatiecode): static
    {
        $new = clone $this;
        $new->Relatiecode = $Relatiecode;

        return $new;
    }

    /**
     * @return int
     */
    public function getVolgnummer(): int
    {
        return $this->Volgnummer;
    }

    /**
     * @param int $Volgnummer
     * @return static
     */
    public function withVolgnummer(int $Volgnummer): static
    {
        $new = clone $this;
        $new->Volgnummer = $Volgnummer;

        return $new;
    }

    /**
     * @return string
     */
    public function getCasusCode(): string
    {
        return $this->CasusCode;
    }

    /**
     * @param string $CasusCode
     * @return static
     */
    public function withCasusCode(string $CasusCode): static
    {
        $new = clone $this;
        $new->CasusCode = $CasusCode;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getAanmaakdatum(): \DateTimeInterface
    {
        return $this->Aanmaakdatum;
    }

    /**
     * @param \DateTimeInterface $Aanmaakdatum
     * @return static
     */
    public function withAanmaakdatum(\DateTimeInterface $Aanmaakdatum): static
    {
        $new = clone $this;
        $new->Aanmaakdatum = $Aanmaakdatum;

        return $new;
    }

    /**
     * @return 'csAanmelding' | 'csAanmeldingVoorlopigGeweigerd' | 'csAanmeldingGeweigerd' | 'csAanmeldingVoltooid' | 'csCrisis' | 'csInventarisatie' | 'csAnalyse' | 'csPvA' | 'csFiattering' | 'csSlapend' | 'csAfwijzing' | 'csStop' | 'csInactief' | 'csNone'
     */
    public function getCasusStatus(): string
    {
        return $this->CasusStatus;
    }

    /**
     * @param 'csAanmelding' | 'csAanmeldingVoorlopigGeweigerd' | 'csAanmeldingGeweigerd' | 'csAanmeldingVoltooid' | 'csCrisis' | 'csInventarisatie' | 'csAnalyse' | 'csPvA' | 'csFiattering' | 'csSlapend' | 'csAfwijzing' | 'csStop' | 'csInactief' | 'csNone' $CasusStatus
     * @return static
     */
    public function withCasusStatus(string $CasusStatus): static
    {
        $new = clone $this;
        $new->CasusStatus = $CasusStatus;

        return $new;
    }

    /**
     * @return string
     */
    public function getCasusStatusTekst(): string
    {
        return $this->CasusStatusTekst;
    }

    /**
     * @param string $CasusStatusTekst
     * @return static
     */
    public function withCasusStatusTekst(string $CasusStatusTekst): static
    {
        $new = clone $this;
        $new->CasusStatusTekst = $CasusStatusTekst;

        return $new;
    }
}

