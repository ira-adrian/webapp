<?php


namespace Siarme\GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModelHasRoles
 *
 * @ORM\Table(name="model_has_roles", indexes={@ORM\Index(name="model_has_roles_model_id_model_type_index", columns={"model_id", "model_type"}), @ORM\Index(name="IDX_747E57EAD60322AC", columns={"role_id"})})
 * @ORM\Entity
 */
class ModelHasRoles
{
    /**
     * @var string
     *
     * @ORM\Column(name="model_type", type="string", length=191, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $modelType;

    /**
     * @var int
     *
     * @ORM\Column(name="model_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $modelId;

    /**
     * @var \Roles
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Roles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="role_id", referencedColumnName="id")
     * })
     */
    private $role;



    /**
     * Set modelType.
     *
     * @param string $modelType
     *
     * @return ModelHasRoles
     */
    public function setModelType($modelType)
    {
        $this->modelType = $modelType;

        return $this;
    }

    /**
     * Get modelType.
     *
     * @return string
     */
    public function getModelType()
    {
        return $this->modelType;
    }

    /**
     * Set modelId.
     *
     * @param int $modelId
     *
     * @return ModelHasRoles
     */
    public function setModelId($modelId)
    {
        $this->modelId = $modelId;

        return $this;
    }

    /**
     * Get modelId.
     *
     * @return int
     */
    public function getModelId()
    {
        return $this->modelId;
    }

    /**
     * Set role.
     *
     * @param \Siarme\GeneralBundle\Entity\Roles $role
     *
     * @return ModelHasRoles
     */
    public function setRole(\Siarme\GeneralBundle\Entity\Roles $role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role.
     *
     * @return \Siarme\GeneralBundle\Entity\Roles
     */
    public function getRole()
    {
        return $this->role;
    }

   /*
   * ToString
   */
    public function __toString()
    {
         return   (string) $this->getId();
    }
}
