<?php

namespace Buzo\CoreBundle\Admin;

use Msi\AdminBundle\Admin\Admin;
use Msi\AdminBundle\Grid\GridBuilder;
use Symfony\Component\Form\FormBuilder;

class QtvrAdmin extends Admin
{
    public function buildGrid(GridBuilder $builder)
    {
        $builder
            ->add('filename')
            ->add('secret', 'text', [
                'route' => 'buzo_core_qtvr_show',
                'route_parameters' => [
                    'secret',
                ],
            ])
            ->add('', 'action')
        ;
    }

    public function buildForm(FormBuilder $builder)
    {
        $builder
            ->add('filenameFile', 'file')
        ;
    }
}
