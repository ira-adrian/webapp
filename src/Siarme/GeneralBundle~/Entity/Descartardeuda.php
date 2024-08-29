<?php


namespace Siarme\GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Descartardeuda
 *
 * @ORM\Table(name="descartardeuda")
 * @ORM\Entity
 */
class Descartardeuda
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="persona_id", type="integer", nullable=false)
     */
    private $personaId;



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
     * Set personaId.
     *
     * @param int $personaId
     *
     * @return Descartardeuda
     */
    public function setPersonaId($personaId)
    {
        $this->personaId = $personaId;

        return $this;
    }

    /**
     * Get personaId.
     *
     * @return int
     */
    public function getPersonaId()
    {
        return $this->personaId;
    }

   /*
   * ToString
   */
    public function __toString()
    {
         return   (string) $this->getId();
    }
}
