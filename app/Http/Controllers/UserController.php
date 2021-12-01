<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session as Session2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    /**
     * @var Session
     */
    private $session;

    /**
     * @param Session $session
     */
    public function __construct(Session2 $session)
    {
        $this->session = $session;
    }
}
