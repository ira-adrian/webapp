<?php


namespace Siarme\GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Noticias
 *
 * @ORM\Table(name="noticias", uniqueConstraints={@ORM\UniqueConstraint(name="noticias_slug_unique", columns={"slug"})}, indexes={@ORM\Index(name="noticias_categoria_id_foreign", columns={"categoria_id"})})
 * @ORM\Entity
 */
class Noticias
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
     * @ORM\Column(name="tituloCorto", type="string", length=50, nullable=false)
     */
    private $titulocorto;

    /**
     * @var string
     *
     * @ORM\Column(name="tituloCompleto", type="string", length=150, nullable=false)
     */
    private $titulocompleto;

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=100, nullable=false)
     */
    private $slug;

    /**
     * @var string
     *
     * @ORM\Column(name="bajada", type="text", length=0, nullable=false)
     */
    private $bajada;

    /**
     * @var string
     *
     * @ORM\Column(name="texto", type="text", length=0, nullable=false)
     */
    private $texto;

    /**
     * @var string
     *
     * @ORM\Column(name="imagenPortada", type="string", length=200, nullable=false)
     */
    private $imagenportada;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="published_at", type="datetime", nullable=false)
     */
    private $publishedAt;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="unpublished_at", type="datetime", nullable=true)
     */
    private $unpublishedAt;

    /**
     * @var int
     *
     * @ORM\Column(name="visitas", type="integer", nullable=false)
     */
    private $visitas = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="destacada", type="boolean", nullable=false)
     */
    private $destacada = '0';

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
     * @var \Categoriasnoticias
     *
     * @ORM\ManyToOne(targetEntity="Categoriasnoticias")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="categoria_id", referencedColumnName="id")
     * })
     */
    private $categoria;



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
     * Set titulocorto.
     *
     * @param string $titulocorto
     *
     * @return Noticias
     */
    public function setTitulocorto($titulocorto)
    {
        $this->titulocorto = $titulocorto;

        return $this;
    }

    /**
     * Get titulocorto.
     *
     * @return string
     */
    public function getTitulocorto()
    {
        return $this->titulocorto;
    }

    /**
     * Set titulocompleto.
     *
     * @param string $titulocompleto
     *
     * @return Noticias
     */
    public function setTitulocompleto($titulocompleto)
    {
        $this->titulocompleto = $titulocompleto;

        return $this;
    }

    /**
     * Get titulocompleto.
     *
     * @return string
     */
    public function getTitulocompleto()
    {
        return $this->titulocompleto;
    }

    /**
     * Set slug.
     *
     * @param string $slug
     *
     * @return Noticias
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug.
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set bajada.
     *
     * @param string $bajada
     *
     * @return Noticias
     */
    public function setBajada($bajada)
    {
        $this->bajada = $bajada;

        return $this;
    }

    /**
     * Get bajada.
     *
     * @return string
     */
    public function getBajada()
    {
        return $this->bajada;
    }

    /**
     * Set texto.
     *
     * @param string $texto
     *
     * @return Noticias
     */
    public function setTexto($texto)
    {
        $this->texto = $texto;

        return $this;
    }

    /**
     * Get texto.
     *
     * @return string
     */
    public function getTexto()
    {
        return $this->texto;
    }

    /**
     * Set imagenportada.
     *
     * @param string $imagenportada
     *
     * @return Noticias
     */
    public function setImagenportada($imagenportada)
    {
        $this->imagenportada = $imagenportada;

        return $this;
    }

    /**
     * Get imagenportada.
     *
     * @return string
     */
    public function getImagenportada()
    {
        return $this->imagenportada;
    }

    /**
     * Set publishedAt.
     *
     * @param \DateTime $publishedAt
     *
     * @return Noticias
     */
    public function setPublishedAt($publishedAt)
    {
        $this->publishedAt = $publishedAt;

        return $this;
    }

    /**
     * Get publishedAt.
     *
     * @return \DateTime
     */
    public function getPublishedAt()
    {
        return $this->publishedAt;
    }

    /**
     * Set unpublishedAt.
     *
     * @param \DateTime|null $unpublishedAt
     *
     * @return Noticias
     */
    public function setUnpublishedAt($unpublishedAt = null)
    {
        $this->unpublishedAt = $unpublishedAt;

        return $this;
    }

    /**
     * Get unpublishedAt.
     *
     * @return \DateTime|null
     */
    public function getUnpublishedAt()
    {
        return $this->unpublishedAt;
    }

    /**
     * Set visitas.
     *
     * @param int $visitas
     *
     * @return Noticias
     */
    public function setVisitas($visitas)
    {
        $this->visitas = $visitas;

        return $this;
    }

    /**
     * Get visitas.
     *
     * @return int
     */
    public function getVisitas()
    {
        return $this->visitas;
    }

    /**
     * Set destacada.
     *
     * @param bool $destacada
     *
     * @return Noticias
     */
    public function setDestacada($destacada)
    {
        $this->destacada = $destacada;

        return $this;
    }

    /**
     * Get destacada.
     *
     * @return bool
     */
    public function getDestacada()
    {
        return $this->destacada;
    }

    /**
     * Set createdAt.
     *
     * @param \DateTime|null $createdAt
     *
     * @return Noticias
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
     * @return Noticias
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
     * @return Noticias
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

    /**
     * Set categoria.
     *
     * @param \Siarme\GeneralBundle\Entity\Categoriasnoticias|null $categoria
     *
     * @return Noticias
     */
    public function setCategoria(\Siarme\GeneralBundle\Entity\Categoriasnoticias $categoria = null)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get categoria.
     *
     * @return \Siarme\GeneralBundle\Entity\Categoriasnoticias|null
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

   /*
   * ToString
   */
    public function __toString()
    {
         return   (string) $this->getId();
    }
}
