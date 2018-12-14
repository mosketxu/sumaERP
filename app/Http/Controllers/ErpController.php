<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class ErpController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return redirect('erp/home');
        }
        dd('no logado en ErpController.php');

        return redirect('login');
    }

}
