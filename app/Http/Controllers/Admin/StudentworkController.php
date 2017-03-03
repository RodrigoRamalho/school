<?php

namespace App\Http\Controllers\Admin;

use App\Studentwork;
use Illuminate\Database\Eloquent\Model;

class StudentworkController extends Controller
{
    protected static $title = 'Trabalhos do Estudante';
    protected static $icon_class = 'fa fa-book';

    public function getModel(): Model
    {
    	return new Studentwork();
    }

    protected $list_display = [
		'work_date',
		'status',
	];

	protected $form_fields = [

	];
/*
	protected $form_fields = [
		'nome_fantasia' => [
			'type' => 'text',
			'options' => [
				'label' => 'Nome fantasia',
				'attr' => [
					'style' => 'max-width: 500px;'
				],
			],
		],
		'uf' => [
		'type' => 'text',
		'options' => [
		'label' => 'UF',
		'attr' => [
		'maxlength' => '2',
		'style' => 'max-width: 100px;'
		],
		]
		],
		'admins' => [
		'type' => 'entity',
		'options' => [
		'label' => 'Administradores',
		'label_attr' => [
		'style' => 'display: block',
		],
		'class' => User::class,
		'property' => 'name',
		'empty_value' => 'Sem administrador',
		'expanded' => false,
		'multiple' => true,
		'attr' => [
		'style' => 'max-width: 60%;'
		],
		],
		],
		'funcionarios' => [
		'type' => 'entity',
		'options' => [
		'label' => 'Funcionários',
		'label_attr' => [
		'style' => 'display: block',
		],
		'class' => User::class,
		'property' => 'name',
		'empty_value' => 'Sem funcionário',
		'expanded' => false,
		'multiple' => true,
		'attr' => [
		'style' => 'max-width: 60%;',
		],
		],
		],
	];*/
}
