<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\InstitutionRepository;
use App\Http\Traits\ApiResponse;
use Illuminate\Http\Response;

class InstitutionController extends Controller
{
    use ApiResponse;

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function getInstitutions()
    {
        $institution = new InstitutionRepository();

        return $this->successfulResponse($institution->getAll(), 05, 'Sucesso');        
    }
}