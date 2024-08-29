<?php


namespace Siarme\GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sessions
 *
 * @ORM\Table(name="sessions", indexes={@ORM\Index(name="sessions_user_id_index", columns={"user_id"}), @ORM\Index(name="sessions_last_activity_index", columns={"last_activity"})})
 * @ORM\Entity
 */
class Sessions
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=191, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="user_id", type="bigint", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $userId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ip_address", type="string", length=45, nullable=true)
     */
    private $ipAddress;

    /**
     * @var string|null
     *
     * @ORM\Column(name="user_agent", type="text", length=65535, nullable=true)
     */
    private $userAgent;

    /**
     * @var string
     *
     * @ORM\Column(name="payload", type="text", length=65535, nullable=false)
     */
    private $payload;

    /**
     * @var int
     *
     * @ORM\Column(name="last_activity", type="integer", nullable=false)
     */
    private $lastActivity;



    /**
     * Get id.
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set userId.
     *
     * @param int|null $userId
     *
     * @return Sessions
     */
    public function setUserId($userId = null)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId.
     *
     * @return int|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set ipAddress.
     *
     * @param string|null $ipAddress
     *
     * @return Sessions
     */
    public function setIpAddress($ipAddress = null)
    {
        $this->ipAddress = $ipAddress;

        return $this;
    }

    /**
     * Get ipAddress.
     *
     * @return string|null
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    /**
     * Set userAgent.
     *
     * @param string|null $userAgent
     *
     * @return Sessions
     */
    public function setUserAgent($userAgent = null)
    {
        $this->userAgent = $userAgent;

        return $this;
    }

    /**
     * Get userAgent.
     *
     * @return string|null
     */
    public function getUserAgent()
    {
        return $this->userAgent;
    }

    /**
     * Set payload.
     *
     * @param string $payload
     *
     * @return Sessions
     */
    public function setPayload($payload)
    {
        $this->payload = $payload;

        return $this;
    }

    /**
     * Get payload.
     *
     * @return string
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * Set lastActivity.
     *
     * @param int $lastActivity
     *
     * @return Sessions
     */
    public function setLastActivity($lastActivity)
    {
        $this->lastActivity = $lastActivity;

        return $this;
    }

    /**
     * Get lastActivity.
     *
     * @return int
     */
    public function getLastActivity()
    {
        return $this->lastActivity;
    }

   /*
   * ToString
   */
    public function __toString()
    {
         return   (string) $this->getId();
    }
}
