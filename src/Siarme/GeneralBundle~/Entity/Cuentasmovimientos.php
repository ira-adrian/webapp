<?php


namespace Siarme\GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cuentasmovimientos
 *
 * @ORM\Table(name="cuentasmovimientos")
 * @ORM\Entity
 */
class Cuentasmovimientos
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
     * @var int
     *
     * @ORM\Column(name="referencia_id", type="integer", nullable=false)
     */
    private $referenciaId;

    /**
     * @var string
     *
     * @ORM\Column(name="concepto", type="string", length=191, nullable=false)
     */
    private $concepto;

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
     * @return Cuentasmovimientos
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
     * Set referenciaId.
     *
     * @param int $referenciaId
     *
     * @return Cuentasmovimientos
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
     * Set concepto.
     *
     * @param string $concepto
     *
     * @return Cuentasmovimientos
     */
    public function setConcepto($concepto)
    {
        $this->concepto = $concepto;

        return $this;
    }

    /**
     * Get concepto.
     *
     * @return string
     */
    public function getConcepto()
    {
        return $this->concepto;
    }

    /**
     * Set monto.
     *
     * @param string $monto
     *
     * @return Cuentasmovimientos
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
     * @return Cuentasmovimientos
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
     * @return Cuentasmovimientos
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
     * @return Cuentasmovimientos
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
