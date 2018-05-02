<?php

namespace App\Http\Controllers\Api;

use App\Account;
use App\Http\Controllers\ApiControllerTrait;
use App\Http\Controllers\Controller;

class AccountsController extends Controller
{
    use ApiControllerTrait;

    protected $model;
    protected $relations = ['bank'];

    public function __construct(Account $bank)
    {
        $this->model = $bank;
    }
}
