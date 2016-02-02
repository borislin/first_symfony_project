<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ChangeList
 *
 * @ORM\Table(name="change_list")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ChangeListRepository")
 */
class ChangeList
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
     * @var int
     *
     * @ORM\Column(name="changeListId", type="integer")
     */
    private $changeListId;

    /**
     * @var string
     *
     * @ORM\Column(name="userName", type="string", length=255)
     */
    private $userName;

    /**
     * @var string
     *
     * @ORM\Column(name="jobName", type="string", length=255)
     */
    private $jobName;

    /**
     * @var string
     *
     * @ORM\Column(name="jobId", type="string", length=255)
     */
    private $jobId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="aggrStartTime", type="datetime")
     */
    private $aggrStartTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="aggrEndTime", type="datetime")
     */
    private $aggrEndTime;

    /**
     * @var string
     *
     * @ORM\Column(name="aggrOutcome", type="string", length=255)
     */
    private $aggrOutcome;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="serialStartTime", type="datetime", nullable=true)
     */
    private $serialStartTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="serialEndTime", type="datetime", nullable=true)
     */
    private $serialEndTime;

    /**
     * @var string
     *
     * @ORM\Column(name="serialOutcome", type="string", length=255, nullable=true)
     */
    private $serialOutcome;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="submitStartTime", type="datetime", nullable=true)
     */
    private $submitStartTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="submitEndTime", type="datetime", nullable=true)
     */
    private $submitEndTime;

    /**
     * @var string
     *
     * @ORM\Column(name="submitOutcome", type="string", length=255, nullable=true)
     */
    private $submitOutcome;


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
     * Set changeListId
     *
     * @param integer $changeListId
     *
     * @return ChangeList
     */
    public function setChangeListId($changeListId)
    {
        $this->changeListId = $changeListId;

        return $this;
    }

    /**
     * Get changeListId
     *
     * @return int
     */
    public function getChangeListId()
    {
        return $this->changeListId;
    }

    /**
     * Set userName
     *
     * @param string $userName
     *
     * @return ChangeList
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;

        return $this;
    }

    /**
     * Get userName
     *
     * @return string
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Set jobName
     *
     * @param string $jobName
     *
     * @return ChangeList
     */
    public function setJobName($jobName)
    {
        $this->jobName = $jobName;

        return $this;
    }

    /**
     * Get jobName
     *
     * @return string
     */
    public function getJobName()
    {
        return $this->jobName;
    }

    /**
     * Set jobId
     *
     * @param string $jobId
     *
     * @return ChangeList
     */
    public function setJobId($jobId)
    {
        $this->jobId = $jobId;

        return $this;
    }

    /**
     * Get jobId
     *
     * @return string
     */
    public function getJobId()
    {
        return $this->jobId;
    }

    /**
     * Set aggrStartTime
     *
     * @param \DateTime $aggrStartTime
     *
     * @return ChangeList
     */
    public function setAggrStartTime($aggrStartTime)
    {
        $this->aggrStartTime = $aggrStartTime;

        return $this;
    }

    /**
     * Get aggrStartTime
     *
     * @return \DateTime
     */
    public function getAggrStartTime()
    {
        return $this->aggrStartTime;
    }

    /**
     * Set aggrEndTime
     *
     * @param \DateTime $aggrEndTime
     *
     * @return ChangeList
     */
    public function setAggrEndTime($aggrEndTime)
    {
        $this->aggrEndTime = $aggrEndTime;

        return $this;
    }

    /**
     * Get aggrEndTime
     *
     * @return \DateTime
     */
    public function getAggrEndTime()
    {
        return $this->aggrEndTime;
    }

    /**
     * Set aggrOutcome
     *
     * @param string $aggrOutcome
     *
     * @return ChangeList
     */
    public function setAggrOutcome($aggrOutcome)
    {
        $this->aggrOutcome = $aggrOutcome;

        return $this;
    }

    /**
     * Get aggrOutcome
     *
     * @return string
     */
    public function getAggrOutcome()
    {
        return $this->aggrOutcome;
    }

    /**
     * Set serialStartTime
     *
     * @param \DateTime $serialStartTime
     *
     * @return ChangeList
     */
    public function setSerialStartTime($serialStartTime)
    {
        $this->serialStartTime = $serialStartTime;

        return $this;
    }

    /**
     * Get serialStartTime
     *
     * @return \DateTime
     */
    public function getSerialStartTime()
    {
        return $this->serialStartTime;
    }

    /**
     * Set serialEndTime
     *
     * @param \DateTime $serialEndTime
     *
     * @return ChangeList
     */
    public function setSerialEndTime($serialEndTime)
    {
        $this->serialEndTime = $serialEndTime;

        return $this;
    }

    /**
     * Get serialEndTime
     *
     * @return \DateTime
     */
    public function getSerialEndTime()
    {
        return $this->serialEndTime;
    }

    /**
     * Set serialOutcome
     *
     * @param string $serialOutcome
     *
     * @return ChangeList
     */
    public function setSerialOutcome($serialOutcome)
    {
        $this->serialOutcome = $serialOutcome;

        return $this;
    }

    /**
     * Get serialOutcome
     *
     * @return string
     */
    public function getSerialOutcome()
    {
        return $this->serialOutcome;
    }

    /**
     * Set submitStartTime
     *
     * @param \DateTime $submitStartTime
     *
     * @return ChangeList
     */
    public function setSubmitStartTime($submitStartTime)
    {
        $this->submitStartTime = $submitStartTime;

        return $this;
    }

    /**
     * Get submitStartTime
     *
     * @return \DateTime
     */
    public function getSubmitStartTime()
    {
        return $this->submitStartTime;
    }

    /**
     * Set submitEndTime
     *
     * @param \DateTime $submitEndTime
     *
     * @return ChangeList
     */
    public function setSubmitEndTime($submitEndTime)
    {
        $this->submitEndTime = $submitEndTime;

        return $this;
    }

    /**
     * Get submitEndTime
     *
     * @return \DateTime
     */
    public function getSubmitEndTime()
    {
        return $this->submitEndTime;
    }

    /**
     * Set submitOutcome
     *
     * @param string $submitOutcome
     *
     * @return ChangeList
     */
    public function setSubmitOutcome($submitOutcome)
    {
        $this->submitOutcome = $submitOutcome;

        return $this;
    }

    /**
     * Get submitOutcome
     *
     * @return string
     */
    public function getSubmitOutcome()
    {
        return $this->submitOutcome;
    }
}

