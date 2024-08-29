<?php


namespace GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FailedJobs
 *
 * @ORM\Table(name="failed_jobs", uniqueConstraints={@ORM\UniqueConstraint(name="failed_jobs_uuid_unique", columns={"uuid"})})
 * @ORM\Entity
 */
class FailedJobs
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="uuid", type="string", length=191, nullable=false)
     */
    private $uuid;

    /**
     * @var string
     *
     * @ORM\Column(name="connection", type="text", length=65535, nullable=false)
     */
    private $connection;

    /**
     * @var string
     *
     * @ORM\Column(name="queue", type="text", length=65535, nullable=false)
     */
    private $queue;

    /**
     * @var string
     *
     * @ORM\Column(name="payload", type="text", length=0, nullable=false)
     */
    private $payload;

    /**
     * @var string
     *
     * @ORM\Column(name="exception", type="text", length=0, nullable=false)
     */
    private $exception;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="failed_at", type="datetime", nullable=false)
     */
    private $failedAt ;



    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set uuid.
     *
     * @param string $uuid
     *
     * @return FailedJobs
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;

        return $this;
    }

    /**
     * Get uuid.
     *
     * @return string
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * Set connection.
     *
     * @param string $connection
     *
     * @return FailedJobs
     */
    public function setConnection($connection)
    {
        $this->connection = $connection;

        return $this;
    }

    /**
     * Get connection.
     *
     * @return string
     */
    public function getConnection()
    {
        return $this->connection;
    }

    /**
     * Set queue.
     *
     * @param string $queue
     *
     * @return FailedJobs
     */
    public function setQueue($queue)
    {
        $this->queue = $queue;

        return $this;
    }

    /**
     * Get queue.
     *
     * @return string
     */
    public function getQueue()
    {
        return $this->queue;
    }

    /**
     * Set payload.
     *
     * @param string $payload
     *
     * @return FailedJobs
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
     * Set exception.
     *
     * @param string $exception
     *
     * @return FailedJobs
     */
    public function setException($exception)
    {
        $this->exception = $exception;

        return $this;
    }

    /**
     * Get exception.
     *
     * @return string
     */
    public function getException()
    {
        return $this->exception;
    }

    /**
     * Set failedAt.
     *
     * @param \DateTime $failedAt
     *
     * @return FailedJobs
     */
    public function setFailedAt($failedAt)
    {
        $this->failedAt = $failedAt;

        return $this;
    }

    /**
     * Get failedAt.
     *
     * @return \DateTime
     */
    public function getFailedAt()
    {
        return $this->failedAt;
    }

   /*
   * ToString
   */
    public function __toString()
    {
         return   (string) $this->getId();
    }
}
