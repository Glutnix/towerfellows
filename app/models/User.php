<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * Which fields can be mass assigned
	 * @var array
	 */
	protected $fillable = ['username','email','password'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	/**
	 * returns the remember token for the user
	 * @return string
	 */
	public function getRememberToken()
	{
	    return $this->remember_token;
	}
	
	/**
	 * sets the remember token
	 * @param string $value 
	 * @return void
	 */
	public function setRememberToken($value)
	{
	    $this->remember_token = $value;
	}
	/**
	 * returns the cookie name of the remember token
	 * @return type
	 */
	public function getRememberTokenName()
	{
	    return 'remember_token';
	}

}
