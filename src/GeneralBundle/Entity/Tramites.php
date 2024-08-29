<?php


namespace GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tramites
 *
 * @ORM\Table(name="tramites")
 * @ORM\Entity
 */
class Tramites
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
     * @ORM\Column(name="titulo", type="string", length=191, nullable=false)
     */
    private $titulo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="subtitulo", type="string", length=191, nullable=true)
     */
    private $subtitulo;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="tipomostrar", type="boolean", nullable=true, options={"default"="1"})
     */
    private $tipomostrar = true;

    /**
     * @var string|null
     *
     * @ORM\Column(name="imagen", type="string", length=191, nullable=true, options={"default"="''"})
     */
    private $imagen = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="icono", type="string", length=191, nullable=false)
     */
    private $icono;

    /**
     * @var string|null
     *
     * @ORM\Column(name="data", type="text", length=0, nullable=true)
     */
    private $data;

    /**
     * @var int
     *
     * @ORM\Column(name="tipo", type="smallint", nullable=false, options={"default"="1"})
     */
    private $tipo = '1';

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
     * Set titulo.
     *
     * @param string $titulo
     *
     * @return Tramites
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo.
     *
     * @return string
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set subtitulo.
     *
     * @param string|null $subtitulo
     *
     * @return Tramites
     */
    public function setSubtitulo($subtitulo = null)
    {
        $this->subtitulo = $subtitulo;

        return $this;
    }

    /**
     * Get subtitulo.
     *
     * @return string|null
     */
    public function getSubtitulo()
    {
        return $this->subtitulo;
    }

    /**
     * Set tipomostrar.
     *
     * @param bool|null $tipomostrar
     *
     * @return Tramites
     */
    public function setTipomostrar($tipomostrar = null)
    {
        $this->tipomostrar = $tipomostrar;

        return $this;
    }

    /**
     * Get tipomostrar.
     *
     * @return bool|null
     */
    public function getTipomostrar()
    {
        return $this->tipomostrar;
    }

    /**
     * Set imagen.
     *
     * @param string|null $imagen
     *
     * @return Tramites
     */
    public function setImagen($imagen = null)
    {
        $this->imagen = $imagen;

        return $this;
    }

    /**
     * Get imagen.
     *
     * @return string|null
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * Set icono.
     *
     * @param string $icono
     *
     * @return Tramites
     */
    public function setIcono($icono)
    {
        $this->icono = $icono;

        return $this;
    }

    /**
     * Get icono.
     *
     * @return string
     */
    public function getIcono()
    {
        return $this->icono;
    }

    /**
     * Set data.
     *
     * @param string|null $data
     *
     * @return Tramites
     */
    public function setData($data = null)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data.
     *
     * @return string|null
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set tipo.
     *
     * @param int $tipo
     *
     * @return Tramites
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo.
     *
     * @return int
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set createdAt.
     *
     * @param \DateTime|null $createdAt
     *
     * @return Tramites
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
     * @return Tramites
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
     * @return Tramites
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
