<?php

namespace Siarme\DocumentoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class DocumentoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('texto', TextareaType::class,  array('label'=>false,'attr' => array('class' => 'form-control'))        	    
         			 );
             // ->add('archivo', FileType::class, array('label' => 'Archivo PDF','required' => false));
        		//->add('estado', CheckboxType::class,  array('required' => false) );
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Siarme\DocumentoBundle\Entity\Documento'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'siarme_documentobundle_docadministrativo';
    }


}
