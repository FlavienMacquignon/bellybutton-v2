<?php
/**
 * Name: Agency.php
 * Author: Flavien Macquignon
 * Date: 05/10/2020
 * Comment: This file is file destined to connect to the BB_Central Database and create a Agency table for contacting purposes
 */
namespace App\Entity\InfluenceurManagement;


use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


/**
 * @ORM\Entity(repositoryClass="App\Repository\AgencyRepository")
 * @UniqueEntity("nameAgency")
 */
class Agency
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="idAgency")
     */
    private $user_id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $nameAgency;

    /**
     * @ORM\Column(type="integer")
     */
    private $idDefaultContact;

    /**
     * @ORM\Column(type="string", nullable=true)
     * @Assert\NotBlank
     */
    private $nameContact;
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $idContact;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $NameSpecialContact;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $commentary;

    // Contructors

    //TODO build this constructor for PDO (https://www.php.net/manual/fr/pdo.construct.php)
    //TODO then __construct is build, build it to all other entity
    public function getnameAgency(): ?string
    {
        return $this->nameAgency;
    }

    public function setnameagency(string $nameAgency)
    {
        $this->nameAgency = $nameAgency;
        return $this;
    }

    public function getnameContact(): ?string
    {
        return $this->nameContact;
    }
    public function setnameContact(string $nameContact)
    {
        $this->nameContact = $nameContact;
        return $this;
    }

    public function getcommentary(): ?string
    {
        return $this->commentary;
    }

    public function setcommentary(string $commentary)
    {
        $this->commentary = $commentary;
        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserId(): ?int
    {
        return $this->user_id;
    }

    public function setUserId(int $user_id): self
    {
        $this->user_id = $user_id;

        return $this;
    }

    public function getIdDefaultContact(): ?int
    {
        return $this->idDefaultContact;
    }

    public function setIdDefaultContact(int $idDefaultContact): self
    {
        $this->idDefaultContact = $idDefaultContact;

        return $this;
    }

    public function getIdContact(): ?int
    {
        return $this->idContact;
    }

    public function setIdContact(?int $idContact): self
    {
        $this->idContact = $idContact;

        return $this;
    }

    public function getNameSpecialContact(): ?string
    {
        return $this->NameSpecialContact;
    }

    public function setNameSpecialContact(?string $NameSpecialContact): self
    {
        $this->NameSpecialContact = $NameSpecialContact;

        return $this;
    }

}
