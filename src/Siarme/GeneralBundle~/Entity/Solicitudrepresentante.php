<?php


namespace Siarme\GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Solicitudrepresentante
 *
 * @ORM\Table(name="solicitudrepresentante", indexes={@ORM\Index(name="solicitud_persona_representante", columns={"PersonaSolicitud"})})
 * @ORM\Entity
 */
class Solicitudrepresentante
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
     * @ORM\Column(name="Nombre", type="string", length=250, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="Apellido", type="string", length=250, nullable=false)
     */
    private $apellido;

    /**
     * @var int
     *
     * @ORM\Column(name="Cuit", type="bigint", nullable=false)
     */
    private $cuit;

    /**
     * @var int
     *
     * @ORM\Column(name="Telefono", type="bigint", nullable=false)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=100, nullable=false)
     */
    private $email;

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
     * @var \Solicitudpersona
     *
     * @ORM\ManyToOne(targetEntity="Solicitudpersona")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="PersonaSolicitud", referencedColumnName="id")
     * })
     */
    private $personasolicitud;



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
     * Set nombre.
     *
     * @param string $nombre
     *
     * @return Solicitudrepresentante
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre.
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apellido.
     *
     * @param string $apellido
     *
     * @return Solicitudrepresentante
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get apellido.
     *
     * @return string
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set cuit.
     *
     * @param int $cuit
     *
     * @return Solicitudrepresentante
     */
    public function setCuit($cuit)
    {
        $this->cuit = $cuit;

        return $this;
    }

    /**
     * Get cuit.
     *
     * @return int
     */
    public function getCuit()
    {
        return $this->cuit;
    }

    /**
     * Set telefono.
     *
     * @param int $telefono
     *
     * @return Solicitudrepresentante
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono.
     *
     * @return int
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set email.
     *
     * @param string $email
     *
     * @return Solicitudrepresentante
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
     * Set createdAt.
     *
     * @param \DateTime|null $createdAt
     *
     * @return Solicitudrepresentante
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
     * @return Solicitudrepresentante
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
     * Set personasolicitud.
     *
     * @param \Siarme\GeneralBundle\Entity\Solicitudpersona|null $personasolicitud
     *
     * @return Solicitudrepresentante
     */
    public function setPersonasolicitud(\Siarme\GeneralBundle\Entity\Solicitudpersona $personasolicitud = null)
    {
        $this->personasolicitud = $personasolicitud;

        return $this;
    }

    /**
     * Get personasolicitud.
     *
     * @return \Siarme\GeneralBundle\Entity\Solicitudpersona|null
     */
    public function getPersonasolicitud()
    {
        return $this->personasolicitud;
    }

   /*
   * ToString
   */
    public function __toString()
    {
         return   (string) $this->getId();
    }
}
