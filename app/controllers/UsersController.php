<?php

class UsersController extends BaseController
{
	protected $table = 'users';
	public $timestamps = false;
	public static function validate($input)
	{
		$rules = array(
			'username' => 'Required|Min:3|Max:20|AlphaNum|Unique:users'
			'password' => 'Required|AlphaNum|Between:4,20'
			'email' => 'Required|Between:3,64|Email|Unique:users'
		);

		$v = Validator::make($input, $rules);
		if ($v->passes())
		{

		}
		else
		{
			if ($v->getMessages()->has('email'))
			{
				
			}
		}
	}
}