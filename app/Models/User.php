<?php
declare(strict_types=1);
/**
 * PHP version 7.4
 *
 * @category PHP
 * @package  OMeuRestaurante-Api
 * @author   O Meu Restaurante Dev Team <contato@omeurestaurante.com.br>
 * @license  https://www.omeurestaurante.com.br  Copyright
 * @link     https://www.omeurestaurante.com.br
 */

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * Class User
 *
 * @category PHP
 * @package  App\Models
 * @author   O Meu Restaurante Dev Team <contato@omeurestaurante.com.br>
 * @license  https://www.omeurestaurante.com.br  Copyright
 * @link     https://www.omeurestaurante.com.br
 */
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
