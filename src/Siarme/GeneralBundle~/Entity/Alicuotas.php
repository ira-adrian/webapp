<?php


namespace Siarme\GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Alicuotas
 *
 * @ORM\Table(name="alicuotas", indexes={@ORM\Index(name="alicuotas_hasta_id_foreign", columns={"hasta_id"}), @ORM\Index(name="alicuotas_actividad_id_foreign", columns={"actividad_id"}), @ORM\Index(name="alicuotas_desde_id_foreign", columns={"desde_id"})})
 * @ORM\Entity
 */
class Alicuotas
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
     * @ORM\Column(name="porcentaje", type="decimal", precision=6, scale=4, nullable=false)
     */
    private $porcentaje;

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
     * @var \Periodos
     *
     * @ORM\ManyToOne(targetEntity="Periodos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="hasta_id", referencedColumnName="id")
     * })
     */
    private $hasta;

    /**
     * @var \Periodos
     *
     * @ORM\ManyToOne(targetEntity="Periodos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="desde_id", referencedColumnName="id")
     * })
     */
    private $desde;



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
     * Set porcentaje.
     *
     * @param string $porcentaje
     *
     * @return Alicuotas
     */
    public function setPorcentaje($porcentaje)
    {
        $this->porcentaje = $porcentaje;

        return $this;
    }

    /**
     * Get porcentaje.
     *
     * @return string
     */
    public function getPorcentaje()
    {
        return $this->porcentaje;
    }

    /**
     * Set createdAt.
     *
     * @param \DateTime|null $createdAt
     *
     * @return Alicuotas
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
     * @return Alicuotas
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
     * @return Alicuotas
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
     * @return Alicuotas
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
     * Set hasta.
     *
     * @param \Siarme\GeneralBundle\Entity\Periodos|null $hasta
     *
     * @return Alicuotas
     */
    public function setHasta(\Siarme\GeneralBundle\Entity\Periodos $hasta = null)
    {
        $this->hasta = $hasta;

        return $this;
    }

    /**
     * Get hasta.
     *
     * @return \Siarme\GeneralBundle\Entity\Periodos|null
     */
    public function getHasta()
    {
        return $this->hasta;
    }

    /**
     * Set desde.
     *
     * @param \Siarme\GeneralBundle\Entity\Periodos|null $desde
     *
     * @return Alicuotas
     */
    public function setDesde(\Siarme\GeneralBundle\Entity\Periodos $desde = null)
    {
        $this->desde = $desde;

        return $this;
    }

    /**
     * Get desde.
     *
     * @return \Siarme\GeneralBundle\Entity\Periodos|null
     */
    public function getDesde()
    {
        return $this->desde;
    }

   /*
   * ToString
   */
    public function __toString()
    {
         return   (string) $this->getId();
    }
}
