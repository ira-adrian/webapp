<?php


namespace Siarme\GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HistorialCajas
 *
 * @ORM\Table(name="historial_cajas")
 * @ORM\Entity
 */
class HistorialCajas
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
     * @ORM\Column(name="objetoImponible_id", type="bigint", nullable=false, options={"unsigned"=true})
     */
    private $objetoimponibleId;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="bigint", nullable=false, options={"unsigned"=true})
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="montoPagado", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $montopagado;

    /**
     * @var string
     *
     * @ORM\Column(name="montoNeto", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $montoneto;

    /**
     * @var int
     *
     * @ORM\Column(name="tipomovimiento_id", type="bigint", nullable=false, options={"unsigned"=true})
     */
    private $tipomovimientoId;

    /**
     * @var int
     *
     * @ORM\Column(name="tipofondo_id", type="bigint", nullable=false, options={"unsigned"=true})
     */
    private $tipofondoId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="detalle", type="string", length=191, nullable=true)
     */
    private $detalle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="referencia", type="string", length=191, nullable=true)
     */
    private $referencia;

    /**
     * @var string|null
     *
     * @ORM\Column(name="motivo_exencion", type="string", length=250, nullable=true)
     */
    private $motivoExencion;

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
     * Set objetoimponibleId.
     *
     * @param int $objetoimponibleId
     *
     * @return HistorialCajas
     */
    public function setObjetoimponibleId($objetoimponibleId)
    {
        $this->objetoimponibleId = $objetoimponibleId;

        return $this;
    }

    /**
     * Get objetoimponibleId.
     *
     * @return int
     */
    public function getObjetoimponibleId()
    {
        return $this->objetoimponibleId;
    }

    /**
     * Set userId.
     *
     * @param int $userId
     *
     * @return HistorialCajas
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId.
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set montopagado.
     *
     * @param string $montopagado
     *
     * @return HistorialCajas
     */
    public function setMontopagado($montopagado)
    {
        $this->montopagado = $montopagado;

        return $this;
    }

    /**
     * Get montopagado.
     *
     * @return string
     */
    public function getMontopagado()
    {
        return $this->montopagado;
    }

    /**
     * Set montoneto.
     *
     * @param string $montoneto
     *
     * @return HistorialCajas
     */
    public function setMontoneto($montoneto)
    {
        $this->montoneto = $montoneto;

        return $this;
    }

    /**
     * Get montoneto.
     *
     * @return string
     */
    public function getMontoneto()
    {
        return $this->montoneto;
    }

    /**
     * Set tipomovimientoId.
     *
     * @param int $tipomovimientoId
     *
     * @return HistorialCajas
     */
    public function setTipomovimientoId($tipomovimientoId)
    {
        $this->tipomovimientoId = $tipomovimientoId;

        return $this;
    }

    /**
     * Get tipomovimientoId.
     *
     * @return int
     */
    public function getTipomovimientoId()
    {
        return $this->tipomovimientoId;
    }

    /**
     * Set tipofondoId.
     *
     * @param int $tipofondoId
     *
     * @return HistorialCajas
     */
    public function setTipofondoId($tipofondoId)
    {
        $this->tipofondoId = $tipofondoId;

        return $this;
    }

    /**
     * Get tipofondoId.
     *
     * @return int
     */
    public function getTipofondoId()
    {
        return $this->tipofondoId;
    }

    /**
     * Set detalle.
     *
     * @param string|null $detalle
     *
     * @return HistorialCajas
     */
    public function setDetalle($detalle = null)
    {
        $this->detalle = $detalle;

        return $this;
    }

    /**
     * Get detalle.
     *
     * @return string|null
     */
    public function getDetalle()
    {
        return $this->detalle;
    }

    /**
     * Set referencia.
     *
     * @param string|null $referencia
     *
     * @return HistorialCajas
     */
    public function setReferencia($referencia = null)
    {
        $this->referencia = $referencia;

        return $this;
    }

    /**
     * Get referencia.
     *
     * @return string|null
     */
    public function getReferencia()
    {
        return $this->referencia;
    }

    /**
     * Set motivoExencion.
     *
     * @param string|null $motivoExencion
     *
     * @return HistorialCajas
     */
    public function setMotivoExencion($motivoExencion = null)
    {
        $this->motivoExencion = $motivoExencion;

        return $this;
    }

    /**
     * Get motivoExencion.
     *
     * @return string|null
     */
    public function getMotivoExencion()
    {
        return $this->motivoExencion;
    }

    /**
     * Set createdAt.
     *
     * @param \DateTime|null $createdAt
     *
     * @return HistorialCajas
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
     * @return HistorialCajas
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
     * @return HistorialCajas
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
