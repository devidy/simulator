<?php

namespace App\Repositories\Contracts;

/**
 * Interface CovenantRepositoryInterface
 *
 * @package App\Repositories\Contracts
 */
interface InstitutionFeeRepositoryInterface
{
    /**
     *
     */
    public function getAll();

    /**
     * Obtem as taxas de acordo com o filtro
     *
     * @param array $parameters
     * @return collect
     */
    public function getInstitutionFeesByFilters(array $parameters);

}