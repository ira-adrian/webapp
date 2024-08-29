<?php


namespace Siarme\GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Solicitudpersona
# *, indexes={@ORM\Index(name="tipo_persona_juridica", columns={"TipoPersonaJur"})}
 * @ORM\Table(name="solicitudpersona")
 * @ORM\Entity
 */
class Solicitudpersona
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
     * @var string|null
     *
     * @ORM\Column(name="Nombre", type="string", length=250, nullable=true)
     */
    private $nombre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Apellido", type="string", length=250, nullable=true)
     */
    private $apellido;

    /**
     * @var int
     *
     * @ORM\Column(name="Cuit", type="bigint", nullable=false)
     */
    private $cuit;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Telefono", type="bigint", nullable=true)
     */
    private $telefono;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Email", type="string", length=100, nullable=true)
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TipoPersona", type="string", length=100, nullable=true)
     */
    private $tipopersona;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Denominacion", type="string", length=200, nullable=true)
     */
    private $denominacion;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Estado", type="boolean", nullable=true)
     */
    private $estado;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Provincia", type="string", length=200, nullable=true)
     */
    private $provincia;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Departamento", type="string", length=200, nullable=true)
     */
    private $departamento;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Localidad", type="string", length=200, nullable=true)
     */
    private $localidad;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Barrio", type="string", length=200, nullable=true)
     */
    private $barrio;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CasaNro", type="string", length=200, nullable=true)
     */
    private $casanro;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Calle", type="string", length=200, nullable=true)
     */
    private $calle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CalleNro", type="string", length=200, nullable=true)
     */
    private $callenro;

    /**
     * @var string
     *
     * @ORM\Column(name="hash", type="string", length=20, nullable=false)
     */
    private $hash;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Mensaje", type="string", length=400, nullable=true)
     */
    private $mensaje;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Agente", type="string", length=200, nullable=true)
     */
    private $agente;

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

##    /**
#     * @var \TipoPersonaJuridica
#     *
#     * @ORM\ManyToOne(targetEntity="TipoPersonaJuridica")
#     * @ORM\JoinColumns({
#     *   @ORM\JoinColumn(name="TipoPersonaJur", referencedColumnName="id")
#     * })
#     */
#    private $tipopersonajur;
##


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
     * @param string|null $nombre
     *
     * @return Solicitudpersona
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
     * Set apellido.
     *
     * @param string|null $apellido
     *
     * @return Solicitudpersona
     */
    public function setApellido($apellido = null)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get apellido.
     *
     * @return string|null
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
     * @return Solicitudpersona
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
     * @param int|null $telefono
     *
     * @return Solicitudpersona
     */
    public function setTelefono($telefono = null)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono.
     *
     * @return int|null
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set email.
     *
     * @param string|null $email
     *
     * @return Solicitudpersona
     */
    public function setEmail($email = null)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email.
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set tipopersona.
     *
     * @param string|null $tipopersona
     *
     * @return Solicitudpersona
     */
    public function setTipopersona($tipopersona = null)
    {
        $this->tipopersona = $tipopersona;

        return $this;
    }

    /**
     * Get tipopersona.
     *
     * @return string|null
     */
    public function getTipopersona()
    {
        return $this->tipopersona;
    }

    /**
     * Set denominacion.
     *
     * @param string|null $denominacion
     *
     * @return Solicitudpersona
     */
    public function setDenominacion($denominacion = null)
    {
        $this->denominacion = $denominacion;

        return $this;
    }

    /**
     * Get denominacion.
     *
     * @return string|null
     */
    public function getDenominacion()
    {
        return $this->denominacion;
    }

    /**
     * Set estado.
     *
     * @param bool|null $estado
     *
     * @return Solicitudpersona
     */
    public function setEstado($estado = null)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado.
     *
     * @return bool|null
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set provincia.
     *
     * @param string|null $provincia
     *
     * @return Solicitudpersona
     */
    public function setProvincia($provincia = null)
    {
        $this->provincia = $provincia;

        return $this;
    }

    /**
     * Get provincia.
     *
     * @return string|null
     */
    public function getProvincia()
    {
        return $this->provincia;
    }

    /**
     * Set departamento.
     *
     * @param string|null $departamento
     *
     * @return Solicitudpersona
     */
    public function setDepartamento($departamento = null)
    {
        $this->departamento = $departamento;

        return $this;
    }

    /**
     * Get departamento.
     *
     * @return string|null
     */
    public function getDepartamento()
    {
        return $this->departamento;
    }

    /**
     * Set localidad.
     *
     * @param string|null $localidad
     *
     * @return Solicitudpersona
     */
    public function setLocalidad($localidad = null)
    {
        $this->localidad = $localidad;

        return $this;
    }

    /**
     * Get localidad.
     *
     * @return string|null
     */
    public function getLocalidad()
    {
        return $this->localidad;
    }

    /**
     * Set barrio.
     *
     * @param string|null $barrio
     *
     * @return Solicitudpersona
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
     * Set casanro.
     *
     * @param string|null $casanro
     *
     * @return Solicitudpersona
     */
    public function setCasanro($casanro = null)
    {
        $this->casanro = $casanro;

        return $this;
    }

    /**
     * Get casanro.
     *
     * @return string|null
     */
    public function getCasanro()
    {
        return $this->casanro;
    }

    /**
     * Set calle.
     *
     * @param string|null $calle
     *
     * @return Solicitudpersona
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
     * Set callenro.
     *
     * @param string|null $callenro
     *
     * @return Solicitudpersona
     */
    public function setCallenro($callenro = null)
    {
        $this->callenro = $callenro;

        return $this;
    }

    /**
     * Get callenro.
     *
     * @return string|null
     */
    public function getCallenro()
    {
        return $this->callenro;
    }

    /**
     * Set hash.
     *
     * @param string $hash
     *
     * @return Solicitudpersona
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
     * Set mensaje.
     *
     * @param string|null $mensaje
     *
     * @return Solicitudpersona
     */
    public function setMensaje($mensaje = null)
    {
        $this->mensaje = $mensaje;

        return $this;
    }

    /**
     * Get mensaje.
     *
     * @return string|null
     */
    public function getMensaje()
    {
        return $this->mensaje;
    }

    /**
     * Set agente.
     *
     * @param string|null $agente
     *
     * @return Solicitudpersona
     */
    public function setAgente($agente = null)
    {
        $this->agente = $agente;

        return $this;
    }

    /**
     * Get agente.
     *
     * @return string|null
     */
    public function getAgente()
    {
        return $this->agente;
    }

    /**
     * Set createdAt.
     *
     * @param \DateTime|null $createdAt
     *
     * @return Solicitudpersona
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
     * @return Solicitudpersona
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
     * Set tipopersonaj.
     *
     * @param \Siarme\GeneralBundle\Entity\TipoPersonaJuridica|null $tipopersonaj
     *
     * @return Solicitudpersona
     */
    public function setTipopersonaj(\Siarme\GeneralBundle\Entity\TipoPersonaJuridica $tipopersonaj = null)
    {
        $this->tipopersonaj = $tipopersonaj;

        return $this;
    }

    /**
     * Get tipopersonaj.
     *
     * @return \Siarme\GeneralBundle\Entity\TipoPersonaJuridica|null
     */
    public function getTipopersonaj()
    {
        return $this->tipopersonaj;
    }

   /*
   * ToString
   */
    public function __toString()
    {
         return   (string) $this->getId();
    }
}
