<?php

namespace App\Repositories;

use App\Repositories\Contracts\InstitutionRepositoryInterface;

/**
 * Class InstitutionRepository
 *
 * @package App\Repositories
 */
class InstitutionRepository implements InstitutionRepositoryInterface
{
    /**
     * Institution
     */
    private $institutions;

    /**
     * Create a new repository instance
     *
     */
    public function __construct()
    {
        $this->institutions = json_decode(file_get_contents(storage_path("app/public/simulator/instituicoes.json")), true);
    }

    /**
     * Return a listing of the Institutions
     *
     */
    public function getAll()
    {
        return $this->institutions;
    }
}
