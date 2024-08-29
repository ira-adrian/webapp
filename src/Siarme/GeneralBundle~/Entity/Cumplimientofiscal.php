<?php


namespace Siarme\GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cumplimientofiscal
 *
 * @ORM\Table(name="cumplimientofiscal", indexes={@ORM\Index(name="cumplimientofiscal_persona_id_foreign", columns={"persona_id"})})
 * @ORM\Entity
 */
class Cumplimientofiscal
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
     * @var \DateTime
     *
     * @ORM\Column(name="fechaEmision", type="datetime", nullable=false)
     */
    private $fechaemision ;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaVencimiento", type="datetime", nullable=false)
     */
    private $fechavencimiento ;

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
     * @var \Personas
     *
     * @ORM\ManyToOne(targetEntity="Personas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="persona_id", referencedColumnName="id")
     * })
     */
    private $persona;



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
     * Set fechaemision.
     *
     * @param \DateTime $fechaemision
     *
     * @return Cumplimientofiscal
     */
    public function setFechaemision($fechaemision)
    {
        $this->fechaemision = $fechaemision;

        return $this;
    }

    /**
     * Get fechaemision.
     *
     * @return \DateTime
     */
    public function getFechaemision()
    {
        return $this->fechaemision;
    }

    /**
     * Set fechavencimiento.
     *
     * @param \DateTime $fechavencimiento
     *
     * @return Cumplimientofiscal
     */
    public function setFechavencimiento($fechavencimiento)
    {
        $this->fechavencimiento = $fechavencimiento;

        return $this;
    }

    /**
     * Get fechavencimiento.
     *
     * @return \DateTime
     */
    public function getFechavencimiento()
    {
        return $this->fechavencimiento;
    }

    /**
     * Set createdAt.
     *
     * @param \DateTime|null $createdAt
     *
     * @return Cumplimientofiscal
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
     * @return Cumplimientofiscal
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
     * @return Cumplimientofiscal
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
     * Set persona.
     *
     * @param \Siarme\GeneralBundle\Entity\Personas|null $persona
     *
     * @return Cumplimientofiscal
     */
    public function setPersona(\Siarme\GeneralBundle\Entity\Personas $persona = null)
    {
        $this->persona = $persona;

        return $this;
    }

    /**
     * Get persona.
     *
     * @return \Siarme\GeneralBundle\Entity\Personas|null
     */
    public function getPersona()
    {
        return $this->persona;
    }

   /*
   * ToString
   */
    public function __toString()
    {
         return   (string) $this->getId();
    }
}
