<?php


namespace Siarme\GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table(name="users", uniqueConstraints={@ORM\UniqueConstraint(name="users_cuit_unique", columns={"cuit"})})
 * @ORM\Entity
 */
class Users
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
     * @ORM\Column(name="cuit", type="string", length=191, nullable=false)
     */
    private $cuit;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=191, nullable=false)
     */
    private $password;

    /**
     * @var string|null
     *
     * @ORM\Column(name="two_factor_secret", type="text", length=65535, nullable=true)
     */
    private $twoFactorSecret;

    /**
     * @var string|null
     *
     * @ORM\Column(name="two_factor_recovery_codes", type="text", length=65535, nullable=true)
     */
    private $twoFactorRecoveryCodes;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="two_factor_confirmed_at", type="datetime", nullable=true)
     */
    private $twoFactorConfirmedAt;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=191, nullable=false)
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="remember_token", type="string", length=100, nullable=true)
     */
    private $rememberToken;

    /**
     * @var int|null
     *
     * @ORM\Column(name="current_team_id", type="bigint", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $currentTeamId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="profile_photo_path", type="string", length=2048, nullable=true)
     */
    private $profilePhotoPath;

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
     * @return Users
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
     * Set cuit.
     *
     * @param string $cuit
     *
     * @return Users
     */
    public function setCuit($cuit)
    {
        $this->cuit = $cuit;

        return $this;
    }

    /**
     * Get cuit.
     *
     * @return string
     */
    public function getCuit()
    {
        return $this->cuit;
    }

    /**
     * Set password.
     *
     * @param string $password
     *
     * @return Users
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password.
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set twoFactorSecret.
     *
     * @param string|null $twoFactorSecret
     *
     * @return Users
     */
    public function setTwoFactorSecret($twoFactorSecret = null)
    {
        $this->twoFactorSecret = $twoFactorSecret;

        return $this;
    }

    /**
     * Get twoFactorSecret.
     *
     * @return string|null
     */
    public function getTwoFactorSecret()
    {
        return $this->twoFactorSecret;
    }

    /**
     * Set twoFactorRecoveryCodes.
     *
     * @param string|null $twoFactorRecoveryCodes
     *
     * @return Users
     */
    public function setTwoFactorRecoveryCodes($twoFactorRecoveryCodes = null)
    {
        $this->twoFactorRecoveryCodes = $twoFactorRecoveryCodes;

        return $this;
    }

    /**
     * Get twoFactorRecoveryCodes.
     *
     * @return string|null
     */
    public function getTwoFactorRecoveryCodes()
    {
        return $this->twoFactorRecoveryCodes;
    }

    /**
     * Set twoFactorConfirmedAt.
     *
     * @param \DateTime|null $twoFactorConfirmedAt
     *
     * @return Users
     */
    public function setTwoFactorConfirmedAt($twoFactorConfirmedAt = null)
    {
        $this->twoFactorConfirmedAt = $twoFactorConfirmedAt;

        return $this;
    }

    /**
     * Get twoFactorConfirmedAt.
     *
     * @return \DateTime|null
     */
    public function getTwoFactorConfirmedAt()
    {
        return $this->twoFactorConfirmedAt;
    }

    /**
     * Set email.
     *
     * @param string $email
     *
     * @return Users
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
     * Set rememberToken.
     *
     * @param string|null $rememberToken
     *
     * @return Users
     */
    public function setRememberToken($rememberToken = null)
    {
        $this->rememberToken = $rememberToken;

        return $this;
    }

    /**
     * Get rememberToken.
     *
     * @return string|null
     */
    public function getRememberToken()
    {
        return $this->rememberToken;
    }

    /**
     * Set currentTeamId.
     *
     * @param int|null $currentTeamId
     *
     * @return Users
     */
    public function setCurrentTeamId($currentTeamId = null)
    {
        $this->currentTeamId = $currentTeamId;

        return $this;
    }

    /**
     * Get currentTeamId.
     *
     * @return int|null
     */
    public function getCurrentTeamId()
    {
        return $this->currentTeamId;
    }

    /**
     * Set profilePhotoPath.
     *
     * @param string|null $profilePhotoPath
     *
     * @return Users
     */
    public function setProfilePhotoPath($profilePhotoPath = null)
    {
        $this->profilePhotoPath = $profilePhotoPath;

        return $this;
    }

    /**
     * Get profilePhotoPath.
     *
     * @return string|null
     */
    public function getProfilePhotoPath()
    {
        return $this->profilePhotoPath;
    }

    /**
     * Set createdAt.
     *
     * @param \DateTime|null $createdAt
     *
     * @return Users
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
     * @return Users
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
     * @return Users
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

   /*
   * ToString
   */
    public function __toString()
    {
         return   (string) $this->getId();
    }
}
