<?php


namespace Siarme\GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contribuyentes
 *
 * @ORM\Table(name="contribuyentes", indexes={@ORM\Index(name="contribuyentes_persona_id_foreign", columns={"persona_id"}), @ORM\Index(name="contribuyentes_objetoimponible_id_foreign", columns={"objetoImponible_id"})})
 * @ORM\Entity
 */
class Contribuyentes
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
     * @ORM\Column(name="fechaDesde", type="datetime", nullable=false)
     */
    private $fechadesde ;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fechaHasta", type="datetime", nullable=true)
     */
    private $fechahasta;

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
     * @var \Objetosimponibles
     *
     * @ORM\ManyToOne(targetEntity="Objetosimponibles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="objetoImponible_id", referencedColumnName="id")
     * })
     */
    private $objetoimponible;

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
     * Set fechadesde.
     *
     * @param \DateTime $fechadesde
     *
     * @return Contribuyentes
     */
    public function setFechadesde($fechadesde)
    {
        $this->fechadesde = $fechadesde;

        return $this;
    }

    /**
     * Get fechadesde.
     *
     * @return \DateTime
     */
    public function getFechadesde()
    {
        return $this->fechadesde;
    }

    /**
     * Set fechahasta.
     *
     * @param \DateTime|null $fechahasta
     *
     * @return Contribuyentes
     */
    public function setFechahasta($fechahasta = null)
    {
        $this->fechahasta = $fechahasta;

        return $this;
    }

    /**
     * Get fechahasta.
     *
     * @return \DateTime|null
     */
    public function getFechahasta()
    {
        return $this->fechahasta;
    }

    /**
     * Set createdAt.
     *
     * @param \DateTime|null $createdAt
     *
     * @return Contribuyentes
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
     * @return Contribuyentes
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
     * @return Contribuyentes
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
     * Set objetoimponible.
     *
     * @param \Siarme\GeneralBundle\Entity\Objetosimponibles|null $objetoimponible
     *
     * @return Contribuyentes
     */
    public function setObjetoimponible(\Siarme\GeneralBundle\Entity\Objetosimponibles $objetoimponible = null)
    {
        $this->objetoimponible = $objetoimponible;

        return $this;
    }

    /**
     * Get objetoimponible.
     *
     * @return \Siarme\GeneralBundle\Entity\Objetosimponibles|null
     */
    public function getObjetoimponible()
    {
        return $this->objetoimponible;
    }

    /**
     * Set persona.
     *
     * @param \Siarme\GeneralBundle\Entity\Personas|null $persona
     *
     * @return Contribuyentes
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
