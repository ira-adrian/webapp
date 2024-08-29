<?php

namespace Siarme\DocumentoBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * TipoDocumentoRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TipoDocumentoRepository extends EntityRepository
{
	     /**
     * Generador aleatorio de Numeros de Documentos 
     * @param string $slug 
     * @return  integer Texto aleatorio generado para los Documentos.
     * 
     */
    public  function getNumeroDoc($slug)
    {
        $em = $this->getEntityManager();
        $anio= (new \DateTime('now'))->format('Y');

        $tipodocumento = $em->getRepository('DocumentoBundle:TipoDocumento')->findOneBySlug($slug);
        if ($tipodocumento->getAnio() == $anio) {
            $numero= $tipodocumento->getNumero() + 1;
        } else{
            $tipodocumento->setNumero(0);
            $tipodocumento->setAnio($anio);
            $numero= 1;
            $em->flush(); 
        }       

        return $numero;
    }
}
