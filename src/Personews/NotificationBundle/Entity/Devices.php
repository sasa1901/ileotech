<?php

namespace Personews\NotificationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Devices
 *
 * @ORM\Table(name="devices")
 * @ORM\Entity(repositoryClass="Personews\NotificationBundle\Repository\DevicesRepository")
 */
class Devices
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
     * @ORM\Column(name="id_user", type="integer")
     */
    private $idUser;

    /**
     * @var string
     *
     * @ORM\Column(name="device", type="string", length=255)
     */
    private $device;

    /**
     * @var int
     *
     * @ORM\Column(name="ipOfDevice", type="smallint")
     */
    private $ipOfDevice;

    /**
     * @var string
     *
     * @ORM\Column(name="typeOfConnection", type="string", length=128)
     */
    private $typeOfConnection;

    /**
     * @var int
     *
     * @ORM\Column(name="cpu", type="integer")
     */
    private $cpu;

    /**
     * @var string
     *
     * @ORM\Column(name="internet", type="string", length=128)
     */
    private $internet;

    /**
     * @var int
     *
     * @ORM\Column(name="batterie", type="integer")
     */
    private $batterie;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateOfLastConnection", type="datetime")
     */
    private $dateOfLastConnection;


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
     * Set idUser
     *
     * @param integer $idUser
     * @return Devices
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return integer 
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set device
     *
     * @param string $device
     * @return Devices
     */
    public function setDevice($device)
    {
        $this->device = $device;

        return $this;
    }

    /**
     * Get device
     *
     * @return string 
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * Set ipOfDevice
     *
     * @param integer $ipOfDevice
     * @return Devices
     */
    public function setIpOfDevice($ipOfDevice)
    {
        $this->ipOfDevice = $ipOfDevice;

        return $this;
    }

    /**
     * Get ipOfDevice
     *
     * @return integer 
     */
    public function getIpOfDevice()
    {
        return $this->ipOfDevice;
    }

    /**
     * Set typeOfConnection
     *
     * @param string $typeOfConnection
     * @return Devices
     */
    public function setTypeOfConnection($typeOfConnection)
    {
        $this->typeOfConnection = $typeOfConnection;

        return $this;
    }

    /**
     * Get typeOfConnection
     *
     * @return string 
     */
    public function getTypeOfConnection()
    {
        return $this->typeOfConnection;
    }

    /**
     * Set cpu
     *
     * @param integer $cpu
     * @return Devices
     */
    public function setCpu($cpu)
    {
        $this->cpu = $cpu;

        return $this;
    }

    /**
     * Get cpu
     *
     * @return integer 
     */
    public function getCpu()
    {
        return $this->cpu;
    }

    /**
     * Set internet
     *
     * @param string $internet
     * @return Devices
     */
    public function setInternet($internet)
    {
        $this->internet = $internet;

        return $this;
    }

    /**
     * Get internet
     *
     * @return string 
     */
    public function getInternet()
    {
        return $this->internet;
    }

    /**
     * Set batterie
     *
     * @param integer $batterie
     * @return Devices
     */
    public function setBatterie($batterie)
    {
        $this->batterie = $batterie;

        return $this;
    }

    /**
     * Get batterie
     *
     * @return integer 
     */
    public function getBatterie()
    {
        return $this->batterie;
    }

    /**
     * Set dateOfLastConnection
     *
     * @param \DateTime $dateOfLastConnection
     * @return Devices
     */
    public function setDateOfLastConnection($dateOfLastConnection)
    {
        $this->dateOfLastConnection = $dateOfLastConnection;

        return $this;
    }

    /**
     * Get dateOfLastConnection
     *
     * @return \DateTime 
     */
    public function getDateOfLastConnection()
    {
        return $this->dateOfLastConnection;
    }
}
