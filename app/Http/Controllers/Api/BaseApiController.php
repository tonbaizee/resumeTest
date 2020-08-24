<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Traits\BaseRestTrait;
use Illuminate\Http\Request;

/**
 * Class LoginController
 * @package App\Http\Controllers\Api\Auth
 *
 * @OA\Info(
 *     version="1.0",
 *     title="Pole plus open API",
 *     description="Pole plus"
 * )
 *
 *  @OA\SecurityScheme(
 *      @OA\Flow(
 *     flow="clientCredentials",
 *     tokenUrl="/oauth/token",
 *     scopes={}
 * ),
 *     securityScheme="bearerAuth",
 *     type="http",
 *     scheme="bearer",
 *     bearerFormat="JWT",
 *     name="Bearer",
 *     in="header",
 *     name="Authorization",
 * )
 *
 */

class BaseApiController extends Controller
{
    use BaseRestTrait;

    protected $user;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user = $this->getUser();
            return $next($request);
        });
    }

    /**
     * @return Authenticatable|null
     */
    private function getUser()
    {
        return auth('api')->user();
    }

    /**
     * Pagination
     *
     * @param $modelName
     * @param int $limit
     * @param int $page
     *
     * @return mixed
     */
    public function paginate($modelName, $limit, $page)
    {

        return $modelName::skip($limit*($page - 1))->take($limit);
    }
}
