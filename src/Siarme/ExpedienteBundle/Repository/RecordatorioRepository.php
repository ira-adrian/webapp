<?php

namespace Siarme\ExpedienteBundle\Repository;

/**
 * RecordatorioRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class RecordatorioRepository extends \Doctrine\ORM\EntityRepository
{

	 /**
     * Encuentra los  TRAMITE de con RECORDATORIO del USUARIO y 
     * los que son con estado <publico>
     * 
     */
  public function findByTramiteUsuario($usuario, $fecha = null, $tipo = "llamado")
  {
   $em = $this->getEntityManager();
   $dpto = $usuario->getDepartamentoRm();
   if ($fecha == null) {
        $fecha = (new \DateTime('now'))->format('Y-m-d');
        $consulta = $em->createQuery(
                 'SELECT rec
                        FROM ExpedienteBundle:Recordatorio rec 
                        INNER JOIN rec.tramite t
                        WHERE t.departamentoRm = :dpto 
                        AND rec.fecha >= :fecha
                        AND rec.recordatorio = :tipo
                        ORDER BY rec.fecha ASC
                        ');

    } else {
        $consulta = $em->createQuery(
                 'SELECT rec
                        FROM ExpedienteBundle:Recordatorio rec 
                        INNER JOIN rec.tramite t
                        WHERE t.departamentoRm = :dpto 
                        AND rec.fecha = :fecha
                        AND rec.recordatorio = :tipo
                        ORDER BY rec.fecha ASC
                        ');
    }
        $consulta->setParameter('dpto', $dpto); 
        $consulta->setParameter('fecha', $fecha);
        $consulta->setParameter('tipo', $tipo);
       // $consulta->setParameter('estado', true);      
        $recordatorios = $consulta->getResult();            
       
        return $recordatorios;
    }

    /**
     * Encuentra los  EXPEDIENTE de con RECORDATORIO del USUARIO y 
     * los que son con estado <publico>
     * 
     */
  public function findByExpedienteUsuario($id)
  {
        $em = $this->getEntityManager();

        $consulta = $em->createQuery(
                 'SELECT rec
                        FROM ExpedienteBundle:Recordatorio rec 
                        JOIN rec.expediente e
                        WHERE rec.usuario = :id 
                        AND rec.fecha >= :fecha
                        ORDER BY rec.fecha ASC
                        ');
        $consulta->setParameter('id', $id); 
        $fecha = (new \DateTime('now'))->format('Y-m-d');
        $consulta->setParameter('fecha', $fecha);
       // $consulta->setParameter('estado', true);      
        $recordatorios = $consulta->getResult();           
       
        return $recordatorios;
    }

}
