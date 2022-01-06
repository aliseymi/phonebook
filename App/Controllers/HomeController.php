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
        $where = [];
        $search_keyword = request()->search;

        if (!is_null($search_keyword)) {
            $where['OR'] = [
                'name[~]' => xss_clean($search_keyword),
                'mobile[~]' => xss_clean($search_keyword),
                'email[~]' => xss_clean($search_keyword)
            ];
        }

        $contacts = $this->contactModel->get('*', $where);

        view('home.index', compact('contacts', 'search_keyword'));
    }
}
