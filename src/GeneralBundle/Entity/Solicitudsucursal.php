<?php


namespace GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Solicitudsucursal
 *
 * @ORM\Table(name="solicitudsucursal", indexes={@ORM\Index(name="persona", columns={"PersonaSolicitud"})})
 * @ORM\Entity
 */
class Solicitudsucursal
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Denominacion", type="string", length=250, nullable=true)
     */
    private $denominacion;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="FechaAlta", type="date", nullable=true)
     */
    private $fechaalta;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MatriculaCatastral", type="string", length=200, nullable=true)
     */
    private $matriculacatastral;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="MatriculaVerificada", type="boolean", nullable=true)
     */
    private $matriculaverificada;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Barrio", type="string", length=100, nullable=true)
     */
    private $barrio;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NroCasa", type="bigint", nullable=true)
     */
    private $nrocasa;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Calle", type="string", length=150, nullable=true)
     */
    private $calle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NroCalle", type="string", length=150, nullable=true)
     */
    private $nrocalle;

    /**
     * @var int
     *
     * @ORM\Column(name="NroSucursal", type="integer", nullable=false)
     */
    private $nrosucursal;

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
     * @var string|null
     *
     * @ORM\Column(name="Long", type="string", length=250, nullable=true)
     */
    private $long;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Lat", type="string", length=250, nullable=true)
     */
    private $lat;

    /**
     * @var \Solicitudpersona
     *
     * @ORM\ManyToOne(targetEntity="Solicitudpersona")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="PersonaSolicitud", referencedColumnName="id")
     * })
     */
    private $personasolicitud;



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
     * @param string|null $denominacion
     *
     * @return Solicitudsucursal
     */
    public function setDenominacion($denominacion = null)
    {
        $this->denominacion = $denominacion;

        return $this;
    }

    /**
     * Get denominacion.
     *
     * @return string|null
     */
    public function getDenominacion()
    {
        return $this->denominacion;
    }

    /**
     * Set fechaalta.
     *
     * @param \DateTime|null $fechaalta
     *
     * @return Solicitudsucursal
     */
    public function setFechaalta($fechaalta = null)
    {
        $this->fechaalta = $fechaalta;

        return $this;
    }

    /**
     * Get fechaalta.
     *
     * @return \DateTime|null
     */
    public function getFechaalta()
    {
        return $this->fechaalta;
    }

    /**
     * Set matriculacatastral.
     *
     * @param string|null $matriculacatastral
     *
     * @return Solicitudsucursal
     */
    public function setMatriculacatastral($matriculacatastral = null)
    {
        $this->matriculacatastral = $matriculacatastral;

        return $this;
    }

    /**
     * Get matriculacatastral.
     *
     * @return string|null
     */
    public function getMatriculacatastral()
    {
        return $this->matriculacatastral;
    }

    /**
     * Set matriculaverificada.
     *
     * @param bool|null $matriculaverificada
     *
     * @return Solicitudsucursal
     */
    public function setMatriculaverificada($matriculaverificada = null)
    {
        $this->matriculaverificada = $matriculaverificada;

        return $this;
    }

    /**
     * Get matriculaverificada.
     *
     * @return bool|null
     */
    public function getMatriculaverificada()
    {
        return $this->matriculaverificada;
    }

    /**
     * Set barrio.
     *
     * @param string|null $barrio
     *
     * @return Solicitudsucursal
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
     * Set nrocasa.
     *
     * @param int|null $nrocasa
     *
     * @return Solicitudsucursal
     */
    public function setNrocasa($nrocasa = null)
    {
        $this->nrocasa = $nrocasa;

        return $this;
    }

    /**
     * Get nrocasa.
     *
     * @return int|null
     */
    public function getNrocasa()
    {
        return $this->nrocasa;
    }

    /**
     * Set calle.
     *
     * @param string|null $calle
     *
     * @return Solicitudsucursal
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
     * Set nrocalle.
     *
     * @param string|null $nrocalle
     *
     * @return Solicitudsucursal
     */
    public function setNrocalle($nrocalle = null)
    {
        $this->nrocalle = $nrocalle;

        return $this;
    }

    /**
     * Get nrocalle.
     *
     * @return string|null
     */
    public function getNrocalle()
    {
        return $this->nrocalle;
    }

    /**
     * Set nrosucursal.
     *
     * @param int $nrosucursal
     *
     * @return Solicitudsucursal
     */
    public function setNrosucursal($nrosucursal)
    {
        $this->nrosucursal = $nrosucursal;

        return $this;
    }

    /**
     * Get nrosucursal.
     *
     * @return int
     */
    public function getNrosucursal()
    {
        return $this->nrosucursal;
    }

    /**
     * Set createdAt.
     *
     * @param \DateTime|null $createdAt
     *
     * @return Solicitudsucursal
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
     * @return Solicitudsucursal
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
     * Set long.
     *
     * @param string|null $long
     *
     * @return Solicitudsucursal
     */
    public function setLong($long = null)
    {
        $this->long = $long;

        return $this;
    }

    /**
     * Get long.
     *
     * @return string|null
     */
    public function getLong()
    {
        return $this->long;
    }

    /**
     * Set lat.
     *
     * @param string|null $lat
     *
     * @return Solicitudsucursal
     */
    public function setLat($lat = null)
    {
        $this->lat = $lat;

        return $this;
    }

    /**
     * Get lat.
     *
     * @return string|null
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * Set personasolicitud.
     *
     * @param \GeneralBundle\Entity\Solicitudpersona|null $personasolicitud
     *
     * @return Solicitudsucursal
     */
    public function setPersonasolicitud(\GeneralBundle\Entity\Solicitudpersona $personasolicitud = null)
    {
        $this->personasolicitud = $personasolicitud;

        return $this;
    }

    /**
     * Get personasolicitud.
     *
     * @return \GeneralBundle\Entity\Solicitudpersona|null
     */
    public function getPersonasolicitud()
    {
        return $this->personasolicitud;
    }

   /*
   * ToString
   */
    public function __toString()
    {
         return   (string) $this->getId();
    }
}
