<?php


namespace GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Referencias
 *
 * @ORM\Table(name="referencias")
 * @ORM\Entity
 */
class Referencias
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
     * @ORM\Column(name="referencia_id", type="integer", nullable=false)
     */
    private $referenciaId;

    /**
     * @var string
     *
     * @ORM\Column(name="montoCobrado", type="decimal", precision=13, scale=2, nullable=false)
     */
    private $montocobrado;

    /**
     * @var string|null
     *
     * @ORM\Column(name="montoPagado", type="decimal", precision=13, scale=2, nullable=true)
     */
    private $montopagado;

    /**
     * @var string|null
     *
     * @ORM\Column(name="montoNeto", type="decimal", precision=13, scale=2, nullable=true)
     */
    private $montoneto;

    /**
     * @var string
     *
     * @ORM\Column(name="referencia", type="string", length=191, nullable=false)
     */
    private $referencia;

    /**
     * @var string|null
     *
     * @ORM\Column(name="matriculaLibreDeuda", type="string", length=191, nullable=true)
     */
    private $matriculalibredeuda;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaGeneracion", type="datetime", nullable=false)
     */
    private $fechageneracion ;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaVencimiento", type="datetime", nullable=false)
     */
    private $fechavencimiento ;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fechaPago", type="datetime", nullable=true)
     */
    private $fechapago;

    /**
     * @var string|null
     *
     * @ORM\Column(name="medioPago", type="string", length=191, nullable=true)
     */
    private $mediopago;

    /**
     * @var string|null
     *
     * @ORM\Column(name="detalleMedioPago", type="string", length=191, nullable=true)
     */
    private $detallemediopago;

    /**
     * @var bool
     *
     * @ORM\Column(name="pagado", type="boolean", nullable=false)
     */
    private $pagado;

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
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set referenciaId.
     *
     * @param int $referenciaId
     *
     * @return Referencias
     */
    public function setReferenciaId($referenciaId)
    {
        $this->referenciaId = $referenciaId;

        return $this;
    }

    /**
     * Get referenciaId.
     *
     * @return int
     */
    public function getReferenciaId()
    {
        return $this->referenciaId;
    }

    /**
     * Set montocobrado.
     *
     * @param string $montocobrado
     *
     * @return Referencias
     */
    public function setMontocobrado($montocobrado)
    {
        $this->montocobrado = $montocobrado;

        return $this;
    }

    /**
     * Get montocobrado.
     *
     * @return string
     */
    public function getMontocobrado()
    {
        return $this->montocobrado;
    }

    /**
     * Set montopagado.
     *
     * @param string|null $montopagado
     *
     * @return Referencias
     */
    public function setMontopagado($montopagado = null)
    {
        $this->montopagado = $montopagado;

        return $this;
    }

    /**
     * Get montopagado.
     *
     * @return string|null
     */
    public function getMontopagado()
    {
        return $this->montopagado;
    }

    /**
     * Set montoneto.
     *
     * @param string|null $montoneto
     *
     * @return Referencias
     */
    public function setMontoneto($montoneto = null)
    {
        $this->montoneto = $montoneto;

        return $this;
    }

    /**
     * Get montoneto.
     *
     * @return string|null
     */
    public function getMontoneto()
    {
        return $this->montoneto;
    }

    /**
     * Set referencia.
     *
     * @param string $referencia
     *
     * @return Referencias
     */
    public function setReferencia($referencia)
    {
        $this->referencia = $referencia;

        return $this;
    }

    /**
     * Get referencia.
     *
     * @return string
     */
    public function getReferencia()
    {
        return $this->referencia;
    }

    /**
     * Set matriculalibredeuda.
     *
     * @param string|null $matriculalibredeuda
     *
     * @return Referencias
     */
    public function setMatriculalibredeuda($matriculalibredeuda = null)
    {
        $this->matriculalibredeuda = $matriculalibredeuda;

        return $this;
    }

    /**
     * Get matriculalibredeuda.
     *
     * @return string|null
     */
    public function getMatriculalibredeuda()
    {
        return $this->matriculalibredeuda;
    }

    /**
     * Set fechageneracion.
     *
     * @param \DateTime $fechageneracion
     *
     * @return Referencias
     */
    public function setFechageneracion($fechageneracion)
    {
        $this->fechageneracion = $fechageneracion;

        return $this;
    }

    /**
     * Get fechageneracion.
     *
     * @return \DateTime
     */
    public function getFechageneracion()
    {
        return $this->fechageneracion;
    }

    /**
     * Set fechavencimiento.
     *
     * @param \DateTime $fechavencimiento
     *
     * @return Referencias
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
     * Set fechapago.
     *
     * @param \DateTime|null $fechapago
     *
     * @return Referencias
     */
    public function setFechapago($fechapago = null)
    {
        $this->fechapago = $fechapago;

        return $this;
    }

    /**
     * Get fechapago.
     *
     * @return \DateTime|null
     */
    public function getFechapago()
    {
        return $this->fechapago;
    }

    /**
     * Set mediopago.
     *
     * @param string|null $mediopago
     *
     * @return Referencias
     */
    public function setMediopago($mediopago = null)
    {
        $this->mediopago = $mediopago;

        return $this;
    }

    /**
     * Get mediopago.
     *
     * @return string|null
     */
    public function getMediopago()
    {
        return $this->mediopago;
    }

    /**
     * Set detallemediopago.
     *
     * @param string|null $detallemediopago
     *
     * @return Referencias
     */
    public function setDetallemediopago($detallemediopago = null)
    {
        $this->detallemediopago = $detallemediopago;

        return $this;
    }

    /**
     * Get detallemediopago.
     *
     * @return string|null
     */
    public function getDetallemediopago()
    {
        return $this->detallemediopago;
    }

    /**
     * Set pagado.
     *
     * @param bool $pagado
     *
     * @return Referencias
     */
    public function setPagado($pagado)
    {
        $this->pagado = $pagado;

        return $this;
    }

    /**
     * Get pagado.
     *
     * @return bool
     */
    public function getPagado()
    {
        return $this->pagado;
    }

    /**
     * Set createdAt.
     *
     * @param \DateTime|null $createdAt
     *
     * @return Referencias
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
     * @return Referencias
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
     * @return Referencias
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

   /*
   * ToString
   */
    public function __toString()
    {
         return   (string) $this->getId();
    }
}
