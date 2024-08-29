<?php


namespace Siarme\GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CuentaAuditorias
 *
 * @ORM\Table(name="cuenta_auditorias", indexes={@ORM\Index(name="cuenta_auditorias_users_id_foreign", columns={"usuario_id"}), @ORM\Index(name="cuenta_auditorias_cuentasContribuyentes_id_foreign", columns={"cuentaContribuyente_id"})})
 * @ORM\Entity
 */
class CuentaAuditorias
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="comentario", type="string", length=191, nullable=false)
     */
    private $comentario;

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
     * @var \Cuentascontribuyentes
     *
     * @ORM\ManyToOne(targetEntity="Cuentascontribuyentes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cuentaContribuyente_id", referencedColumnName="id")
     * })
     */
    private $cuentacontribuyente;

    /**
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usuario_id", referencedColumnName="id")
     * })
     */
    private $usuario;



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
     * Set comentario.
     *
     * @param string $comentario
     *
     * @return CuentaAuditorias
     */
    public function setComentario($comentario)
    {
        $this->comentario = $comentario;

        return $this;
    }

    /**
     * Get comentario.
     *
     * @return string
     */
    public function getComentario()
    {
        return $this->comentario;
    }

    /**
     * Set createdAt.
     *
     * @param \DateTime|null $createdAt
     *
     * @return CuentaAuditorias
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
     * @return CuentaAuditorias
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
     * Set cuentacontribuyente.
     *
     * @param \Siarme\GeneralBundle\Entity\Cuentascontribuyentes|null $cuentacontribuyente
     *
     * @return CuentaAuditorias
     */
    public function setCuentacontribuyente(\Siarme\GeneralBundle\Entity\Cuentascontribuyentes $cuentacontribuyente = null)
    {
        $this->cuentacontribuyente = $cuentacontribuyente;

        return $this;
    }

    /**
     * Get cuentacontribuyente.
     *
     * @return \Siarme\GeneralBundle\Entity\Cuentascontribuyentes|null
     */
    public function getCuentacontribuyente()
    {
        return $this->cuentacontribuyente;
    }

    /**
     * Set usuario.
     *
     * @param \Siarme\GeneralBundle\Entity\Users|null $usuario
     *
     * @return CuentaAuditorias
     */
    public function setUsuario(\Siarme\GeneralBundle\Entity\Users $usuario = null)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario.
     *
     * @return \Siarme\GeneralBundle\Entity\Users|null
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

   /*
   * ToString
   */
    public function __toString()
    {
         return   (string) $this->getId();
    }
}
