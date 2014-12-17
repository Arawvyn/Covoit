<?php

namespace Ciqual\NutriBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Source
 *
 * @ORM\Table(name="source")
 * @ORM\Entity
 */
class Source
{
    /**
     * @var integer
     *
     * @ORM\Column(name="CodeSource", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codesource = '0';

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Laboratoire", inversedBy="codesource")
     * @ORM\JoinTable(name="referencer",
     *   joinColumns={
     *     @ORM\JoinColumn(name="CodeSource", referencedColumnName="CodeSource")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="CodeLabo", referencedColumnName="CodeLabo")
     *   }
     * )
     */
    private $codelabo;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->codelabo = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get codesource
     *
     * @return integer 
     */
    public function getCodesource()
    {
        return $this->codesource;
    }

    /**
     * Add codelabo
     *
     * @param \Ciqual\NutriBundle\Entity\Laboratoire $codelabo
     * @return Source
     */
    public function addCodelabo(\Ciqual\NutriBundle\Entity\Laboratoire $codelabo)
    {
        $this->codelabo[] = $codelabo;

        return $this;
    }

    /**
     * Remove codelabo
     *
     * @param \Ciqual\NutriBundle\Entity\Laboratoire $codelabo
     */
    public function removeCodelabo(\Ciqual\NutriBundle\Entity\Laboratoire $codelabo)
    {
        $this->codelabo->removeElement($codelabo);
    }

    /**
     * Get codelabo
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCodelabo()
    {
        return $this->codelabo;
    }
}
