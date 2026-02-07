<?php
/**
 * Eligibility Controller
 */

declare(strict_types=1);

namespace App\Controllers;

class EligibilityController extends Controller
{
    public function check(): void
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->json(['error' => 'Method not allowed'], 405);
            return;
        }

        $data = json_decode(file_get_contents('php://input'), true) ?? $_POST;

        $errors = $this->validate($data, [
            'name' => 'required|min:2',
            'phone_number' => 'required|numeric|min:10',
            'id_number' => 'required|numeric',
            'loan_type' => 'required',
        ]);

        if (!empty($errors)) {
            $this->json(['errors' => $errors], 422);
            return;
        }

        // Check eligibility based on criteria
        $eligible = $this->checkEligibility($data);

        $this->json([
            'eligible' => $eligible,
            'loan_amount' => $eligible ? 15000 : 0,
            'message' => $eligible ? 'You qualify for a loan!' : 'You do not meet the eligibility criteria.',
        ]);
    }

    private function checkEligibility(array $data): bool
    {
        // Basic eligibility checks
        // - Valid phone number (starts with 254 or 0)
        // - Valid ID number
        // - Loan type is valid

        $validLoanTypes = ['Car Loan', 'Education Loan', 'Emergency Loan', 'Rental Loan'];
        
        if (!in_array($data['loan_type'], $validLoanTypes)) {
            return false;
        }

        // Phone number validation (Kenya format)
        if (!preg_match('/^(254|0)7\d{8}$/', $data['phone_number'])) {
            return false;
        }

        // ID number validation
        if (!is_numeric($data['id_number']) || strlen($data['id_number']) < 5) {
            return false;
        }

        return true;
    }
}
