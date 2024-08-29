<?php
// src/Siarme/UsuarioBundle/Entity/Role.php

namespace UsuarioBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * @ORM\Entity
 * @ORM\Table(name="role")
 */
class Role {
    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\Column(name="role_name",type="string",length=50,unique=true)
     */
    private $roleName;

     /**
     * @ORM\Column(name="rol",type="string",length=50,unique=true)
     */
    private $rol;

    /** 
     *@ORM\OneToMany(targetEntity="UsuarioBundle\Entity\Usuario", mappedBy="rol")
     */
    private $usuario;


     /**
     * ToString
     */         
    public function __toString()
    {
        return (string) $this->getRoleName();
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->usuario = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set roleName
     *
     * @param string $roleName
     *
     * @return Role
     */
    public function setRoleName($roleName)
    {
        $this->roleName = $roleName;

        return $this;
    }

    /**
     * Get roleName
     *
     * @return string
     */
    public function getRoleName()
    {
        return $this->roleName;
    }

    /**
     * Set rol
     *
     * @param string $rol
     *
     * @return Role
     */
    public function setRol($rol)
    {
        $this->rol = $rol;

        return $this;
    }

    /**
     * Get rol
     *
     * @return string
     */
    public function getRol()
    {
        return $this->rol;
    }

    /**
     * Add usuario
     *
     * @param \UsuarioBundle\Entity\Usuario $usuario
     *
     * @return Role
     */
    public function addUsuario(\UsuarioBundle\Entity\Usuario $usuario)
    {
        $this->usuario[] = $usuario;

        return $this;
    }

    /**
     * Remove usuario
     *
     * @param \UsuarioBundle\Entity\Usuario $usuario
     */
    public function removeUsuario(\UsuarioBundle\Entity\Usuario $usuario)
    {
        $this->usuario->removeElement($usuario);
    }

    /**
     * Get usuario
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

}
