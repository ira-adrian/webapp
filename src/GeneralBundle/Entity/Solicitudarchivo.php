<?php


namespace GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Solicitudarchivo
 *
 * @ORM\Table(name="solicitudarchivo", indexes={@ORM\Index(name="archivo_persona", columns={"PersonaSolicitud"})})
 * @ORM\Entity
 */
class Solicitudarchivo
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
     * @ORM\Column(name="ruta", type="string", length=200, nullable=true)
     */
    private $ruta;

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
     * Set ruta.
     *
     * @param string|null $ruta
     *
     * @return Solicitudarchivo
     */
    public function setRuta($ruta = null)
    {
        $this->ruta = $ruta;

        return $this;
    }

    /**
     * Get ruta.
     *
     * @return string|null
     */
    public function getRuta()
    {
        return $this->ruta;
    }

    /**
     * Set createdAt.
     *
     * @param \DateTime|null $createdAt
     *
     * @return Solicitudarchivo
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
     * @return Solicitudarchivo
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
     * @param \GeneralBundle\Entity\Solicitudpersona|null $personasolicitud
     *
     * @return Solicitudarchivo
     */
    public function setPersonasolicitud(\GeneralBundle\Entity\Solicitudpersona $personasolicitud = null)
    {
        $this->personasolicitud = $personasolicitud;

        return $this;
    }

    /**
     * Get personasolicitud.
     *
     * @return \GeneralBundle\Entity\Solicitudpersona|null
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
