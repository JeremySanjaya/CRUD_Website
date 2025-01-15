<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('/contact', [
            'title' => "Contact",
            'nama' => "Jeremy",
            'kelas' => "11 PPLG 1",
            'linkedin' => "https://www.linkedin.com/in/jeremy-sanjaya-150387298/",
            'repository' => "https://github.com/JeremySanjaya"
        ]);
    }
}