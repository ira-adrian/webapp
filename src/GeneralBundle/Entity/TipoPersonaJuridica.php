<?php


namespace GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoPersonaJuridica
 *
 * @ORM\Table(name="tipo_persona_juridica")
 * @ORM\Entity
 */
class TipoPersonaJuridica
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
     * @var string|null
     *
     * @ORM\Column(name="descripcion", type="string", length=100, nullable=true)
     */
    private $descripcion;



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
     * Set descripcion.
     *
     * @param string|null $descripcion
     *
     * @return TipoPersonaJuridica
     */
    public function setDescripcion($descripcion = null)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion.
     *
     * @return string|null
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

   /*
   * ToString
   */
    public function __toString()
    {
         return   (string) $this->getId();
    }
}
