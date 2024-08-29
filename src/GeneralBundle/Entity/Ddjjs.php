<?php


namespace GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ddjjs
 *
 * @ORM\Table(name="ddjjs", indexes={@ORM\Index(name="ddjjs_estado_id_foreign", columns={"estado_id"}), @ORM\Index(name="ddjjs_contribuyente_id_foreign", columns={"contribuyente_id"}), @ORM\Index(name="ddjjs_periodo_id_foreign", columns={"periodo_id"})})
 * @ORM\Entity
 */
class Ddjjs
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
     * @var string|null
     *
     * @ORM\Column(name="monto", type="decimal", precision=13, scale=2, nullable=true)
     */
    private $monto;

    /**
     * @var string
     *
     * @ORM\Column(name="hash", type="string", length=191, nullable=false)
     */
    private $hash;

    /**
     * @var bool
     *
     * @ORM\Column(name="version", type="boolean", nullable=false)
     */
    private $version = '0';

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
     * @var \Contribuyentes
     *
     * @ORM\ManyToOne(targetEntity="Contribuyentes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="contribuyente_id", referencedColumnName="id")
     * })
     */
    private $contribuyente;

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
     * @var \DdjjsEstados
     *
     * @ORM\ManyToOne(targetEntity="DdjjsEstados")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="estado_id", referencedColumnName="id")
     * })
     */
    private $estado;



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
     * Set monto.
     *
     * @param string|null $monto
     *
     * @return Ddjjs
     */
    public function setMonto($monto = null)
    {
        $this->monto = $monto;

        return $this;
    }

    /**
     * Get monto.
     *
     * @return string|null
     */
    public function getMonto()
    {
        return $this->monto;
    }

    /**
     * Set hash.
     *
     * @param string $hash
     *
     * @return Ddjjs
     */
    public function setHash($hash)
    {
        $this->hash = $hash;

        return $this;
    }

    /**
     * Get hash.
     *
     * @return string
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * Set version.
     *
     * @param bool $version
     *
     * @return Ddjjs
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get version.
     *
     * @return bool
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set createdAt.
     *
     * @param \DateTime|null $createdAt
     *
     * @return Ddjjs
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
     * @return Ddjjs
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
     * @return Ddjjs
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
     * Set contribuyente.
     *
     * @param \GeneralBundle\Entity\Contribuyentes|null $contribuyente
     *
     * @return Ddjjs
     */
    public function setContribuyente(\GeneralBundle\Entity\Contribuyentes $contribuyente = null)
    {
        $this->contribuyente = $contribuyente;

        return $this;
    }

    /**
     * Get contribuyente.
     *
     * @return \GeneralBundle\Entity\Contribuyentes|null
     */
    public function getContribuyente()
    {
        return $this->contribuyente;
    }

    /**
     * Set periodo.
     *
     * @param \GeneralBundle\Entity\Periodos|null $periodo
     *
     * @return Ddjjs
     */
    public function setPeriodo(\GeneralBundle\Entity\Periodos $periodo = null)
    {
        $this->periodo = $periodo;

        return $this;
    }

    /**
     * Get periodo.
     *
     * @return \GeneralBundle\Entity\Periodos|null
     */
    public function getPeriodo()
    {
        return $this->periodo;
    }

    /**
     * Set estado.
     *
     * @param \GeneralBundle\Entity\DdjjsEstados|null $estado
     *
     * @return Ddjjs
     */
    public function setEstado(\GeneralBundle\Entity\DdjjsEstados $estado = null)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado.
     *
     * @return \GeneralBundle\Entity\DdjjsEstados|null
     */
    public function getEstado()
    {
        return $this->estado;
    }

   /*
   * ToString
   */
    public function __toString()
    {
         return   (string) $this->getId();
    }
}
