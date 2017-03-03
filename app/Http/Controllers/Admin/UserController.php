<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Http\Requests\UserRequest;
use Illuminate\Database\Eloquent\Model;

class UserController extends Controller
{
    protected static $title = 'User';
    protected static $icon_class = 'fa fa-book';

    protected $list_display = [
		'name',
		'email',
	];

	protected $form_fields = [
	    'name',
	    'email',
	    'password'
	];

	public function __construct(UserRequest $request)
	{
	    $this->request = $request;
	}

	protected function getModel(): Model
	{
	    return new User();
	}

	public function store()
	{
	    $dados = $this->request()->all();

	    $dados['password'] = bcrypt($dados['password']);
	    $dados['role_id'] = 0;
	    $dados['first_name'] = explode(" ", $dados['name'])[0];
	    $dados['username'] = explode(" ", $dados['name'])[0];
	    $dados['is_admin'] = true;
	    $this
	        ->getModel()
	        ->fill($dados)
	        ->save();

	    return redirect()->action('\\'.static::class.'@index');
	}

	public function edit($id)
	{
	    $this->form_fields = [
	        'name',
	        'email',
	    ];
	    return parent::edit($id);
	}

	public function update($id)
	{
	    $model = $this->getModel()->newQuery()->where('id', $id)->firstOrFail();

	    $model->name = $this->request()->name;
	    $model->email = $this->request()->email;

	    $model->save();

	    return redirect()->action('\\'.static::class.'@index');
	}
}
