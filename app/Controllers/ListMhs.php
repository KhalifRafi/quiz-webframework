<?php

namespace App\Controllers;

use \App\Models\UserModel;

class ListMhs extends BaseController
{
    protected $userModel;
    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        $data = [
            'title' => 'List Page',
            'users' => $this->userModel->getUser()
        ];

        return view('user/list', $data);
    }
    public function detail($id)
    {
        $data = [
            'title' => 'Detail Page',
            'user' => $this->userModel->getUser($id)
        ];
        return view('user/details', $data);
    }
}
