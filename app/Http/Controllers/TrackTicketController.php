<?php

namespace supportbox\Http\Controllers;

use Illuminate\Http\Request;

class TrackTicketController extends Controller
{
    public function trackTicket() {

        return view('track_ticket');
    }
}
