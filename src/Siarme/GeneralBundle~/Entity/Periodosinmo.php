<?php


namespace Siarme\GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Periodosinmo
 *
 * @ORM\Table(name="periodosinmo", indexes={@ORM\Index(name="periodosinmo_periodo_id_foreign", columns={"periodo_id"})})
 * @ORM\Entity
 */
class Periodosinmo
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
     * @var \DateTime
     *
     * @ORM\Column(name="fechaVencimiento", type="date", nullable=false)
     */
    private $fechavencimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="zona1", type="decimal", precision=13, scale=2, nullable=false)
     */
    private $zona1;

    /**
     * @var string
     *
     * @ORM\Column(name="zona2", type="decimal", precision=13, scale=2, nullable=false)
     */
    private $zona2;

    /**
     * @var string
     *
     * @ORM\Column(name="zona3", type="decimal", precision=13, scale=2, nullable=false)
     */
    private $zona3;

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
     * @var \Periodos
     *
     * @ORM\ManyToOne(targetEntity="Periodos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="periodo_id", referencedColumnName="id")
     * })
     */
    private $periodo;



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
     * Set fechavencimiento.
     *
     * @param \DateTime $fechavencimiento
     *
     * @return Periodosinmo
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
     * Set zona1.
     *
     * @param string $zona1
     *
     * @return Periodosinmo
     */
    public function setZona1($zona1)
    {
        $this->zona1 = $zona1;

        return $this;
    }

    /**
     * Get zona1.
     *
     * @return string
     */
    public function getZona1()
    {
        return $this->zona1;
    }

    /**
     * Set zona2.
     *
     * @param string $zona2
     *
     * @return Periodosinmo
     */
    public function setZona2($zona2)
    {
        $this->zona2 = $zona2;

        return $this;
    }

    /**
     * Get zona2.
     *
     * @return string
     */
    public function getZona2()
    {
        return $this->zona2;
    }

    /**
     * Set zona3.
     *
     * @param string $zona3
     *
     * @return Periodosinmo
     */
    public function setZona3($zona3)
    {
        $this->zona3 = $zona3;

        return $this;
    }

    /**
     * Get zona3.
     *
     * @return string
     */
    public function getZona3()
    {
        return $this->zona3;
    }

    /**
     * Set createdAt.
     *
     * @param \DateTime|null $createdAt
     *
     * @return Periodosinmo
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
     * @return Periodosinmo
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
     * @return Periodosinmo
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
     * Set periodo.
     *
     * @param \Siarme\GeneralBundle\Entity\Periodos|null $periodo
     *
     * @return Periodosinmo
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

   /*
   * ToString
   */
    public function __toString()
    {
         return   (string) $this->getId();
    }
}
