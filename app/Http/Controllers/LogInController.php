<?php

namespace supportbox\Http\Controllers;

use Illuminate\Support\Facades\DB;

class LogInController extends Controller {

    public function login() {

        return view('login');
    }

}
