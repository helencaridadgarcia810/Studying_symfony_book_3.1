<?php

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="genus")
 */

class Genus
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * * @Assert\NotBlank()
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\SubFamily")
     * @ORM\JoinColumn(nullable=true)
     */
    private $subFamily;

    /**
     * @ORM\Column(type="boolean")
     */

    private $isPublished;

    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="date")
     */

    private $firstDiscoveredAt;

    /**
     * * @Assert\NotBlank()
     *  @Assert\Range(min=0, minMessage="Negative species! Come on...")
     * @ORM\Column(type="integer")
     */
    private $speciesCount;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $funFact;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getSubFamily()
    {
        return $this->subFamily;
    }
    public function setSubFamily($subFamily)
    {
        $this->subFamily = $subFamily;
    }
    public function getSpeciesCount()
    {
        return $this->speciesCount;
    }
    public function setSpeciesCount($speciesCount)
    {
        $this->speciesCount = $speciesCount;
    }
    public function getFunFact()
    {
        return $this->funFact;
    }
    public function setFunFact($funFact)
    {
        $this->funFact = $funFact;
    }
    public function getIsPublished()
    {
        return $this->isPublished;
    }
    public function setIsPublished($isPublished)
    {
        $this->isPublished = $isPublished;
    }
    public function getfirstDiscoveredAt()
    {
        return $this->firstDiscoveredAt;
    }
    public function setfirstDiscoveredAt($firstDiscoveredAt)
    {
        $this->firstDiscoveredAt = $firstDiscoveredAt;
    }
}