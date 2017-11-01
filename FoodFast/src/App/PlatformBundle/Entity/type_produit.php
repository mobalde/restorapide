<?php

namespace App\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

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
     * @ORM\OneToMany(targetEntity="promo", mappedBy="type")
     * 
     */
    private $promo;
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->promo = new ArrayCollection();
    }

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
    

    /**
     * Add promo
     *
     * @param \App\PlatformBundle\Entity\promo $promo
     *
     * @return type_produit
     */
    public function addPromo(\App\PlatformBundle\Entity\promo $promo)
    {
        $this->promo[] = $promo;

        return $this;
    }

    /**
     * Remove promo
     *
     * @param \App\PlatformBundle\Entity\promo $promo
     */
    public function removePromo(\App\PlatformBundle\Entity\promo $promo)
    {
        $this->promo->removeElement($promo);
    }

    /**
     * Get promo
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPromo()
    {
        return $this->promo;
    }
}
