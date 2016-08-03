<?php

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

    /**
     * @ORM\Entity(repositoryClass="AppBundle\Repository\SubFamilyRepository")
     * @ORM\Table(name="sub_family")
     */
class SubFamily
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="string")
     */
    private $name;

    public function _toString()
    {
        return $this->getName();
    }
}