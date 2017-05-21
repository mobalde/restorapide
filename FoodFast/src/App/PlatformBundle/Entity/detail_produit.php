<?php

namespace App\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * detail_produit
 *
 * @ORM\Table(name="detail_produit")
 * @ORM\Entity(repositoryClass="App\PlatformBundle\Repository\detail_produitRepository")
 */
class detail_produit
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
     * @ORM\Column(name="ingrdiens", type="string", length=10000)
     */
    private $ingrdiens;
    
    /**
     * @var string
     *
     * @ORM\Column(name="taille", type="string", length=10)
     */
    private $taille;
    
    /**
     * @var string
     *
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;


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
     * Set ingrdiens
     *
     * @param string $ingrdiens
     *
     * @return detail_produit
     */
    public function setIngrdiens($ingrdiens)
    {
        $this->ingrdiens = $ingrdiens;

        return $this;
    }

    /**
     * Get ingrdiens
     *
     * @return string
     */
    public function getIngrdiens()
    {
        return $this->ingrdiens;
    }

    /**
     * Set taille
     *
     * @param string $taille
     *
     * @return detail_produit
     */
    public function setTaille($taille)
    {
        $this->taille = $taille;

        return $this;
    }

    /**
     * Get taille
     *
     * @return string
     */
    public function getTaille()
    {
        return $this->taille;
    }

    /**
     * Set prix
     *
     * @param float $prix
     *
     * @return detail_produit
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }
}
