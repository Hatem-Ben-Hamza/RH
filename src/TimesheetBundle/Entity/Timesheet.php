<?php

namespace TimesheetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Timesheet
 *
 * @ORM\Table(name="timesheet")
 * @ORM\Entity(repositoryClass="TimesheetBundle\Repository\TimesheetRepository")
 */
class Timesheet
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="month", type="integer")
     */
    private $month;

    /**
     * @var int
     *
     * @ORM\Column(name="year", type="integer")
     */
    private $year;

    /**
     * @var int
     *
     * @ORM\Column(name="jours_ouvres", type="integer")
     */
    private $joursOuvres;

    /**
     * @var int
     *
     * @ORM\Column(name="jours_prod", type="integer")
     */
    private $joursProd;

    /**
     * @var int
     *
     * @ORM\Column(name="jours_cp", type="integer")
     */
    private $joursCp;

    /**
     * @var int
     *
     * @ORM\Column(name="jours_interne", type="integer")
     */
    private $joursInterne;


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
     * Set name
     *
     * @param string $name
     *
     * @return Timesheet
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set month
     *
     * @param integer $month
     *
     * @return Timesheet
     */
    public function setMonth($month)
    {
        $this->month = $month;

        return $this;
    }

    /**
     * Get month
     *
     * @return int
     */
    public function getMonth()
    {
        return $this->month;
    }

    /**
     * Set year
     *
     * @param integer $year
     *
     * @return Timesheet
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return int
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set joursOuvres
     *
     * @param string $joursOuvres
     *
     * @return Timesheet
     */
    public function setJoursOuvres($joursOuvres)
    {
        $this->joursOuvres = $joursOuvres;

        return $this;
    }

    /**
     * Get joursOuvres
     *
     * @return string
     */
    public function getJoursOuvres()
    {
        return $this->joursOuvres;
    }

    /**
     * Set joursProd
     *
     * @param integer $joursProd
     *
     * @return Timesheet
     */
    public function setJoursProd($joursProd)
    {
        $this->joursProd = $joursProd;

        return $this;
    }

    /**
     * Get joursProd
     *
     * @return int
     */
    public function getJoursProd()
    {
        return $this->joursProd;
    }

    /**
     * Set joursCp
     *
     * @param integer $joursCp
     *
     * @return Timesheet
     */
    public function setJoursCp($joursCp)
    {
        $this->joursCp = $joursCp;

        return $this;
    }

    /**
     * Get joursCp
     *
     * @return int
     */
    public function getJoursCp()
    {
        return $this->joursCp;
    }

    /**
     * Set joursInterne
     *
     * @param integer $joursInterne
     *
     * @return Timesheet
     */
    public function setJoursInterne($joursInterne)
    {
        $this->joursInterne = $joursInterne;

        return $this;
    }

    /**
     * Get joursInterne
     *
     * @return int
     */
    public function getJoursInterne()
    {
        return $this->joursInterne;
    }
}
