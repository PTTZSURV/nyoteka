<?php
declare(strict_types=1);
namespace App\Controllers;

class MpesaController extends Controller {
    public function callback(): void {
        $this->json(['ResultCode' => 0]);
    }

    public function validation(): void {
        $this->json(['ResultCode' => 0]);
    }

    public function confirmation(): void {
        $this->json(['ResultCode' => 0]);
    }
}
