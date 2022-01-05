<?php

namespace App\Controllers;

use App\Models\Contact;

class HomeController 
{
    private $contactModel;

    public function __construct()
    {
        $this->contactModel = new Contact();
    }

    public function index()
    {
        $contacts = $this->contactModel->getAll();

        view('home.index', compact('contacts'));
    }
}