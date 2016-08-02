<?php
/**
 * Created by PhpStorm.
 * User: montells
 * Date: 2/08/16
 * Time: 10:42
 */

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

    /**
     * @ORM\Entity
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
}