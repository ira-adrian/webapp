<?php


namespace Siarme\GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Objetosimponibles
 *
 * @ORM\Table(name="objetosimponibles", indexes={@ORM\Index(name="objetosimponibles_tipoimpuesto_id_foreign", columns={"tipoImpuesto_id"})})
 * @ORM\Entity
 */
class Objetosimponibles
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
     * @ORM\Column(name="descripcion", type="string", length=191, nullable=false)
     */
    private $descripcion;

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
     * @var \Tiposimpuestos
     *
     * @ORM\ManyToOne(targetEntity="Tiposimpuestos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipoImpuesto_id", referencedColumnName="id")
     * })
     */
    private $tipoimpuesto;



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
     * Set descripcion.
     *
     * @param string $descripcion
     *
     * @return Objetosimponibles
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion.
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set createdAt.
     *
     * @param \DateTime|null $createdAt
     *
     * @return Objetosimponibles
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
     * @return Objetosimponibles
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
     * @return Objetosimponibles
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
     * Set tipoimpuesto.
     *
     * @param \Siarme\GeneralBundle\Entity\Tiposimpuestos|null $tipoimpuesto
     *
     * @return Objetosimponibles
     */
    public function setTipoimpuesto(\Siarme\GeneralBundle\Entity\Tiposimpuestos $tipoimpuesto = null)
    {
        $this->tipoimpuesto = $tipoimpuesto;

        return $this;
    }

    /**
     * Get tipoimpuesto.
     *
     * @return \Siarme\GeneralBundle\Entity\Tiposimpuestos|null
     */
    public function getTipoimpuesto()
    {
        return $this->tipoimpuesto;
    }

   /*
   * ToString
   */
    public function __toString()
    {
         return   (string) $this->getId();
    }
}
