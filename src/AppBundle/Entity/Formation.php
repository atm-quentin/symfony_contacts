<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formation
 *
 * @ORM\Table(name="formation")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FormationRepository")
 */
class Formation
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
     * @ORM\Column(name="libelleClasse", type="string", length=255)
     */
    private $libelleClasse;

    /**
     * @var int
     *
     * @ORM\Column(name="Nbexemplaire", type="integer")
     */
    private $Nbexemplaire;

/**
     * @ORM\OneToMany(targetEntity="Tirage", mappedBy="formation")
     */
    private $tirages;
    
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
     * Set libelleClasse
     *
     * @param string $libelleClasse
     *
     * @return Formation
     */
    public function setLibelleClasse($libelleClasse)
    {
        $this->libelleClasse = $libelleClasse;

        return $this;
    }

    /**
     * Get libelleClasse
     *
     * @return string
     */
    public function getLibelleClasse()
    {
        return $this->libelleClasse;
    }


    /**
     * Set nbexemplaire
     *
     * @param integer $nbexemplaire
     *
     * @return Formation
     */
    public function setNbexemplaire($nbexemplaire)
    {
        $this->Nbexemplaire = $nbexemplaire;

        return $this;
    }

    /**
     * Get nbexemplaire
     *
     * @return integer
     */
    public function getNbexemplaire()
    {
        return $this->Nbexemplaire;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tirages = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add tirage
     *
     * @param \AppBundle\Entity\Tirage $tirage
     *
     * @return Formation
     */
    public function addTirage(\AppBundle\Entity\Tirage $tirage)
    {
        $this->tirages[] = $tirage;

        return $this;
    }

    /**
     * Remove tirage
     *
     * @param \AppBundle\Entity\Tirage $tirage
     */
    public function removeTirage(\AppBundle\Entity\Tirage $tirage)
    {
        $this->tirages->removeElement($tirage);
    }

    /**
     * Get tirages
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTirages()
    {
        return $this->tirages;
    }
}
