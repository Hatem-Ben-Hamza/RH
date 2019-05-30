<?php

namespace SalarieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Salarie
 *
 * @ORM\Table(name="salarie")
 * @ORM\Entity(repositoryClass="SalarieBundle\Repository\SalarieRepository")
 */
class Salarie
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
     * @ORM\Column(name="name", type="string", length=255,nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255,nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255,nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="href", type="string", length=255,nullable=true)
     */
    private $href;

    /**
     * @var string
     *
     * @ORM\Column(name="job_title", type="string", length=255,nullable=true)
     */
    private $jobTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="manager", type="string", length=255,nullable=true)
     */
    private $manager;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=255,nullable=true)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=255,nullable=true)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="gender", type="string", length=255,nullable=true)
     */
    private $gender;

    /**
     * @var string
     *
     * @ORM\Column(name="businessemail", type="string", length=255,nullable=true)
     */
    private $businessemail;

    /**
     * @var string
     *
     * @ORM\Column(name="persoemail", type="string", length=255,nullable=true)
     */
    private $persoemail;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=255,nullable=true)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="adress", type="string", length=255,nullable=true)
     */
    private $adress;

    /**
     * @var int
     *
     * @ORM\Column(name="zipcode", type="integer",nullable=true)
     */
    private $zipcode;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255,nullable=true)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=255,nullable=true)
     */
    private $country;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birthdate", type="datetime",nullable=true)
     */
    private $birthdate;

    /**
     * @var int
     *
     * @ORM\Column(name="matricule", type="integer",nullable=true)
     */
    private $matricule;

    /**
     * @var string
     *
     * @ORM\Column(name="birthplace", type="string", length=255,nullable=true)
     */
    private $birthplace;

    /**
     * @var string
     *
     * @ORM\Column(name="cnss", type="string", length=255,nullable=true)
     */
    private $cnss;

    /**
     * @var string
     *
     * @ORM\Column(name="comments", type="string", length=255,nullable=true)
     */
    private $comments;

    /**
     * @var string
     *
     * @ORM\Column(name="citizenship", type="string", length=255,nullable=true)
     */
    private $citizenship;

    /**
     * @var string
     *
     * @ORM\Column(name="relationship_status", type="string", length=255,nullable=true)
     */
    private $relationshipStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="contract_type", type="string", length=255,nullable=true)
     */
    private $contractType;

    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="contract_start_date", type="datetime",nullable=true)
     */

    private $contractStartDate;


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="contract_end_date", type="datetime",nullable=true)
     */
    private $contractEndDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="contract_end_test1", type="datetime",nullable=true)
     */
    private $contractEndTest1;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="contract_end_test2", type="datetime",nullable=true)
     */
    private $contractEndTest12;


    /**
     * @var float
     *
     * @ORM\Column(name="salary", type="float",nullable=true)
     */
    private $salary;

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
     * @return Candidat
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
     * Set type
     *
     * @param string $type
     *
     * @return Candidat
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Candidat
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set href
     *
     * @param string $href
     *
     * @return Candidat
     */
    public function setHref($href)
    {
        $this->href = $href;

        return $this;
    }

    /**
     * Get href
     *
     * @return string
     */
    public function getHref()
    {
        return $this->href;
    }

    /**
     * Set jobTitle
     *
     * @param string $jobTitle
     *
     * @return Candidat
     */
    public function setJobTitle($jobTitle)
    {
        $this->jobTitle = $jobTitle;

        return $this;
    }

    /**
     * Get jobTitle
     *
     * @return string
     */
    public function getJobTitle()
    {
        return $this->jobTitle;
    }

    /**
     * Set manager
     *
     * @param string $manager
     *
     * @return Candidat
     */
    public function setManager($manager)
    {
        $this->manager = $manager;

        return $this;
    }

    /**
     * Get manager
     *
     * @return string
     */
    public function getManager()
    {
        return $this->manager;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     *
     * @return Candidat
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return Candidat
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set gender
     *
     * @param string $gender
     *
     * @return Candidat
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set businessemail
     *
     * @param string $businessemail
     *
     * @return Candidat
     */
    public function setBusinessemail($businessemail)
    {
        $this->businessemail = $businessemail;

        return $this;
    }

    /**
     * Get businessemail
     *
     * @return string
     */
    public function getBusinessemail()
    {
        return $this->businessemail;
    }

    /**
     * Set persoemail
     *
     * @param string $persoemail
     *
     * @return Candidat
     */
    public function setPersoemail($persoemail)
    {
        $this->persoemail = $persoemail;

        return $this;
    }

    /**
     * Get persoemail
     *
     * @return string
     */
    public function getPersoemail()
    {
        return $this->persoemail;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return Candidat
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set adress
     *
     * @param string $adress
     *
     * @return Candidat
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;

        return $this;
    }

    /**
     * Get adress
     *
     * @return string
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * Set zipcode
     *
     * @param integer $zipcode
     *
     * @return Candidat
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;

        return $this;
    }

    /**
     * Get zipcode
     *
     * @return int
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return Candidat
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return Candidat
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set birthdate
     *
     * @param \DateTime $birthdate
     *
     * @return Candidat
     */
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    /**
     * Get birthdate
     *
     * @return \DateTime
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * Set matricule
     *
     * @param integer $matricule
     *
     * @return Candidat
     */
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;

        return $this;
    }

    /**
     * Get matricule
     *
     * @return int
     */
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * Set birthplace
     *
     * @param string $birthplace
     *
     * @return Candidat
     */
    public function setBirthplace($birthplace)
    {
        $this->birthplace = $birthplace;

        return $this;
    }

    /**
     * Get birthplace
     *
     * @return string
     */
    public function getBirthplace()
    {
        return $this->birthplace;
    }

    /**
     * Set cnss
     *
     * @param string $cnss
     *
     * @return Candidat
     */
    public function setCnss($cnss)
    {
        $this->cnss = $cnss;

        return $this;
    }

    /**
     * Get cnss
     *
     * @return string
     */
    public function getCnss()
    {
        return $this->cnss;
    }

    /**
     * Set comments
     *
     * @param string $comments
     *
     * @return Candidat
     */
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Get comments
     *
     * @return string
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set citizenship
     *
     * @param string $citizenship
     *
     * @return Candidat
     */
    public function setCitizenship($citizenship)
    {
        $this->citizenship = $citizenship;

        return $this;
    }

    /**
     * Get citizenship
     *
     * @return string
     */
    public function getCitizenship()
    {
        return $this->citizenship;
    }

    /**
     * Set relationshipStatus
     *
     * @param string $relationshipStatus
     *
     * @return Candidat
     */
    public function setRelationshipStatus($relationshipStatus)
    {
        $this->relationshipStatus = $relationshipStatus;

        return $this;
    }

    /**
     * Get relationshipStatus
     *
     * @return string
     */
    public function getRelationshipStatus()
    {
        return $this->relationshipStatus;
    }

    /**
     * Set contractType
     *
     * @param string $contractType
     *
     * @return Candidat
     */
    public function setContractType($contractType)
    {
        $this->contractType = $contractType;

        return $this;
    }

    /**
     * Get contractType
     *
     * @return string
     */
    public function getContractType()
    {
        return $this->contractType;
    }

    /**
     * Set contractStartDate
     *
     * @param string $contractStartDate
     *
     * @return Candidat
     */
    public function setContractStartDate($contractStartDate)
    {
        $this->contractStartDate = $contractStartDate;

        return $this;
    }

    /**
     * Get contractStartDate
     *
     * @return string
     */
    public function getContractStartDate()
    {
        return $this->contractStartDate;
    }

    /**
     * Set contractEndDate
     *
     * @param \DateTime $contractEndDate
     *
     * @return Candidat
     */
    public function setContractEndDate($contractEndDate)
    {
        $this->contractEndDate = $contractEndDate;

        return $this;
    }

    /**
     * Get contractEndDate
     *
     * @return \DateTime
     */
    public function getContractEndDate()
    {
        return $this->contractEndDate;
    }

    /**
     * Set contractEndTest1
     *
     * @param \DateTime $contractEndTest1
     *
     * @return Candidat
     */
    public function setContractEndTest1($contractEndTest1)
    {
        $this->contractEndTest1 = $contractEndTest1;

        return $this;
    }

    /**
     * Get contractEndTest1
     *
     * @return \DateTime
     */
    public function getContractEndTest1()
    {
        return $this->contractEndTest1;
    }

    /**
     * Set contractEndTest12
     *
     * @param \DateTime $contractEndTest12
     *
     * @return Candidat
     */
    public function setContractEndTest12($contractEndTest12)
    {
        $this->contractEndTest12 = $contractEndTest12;

        return $this;
    }

    /**
     * Get contractEndTest12
     *
     * @return \DateTime
     */
    public function getContractEndTest12()
    {
        return $this->contractEndTest12;
    }

    /**
     * Set salary
     *
     * @param float $salary
     *
     * @return Candidat
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;

        return $this;
    }

    /**
     * Get salary
     *
     * @return float
     */
    public function getSalary()
    {
        return $this->salary;
    }
}
