<?php

namespace Personews\NotificationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notification
 *
 * @ORM\Table(name="notification")
 * @ORM\Entity(repositoryClass="Personews\NotificationBundle\Repository\NotificationRepository")
 */
class Notification
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
     * @ORM\OneToOne(targetEntity="Personews\UserBundle\Entity\User", cascade={"persist"})
     *
     */
    private $user;

    /**
     * @ORM\OneToOne(targetEntity="Personews\NotificationBundle\Entity\Devices", cascade={"persist"})
     *
     */
    private $device;

    /**
     * @ORM\OneToOne(targetEntity="Personews\NotificationBundle\Entity\Notifcontent", cascade={"persist"})
     *
     */
    private $notifContent;

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
     * Set user
     *
     * @param \Personews\AccountBundle\Entity\Users $user
     * @return Notification
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
     * Set device
     *
     * @param \Personews\NotificationBundle\Entity\Devices $device
     * @return Notification
     */
    public function setDevice(\Personews\NotificationBundle\Entity\Devices $device = null)
    {
        $this->device = $device;

        return $this;
    }

    /**
     * Get device
     *
     * @return \Personews\NotificationBundle\Entity\Devices 
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * Set notifContent
     *
     * @param \Personews\NotificationBundle\Entity\Notifcontent $notifContent
     * @return Notification
     */
    public function setNotifContent(\Personews\NotificationBundle\Entity\Notifcontent $notifContent = null)
    {
        $this->notifContent = $notifContent;

        return $this;
    }

    /**
     * Get notifContent
     *
     * @return \Personews\NotificationBundle\Entity\Notifcontent 
     */
    public function getNotifContent()
    {
        return $this->notifContent;
    }
}
