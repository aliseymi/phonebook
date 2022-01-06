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

        if (!Validation::isValidMobileNumber($mobile)) {
            $data = [
                'alreadyExists' => false,
                'success' => false,
                'message' => 'Invalid mobile Number!'
            ];

            view_die('contact.add-result', $data);
        }

        $count = $this->contactModel->count(['mobile' => $mobile]);

        if ($count) {
            $data = [
                'alreadyExists' => true,
                'message' => "The number $mobile already exists!"
            ];

            view_die('contact.add-result', $data);
        }

        if (!Validation::isValidEmail($email)) {
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

    public function showEditForm()
    {
        $id = request()->get_route_param('id');

        $contact = $this->contactModel->get('*', ['id' => $id])[0];

        view('contact.edit-contact', compact('contact'));
    }

    public function update()
    {
        $id = request()->get_route_param('id');

        $params = request()->params();
        $name = $params['name'];
        $mobile = $params['mobile'];
        $email = $params['email'];



        if (!Validation::isValidMobileNumber($mobile)) {
            $data = ['id' => $id, 'success' => false, 'alreadyExists' => false, 'message' => "Invalid Mobile Number!"];
            view_die('contact.edit-result', $data);
        }

        if (!Validation::isValidEmail($email)) {
            $data = ['id' => $id, 'success' => false, 'alreadyExists' => false, 'message' => "Invalid Email Address!"];
            view_die('contact.edit-result', $data);
        }

        $contact_by_mobile = $this->contactModel->get('*', ['mobile' => $mobile]);


        if ($contact_by_mobile) {

            $contact_by_mobile = $contact_by_mobile[0];

            if ($contact_by_mobile->id == $id) {

                $this->contactModel->update([
                    'name' => $name,
                    'mobile' => $mobile,
                    'email' => $email
                ], ['id' => $id]);

                $data = ['id' => $id, 'success' => true, 'alreadyExists' => false, 'message' => "The contact edited successfully!"];
                view_die('contact.edit-result', $data);
            } else {
                $data = ['id' => $id, 'success' => false, 'alreadyExists' => true, 'message' => "The mobile number ($mobile) already exists!"];
                view_die('contact.edit-result', $data);
            }
        }

        $this->contactModel->update([
            'name' => $name,
            'mobile' => $mobile,
            'email' => $email
        ], ['id' => $id]);

        $data = ['id' => $id, 'success' => true, 'alreadyExists' => false, 'message' => "The contact edited successfully!"];
        view_die('contact.edit-result', $data);
    }

    public function delete()
    {
        $id = request()->get_route_param('id');

        $deleted_count = $this->contactModel->delete(['id' => $id]);

        view('contact.delete-result', compact('deleted_count'));
    }
}
