<?php

namespace Personews\FlowBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Flow
 *
 * @ORM\Table(name="flow")
 * @ORM\Entity(repositoryClass="Personews\FlowBundle\Repository\FlowRepository")
 */
class Flow
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
     * @ORM\OneToOne(targetEntity="Personews\FlowBundle\Entity\Flowcontent", cascade={"persist"})
     *
     */
    private $flowContent;

    /**
     * @ORM\OneToOne(targetEntity="Personews\UserBundle\Entity\User", cascade={"persist"})
     *
     */
    private $user;

    /**
     * @ORM\OneToOne(targetEntity="Personews\NotificationBundle\Entity\Notification", cascade={"persist"})
     *
     */
    private $notification;

    /**
     * @var int
     *
     * @ORM\Column(name="checkDevice", type="smallint", nullable=true)
     */
    private $checkDevice;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateOfCreation", type="datetime", nullable=true)
     */
    private $dateOfCreation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateOfCheck", type="datetime", nullable=true)
     */
    private $dateOfCheck;

/*    public function __construct()
    {
        $this->$dateOfCheck = new \Datetime();
    }*/

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set checkDevice
     *
     * @param integer $checkDevice
     * @return Flow
     */
    public function setCheckDevice($checkDevice)
    {
        $this->checkDevice = $checkDevice;

        return $this;
    }

    /**
     * Get checkDevice
     *
     * @return integer
     */
    public function getCheckDevice()
    {
        return $this->checkDevice;
    }

    /**
     * Set dateOfCreation
     *
     * @param \DateTime $dateOfCreation
     * @return Flow
     */
    public function setDateOfCreation($dateOfCreation)
    {
        $this->dateOfCreation = $dateOfCreation;

        return $this;
    }

    /**
     * Get dateOfCreation
     *
     * @return \DateTime
     */
    public function getDateOfCreation()
    {
        return $this->dateOfCreation;
    }

    /**
     * Set dateOfCheck
     *
     * @param \DateTime $dateOfCheck
     * @return Flow
     */
    public function setDateOfCheck($dateOfCheck)
    {
        $this->dateOfCheck = $dateOfCheck;

        return $this;
    }

    /**
     * Get dateOfCheck
     *
     * @return \DateTime
     */
    public function getDateOfCheck()
    {
        return $this->dateOfCheck;
    }

    /**
     * Set flowContent
     *
     * @param \Personews\FlowBundle\Entity\Flowcontent $flowContent
     * @return Flow
     */
    public function setFlowContent(\Personews\FlowBundle\Entity\Flowcontent $flowContent = null)
    {
        $this->flowContent = $flowContent;

        return $this;
    }

    /**
     * Get flowContent
     *
     * @return \Personews\FlowBundle\Entity\Flowcontent 
     */
    public function getFlowContent()
    {
        return $this->flowContent;
    }

    /**
     * Set user
     *
     * @param \Personews\AccountBundle\Entity\Users $user
     * @return Flow
     */
    public function setUser(\Personews\AccountBundle\Entity\Users $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Personews\AccountBundle\Entity\Users
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set notification
     *
     * @param \Personews\NotificationBundle\Entity\Notification $notification
     * @return Flow
     */
    public function setNotification(\Personews\NotificationBundle\Entity\Notification $notification = null)
    {
        $this->notification = $notification;

        return $this;
    }

    /**
     * Get notification
     *
     * @return \Personews\NotificationBundle\Entity\Notification 
     */
    public function getNotification()
    {
        return $this->notification;
    }
}
