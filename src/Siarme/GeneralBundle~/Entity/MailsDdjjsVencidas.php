<?php


namespace Siarme\GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MailsDdjjsVencidas
 *
 * @ORM\Table(name="mails_ddjjs_vencidas", indexes={@ORM\Index(name="mails_ddjjs_vencidas_periodo_id_foreign", columns={"periodo_id"}), @ORM\Index(name="mails_ddjjs_vencidas_persona_id_foreign", columns={"persona_id"})})
 * @ORM\Entity
 */
class MailsDdjjsVencidas
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
     * @var string
     *
     * @ORM\Column(name="datos", type="text", length=0, nullable=false)
     */
    private $datos;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="enviado", type="datetime", nullable=true)
     */
    private $enviado;

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
     * Set datos.
     *
     * @param string $datos
     *
     * @return MailsDdjjsVencidas
     */
    public function setDatos($datos)
    {
        $this->datos = $datos;

        return $this;
    }

    /**
     * Get datos.
     *
     * @return string
     */
    public function getDatos()
    {
        return $this->datos;
    }

    /**
     * Set enviado.
     *
     * @param \DateTime|null $enviado
     *
     * @return MailsDdjjsVencidas
     */
    public function setEnviado($enviado = null)
    {
        $this->enviado = $enviado;

        return $this;
    }

    /**
     * Get enviado.
     *
     * @return \DateTime|null
     */
    public function getEnviado()
    {
        return $this->enviado;
    }

    /**
     * Set createdAt.
     *
     * @param \DateTime|null $createdAt
     *
     * @return MailsDdjjsVencidas
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
     * @return MailsDdjjsVencidas
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
     * @return MailsDdjjsVencidas
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
     * @return MailsDdjjsVencidas
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
     * Set persona.
     *
     * @param \Siarme\GeneralBundle\Entity\Personas|null $persona
     *
     * @return MailsDdjjsVencidas
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
