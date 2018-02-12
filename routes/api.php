<?php
/**
 * Lumen Hexagonal Microservice - api.php
 *
 * Initial version by: Bartosz Picho bartek.picho@gmail.com
 * Initial version created on: 27.01.18
 */

/**
 * Class ApiController
 *
 * @package App\Http\Controllers
 *
 * @SWG\Swagger(
 *     basePath="",
 *     host="",
 *     schemes={"http", "https"},
 *     @SWG\Info(
 *         version="1.0",
 *         title="Microservice (Lumen 5 & Hexagonal Architecture)"
 *     )
 * )
 */

// @todo implement health check
$router->get('healthcheck', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api/v1'], function () use ($router) {

    /**
     * @SWG\Post(
     *   path="/v1.0/orders",
     *   summary="Publish order",
     *   @SWG\Response(
     *     response=200,
     *     description="A list with products"
     *   ),
     *   @SWG\Response(
     *     response="default",
     *     description="an ""unexpected"" error"
     *   )
     * )
     */
    $router->post('orders', 'OrderController@exportOrder');
});

$router->group(['prefix' => 'api/v2'], function () use ($router) {
    // ...
});