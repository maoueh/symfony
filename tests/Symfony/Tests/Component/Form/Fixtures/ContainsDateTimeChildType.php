<?php

namespace Symfony\Tests\Component\Form\Fixtures;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ContainsDateTimeChildType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder->add('date', 'datetime', array('data' => new \DateTime()));
    }

    public function getName()
    {
        return 'contains_date_time_child';
    }
}