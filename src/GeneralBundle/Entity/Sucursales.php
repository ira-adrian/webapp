<?php


namespace GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sucursales
 *
 * @ORM\Table(name="sucursales", indexes={@ORM\Index(name="sucursales_persona_id_foreign", columns={"persona_id"})})
 * @ORM\Entity
 */
class Sucursales
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
     * @ORM\Column(name="denominacion", type="string", length=191, nullable=false)
     */
    private $denominacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaAlta", type="date", nullable=false)
     */
    private $fechaalta;

    /**
     * @var string
     *
     * @ORM\Column(name="matriculaCatastral", type="string", length=191, nullable=false)
     */
    private $matriculacatastral;

    /**
     * @var bool
     *
     * @ORM\Column(name="matriculaVerificada", type="boolean", nullable=false)
     */
    private $matriculaverificada = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="calle", type="string", length=191, nullable=true)
     */
    private $calle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="numeroCalle", type="string", length=191, nullable=true)
     */
    private $numerocalle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="barrio", type="string", length=191, nullable=true)
     */
    private $barrio;

    /**
     * @var string|null
     *
     * @ORM\Column(name="numeroCasa", type="string", length=191, nullable=true)
     */
    private $numerocasa;

    /**
     * @var string
     *
     * @ORM\Column(name="numeroSucursal", type="string", length=191, nullable=false)
     */
    private $numerosucursal;

    /**
     * @var string
     *
     * @ORM\Column(name="longitud", type="string", length=191, nullable=false)
     */
    private $longitud;

    /**
     * @var string
     *
     * @ORM\Column(name="latitud", type="string", length=191, nullable=false)
     */
    private $latitud;

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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Actividades", mappedBy="sucursal")
     */
    private $actividad = array();

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->actividad = new \Doctrine\Common\Collections\ArrayCollection();
    }


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
     * Set denominacion.
     *
     * @param string $denominacion
     *
     * @return Sucursales
     */
    public function setDenominacion($denominacion)
    {
        $this->denominacion = $denominacion;

        return $this;
    }

    /**
     * Get denominacion.
     *
     * @return string
     */
    public function getDenominacion()
    {
        return $this->denominacion;
    }

    /**
     * Set fechaalta.
     *
     * @param \DateTime $fechaalta
     *
     * @return Sucursales
     */
    public function setFechaalta($fechaalta)
    {
        $this->fechaalta = $fechaalta;

        return $this;
    }

    /**
     * Get fechaalta.
     *
     * @return \DateTime
     */
    public function getFechaalta()
    {
        return $this->fechaalta;
    }

    /**
     * Set matriculacatastral.
     *
     * @param string $matriculacatastral
     *
     * @return Sucursales
     */
    public function setMatriculacatastral($matriculacatastral)
    {
        $this->matriculacatastral = $matriculacatastral;

        return $this;
    }

    /**
     * Get matriculacatastral.
     *
     * @return string
     */
    public function getMatriculacatastral()
    {
        return $this->matriculacatastral;
    }

    /**
     * Set matriculaverificada.
     *
     * @param bool $matriculaverificada
     *
     * @return Sucursales
     */
    public function setMatriculaverificada($matriculaverificada)
    {
        $this->matriculaverificada = $matriculaverificada;

        return $this;
    }

    /**
     * Get matriculaverificada.
     *
     * @return bool
     */
    public function getMatriculaverificada()
    {
        return $this->matriculaverificada;
    }

    /**
     * Set calle.
     *
     * @param string|null $calle
     *
     * @return Sucursales
     */
    public function setCalle($calle = null)
    {
        $this->calle = $calle;

        return $this;
    }

    /**
     * Get calle.
     *
     * @return string|null
     */
    public function getCalle()
    {
        return $this->calle;
    }

    /**
     * Set numerocalle.
     *
     * @param string|null $numerocalle
     *
     * @return Sucursales
     */
    public function setNumerocalle($numerocalle = null)
    {
        $this->numerocalle = $numerocalle;

        return $this;
    }

    /**
     * Get numerocalle.
     *
     * @return string|null
     */
    public function getNumerocalle()
    {
        return $this->numerocalle;
    }

    /**
     * Set barrio.
     *
     * @param string|null $barrio
     *
     * @return Sucursales
     */
    public function setBarrio($barrio = null)
    {
        $this->barrio = $barrio;

        return $this;
    }

    /**
     * Get barrio.
     *
     * @return string|null
     */
    public function getBarrio()
    {
        return $this->barrio;
    }

    /**
     * Set numerocasa.
     *
     * @param string|null $numerocasa
     *
     * @return Sucursales
     */
    public function setNumerocasa($numerocasa = null)
    {
        $this->numerocasa = $numerocasa;

        return $this;
    }

    /**
     * Get numerocasa.
     *
     * @return string|null
     */
    public function getNumerocasa()
    {
        return $this->numerocasa;
    }

    /**
     * Set numerosucursal.
     *
     * @param string $numerosucursal
     *
     * @return Sucursales
     */
    public function setNumerosucursal($numerosucursal)
    {
        $this->numerosucursal = $numerosucursal;

        return $this;
    }

    /**
     * Get numerosucursal.
     *
     * @return string
     */
    public function getNumerosucursal()
    {
        return $this->numerosucursal;
    }

    /**
     * Set longitud.
     *
     * @param string $longitud
     *
     * @return Sucursales
     */
    public function setLongitud($longitud)
    {
        $this->longitud = $longitud;

        return $this;
    }

    /**
     * Get longitud.
     *
     * @return string
     */
    public function getLongitud()
    {
        return $this->longitud;
    }

    /**
     * Set latitud.
     *
     * @param string $latitud
     *
     * @return Sucursales
     */
    public function setLatitud($latitud)
    {
        $this->latitud = $latitud;

        return $this;
    }

    /**
     * Get latitud.
     *
     * @return string
     */
    public function getLatitud()
    {
        return $this->latitud;
    }

    /**
     * Set createdAt.
     *
     * @param \DateTime|null $createdAt
     *
     * @return Sucursales
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
     * @return Sucursales
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
     * @return Sucursales
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
     * @param \GeneralBundle\Entity\Personas|null $persona
     *
     * @return Sucursales
     */
    public function setPersona(\GeneralBundle\Entity\Personas $persona = null)
    {
        $this->persona = $persona;

        return $this;
    }

    /**
     * Get persona.
     *
     * @return \GeneralBundle\Entity\Personas|null
     */
    public function getPersona()
    {
        return $this->persona;
    }

    /**
     * Add actividad.
     *
     * @param \GeneralBundle\Entity\Actividades $actividad
     *
     * @return Sucursales
     */
    public function addActividad(\GeneralBundle\Entity\Actividades $actividad)
    {
        $this->actividad[] = $actividad;

        return $this;
    }

    /**
     * Remove actividad.
     *
     * @param \GeneralBundle\Entity\Actividades $actividad
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeActividad(\GeneralBundle\Entity\Actividades $actividad)
    {
        return $this->actividad->removeElement($actividad);
    }

    /**
     * Get actividad.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getActividad()
    {
        return $this->actividad;
    }

   /*
   * ToString
   */
    public function __toString()
    {
         return   (string) $this->getId();
    }
}
