<?php


namespace Siarme\GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cuentascontribuyentes
 *
 * @ORM\Table(name="cuentascontribuyentes", indexes={@ORM\Index(name="cuentascontribuyentes_objetoimponible_id_foreign", columns={"objetoImponible_id"}), @ORM\Index(name="cuentascontribuyentes_tipomovimiento_id_foreign", columns={"tipoMovimiento_id"}), @ORM\Index(name="cuentascontribuyentes_persona_id_foreign", columns={"persona_id"}), @ORM\Index(name="cuentascontribuyentes_estadocuenta_id_foreign", columns={"estadoCuenta_id"}), @ORM\Index(name="cuentascontribuyentes_periodo_id_foreign", columns={"periodo_id"})})
 * @ORM\Entity
 */
class Cuentascontribuyentes
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
     * @ORM\Column(name="cuenta_id", type="integer", nullable=false)
     */
    private $cuentaId;

    /**
     * @var string
     *
     * @ORM\Column(name="debito", type="decimal", precision=13, scale=2, nullable=false)
     */
    private $debito;

    /**
     * @var string
     *
     * @ORM\Column(name="credito", type="decimal", precision=13, scale=2, nullable=false)
     */
    private $credito;

    /**
     * @var int|null
     *
     * @ORM\Column(name="referencia", type="bigint", nullable=true)
     */
    private $referencia;

    /**
     * @var int|null
     *
     * @ORM\Column(name="historialcaja_id", type="bigint", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $historialcajaId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="observaciones", type="string", length=255, nullable=true)
     */
    private $observaciones;

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
     * @var \Estadoscuentas
     *
     * @ORM\ManyToOne(targetEntity="Estadoscuentas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="estadoCuenta_id", referencedColumnName="id")
     * })
     */
    private $estadocuenta;

    /**
     * @var \Periodos
     *
     * @ORM\ManyToOne(targetEntity="Periodos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="periodo_id", referencedColumnName="id")
     * })
     */
    private $periodo;

    /**
     * @var \Tiposmovimientos
     *
     * @ORM\ManyToOne(targetEntity="Tiposmovimientos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipoMovimiento_id", referencedColumnName="id")
     * })
     */
    private $tipomovimiento;

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
     * Set cuentaId.
     *
     * @param int $cuentaId
     *
     * @return Cuentascontribuyentes
     */
    public function setCuentaId($cuentaId)
    {
        $this->cuentaId = $cuentaId;

        return $this;
    }

    /**
     * Get cuentaId.
     *
     * @return int
     */
    public function getCuentaId()
    {
        return $this->cuentaId;
    }

    /**
     * Set debito.
     *
     * @param string $debito
     *
     * @return Cuentascontribuyentes
     */
    public function setDebito($debito)
    {
        $this->debito = $debito;

        return $this;
    }

    /**
     * Get debito.
     *
     * @return string
     */
    public function getDebito()
    {
        return $this->debito;
    }

    /**
     * Set credito.
     *
     * @param string $credito
     *
     * @return Cuentascontribuyentes
     */
    public function setCredito($credito)
    {
        $this->credito = $credito;

        return $this;
    }

    /**
     * Get credito.
     *
     * @return string
     */
    public function getCredito()
    {
        return $this->credito;
    }

    /**
     * Set referencia.
     *
     * @param int|null $referencia
     *
     * @return Cuentascontribuyentes
     */
    public function setReferencia($referencia = null)
    {
        $this->referencia = $referencia;

        return $this;
    }

    /**
     * Get referencia.
     *
     * @return int|null
     */
    public function getReferencia()
    {
        return $this->referencia;
    }

    /**
     * Set historialcajaId.
     *
     * @param int|null $historialcajaId
     *
     * @return Cuentascontribuyentes
     */
    public function setHistorialcajaId($historialcajaId = null)
    {
        $this->historialcajaId = $historialcajaId;

        return $this;
    }

    /**
     * Get historialcajaId.
     *
     * @return int|null
     */
    public function getHistorialcajaId()
    {
        return $this->historialcajaId;
    }

    /**
     * Set observaciones.
     *
     * @param string|null $observaciones
     *
     * @return Cuentascontribuyentes
     */
    public function setObservaciones($observaciones = null)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones.
     *
     * @return string|null
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Set createdAt.
     *
     * @param \DateTime|null $createdAt
     *
     * @return Cuentascontribuyentes
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
     * @return Cuentascontribuyentes
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
     * @return Cuentascontribuyentes
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
     * Set estadocuenta.
     *
     * @param \Siarme\GeneralBundle\Entity\Estadoscuentas|null $estadocuenta
     *
     * @return Cuentascontribuyentes
     */
    public function setEstadocuenta(\Siarme\GeneralBundle\Entity\Estadoscuentas $estadocuenta = null)
    {
        $this->estadocuenta = $estadocuenta;

        return $this;
    }

    /**
     * Get estadocuenta.
     *
     * @return \Siarme\GeneralBundle\Entity\Estadoscuentas|null
     */
    public function getEstadocuenta()
    {
        return $this->estadocuenta;
    }

    /**
     * Set periodo.
     *
     * @param \Siarme\GeneralBundle\Entity\Periodos|null $periodo
     *
     * @return Cuentascontribuyentes
     */
    public function setPeriodo(\Siarme\GeneralBundle\Entity\Periodos $periodo = null)
    {
        $this->periodo = $periodo;

        return $this;
    }

    /**
     * Get periodo.
     *
     * @return \Siarme\GeneralBundle\Entity\Periodos|null
     */
    public function getPeriodo()
    {
        return $this->periodo;
    }

    /**
     * Set tipomovimiento.
     *
     * @param \Siarme\GeneralBundle\Entity\Tiposmovimientos|null $tipomovimiento
     *
     * @return Cuentascontribuyentes
     */
    public function setTipomovimiento(\Siarme\GeneralBundle\Entity\Tiposmovimientos $tipomovimiento = null)
    {
        $this->tipomovimiento = $tipomovimiento;

        return $this;
    }

    /**
     * Get tipomovimiento.
     *
     * @return \Siarme\GeneralBundle\Entity\Tiposmovimientos|null
     */
    public function getTipomovimiento()
    {
        return $this->tipomovimiento;
    }

    /**
     * Set objetoimponible.
     *
     * @param \Siarme\GeneralBundle\Entity\Objetosimponibles|null $objetoimponible
     *
     * @return Cuentascontribuyentes
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
     * @return Cuentascontribuyentes
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
