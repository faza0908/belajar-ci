<?php

namespace App\Controllers;

use App\Controllers\Controller;
use CodeIgniter\HTTP\ResponseInterface;

class FAQController extends BaseController
{
    public function index()
    {
        return view('v_faq');
    }
}