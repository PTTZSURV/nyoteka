<?php
declare(strict_types=1);
namespace App\Controllers;

class TransactionController extends Controller {
    public function query(string $id): void {
        $this->json(['transaction_id' => $id, 'status' => 'processing']);
    }
}
