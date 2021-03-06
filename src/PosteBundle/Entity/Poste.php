<?php

namespace PosteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Poste
 *
 * @ORM\Table(name="poste")
 * @ORM\Entity(repositoryClass="PosteBundle\Repository\PosteRepository")
 */
class Poste
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
     * @ORM\Column(name="poste", type="string", length=255)
     */
    private $poste;

    /**
     * @var string
     *
     * @ORM\Column(name="critere", type="string", length=255)
     */
    private $critere;

    /**
     * @var int
     *
     * @ORM\Column(name="minexp", type="integer")
     */
    private $minexp;


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
     * Set poste
     *
     * @param string $poste
     *
     * @return Poste
     */
    public function setPoste($poste)
    {
        $this->poste = $poste;

        return $this;
    }

    /**
     * Get poste
     *
     * @return string
     */
    public function getPoste()
    {
        return $this->poste;
    }

    /**
     * Set critere
     *
     * @param string $critere
     *
     * @return Poste
     */
    public function setCritere($critere)
    {
        $this->critere = $critere;

        return $this;
    }

    /**
     * Get critere
     *
     * @return string
     */
    public function getCritere()
    {
        return $this->critere;
    }

    /**
     * Set minexp
     *
     * @param integer $minexp
     *
     * @return Poste
     */
    public function setMinexp($minexp)
    {
        $this->minexp = $minexp;

        return $this;
    }

    /**
     * Get minexp
     *
     * @return int
     */
    public function getMinexp()
    {
        return $this->minexp;
    }
}
