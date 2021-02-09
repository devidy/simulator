<?php

namespace App\Repositories;

use App\Repositories\Contracts\InstitutionFeeRepositoryInterface;

/**
 * Class InstitutionRepository
 *
 * @package App\Repositories
 */
class InstitutionFeeRepository implements InstitutionFeeRepositoryInterface
{
    /**
     * Institution
     */
    private $institutionFees;

    /**
     * Create a new repository instance
     *
     */
    public function __construct()
    {
        $this->institutionFees = json_decode(file_get_contents(storage_path("app/public/simulator/taxas_instituicoes.json")), true);
    }

    /**
     * Return a listing of the institutionFees
     *
     */
    public function getAll()
    {
        return $this->institutionFees;
    }

    public function getInstitutionFeesByFilters($parameters)
    {
        $institutionFees = collect($this->institutionFees);
        
        if (!empty($parameters['institutions'])) {
            $institutionFees = $institutionFees->whereIn('instituicao',  $parameters['institutions']);
        }
        
        if (!empty($parameters['installment'])) {
            $institutionFees = $institutionFees->where('parcelas', $parameters['installment']);
        }

        if (!empty($parameters['covenants'])) {
            $institutionFees = $institutionFees->whereIn('convenio', $parameters['covenants']);
        }
        
        return $institutionFees;
    }
}
