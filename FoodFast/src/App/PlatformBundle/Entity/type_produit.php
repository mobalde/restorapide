<?php

namespace App\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * type_produit
 *
 * @ORM\Table(name="type_produit")
 * @ORM\Entity(repositoryClass="App\PlatformBundle\Repository\type_produitRepository")
 */
class type_produit
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_type", type="string", length=1000)
     */
    private $nomType;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomType
     *
     * @param string $nomType
     *
     * @return type_produit
     */
    public function setNomType($nomType)
    {
        $this->nomType = $nomType;

        return $this;
    }

    /**
     * Get nomType
     *
     * @return string
     */
    public function getNomType()
    {
        return $this->nomType;
    }
}