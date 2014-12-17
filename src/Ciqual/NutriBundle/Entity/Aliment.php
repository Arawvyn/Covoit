<?php

namespace Ciqual\NutriBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Aliment
 *
 * @ORM\Table(name="aliment", indexes={@ORM\Index(name="CodeFamilleAliments", columns={"CodeFamilleAliments"})})
 * @ORM\Entity
 */
class Aliment
{
    /**
     * @var float
     *
     * @ORM\Column(name="CodeAliment", type="float", precision=10, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codealiment = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NomFr", type="string", length=250, nullable=true)
     */
    private $nomfr;

    /**
     * @var string
     *
     * @ORM\Column(name="NomGb", type="string", length=150, nullable=true)
     */
    private $nomgb;

    /**
     * @var string
     *
     * @ORM\Column(name="NomScientifique", type="string", length=250, nullable=true)
     */
    private $nomscientifique;

    /**
     * @var \Famillealiments
     *
     * @ORM\ManyToOne(targetEntity="Famillealiments")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CodeFamilleAliments", referencedColumnName="CodeFamilleAliments")
     * })
     */
    private $codefamillealiments;



    /**
     * Get codealiment
     *
     * @return float 
     */
    public function getCodealiment()
    {
        return $this->codealiment;
    }

    /**
     * Set nomfr
     *
     * @param string $nomfr
     * @return Aliment
     */
    public function setNomfr($nomfr)
    {
        $this->nomfr = $nomfr;

        return $this;
    }

    /**
     * Get nomfr
     *
     * @return string 
     */
    public function getNomfr()
    {
        return $this->nomfr;
    }

    /**
     * Set nomgb
     *
     * @param string $nomgb
     * @return Aliment
     */
    public function setNomgb($nomgb)
    {
        $this->nomgb = $nomgb;

        return $this;
    }

    /**
     * Get nomgb
     *
     * @return string 
     */
    public function getNomgb()
    {
        return $this->nomgb;
    }

    /**
     * Set nomscientifique
     *
     * @param string $nomscientifique
     * @return Aliment
     */
    public function setNomscientifique($nomscientifique)
    {
        $this->nomscientifique = $nomscientifique;

        return $this;
    }

    /**
     * Get nomscientifique
     *
     * @return string 
     */
    public function getNomscientifique()
    {
        return $this->nomscientifique;
    }

    /**
     * Set codefamillealiments
     *
     * @param \Ciqual\NutriBundle\Entity\Famillealiments $codefamillealiments
     * @return Aliment
     */
    public function setCodefamillealiments(\Ciqual\NutriBundle\Entity\Famillealiments $codefamillealiments = null)
    {
        $this->codefamillealiments = $codefamillealiments;

        return $this;
    }

    /**
     * Get codefamillealiments
     *
     * @return \Ciqual\NutriBundle\Entity\Famillealiments 
     */
    public function getCodefamillealiments()
    {
        return $this->codefamillealiments;
    }
    public function content()
    {
        $txt = (string)$this->getCodealiment() ." - ". (string)$this->getNomfr() ." - ". (string)$this->getNomgb() ." - ". (string)$this->getNomscientifique() ." - ". (string)$this->getCodefamillealiments()->getCodefamillealiments();
        return (string)$txt;       
    }
}
