<?php

namespace App\Http\Controllers\Api;

use App\Bank;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ApiControllerTrait;

class BanksController extends Controller
{
    use ApiControllerTrait;

    protected $model;

    public function __construct(Bank $bank)
    {
        $this->model = $bank;
    }
}
