<?php


namespace GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SolicitudActividadSucursal
 *
 * @ORM\Table(name="solicitud_actividad_sucursal")
 * @ORM\Entity
 */
class SolicitudActividadSucursal
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Actividad", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idActividad;

    /**
     * @var int
     *
     * @ORM\Column(name="Id_Sucursal", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idSucursal;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="FechaAlta", type="date", nullable=true)
     */
    private $fechaalta;



    /**
     * Set idActividad.
     *
     * @param int $idActividad
     *
     * @return SolicitudActividadSucursal
     */
    public function setIdActividad($idActividad)
    {
        $this->idActividad = $idActividad;

        return $this;
    }

    /**
     * Get idActividad.
     *
     * @return int
     */
    public function getIdActividad()
    {
        return $this->idActividad;
    }

    /**
     * Set idSucursal.
     *
     * @param int $idSucursal
     *
     * @return SolicitudActividadSucursal
     */
    public function setIdSucursal($idSucursal)
    {
        $this->idSucursal = $idSucursal;

        return $this;
    }

    /**
     * Get idSucursal.
     *
     * @return int
     */
    public function getIdSucursal()
    {
        return $this->idSucursal;
    }

    /**
     * Set fechaalta.
     *
     * @param \DateTime|null $fechaalta
     *
     * @return SolicitudActividadSucursal
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

   /*
   * ToString
   */
    public function __toString()
    {
         return   (string) $this->getId();
    }
}
