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

namespace App\Repositories;

use App\Models\User;
use Tbitencourt\LaravelRepositoryEloquent\RepositoryEloquent;

/**
 * Class UserRepository
 *
 * @category PHP
 * @package  App\Repositories
 * @author   O Meu Restaurante Dev Team <contato@omeurestaurante.com.br>
 * @license  https://www.omeurestaurante.com.br  Copyright
 * @link     https://www.omeurestaurante.com.br
 */
class UserRepository extends RepositoryEloquent
{
    /**
     * @inheritDoc
     */
    public function model(): string
    {
        return User::class;
    }
}
