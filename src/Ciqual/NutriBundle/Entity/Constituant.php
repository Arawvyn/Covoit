<?php

namespace Ciqual\NutriBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Constituant
 *
 * @ORM\Table(name="constituant")
 * @ORM\Entity
 */
class Constituant
{
    /**
     * @var float
     *
     * @ORM\Column(name="CodeConstituant", type="float", precision=10, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeconstituant = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NomFr", type="string", length=80, nullable=true)
     */
    private $nomfr;

    /**
     * @var string
     *
     * @ORM\Column(name="NomGb", type="string", length=80, nullable=true)
     */
    private $nomgb;

    /**
     * @var string
     *
     * @ORM\Column(name="CodeEUROFIR", type="string", length=10, nullable=true)
     */
    private $codeeurofir;

    /**
     * @var string
     *
     * @ORM\Column(name="CodeFAO", type="string", length=10, nullable=true)
     */
    private $codefao;



    /**
     * Get codeconstituant
     *
     * @return float 
     */
    public function getCodeconstituant()
    {
        return $this->codeconstituant;
    }

    /**
     * Set nomfr
     *
     * @param string $nomfr
     * @return Constituant
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
     * @return Constituant
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
     * Set codeeurofir
     *
     * @param string $codeeurofir
     * @return Constituant
     */
    public function setCodeeurofir($codeeurofir)
    {
        $this->codeeurofir = $codeeurofir;

        return $this;
    }

    /**
     * Get codeeurofir
     *
     * @return string 
     */
    public function getCodeeurofir()
    {
        return $this->codeeurofir;
    }

    /**
     * Set codefao
     *
     * @param string $codefao
     * @return Constituant
     */
    public function setCodefao($codefao)
    {
        $this->codefao = $codefao;

        return $this;
    }

    /**
     * Get codefao
     *
     * @return string 
     */
    public function getCodefao()
    {
        return $this->codefao;
    }
}
