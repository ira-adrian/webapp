<?php


namespace GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Coeficientesinmo
 *
 * @ORM\Table(name="coeficientesinmo")
 * @ORM\Entity
 */
class Coeficientesinmo
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="interes", type="decimal", precision=13, scale=2, nullable=false)
     */
    private $interes;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaDesde", type="date", nullable=false)
     */
    private $fechadesde;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fechaHasta", type="date", nullable=true)
     */
    private $fechahasta;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=false)
     */
    private $updatedAt ;



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
     * Set interes.
     *
     * @param string $interes
     *
     * @return Coeficientesinmo
     */
    public function setInteres($interes)
    {
        $this->interes = $interes;

        return $this;
    }

    /**
     * Get interes.
     *
     * @return string
     */
    public function getInteres()
    {
        return $this->interes;
    }

    /**
     * Set fechadesde.
     *
     * @param \DateTime $fechadesde
     *
     * @return Coeficientesinmo
     */
    public function setFechadesde($fechadesde)
    {
        $this->fechadesde = $fechadesde;

        return $this;
    }

    /**
     * Get fechadesde.
     *
     * @return \DateTime
     */
    public function getFechadesde()
    {
        return $this->fechadesde;
    }

    /**
     * Set fechahasta.
     *
     * @param \DateTime|null $fechahasta
     *
     * @return Coeficientesinmo
     */
    public function setFechahasta($fechahasta = null)
    {
        $this->fechahasta = $fechahasta;

        return $this;
    }

    /**
     * Get fechahasta.
     *
     * @return \DateTime|null
     */
    public function getFechahasta()
    {
        return $this->fechahasta;
    }

    /**
     * Set createdAt.
     *
     * @param \DateTime $createdAt
     *
     * @return Coeficientesinmo
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt.
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt.
     *
     * @param \DateTime $updatedAt
     *
     * @return Coeficientesinmo
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt.
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

   /*
   * ToString
   */
    public function __toString()
    {
         return   (string) $this->getId();
    }
}
