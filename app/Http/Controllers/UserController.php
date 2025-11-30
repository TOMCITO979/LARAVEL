<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * Show a list of all of the application's users.
     */
    public function index(): View
    {
        // Aumenta el tiempo máximo solo para este método
        set_time_limit(120); // 120 segundos

        $users = DB::select("SELECT * FROM user");

        return view('user', ['users' => $users]);
    }
}
