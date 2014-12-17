<?php

namespace Ciqual\NutriBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Laboratoire
 *
 * @ORM\Table(name="laboratoire")
 * @ORM\Entity
 */
class Laboratoire
{
    /**
     * @var integer
     *
     * @ORM\Column(name="CodeLabo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codelabo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NomLabo", type="string", length=255, nullable=true)
     */
    private $nomlabo;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Source", mappedBy="codelabo")
     */
    private $codesource;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->codesource = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get codelabo
     *
     * @return integer 
     */
    public function getCodelabo()
    {
        return $this->codelabo;
    }

    /**
     * Set nomlabo
     *
     * @param string $nomlabo
     * @return Laboratoire
     */
    public function setNomlabo($nomlabo)
    {
        $this->nomlabo = $nomlabo;

        return $this;
    }

    /**
     * Get nomlabo
     *
     * @return string 
     */
    public function getNomlabo()
    {
        return $this->nomlabo;
    }

    /**
     * Add codesource
     *
     * @param \Ciqual\NutriBundle\Entity\Source $codesource
     * @return Laboratoire
     */
    public function addCodesource(\Ciqual\NutriBundle\Entity\Source $codesource)
    {
        $this->codesource[] = $codesource;

        return $this;
    }

    /**
     * Remove codesource
     *
     * @param \Ciqual\NutriBundle\Entity\Source $codesource
     */
    public function removeCodesource(\Ciqual\NutriBundle\Entity\Source $codesource)
    {
        $this->codesource->removeElement($codesource);
    }

    /**
     * Get codesource
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCodesource()
    {
        return $this->codesource;
    }
}
