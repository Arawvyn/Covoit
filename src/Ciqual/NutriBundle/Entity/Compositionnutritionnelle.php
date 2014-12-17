<?php

namespace Ciqual\NutriBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Compositionnutritionnelle
 *
 * @ORM\Table(name="compositionnutritionnelle", indexes={@ORM\Index(name="CodeAliments", columns={"CodeAliments"}), @ORM\Index(name="CodeConstituant", columns={"CodeConstituant"}), @ORM\Index(name="Source", columns={"Source"})})
 * @ORM\Entity
 */
class Compositionnutritionnelle
{
    /**
     * @var string
     *
     * @ORM\Column(name="ValeurSelect", type="string", length=255, nullable=true)
     */
    private $valeurselect;

    /**
     * @var float
     *
     * @ORM\Column(name="ValMin", type="float", precision=10, scale=0, nullable=true)
     */
    private $valmin;

    /**
     * @var float
     *
     * @ORM\Column(name="ValMax", type="float", precision=10, scale=0, nullable=true)
     */
    private $valmax;

    /**
     * @var float
     *
     * @ORM\Column(name="NbEchantillons", type="float", precision=10, scale=0, nullable=true)
     */
    private $nbechantillons;

    /**
     * @var string
     *
     * @ORM\Column(name="CodeConfiance", type="string", length=1, nullable=true)
     */
    private $codeconfiance;

    /**
     * @var \Source
     *
     * @ORM\ManyToOne(targetEntity="Source")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Source", referencedColumnName="CodeSource")
     * })
     */
    private $source;

    /**
     * @var \Aliment
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Aliment")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CodeAliments", referencedColumnName="CodeAliment")
     * })
     */
    private $codealiments;

    /**
     * @var \Constituant
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Constituant")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CodeConstituant", referencedColumnName="CodeConstituant")
     * })
     */
    private $codeconstituant;



    /**
     * Set valeurselect
     *
     * @param string $valeurselect
     * @return Compositionnutritionnelle
     */
    public function setValeurselect($valeurselect)
    {
        $this->valeurselect = $valeurselect;

        return $this;
    }

    /**
     * Get valeurselect
     *
     * @return string 
     */
    public function getValeurselect()
    {
        return $this->valeurselect;
    }

    /**
     * Set valmin
     *
     * @param float $valmin
     * @return Compositionnutritionnelle
     */
    public function setValmin($valmin)
    {
        $this->valmin = $valmin;

        return $this;
    }

    /**
     * Get valmin
     *
     * @return float 
     */
    public function getValmin()
    {
        return $this->valmin;
    }

    /**
     * Set valmax
     *
     * @param float $valmax
     * @return Compositionnutritionnelle
     */
    public function setValmax($valmax)
    {
        $this->valmax = $valmax;

        return $this;
    }

    /**
     * Get valmax
     *
     * @return float 
     */
    public function getValmax()
    {
        return $this->valmax;
    }

    /**
     * Set nbechantillons
     *
     * @param float $nbechantillons
     * @return Compositionnutritionnelle
     */
    public function setNbechantillons($nbechantillons)
    {
        $this->nbechantillons = $nbechantillons;

        return $this;
    }

    /**
     * Get nbechantillons
     *
     * @return float 
     */
    public function getNbechantillons()
    {
        return $this->nbechantillons;
    }

    /**
     * Set codeconfiance
     *
     * @param string $codeconfiance
     * @return Compositionnutritionnelle
     */
    public function setCodeconfiance($codeconfiance)
    {
        $this->codeconfiance = $codeconfiance;

        return $this;
    }

    /**
     * Get codeconfiance
     *
     * @return string 
     */
    public function getCodeconfiance()
    {
        return $this->codeconfiance;
    }

    /**
     * Set source
     *
     * @param \Ciqual\NutriBundle\Entity\Source $source
     * @return Compositionnutritionnelle
     */
    public function setSource(\Ciqual\NutriBundle\Entity\Source $source = null)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * Get source
     *
     * @return \Ciqual\NutriBundle\Entity\Source 
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Set codealiments
     *
     * @param \Ciqual\NutriBundle\Entity\Aliment $codealiments
     * @return Compositionnutritionnelle
     */
    public function setCodealiments(\Ciqual\NutriBundle\Entity\Aliment $codealiments)
    {
        $this->codealiments = $codealiments;

        return $this;
    }

    /**
     * Get codealiments
     *
     * @return \Ciqual\NutriBundle\Entity\Aliment 
     */
    public function getCodealiments()
    {
        return $this->codealiments;
    }

    /**
     * Set codeconstituant
     *
     * @param \Ciqual\NutriBundle\Entity\Constituant $codeconstituant
     * @return Compositionnutritionnelle
     */
    public function setCodeconstituant(\Ciqual\NutriBundle\Entity\Constituant $codeconstituant)
    {
        $this->codeconstituant = $codeconstituant;

        return $this;
    }

    /**
     * Get codeconstituant
     *
     * @return \Ciqual\NutriBundle\Entity\Constituant 
     */
    public function getCodeconstituant()
    {
        return $this->codeconstituant;
    }
}
