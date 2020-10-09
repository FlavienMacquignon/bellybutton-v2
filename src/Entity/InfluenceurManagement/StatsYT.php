<?php
/**
 * Name: StatsYT.php
 * Author: Flavien Macquignon
 * Date: 05/10/2020
 * Comment: This file is file destined to connect to the BB_Central Database and create a StatsYT table to save Youtube statistics
 */
namespace App\Entity;


use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass="App\Repository\StatsYTRepository")
 * @UniqueEntity("idStatsYT")
 */
class StatsYT
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @ORM\OneToMany(targetEntity="App\Entity\InfluenceurManagement\Performance", mappedBy="idStatsYT")
     */
    private $idStatsYT;
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $EstimationsYT;
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $likeYT;
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $dislikeYT;
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $viewYT;
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nbVid7YT;
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nbVid37YT;
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nbAboYT;
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nbComsYT;
    /**
     * @ORM\Column(type="integer")
     * @ORM\ManyToOne(targetEntity="App\Entity\InfluencerManagement", inversedBy="idAudience")
     */
    private $idAudience;
    /**
     * @ORM\Column(type="datetime")
     */
    private $updatedAt;
}