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
}
