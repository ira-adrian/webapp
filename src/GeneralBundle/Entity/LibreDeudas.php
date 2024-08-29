<?php


namespace GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LibreDeudas
 *
 * @ORM\Table(name="libre_deudas")
 * @ORM\Entity
 */
class LibreDeudas
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
     * @var int
     *
     * @ORM\Column(name="numero", type="integer", nullable=false)
     */
    private $numero;

    /**
     * @var int
     *
     * @ORM\Column(name="anio", type="integer", nullable=false)
     */
    private $anio;

    /**
     * @var string
     *
     * @ORM\Column(name="matricula", type="string", length=191, nullable=false)
     */
    private $matricula;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="valido_hasta_at", type="date", nullable=false)
     */
    private $validoHastaAt;

    /**
     * @var string
     *
     * @ORM\Column(name="hash", type="string", length=191, nullable=false)
     */
    private $hash;

    /**
     * @var int|null
     *
     * @ORM\Column(name="user_id", type="bigint", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $userId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="historial_caja_id", type="integer", nullable=true)
     */
    private $historialCajaId = NULL;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="deleted_at", type="datetime", nullable=true)
     */
    private $deletedAt;



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
     * Set numero.
     *
     * @param int $numero
     *
     * @return LibreDeudas
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero.
     *
     * @return int
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set anio.
     *
     * @param int $anio
     *
     * @return LibreDeudas
     */
    public function setAnio($anio)
    {
        $this->anio = $anio;

        return $this;
    }

    /**
     * Get anio.
     *
     * @return int
     */
    public function getAnio()
    {
        return $this->anio;
    }

    /**
     * Set matricula.
     *
     * @param string $matricula
     *
     * @return LibreDeudas
     */
    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;

        return $this;
    }

    /**
     * Get matricula.
     *
     * @return string
     */
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * Set validoHastaAt.
     *
     * @param \DateTime $validoHastaAt
     *
     * @return LibreDeudas
     */
    public function setValidoHastaAt($validoHastaAt)
    {
        $this->validoHastaAt = $validoHastaAt;

        return $this;
    }

    /**
     * Get validoHastaAt.
     *
     * @return \DateTime
     */
    public function getValidoHastaAt()
    {
        return $this->validoHastaAt;
    }

    /**
     * Set hash.
     *
     * @param string $hash
     *
     * @return LibreDeudas
     */
    public function setHash($hash)
    {
        $this->hash = $hash;

        return $this;
    }

    /**
     * Get hash.
     *
     * @return string
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * Set userId.
     *
     * @param int|null $userId
     *
     * @return LibreDeudas
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
     * Set historialCajaId.
     *
     * @param int|null $historialCajaId
     *
     * @return LibreDeudas
     */
    public function setHistorialCajaId($historialCajaId = null)
    {
        $this->historialCajaId = $historialCajaId;

        return $this;
    }

    /**
     * Get historialCajaId.
     *
     * @return int|null
     */
    public function getHistorialCajaId()
    {
        return $this->historialCajaId;
    }

    /**
     * Set createdAt.
     *
     * @param \DateTime|null $createdAt
     *
     * @return LibreDeudas
     */
    public function setCreatedAt($createdAt = null)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt.
     *
     * @param \DateTime|null $updatedAt
     *
     * @return LibreDeudas
     */
    public function setUpdatedAt($updatedAt = null)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set deletedAt.
     *
     * @param \DateTime|null $deletedAt
     *
     * @return LibreDeudas
     */
    public function setDeletedAt($deletedAt = null)
    {
        $this->deletedAt = $deletedAt;

        return $this;
    }

    /**
     * Get deletedAt.
     *
     * @return \DateTime|null
     */
    public function getDeletedAt()
    {
        return $this->deletedAt;
    }

   /*
   * ToString
   */
    public function __toString()
    {
         return   (string) $this->getId();
    }
}
