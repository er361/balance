<?php

namespace App\Http\Controllers;

use App\Models\UserBalance;

class BalanceController extends Controller
{

    public function userBalance($params)
    {
        return UserBalance::whereUserId($params['user_id'])
            ->latest()
            ->first();
    }

    public function history($params)
    {
        return UserBalance::limit($params['limit'] ?? 10)->get();
    }
}
