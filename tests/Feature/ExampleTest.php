<?php
declare(strict_types=1);
/**
 * File ExampleTest.php
 *
 * PHP version 7.4
 *
 * @category PHP
 * @package  OMeuRestaurante-Api
 * @author   O Meu Restaurante Dev Team <contato@omeurestaurante.com.br>
 * @license  https://www.omeurestaurante.com.br  Copyright
 * @link     https://www.omeurestaurante.com.br
 */

namespace Tests\Feature;

use Tests\TestCase;

/**
 * Class ExampleTest
 *
 * @category PHP
 * @package  Tests\Feature
 * @author   O Meu Restaurante Dev Team <contato@omeurestaurante.com.br>
 * @license  https://www.omeurestaurante.com.br  Copyright
 * @link     https://www.omeurestaurante.com.br
 */
class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get(env('APP_URL'));

        $response->assertStatus(200);
    }
}
