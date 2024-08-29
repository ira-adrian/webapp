<?php


namespace Siarme\GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MatriculasFme
 *
 * @ORM\Table(name="matriculas_fme")
 * @ORM\Entity
 */
class MatriculasFme
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
     * @ORM\Column(name="matricula", type="string", length=255, nullable=true)
     */
    private $matricula;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Obs", type="string", length=255, nullable=true)
     */
    private $obs;

    /**
     * @var string|null
     *
     * @ORM\Column(name="padron", type="string", length=255, nullable=true)
     */
    private $padron;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tipo", type="string", length=255, nullable=true)
     */
    private $tipo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="superficie", type="string", length=255, nullable=true)
     */
    private $superficie;

    /**
     * @var string|null
     *
     * @ORM\Column(name="valuacion", type="string", length=255, nullable=true)
     */
    private $valuacion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="archivo", type="string", length=255, nullable=true)
     */
    private $archivo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cuartel", type="string", length=255, nullable=true)
     */
    private $cuartel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="anio", type="string", length=255, nullable=true)
     */
    private $anio;

    /**
     * @var string|null
     *
     * @ORM\Column(name="agrimensor", type="string", length=255, nullable=true)
     */
    private $agrimensor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="codmatri", type="string", length=255, nullable=true)
     */
    private $codmatri;

    /**
     * @var string|null
     *
     * @ORM\Column(name="folio", type="string", length=255, nullable=true)
     */
    private $folio;

    /**
     * @var string|null
     *
     * @ORM\Column(name="anio_escritura", type="string", length=255, nullable=true)
     */
    private $anioEscritura;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nroinsc", type="string", length=255, nullable=true)
     */
    private $nroinsc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="expte", type="string", length=255, nullable=true)
     */
    private $expte;

    /**
     * @var string|null
     *
     * @ORM\Column(name="adqui", type="string", length=255, nullable=true)
     */
    private $adqui;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fechadqui", type="string", length=255, nullable=true)
     */
    private $fechadqui;

    /**
     * @var string|null
     *
     * @ORM\Column(name="funcionario", type="string", length=255, nullable=true)
     */
    private $funcionario;

    /**
     * @var string|null
     *
     * @ORM\Column(name="apeynom", type="string", length=255, nullable=true)
     */
    private $apeynom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tipo_doc", type="string", length=255, nullable=true)
     */
    private $tipoDoc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="documento", type="string", length=255, nullable=true)
     */
    private $documento;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cuil_cuit", type="string", length=255, nullable=true)
     */
    private $cuilCuit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="domicilio", type="string", length=255, nullable=true)
     */
    private $domicilio;

    /**
     * @var string|null
     *
     * @ORM\Column(name="localidad", type="string", length=255, nullable=true)
     */
    private $localidad;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cod_postal", type="string", length=255, nullable=true)
     */
    private $codPostal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nacionalid", type="string", length=255, nullable=true)
     */
    private $nacionalid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="porc_dom", type="string", length=255, nullable=true)
     */
    private $porcDom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="con_prop", type="string", length=255, nullable=true)
     */
    private $conProp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="resp_imp", type="string", length=255, nullable=true)
     */
    private $respImp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cod_titul", type="string", length=255, nullable=true)
     */
    private $codTitul;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_alta", type="date", nullable=true)
     */
    private $fechaAlta;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_baja", type="date", nullable=true)
     */
    private $fechaBaja;

    /**
     * @var string|null
     *
     * @ORM\Column(name="latitud", type="string", length=255, nullable=true)
     */
    private $latitud;

    /**
     * @var string|null
     *
     * @ORM\Column(name="longitud", type="string", length=255, nullable=true)
     */
    private $longitud;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt ;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=false)
     */
    private $updatedAt ;

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
     * Set matricula.
     *
     * @param string|null $matricula
     *
     * @return MatriculasFme
     */
    public function setMatricula($matricula = null)
    {
        $this->matricula = $matricula;

        return $this;
    }

    /**
     * Get matricula.
     *
     * @return string|null
     */
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * Set obs.
     *
     * @param string|null $obs
     *
     * @return MatriculasFme
     */
    public function setObs($obs = null)
    {
        $this->obs = $obs;

        return $this;
    }

    /**
     * Get obs.
     *
     * @return string|null
     */
    public function getObs()
    {
        return $this->obs;
    }

    /**
     * Set padron.
     *
     * @param string|null $padron
     *
     * @return MatriculasFme
     */
    public function setPadron($padron = null)
    {
        $this->padron = $padron;

        return $this;
    }

    /**
     * Get padron.
     *
     * @return string|null
     */
    public function getPadron()
    {
        return $this->padron;
    }

    /**
     * Set tipo.
     *
     * @param string|null $tipo
     *
     * @return MatriculasFme
     */
    public function setTipo($tipo = null)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo.
     *
     * @return string|null
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set superficie.
     *
     * @param string|null $superficie
     *
     * @return MatriculasFme
     */
    public function setSuperficie($superficie = null)
    {
        $this->superficie = $superficie;

        return $this;
    }

    /**
     * Get superficie.
     *
     * @return string|null
     */
    public function getSuperficie()
    {
        return $this->superficie;
    }

    /**
     * Set valuacion.
     *
     * @param string|null $valuacion
     *
     * @return MatriculasFme
     */
    public function setValuacion($valuacion = null)
    {
        $this->valuacion = $valuacion;

        return $this;
    }

    /**
     * Get valuacion.
     *
     * @return string|null
     */
    public function getValuacion()
    {
        return $this->valuacion;
    }

    /**
     * Set archivo.
     *
     * @param string|null $archivo
     *
     * @return MatriculasFme
     */
    public function setArchivo($archivo = null)
    {
        $this->archivo = $archivo;

        return $this;
    }

    /**
     * Get archivo.
     *
     * @return string|null
     */
    public function getArchivo()
    {
        return $this->archivo;
    }

    /**
     * Set cuartel.
     *
     * @param string|null $cuartel
     *
     * @return MatriculasFme
     */
    public function setCuartel($cuartel = null)
    {
        $this->cuartel = $cuartel;

        return $this;
    }

    /**
     * Get cuartel.
     *
     * @return string|null
     */
    public function getCuartel()
    {
        return $this->cuartel;
    }

    /**
     * Set aã±o.
     *
     * @param string|null $aã±o
     *
     * @return MatriculasFme
     */
    public function setAã±o($aã±o = null)
    {
        $this->aã±o = $aã±o;

        return $this;
    }

    /**
     * Get aã±o.
     *
     * @return string|null
     */
    public function getAã±o()
    {
        return $this->aã±o;
    }

    /**
     * Set agrimensor.
     *
     * @param string|null $agrimensor
     *
     * @return MatriculasFme
     */
    public function setAgrimensor($agrimensor = null)
    {
        $this->agrimensor = $agrimensor;

        return $this;
    }

    /**
     * Get agrimensor.
     *
     * @return string|null
     */
    public function getAgrimensor()
    {
        return $this->agrimensor;
    }

    /**
     * Set codmatri.
     *
     * @param string|null $codmatri
     *
     * @return MatriculasFme
     */
    public function setCodmatri($codmatri = null)
    {
        $this->codmatri = $codmatri;

        return $this;
    }

    /**
     * Get codmatri.
     *
     * @return string|null
     */
    public function getCodmatri()
    {
        return $this->codmatri;
    }

    /**
     * Set folio.
     *
     * @param string|null $folio
     *
     * @return MatriculasFme
     */
    public function setFolio($folio = null)
    {
        $this->folio = $folio;

        return $this;
    }

    /**
     * Get folio.
     *
     * @return string|null
     */
    public function getFolio()
    {
        return $this->folio;
    }

    /**
     * Set anioEscritura.
     *
     * @param string|null $anioEscritura
     *
     * @return MatriculasFme
     */
    public function setAnioEscritura($anioEscritura = null)
    {
        $this->anioEscritura = $anioEscritura;

        return $this;
    }

    /**
     * Get anioEscritura.
     *
     * @return string|null
     */
    public function getAnioEscritura()
    {
        return $this->anioEscritura;
    }

    /**
     * Set nroinsc.
     *
     * @param string|null $nroinsc
     *
     * @return MatriculasFme
     */
    public function setNroinsc($nroinsc = null)
    {
        $this->nroinsc = $nroinsc;

        return $this;
    }

    /**
     * Get nroinsc.
     *
     * @return string|null
     */
    public function getNroinsc()
    {
        return $this->nroinsc;
    }

    /**
     * Set expte.
     *
     * @param string|null $expte
     *
     * @return MatriculasFme
     */
    public function setExpte($expte = null)
    {
        $this->expte = $expte;

        return $this;
    }

    /**
     * Get expte.
     *
     * @return string|null
     */
    public function getExpte()
    {
        return $this->expte;
    }

    /**
     * Set adqui.
     *
     * @param string|null $adqui
     *
     * @return MatriculasFme
     */
    public function setAdqui($adqui = null)
    {
        $this->adqui = $adqui;

        return $this;
    }

    /**
     * Get adqui.
     *
     * @return string|null
     */
    public function getAdqui()
    {
        return $this->adqui;
    }

    /**
     * Set fechadqui.
     *
     * @param string|null $fechadqui
     *
     * @return MatriculasFme
     */
    public function setFechadqui($fechadqui = null)
    {
        $this->fechadqui = $fechadqui;

        return $this;
    }

    /**
     * Get fechadqui.
     *
     * @return string|null
     */
    public function getFechadqui()
    {
        return $this->fechadqui;
    }

    /**
     * Set funcionario.
     *
     * @param string|null $funcionario
     *
     * @return MatriculasFme
     */
    public function setFuncionario($funcionario = null)
    {
        $this->funcionario = $funcionario;

        return $this;
    }

    /**
     * Get funcionario.
     *
     * @return string|null
     */
    public function getFuncionario()
    {
        return $this->funcionario;
    }

    /**
     * Set apeynom.
     *
     * @param string|null $apeynom
     *
     * @return MatriculasFme
     */
    public function setApeynom($apeynom = null)
    {
        $this->apeynom = $apeynom;

        return $this;
    }

    /**
     * Get apeynom.
     *
     * @return string|null
     */
    public function getApeynom()
    {
        return $this->apeynom;
    }

    /**
     * Set tipoDoc.
     *
     * @param string|null $tipoDoc
     *
     * @return MatriculasFme
     */
    public function setTipoDoc($tipoDoc = null)
    {
        $this->tipoDoc = $tipoDoc;

        return $this;
    }

    /**
     * Get tipoDoc.
     *
     * @return string|null
     */
    public function getTipoDoc()
    {
        return $this->tipoDoc;
    }

    /**
     * Set documento.
     *
     * @param string|null $documento
     *
     * @return MatriculasFme
     */
    public function setDocumento($documento = null)
    {
        $this->documento = $documento;

        return $this;
    }

    /**
     * Get documento.
     *
     * @return string|null
     */
    public function getDocumento()
    {
        return $this->documento;
    }

    /**
     * Set cuilCuit.
     *
     * @param string|null $cuilCuit
     *
     * @return MatriculasFme
     */
    public function setCuilCuit($cuilCuit = null)
    {
        $this->cuilCuit = $cuilCuit;

        return $this;
    }

    /**
     * Get cuilCuit.
     *
     * @return string|null
     */
    public function getCuilCuit()
    {
        return $this->cuilCuit;
    }

    /**
     * Set domicilio.
     *
     * @param string|null $domicilio
     *
     * @return MatriculasFme
     */
    public function setDomicilio($domicilio = null)
    {
        $this->domicilio = $domicilio;

        return $this;
    }

    /**
     * Get domicilio.
     *
     * @return string|null
     */
    public function getDomicilio()
    {
        return $this->domicilio;
    }

    /**
     * Set localidad.
     *
     * @param string|null $localidad
     *
     * @return MatriculasFme
     */
    public function setLocalidad($localidad = null)
    {
        $this->localidad = $localidad;

        return $this;
    }

    /**
     * Get localidad.
     *
     * @return string|null
     */
    public function getLocalidad()
    {
        return $this->localidad;
    }

    /**
     * Set codPostal.
     *
     * @param string|null $codPostal
     *
     * @return MatriculasFme
     */
    public function setCodPostal($codPostal = null)
    {
        $this->codPostal = $codPostal;

        return $this;
    }

    /**
     * Get codPostal.
     *
     * @return string|null
     */
    public function getCodPostal()
    {
        return $this->codPostal;
    }

    /**
     * Set nacionalid.
     *
     * @param string|null $nacionalid
     *
     * @return MatriculasFme
     */
    public function setNacionalid($nacionalid = null)
    {
        $this->nacionalid = $nacionalid;

        return $this;
    }

    /**
     * Get nacionalid.
     *
     * @return string|null
     */
    public function getNacionalid()
    {
        return $this->nacionalid;
    }

    /**
     * Set porcDom.
     *
     * @param string|null $porcDom
     *
     * @return MatriculasFme
     */
    public function setPorcDom($porcDom = null)
    {
        $this->porcDom = $porcDom;

        return $this;
    }

    /**
     * Get porcDom.
     *
     * @return string|null
     */
    public function getPorcDom()
    {
        return $this->porcDom;
    }

    /**
     * Set conProp.
     *
     * @param string|null $conProp
     *
     * @return MatriculasFme
     */
    public function setConProp($conProp = null)
    {
        $this->conProp = $conProp;

        return $this;
    }

    /**
     * Get conProp.
     *
     * @return string|null
     */
    public function getConProp()
    {
        return $this->conProp;
    }

    /**
     * Set respImp.
     *
     * @param string|null $respImp
     *
     * @return MatriculasFme
     */
    public function setRespImp($respImp = null)
    {
        $this->respImp = $respImp;

        return $this;
    }

    /**
     * Get respImp.
     *
     * @return string|null
     */
    public function getRespImp()
    {
        return $this->respImp;
    }

    /**
     * Set codTitul.
     *
     * @param string|null $codTitul
     *
     * @return MatriculasFme
     */
    public function setCodTitul($codTitul = null)
    {
        $this->codTitul = $codTitul;

        return $this;
    }

    /**
     * Get codTitul.
     *
     * @return string|null
     */
    public function getCodTitul()
    {
        return $this->codTitul;
    }

    /**
     * Set fechaAlta.
     *
     * @param \DateTime|null $fechaAlta
     *
     * @return MatriculasFme
     */
    public function setFechaAlta($fechaAlta = null)
    {
        $this->fechaAlta = $fechaAlta;

        return $this;
    }

    /**
     * Get fechaAlta.
     *
     * @return \DateTime|null
     */
    public function getFechaAlta()
    {
        return $this->fechaAlta;
    }

    /**
     * Set fechaBaja.
     *
     * @param \DateTime|null $fechaBaja
     *
     * @return MatriculasFme
     */
    public function setFechaBaja($fechaBaja = null)
    {
        $this->fechaBaja = $fechaBaja;

        return $this;
    }

    /**
     * Get fechaBaja.
     *
     * @return \DateTime|null
     */
    public function getFechaBaja()
    {
        return $this->fechaBaja;
    }

    /**
     * Set latitud.
     *
     * @param string|null $latitud
     *
     * @return MatriculasFme
     */
    public function setLatitud($latitud = null)
    {
        $this->latitud = $latitud;

        return $this;
    }

    /**
     * Get latitud.
     *
     * @return string|null
     */
    public function getLatitud()
    {
        return $this->latitud;
    }

    /**
     * Set longitud.
     *
     * @param string|null $longitud
     *
     * @return MatriculasFme
     */
    public function setLongitud($longitud = null)
    {
        $this->longitud = $longitud;

        return $this;
    }

    /**
     * Get longitud.
     *
     * @return string|null
     */
    public function getLongitud()
    {
        return $this->longitud;
    }

    /**
     * Set createdAt.
     *
     * @param \DateTime $createdAt
     *
     * @return MatriculasFme
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt.
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt.
     *
     * @param \DateTime $updatedAt
     *
     * @return MatriculasFme
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt.
     *
     * @return \DateTime
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
     * @return MatriculasFme
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
