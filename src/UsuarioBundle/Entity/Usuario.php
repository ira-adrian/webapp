<?php

// src/Siarme/UsuarioBundle/Entity/Usuario.php

namespace UsuarioBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints as DoctrineAssert;
use Symfony\Component\Validator\ExecutionContextInterface;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;
/**
 * UsuarioBundle\Usuario
 *
 * @ORM\Table(name="usuario")
 * @ORM\Entity(repositoryClass="UsuarioBundle\Repository\UsuarioRepository")
 * @DoctrineAssert\UniqueEntity("usuario")
 *
 */
class Usuario implements AdvancedUserInterface, \Serializable

{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255, nullable=true)
     */
    private $nombre;
    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=20, unique=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
    * @Assert\Length(min = 6)
    */
    private $passwordEnClaro;

    /**
     * @var string
     *
     * @ORM\Column(name="salt", type="string", length=255)
     */
    private $salt;

    /** 
    * @ORM\ManyToOne(targetEntity="UsuarioBundle\Entity\Role" , inversedBy="usuario") 
    * @ORM\JoinColumn(name="role_id", referencedColumnName="id")
    */
    private $rol;
      
    /**
     * @var bool
     *
     * @ORM\Column(name="es_activo", type="boolean")
     */
    private $esActivo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_crea", type="datetime")
     */
    private $fechaCrea;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_modifica", type="datetime",  nullable=true)
     */
    private $fechaModifica;
 
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Usuario
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Usuario
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set salt
     *
     * @param string $salt
     * @return salt
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Get salt
     *
     * @return string 
     */
    public function getSalt()
    {
        return null;
    }

    public function __toString()
    {
        return (string) $this->getEmail();
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->esActivo=true;
        $this->fechaCrea = new \ Datetime('now'); ;
        $this->esActivo=true;

    }


    /**
     * Método requerido por la interfaz UserInterface
     */
    public function eraseCredentials()
    {
        $this->passwordEnClaro = null;
        return null;

    }
    
    public function getRoles() {
        
        return array($this->getRol()->getRol());
    }

    /**
     * Método requerido por la interfaz UserInterface
     */
    public function getUsername()
    {
        return $this->getUsuario();
    }

    /**
     * Método requerido por la interfaz UserInterface
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Usuario
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * 
     */
    public function getPasswordEnClaro()
    {
        return $this->passwordEnClaro;
    }

    /**
     * Set passwordEnClaro
     *
     * @param string $passwordEnClaro
     *
     * @return Usuario
     */
    public function setPasswordEnClaro($passwordEnClaro)
    {
        $this->passwordEnClaro = $passwordEnClaro;

        return $this;
    }

    public function isAccountNonExpired()
    {
        return true;
    }

    public function isAccountNonLocked()
    {
        return true;
    }

    public function isCredentialsNonExpired()
    {
        return true;
    }

    public function isEnabled()
    {
        return $this->esActivo;
    }
    /** @see \Serializable::serialize() */
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->email,
            $this->password,
            $this->esActivo,
            // see section on salt below
            // $this->salt,
        ));
    }

    /** @see \Serializable::unserialize() */
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->email,
            $this->password,
            $this->esActivo,
            // see section on salt below
            // $this->salt
        ) = unserialize($serialized);
    }

    /**
     * Set esActivo
     *
     * @param boolean $esActivo
     *
     * @return Usuario
     */
    public function setEsActivo($esActivo)
    {
        $this->esActivo = $esActivo;

        return $this;
    }

    /**
     * Get esActivo
     *
     * @return boolean
     */
    public function getEsActivo()
    {
        return $this->esActivo;
    }

    /**
     * Set fechaCrea
     *
     * @param \DateTime $fechaCrea
     *
     * @return Usuario
     */
    public function setFechaCrea($fechaCrea)
    {
        $this->fechaCrea = $fechaCrea;

        return $this;
    }

    /**
     * Get fechaCrea
     *
     * @return \DateTime
     */
    public function getFechaCrea()
    {
        return $this->fechaCrea;
    }

    /**
     * Set fechaModifica
     *
     * @param \DateTime $fechaModifica
     *
     * @return Usuario
     */
    public function setFechaModifica($fechaModifica)
    {
        $this->fechaModifica = $fechaModifica;

        return $this;
    }

    /**
     * Get fechaModifica
     *
     * @return \DateTime
     */
    public function getFechaModifica()
    {
        return $this->fechaModifica;
    }


    /**
     * Set rol
     *
     * @param \UsuarioBundle\Entity\Role $rol
     *
     * @return Usuario
     */
    public function setRol(\UsuarioBundle\Entity\Role $rol = null)
    {
        $this->rol = $rol;

        return $this;
    }

    /**
     * Get rol
     *
     * @return \UsuarioBundle\Entity\Role
     */
    public function getRol()
    {
        return $this->rol;
    }

}
