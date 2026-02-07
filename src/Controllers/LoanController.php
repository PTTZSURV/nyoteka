<?php
declare(strict_types=1);
namespace App\Controllers;

class LoanController extends Controller {
    public function apply(): void {
        $this->json(['status' => 'pending']);
    }
}
