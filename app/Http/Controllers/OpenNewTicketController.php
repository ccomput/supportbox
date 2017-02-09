<?php

namespace supportbox\Http\Controllers;

use Illuminate\Http\Request;

class OpenNewTicketController extends Controller
{
    public function openTicket() {

        return view('open_new_ticket');
    }
}
