<?php

namespace Madesst\CSRestModelBundle\Form\Type;

use Propel\PropelBundle\Form\BaseAbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class BookType extends BaseAbstractType
{
    protected $options = array(
        'data_class' => 'Madesst\CsRestModelBundle\Model\Book',
        'name'       => 'book',
    );

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('title');
        $builder->add('authorId');
    }
}
