<?php


namespace Siarme\GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Roles
 *
 * @ORM\Table(name="roles", uniqueConstraints={@ORM\UniqueConstraint(name="roles_name_guard_name_unique", columns={"name", "guard_name"})})
 * @ORM\Entity
 */
class Roles
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
     * @ORM\Column(name="name", type="string", length=191, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="guard_name", type="string", length=191, nullable=false)
     */
    private $guardName;

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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Permissions", mappedBy="role")
     */
    private $permission = array();

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->permission = new \Doctrine\Common\Collections\ArrayCollection();
    }


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
     * Set name.
     *
     * @param string $name
     *
     * @return Roles
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set guardName.
     *
     * @param string $guardName
     *
     * @return Roles
     */
    public function setGuardName($guardName)
    {
        $this->guardName = $guardName;

        return $this;
    }

    /**
     * Get guardName.
     *
     * @return string
     */
    public function getGuardName()
    {
        return $this->guardName;
    }

    /**
     * Set createdAt.
     *
     * @param \DateTime|null $createdAt
     *
     * @return Roles
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
     * @return Roles
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
     * Add permission.
     *
     * @param \Siarme\GeneralBundle\Entity\Permissions $permission
     *
     * @return Roles
     */
    public function addPermission(\Siarme\GeneralBundle\Entity\Permissions $permission)
    {
        $this->permission[] = $permission;

        return $this;
    }

    /**
     * Remove permission.
     *
     * @param \Siarme\GeneralBundle\Entity\Permissions $permission
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removePermission(\Siarme\GeneralBundle\Entity\Permissions $permission)
    {
        return $this->permission->removeElement($permission);
    }

    /**
     * Get permission.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPermission()
    {
        return $this->permission;
    }

   /*
   * ToString
   */
    public function __toString()
    {
         return   (string) $this->getId();
    }
}
