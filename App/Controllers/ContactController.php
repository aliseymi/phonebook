<?php

namespace App\Controllers;

use App\Models\Contact;
use App\Utilities\Validation;

class ContactController
{
    private $contactModel;

    public function __construct()
    {
        $this->contactModel = new Contact();
    }

    public function add()
    {
        $params = request()->params();

        $name = $params['name'];
        $mobile = $params['mobile'];
        $email = $params['email'];

        if(! Validation::isValidMobileNumber($mobile)){
            $data = [
                'alreadyExists' => false,
                'success' => false,
                'message' => 'Invalid mobile Number!'
            ];

            view_die('contact.add-result', $data);
        }

        $count = $this->contactModel->count(['mobile' => $mobile]);

        if($count){
            $data = [
                'alreadyExists' => true,
                'message' => "The number $mobile already exists!"
            ];

            view_die('contact.add-result', $data);
        }

        if(! Validation::isValidEmail($email)){
            $data = [
                'alreadyExists' => false,
                'success' => false,
                'message' => 'Invalid Email Address!'
            ];

            view_die('contact.add-result', $data);
        }

        $inserted_contact_id = $this->contactModel->create([
            'name' => $name,
            'email' => $email,
            'mobile' => $mobile
        ]);

        $data = [
            'alreadyExists' => false,
            'success' => true,
            'message' => "The contact added successfully! - id: $inserted_contact_id",
        ];

        view('contact.add-result', $data);
    }
}
