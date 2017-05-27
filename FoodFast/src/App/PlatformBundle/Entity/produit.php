<?php

namespace App\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * produit
 *
 * @ORM\Table(name="produit")
 * @ORM\Entity(repositoryClass="App\PlatformBundle\Repository\produitRepository")
 */
class produit
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
     * @ORM\Column(name="nom_produit", type="string", length=1000)
     */
    private $nomProduit;

    /**
     * @ORM\ManyToOne(targetEntity="type_produit")
     * @ORM\JoinColumn(nullable=false)
     */
    protected $typeProduit;
    
    /**
     * @ORM\ManyToOne(targetEntity="detail_produit")
     * @ORM\JoinColumn(nullable=false)
     */
    protected $detailProduit;
    
    /**
     * @ORM\ManyToOne(targetEntity="promo")
     * @ORM\JoinColumn(nullable=true)
     */
    protected $promo;

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
     * Set nomProduit
     *
     * @param string $nomProduit
     *
     * @return produit
     */
    public function setNomProduit($nomProduit)
    {
        $this->nomProduit = $nomProduit;

        return $this;
    }

    /**
     * Get nomProduit
     *
     * @return string
     */
    public function getNomProduit()
    {
        return $this->nomProduit;
    }

    /**
     * Set typeProduit
     *
     * @param \App\PlatformBundle\Entity\type_produit $typeProduit
     *
     * @return produit
     */
    public function setTypeProduit(\App\PlatformBundle\Entity\type_produit $typeProduit)
    {
        $this->typeProduit = $typeProduit;

        return $this;
    }

    /**
     * Get typeProduit
     *
     * @return \App\PlatformBundle\Entity\type_produit
     */
    public function getTypeProduit()
    {
        return $this->typeProduit;
    }

    /**
     * Set detailProduit
     *
     * @param \App\PlatformBundle\Entity\detail_produit $detailProduit
     *
     * @return produit
     */
    public function setDetailProduit(\App\PlatformBundle\Entity\detail_produit $detailProduit)
    {
        $this->detailProduit = $detailProduit;

        return $this;
    }

    /**
     * Get detailProduit
     *
     * @return \App\PlatformBundle\Entity\detail_produit
     */
    public function getDetailProduit()
    {
        return $this->detailProduit;
    }

    /**
     * Set promo
     *
     * @param \App\PlatformBundle\Entity\promo $promo
     *
     * @return produit
     */
    public function setPromo(\App\PlatformBundle\Entity\promo $promo = null)
    {
        $this->promo = $promo;

        return $this;
    }

    /**
     * Get promo
     *
     * @return \App\PlatformBundle\Entity\promo
     */
    public function getPromo()
    {
        return $this->promo;
    }
}
