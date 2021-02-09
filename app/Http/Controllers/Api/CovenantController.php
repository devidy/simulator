<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\CovenantRepository;
use App\Http\Traits\ApiResponse;
use Illuminate\Http\Response;

class CovenantController extends Controller
{
    use ApiResponse;

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function getCovenants()
    {
        $covenant = new CovenantRepository();

        return $this->successfulResponse($covenant->getAll(), 05, 'Sucesso');        
    }
}