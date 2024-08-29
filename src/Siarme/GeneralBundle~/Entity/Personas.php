<?php


namespace Siarme\GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Personas
 *
 * @ORM\Table(name="personas", uniqueConstraints={@ORM\UniqueConstraint(name="personas_cuit_unique", columns={"cuit"})}, indexes={@ORM\Index(name="personas_localidad_id_foreign", columns={"localidad_id"}), @ORM\Index(name="personas_tipopersona_id_foreign", columns={"tipoPersona_id"})})
 * @ORM\Entity
 */
class Personas
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
     * @ORM\Column(name="apellido", type="string", length=191, nullable=false)
     */
    private $apellido;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nombre", type="string", length=191, nullable=true)
     */
    private $nombre;

    /**
     * @var int
     *
     * @ORM\Column(name="cuit", type="bigint", nullable=false)
     */
    private $cuit;

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
     * @ORM\Column(name="calle", type="string", length=191, nullable=true)
     */
    private $calle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="numeroCalle", type="string", length=191, nullable=true)
     */
    private $numerocalle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="barrio", type="string", length=191, nullable=true)
     */
    private $barrio;

    /**
     * @var string|null
     *
     * @ORM\Column(name="numeroCasa", type="string", length=191, nullable=true)
     */
    private $numerocasa;

    /**
     * @var string
     *
     * @ORM\Column(name="hash", type="string", length=191, nullable=false)
     */
    private $hash;

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
     * @var \Localidades
     *
     * @ORM\ManyToOne(targetEntity="Localidades")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="localidad_id", referencedColumnName="id")
     * })
     */
    private $localidad;

    /**
     * @var \Tipospersonas
     *
     * @ORM\ManyToOne(targetEntity="Tipospersonas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipoPersona_id", referencedColumnName="id")
     * })
     */
    private $tipopersona;



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
     * Set apellido.
     *
     * @param string $apellido
     *
     * @return Personas
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
     * Set nombre.
     *
     * @param string|null $nombre
     *
     * @return Personas
     */
    public function setNombre($nombre = null)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre.
     *
     * @return string|null
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set cuit.
     *
     * @param int $cuit
     *
     * @return Personas
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
     * Set email.
     *
     * @param string $email
     *
     * @return Personas
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
     * @return Personas
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
     * Set calle.
     *
     * @param string|null $calle
     *
     * @return Personas
     */
    public function setCalle($calle = null)
    {
        $this->calle = $calle;

        return $this;
    }

    /**
     * Get calle.
     *
     * @return string|null
     */
    public function getCalle()
    {
        return $this->calle;
    }

    /**
     * Set numerocalle.
     *
     * @param string|null $numerocalle
     *
     * @return Personas
     */
    public function setNumerocalle($numerocalle = null)
    {
        $this->numerocalle = $numerocalle;

        return $this;
    }

    /**
     * Get numerocalle.
     *
     * @return string|null
     */
    public function getNumerocalle()
    {
        return $this->numerocalle;
    }

    /**
     * Set barrio.
     *
     * @param string|null $barrio
     *
     * @return Personas
     */
    public function setBarrio($barrio = null)
    {
        $this->barrio = $barrio;

        return $this;
    }

    /**
     * Get barrio.
     *
     * @return string|null
     */
    public function getBarrio()
    {
        return $this->barrio;
    }

    /**
     * Set numerocasa.
     *
     * @param string|null $numerocasa
     *
     * @return Personas
     */
    public function setNumerocasa($numerocasa = null)
    {
        $this->numerocasa = $numerocasa;

        return $this;
    }

    /**
     * Get numerocasa.
     *
     * @return string|null
     */
    public function getNumerocasa()
    {
        return $this->numerocasa;
    }

    /**
     * Set hash.
     *
     * @param string $hash
     *
     * @return Personas
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
     * Set createdAt.
     *
     * @param \DateTime|null $createdAt
     *
     * @return Personas
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
     * @return Personas
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
     * @return Personas
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
     * Set localidad.
     *
     * @param \Siarme\GeneralBundle\Entity\Localidades|null $localidad
     *
     * @return Personas
     */
    public function setLocalidad(\Siarme\GeneralBundle\Entity\Localidades $localidad = null)
    {
        $this->localidad = $localidad;

        return $this;
    }

    /**
     * Get localidad.
     *
     * @return \Siarme\GeneralBundle\Entity\Localidades|null
     */
    public function getLocalidad()
    {
        return $this->localidad;
    }

    /**
     * Set tipopersona.
     *
     * @param \Siarme\GeneralBundle\Entity\Tipospersonas|null $tipopersona
     *
     * @return Personas
     */
    public function setTipopersona(\Siarme\GeneralBundle\Entity\Tipospersonas $tipopersona = null)
    {
        $this->tipopersona = $tipopersona;

        return $this;
    }

    /**
     * Get tipopersona.
     *
     * @return \Siarme\GeneralBundle\Entity\Tipospersonas|null
     */
    public function getTipopersona()
    {
        return $this->tipopersona;
    }

   /*
   * ToString
   */
    public function __toString()
    {
         return   (string) $this->getId();
    }
}
