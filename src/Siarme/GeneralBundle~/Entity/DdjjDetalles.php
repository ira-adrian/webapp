<?php


namespace Siarme\GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DdjjDetalles
 *
 * @ORM\Table(name="ddjj_detalles", indexes={@ORM\Index(name="ddjj_detalles_ddjj_id_foreign", columns={"ddjj_id"}), @ORM\Index(name="ddjj_detalles_actividad_id_foreign", columns={"actividad_id"})})
 * @ORM\Entity
 */
class DdjjDetalles
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
     * @ORM\Column(name="alicuota", type="decimal", precision=6, scale=4, nullable=false)
     */
    private $alicuota;

    /**
     * @var string
     *
     * @ORM\Column(name="monto", type="decimal", precision=13, scale=2, nullable=false)
     */
    private $monto;

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
     * @var \Actividades
     *
     * @ORM\ManyToOne(targetEntity="Actividades")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="actividad_id", referencedColumnName="id")
     * })
     */
    private $actividad;

    /**
     * @var \Ddjjs
     *
     * @ORM\ManyToOne(targetEntity="Ddjjs")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ddjj_id", referencedColumnName="id")
     * })
     */
    private $ddjj;



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
     * Set alicuota.
     *
     * @param string $alicuota
     *
     * @return DdjjDetalles
     */
    public function setAlicuota($alicuota)
    {
        $this->alicuota = $alicuota;

        return $this;
    }

    /**
     * Get alicuota.
     *
     * @return string
     */
    public function getAlicuota()
    {
        return $this->alicuota;
    }

    /**
     * Set monto.
     *
     * @param string $monto
     *
     * @return DdjjDetalles
     */
    public function setMonto($monto)
    {
        $this->monto = $monto;

        return $this;
    }

    /**
     * Get monto.
     *
     * @return string
     */
    public function getMonto()
    {
        return $this->monto;
    }

    /**
     * Set createdAt.
     *
     * @param \DateTime|null $createdAt
     *
     * @return DdjjDetalles
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
     * @return DdjjDetalles
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
     * @return DdjjDetalles
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
     * Set actividad.
     *
     * @param \Siarme\GeneralBundle\Entity\Actividades|null $actividad
     *
     * @return DdjjDetalles
     */
    public function setActividad(\Siarme\GeneralBundle\Entity\Actividades $actividad = null)
    {
        $this->actividad = $actividad;

        return $this;
    }

    /**
     * Get actividad.
     *
     * @return \Siarme\GeneralBundle\Entity\Actividades|null
     */
    public function getActividad()
    {
        return $this->actividad;
    }

    /**
     * Set ddjj.
     *
     * @param \Siarme\GeneralBundle\Entity\Ddjjs|null $ddjj
     *
     * @return DdjjDetalles
     */
    public function setDdjj(\Siarme\GeneralBundle\Entity\Ddjjs $ddjj = null)
    {
        $this->ddjj = $ddjj;

        return $this;
    }

    /**
     * Get ddjj.
     *
     * @return \Siarme\GeneralBundle\Entity\Ddjjs|null
     */
    public function getDdjj()
    {
        return $this->ddjj;
    }

   /*
   * ToString
   */
    public function __toString()
    {
         return   (string) $this->getId();
    }
}
