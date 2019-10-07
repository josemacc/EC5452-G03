<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class User
 * @package App\Models
 * @version October 7, 2019, 1:06 pm UTC
 *
 * @property string name
 * @property string first_name
 * @property string last_name
 * @property string gender
 * @property date date_of_birth
 * @property boolean is_subscribed
 * @property string email
 * @property string|\Carbon\Carbon email_verified_at
 * @property string password
 * @property integer view_count
 * @property string remember_token
 */
class User extends Model
{
    use SoftDeletes;

    public $table = 'users';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'first_name',
        'last_name',
        'gender',
        'date_of_birth',
        'is_subscribed',
        'email',
        'email_verified_at',
        'password',
        'view_count',
        'remember_token'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'gender' => 'string',
        'date_of_birth' => 'date',
        'is_subscribed' => 'boolean',
        'email' => 'string',
        'password' => 'string',
        'view_count' => 'integer',
        'remember_token' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
