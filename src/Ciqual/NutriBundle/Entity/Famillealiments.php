<?php

namespace Ciqual\NutriBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Famillealiments
 *
 * @ORM\Table(name="famillealiments")
 * @ORM\Entity
 */
class Famillealiments
{
    /**
     * @var string
     *
     * @ORM\Column(name="CodeFamilleAliments", type="string", length=4, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codefamillealiments = '';

    /**
     * @var string
     *
     * @ORM\Column(name="NomFr", type="string", length=50, nullable=true)
     */
    private $nomfr;

    /**
     * @var string
     *
     * @ORM\Column(name="NomGb", type="string", length=50, nullable=true)
     */
    private $nomgb;



    /**
     * Get codefamillealiments
     *
     * @return string 
     */
    public function getCodefamillealiments()
    {
        return $this->codefamillealiments;
    }

    /**
     * Set nomfr
     *
     * @param string $nomfr
     * @return Famillealiments
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
     * @return Famillealiments
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
}
