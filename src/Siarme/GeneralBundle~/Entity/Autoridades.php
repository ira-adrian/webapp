<?php


namespace Siarme\GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Autoridades
 *
 * @ORM\Table(name="autoridades")
 * @ORM\Entity
 */
class Autoridades
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
     * @ORM\Column(name="nombre_completo", type="string", length=191, nullable=false)
     */
    private $nombreCompleto;

    /**
     * @var string
     *
     * @ORM\Column(name="cargo", type="string", length=191, nullable=false)
     */
    private $cargo;

    /**
     * @var string
     *
     * @ORM\Column(name="organismo", type="string", length=191, nullable=false)
     */
    private $organismo;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=191, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=191, nullable=false)
     */
    private $telefono;

    /**
     * @var string|null
     *
     * @ORM\Column(name="facebook", type="string", length=191, nullable=true)
     */
    private $facebook;

    /**
     * @var string|null
     *
     * @ORM\Column(name="twitter", type="string", length=191, nullable=true)
     */
    private $twitter;

    /**
     * @var string|null
     *
     * @ORM\Column(name="instagram", type="string", length=191, nullable=true)
     */
    private $instagram;

    /**
     * @var string
     *
     * @ORM\Column(name="imagen", type="string", length=191, nullable=false)
     */
    private $imagen;

    /**
     * @var int
     *
     * @ORM\Column(name="tipo_Cargo", type="smallint", nullable=false)
     */
    private $tipoCargo;

    /**
     * @var int
     *
     * @ORM\Column(name="orden", type="smallint", nullable=false)
     */
    private $orden;

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
     * Set nombreCompleto.
     *
     * @param string $nombreCompleto
     *
     * @return Autoridades
     */
    public function setNombreCompleto($nombreCompleto)
    {
        $this->nombreCompleto = $nombreCompleto;

        return $this;
    }

    /**
     * Get nombreCompleto.
     *
     * @return string
     */
    public function getNombreCompleto()
    {
        return $this->nombreCompleto;
    }

    /**
     * Set cargo.
     *
     * @param string $cargo
     *
     * @return Autoridades
     */
    public function setCargo($cargo)
    {
        $this->cargo = $cargo;

        return $this;
    }

    /**
     * Get cargo.
     *
     * @return string
     */
    public function getCargo()
    {
        return $this->cargo;
    }

    /**
     * Set organismo.
     *
     * @param string $organismo
     *
     * @return Autoridades
     */
    public function setOrganismo($organismo)
    {
        $this->organismo = $organismo;

        return $this;
    }

    /**
     * Get organismo.
     *
     * @return string
     */
    public function getOrganismo()
    {
        return $this->organismo;
    }

    /**
     * Set email.
     *
     * @param string $email
     *
     * @return Autoridades
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set telefono.
     *
     * @param string $telefono
     *
     * @return Autoridades
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono.
     *
     * @return string
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set facebook.
     *
     * @param string|null $facebook
     *
     * @return Autoridades
     */
    public function setFacebook($facebook = null)
    {
        $this->facebook = $facebook;

        return $this;
    }

    /**
     * Get facebook.
     *
     * @return string|null
     */
    public function getFacebook()
    {
        return $this->facebook;
    }

    /**
     * Set twitter.
     *
     * @param string|null $twitter
     *
     * @return Autoridades
     */
    public function setTwitter($twitter = null)
    {
        $this->twitter = $twitter;

        return $this;
    }

    /**
     * Get twitter.
     *
     * @return string|null
     */
    public function getTwitter()
    {
        return $this->twitter;
    }

    /**
     * Set instagram.
     *
     * @param string|null $instagram
     *
     * @return Autoridades
     */
    public function setInstagram($instagram = null)
    {
        $this->instagram = $instagram;

        return $this;
    }

    /**
     * Get instagram.
     *
     * @return string|null
     */
    public function getInstagram()
    {
        return $this->instagram;
    }

    /**
     * Set imagen.
     *
     * @param string $imagen
     *
     * @return Autoridades
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;

        return $this;
    }

    /**
     * Get imagen.
     *
     * @return string
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * Set tipoCargo.
     *
     * @param int $tipoCargo
     *
     * @return Autoridades
     */
    public function setTipoCargo($tipoCargo)
    {
        $this->tipoCargo = $tipoCargo;

        return $this;
    }

    /**
     * Get tipoCargo.
     *
     * @return int
     */
    public function getTipoCargo()
    {
        return $this->tipoCargo;
    }

    /**
     * Set orden.
     *
     * @param int $orden
     *
     * @return Autoridades
     */
    public function setOrden($orden)
    {
        $this->orden = $orden;

        return $this;
    }

    /**
     * Get orden.
     *
     * @return int
     */
    public function getOrden()
    {
        return $this->orden;
    }

    /**
     * Set createdAt.
     *
     * @param \DateTime|null $createdAt
     *
     * @return Autoridades
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
     * @return Autoridades
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
     * @return Autoridades
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
