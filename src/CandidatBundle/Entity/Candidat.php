<?php

namespace CandidatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Candidat
 *
 * @ORM\Table(name="candidat")
 * @ORM\Entity(repositoryClass="CandidatBundle\Repository\CandidatRepository")
 */
class Candidat
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    public function getId()
    {
        return $this->id;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255,nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prennom", type="string", length=255,nullable=true)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="position", type="string", length=255,nullable=true)
     */
    private $position;

    /**
     * @var string
     *
     * @ORM\Column(name="localisation", type="string", length=255,nullable=true)
     */
    private $localisation;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255,nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255,nullable=true)
     */
    private $url;

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Candidat
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Candidat
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set position
     *
     * @param string $position
     *
     * @return Candidat
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return string
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set localisation
     *
     * @param string $localisation
     *
     * @return Candidat
     */
    public function setLocalisation($localisation)
    {
        $this->localisation = $localisation;

        return $this;
    }

    /**
     * Get localisation
     *
     * @return string
     */
    public function getLocalisation()
    {
        return $this->localisation;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Candidat
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return Candidat
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }
}
