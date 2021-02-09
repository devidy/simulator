<?php

namespace App\Repositories;

use App\Repositories\Contracts\CovenantRepositoryInterface;

/**
 * Class CovenantRepository
 *
 * @package App\Repositories
 */
class CovenantRepository implements CovenantRepositoryInterface
{
    /**
     * covenant
     */
    private $covenants;

    /**
     * Create a new repository instance
     *
     */
    public function __construct()
    {
        $this->covenants = json_decode(file_get_contents(storage_path("app/public/simulator/convenios.json")), true);
    }

    /**
     * Return a listing of the covenants
     *
     */
    public function getAll()
    {
        return $this->covenants;
    }
}
