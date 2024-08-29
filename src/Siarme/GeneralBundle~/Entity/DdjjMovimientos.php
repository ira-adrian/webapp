<?php


namespace Siarme\GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DdjjMovimientos
 *
 * @ORM\Table(name="ddjj_movimientos", indexes={@ORM\Index(name="ddjj_movimientos_estado_id_foreign", columns={"estado_id"}), @ORM\Index(name="ddjj_movimientos_ddjj_id_foreign", columns={"ddjj_id"}), @ORM\Index(name="ddjj_movimientos_persona_id_foreign", columns={"persona_id"})})
 * @ORM\Entity
 */
class DdjjMovimientos
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
     * @var \Ddjjs
     *
     * @ORM\ManyToOne(targetEntity="Ddjjs")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ddjj_id", referencedColumnName="id")
     * })
     */
    private $ddjj;

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
     * Set createdAt.
     *
     * @param \DateTime|null $createdAt
     *
     * @return DdjjMovimientos
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
     * @return DdjjMovimientos
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
     * @return DdjjMovimientos
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
     * Set ddjj.
     *
     * @param \Siarme\GeneralBundle\Entity\Ddjjs|null $ddjj
     *
     * @return DdjjMovimientos
     */
    public function setDdjj(\Siarme\GeneralBundle\Entity\Ddjjs $ddjj = null)
    {
        $this->ddjj = $ddjj;

        return $this;
    }

    /**
     * Get ddjj.
     *
     * @return \Siarme\GeneralBundle\Entity\Ddjjs|null
     */
    public function getDdjj()
    {
        return $this->ddjj;
    }

    /**
     * Set persona.
     *
     * @param \Siarme\GeneralBundle\Entity\Personas|null $persona
     *
     * @return DdjjMovimientos
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

    /**
     * Set estado.
     *
     * @param \Siarme\GeneralBundle\Entity\DdjjsEstados|null $estado
     *
     * @return DdjjMovimientos
     */
    public function setEstado(\Siarme\GeneralBundle\Entity\DdjjsEstados $estado = null)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado.
     *
     * @return \Siarme\GeneralBundle\Entity\DdjjsEstados|null
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
