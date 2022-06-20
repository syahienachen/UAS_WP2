<?php

namespace App\Controllers;
use App\Models\GrupModel;

use \Myth\Auth\Models\UserModel;
use \Myth\Auth\Password;
use \Myth\Auth\Authorization\GroupModel;

class User extends BaseController
{
    protected $db, $builder;

    public function __construct()
    {
        $this->db      = \Config\Database::connect();
        $this->builder = $this->db->table('users');
        $this->grupModel = new GrupModel();
    }

    public function index()
    {
        $data['title'] = 'Beranda';
        return view('user/index', $data);
    }
    
    public function syarat_pemesanan()
    {
        $data['title'] = 'Syarat Pemasanan';
        return view('user/syarat_pemesanan', $data);
    }
    
    public function cssI()
    {
        $data['title'] = 'CSS I';
        return view('user/css_I', $data);
    }
    
    public function cssII()
    {
        $data['title'] = 'CSS II';
        return view('user/css_II', $data);
    }
    
    public function htmlI()
    {
        $data['title'] = 'HTML I';
        return view('user/html_I', $data);
    }
    
    public function htmlII()
    {
        $data['title'] = 'HTML II';
        return view('user/html_II', $data);
    }
    
    public function setting()
    {
        $data['title'] = 'Setting';
        return view('user/setting', $data);
    }
    
    public function forPremiumUser()
    {
        $data['title'] = 'Setting';
        return view('user/404', $data);
    }
    
    public function upgrade()
    {
        $data['title'] = 'Upgrade Account';
        return view('user/upgrade', $data);
    }

    public function changeGroup()
    {
    $userId = $this->request->getVar('id');
    $groupId = $this->request->getVar('group');

    $groupModel = new GroupModel();
    $groupModel->removeUserFromAllGroups(intval($userId));

    $groupModel->addUserToGroup(intval($userId), intval($groupId));

    return redirect()->to(base_url('/users/index'));

    }

    public function myprofile($id = 0)
    {
        $data['title'] = 'User Detail';

        $this->builder->select('users.id as userid, username, email, fullname, user_image, name, user_id, group_id, description, auth_groups.id as groupid');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $this->builder->where('users.id', $id);
        $query = $this->builder->get();

        $data['user'] = $query->getRow();

        if(empty($data['user'])) 
        {
            return redirect()->to('/user');
        }

        return view('user/myprofile', $data);
    }

    public function changePassword($id = null)
    {
        if ($id==null) 
        {
            return redirect()->to(base_url('/user'));
        } 
        else
        {
            $data = [            
                'id' => $id,
                'title' => 'Change Password',
            ];
            return view('user/set_password', $data);            
        }
    }

    public function setPassword()
    {
        $id = $this->request->getVar('id');
        $rules = [
            'password'     => 'required|strong_password',
            'pass_confirm' => 'required|matches[password]',
        ];

        if (! $this->validate($rules))
        {
            $data = [            
                'id' => $id,
                'title' => 'Change Password',
                'validation' => $this->validator,
            ];

            return view('user/set_password', $data);
        }
        else
        {
            $userModel = new UserModel();
            $data = [            
                'password_hash' => Password::hash($this->request->getVar('password')),
                'reset_hash' => null,
                'reset_at' => null,
                'reset_expires' => null,
            ];
            $userModel->update($this->request->getVar('id'), $data);  

            return redirect()->to(base_url('/user'));
        }
    }
}
