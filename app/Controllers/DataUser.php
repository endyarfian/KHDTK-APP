<?php

namespace App\Controllers;

class DataUser extends BaseController
{
    public function index()
    {
        $data['title'] = 'KHDTK APPS - Data Pengguna';
        $data['footer'] = 'KHDTK WEB APPS Ver. 2. 0.';
        $data['credit'] = ' Copyright © 2022, constructed by<a target="#" href="#"> enlisters studio/endyarfian</a>.';
        // $users = new \Myth\Auth\Models\UserModel();
        // $data['users'] = $users->findAll();
        $db = \Config\Database::connect();
        $builder = $db->table('users');
        $builder->select('users.id as userid, username, email, fullname, created_at, active, name');
        $builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $query = $builder->get();

        $data['users'] = $query->getResult();

        return view('apps/userdata', $data);
    }
}
