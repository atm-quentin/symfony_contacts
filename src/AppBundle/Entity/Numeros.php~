<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Numeros
 *
 * @ORM\Table(name="numeros")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\NumerosRepository")
 */
class Numeros
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
     * @ORM\Column(name="contact", type="string", length=255, unique=true)
     */
    private $contact;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=32, nullable=true)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="numero", type="string", length=32)
     */
    private $numero;


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
     * Set contact
     *
     * @param string $contact
     *
     * @return Numeros
     */
    public function setContact($contact)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get contact
     *
     * @return string
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Numeros
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set numero
     *
     * @param string $numero
     *
     * @return Numeros
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return string
     */
    public function getNumero()
    {
        return $this->numero;
    }
}
