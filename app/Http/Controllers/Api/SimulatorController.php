<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Simulator\SimulatorRequest;
use App\Http\Traits\ApiResponse;
use App\Repositories\InstitutionFeeRepository;

class SimulatorController extends Controller
{
    use ApiResponse;

    private $simulate;
    private $institutionFees;

    /**
     * Recebe a requisição pra gerar a simulação
     *
     * @param  SimulatorRequest $simulatorRequest
     * @return \App\Http\Traits\ApiResponse
     */
    public function simulateLoan(SimulatorRequest $simulatorRequest)
    {
        $this->setInstitutionFees($simulatorRequest->all());

        $this->simulate($simulatorRequest->loan_amount);

        return $this->successfulResponse($this->simulate, 05, 'Sucesso');        

    }

    private function setInstitutionFees($parameters)
    {
        $institutionFees = new InstitutionFeeRepository();
        $this->institutionFees = $institutionFees->getInstitutionFeesByFilters($parameters);
        return $this;
    }

    private function simulate($loan_amount)
    {
        foreach ($this->institutionFees as $institutionFee) {
            $this->simulate[$institutionFee['instituicao']] = [
                "taxa" => $institutionFee['taxaJuros'],
                "parcelas" => $institutionFee['parcelas'],
                "valor_parcela" => $this->calculatesInstallmentValue($loan_amount, $institutionFee['coeficiente']),
                "convenio" => $institutionFee['convenio'],
            ];
        }

        return $this;
    }

    private function calculatesInstallmentValue($loan_amount, $coefficient)
    {
        return number_format($loan_amount * $coefficient, 2, ',', '');
    }
}
