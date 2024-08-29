<?php


namespace Siarme\GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Propietarios
 *
 * @ORM\Table(name="propietarios")
 * @ORM\Entity
 */
class Propietarios
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
     * @ORM\Column(name="matricula", type="bigint", nullable=false, options={"unsigned"=true})
     */
    private $matricula;

    /**
     * @var int
     *
     * @ORM\Column(name="persona_id", type="bigint", nullable=false, options={"unsigned"=true})
     */
    private $personaId;

    /**
     * @var int
     *
     * @ORM\Column(name="tipo_propietario_id", type="integer", nullable=false)
     */
    private $tipoPropietarioId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="deleted_at", type="datetime", nullable=true)
     */
    private $deletedAt;

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
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set matricula.
     *
     * @param int $matricula
     *
     * @return Propietarios
     */
    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;

        return $this;
    }

    /**
     * Get matricula.
     *
     * @return int
     */
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * Set personaId.
     *
     * @param int $personaId
     *
     * @return Propietarios
     */
    public function setPersonaId($personaId)
    {
        $this->personaId = $personaId;

        return $this;
    }

    /**
     * Get personaId.
     *
     * @return int
     */
    public function getPersonaId()
    {
        return $this->personaId;
    }

    /**
     * Set tipoPropietarioId.
     *
     * @param int $tipoPropietarioId
     *
     * @return Propietarios
     */
    public function setTipoPropietarioId($tipoPropietarioId)
    {
        $this->tipoPropietarioId = $tipoPropietarioId;

        return $this;
    }

    /**
     * Get tipoPropietarioId.
     *
     * @return int
     */
    public function getTipoPropietarioId()
    {
        return $this->tipoPropietarioId;
    }

    /**
     * Set deletedAt.
     *
     * @param \DateTime|null $deletedAt
     *
     * @return Propietarios
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

    /**
     * Set createdAt.
     *
     * @param \DateTime|null $createdAt
     *
     * @return Propietarios
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
     * @return Propietarios
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

   /*
   * ToString
   */
    public function __toString()
    {
         return   (string) $this->getId();
    }
}
