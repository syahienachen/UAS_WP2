<?php

namespace App\Controllers;

use \Myth\Auth\Models\UserModel;
use \Myth\Auth\Password;
use \Myth\Auth\Authorization\GroupModel;

class Admin extends BaseController
{

    public function index()
    {

    }

    
    public function manage_materi()
    {

        $data['title'] = 'Manage Materi';
        return view('admin/manage_materi', $data);
    }


    public function datalist()
    {
        $userModel = new UserModel();
        $data['users'] = $userModel->findAll();
        
        $groupModel = new GroupModel();

        foreach ($data['users'] as $row) 
        {
            $dataRow['group'] = $groupModel->getGroupsForUser($row->id);
            $dataRow['row'] = $row;
            $data['row'.$row->id] = view('admin/row', $dataRow);
        }
        
        $data['groups'] = $groupModel->findAll();

        $data['title'] = 'Users';
        return view('admin/datalist', $data);
    }

    public function changeGroup()
    {
        $userId = $this->request->getVar('id');
        $groupId = $this->request->getVar('group');
        
        $groupModel = new GroupModel();
        $groupModel->removeUserFromAllGroups(intval($userId));

        $groupModel->addUserToGroup(intval($userId), intval($groupId));

        return redirect()->to(base_url('/admin/datalist'));

    }

    public function changePassword($id = null)
    {
        if ($id==null) 
        {
            return redirect()->to(base_url('/admin/datalist'));
        } 
        else
        {
            $data = [            
                'id' => $id,
                'title' => 'Update Password',
            ];
            return view('admin/set_password', $data);            
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
                'title' => 'Update Password',
                'validation' => $this->validator,
            ];

            return view('admin/set_password', $data);
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

            return redirect()->to(base_url('/admin/datalist'));
        }
    }
    

}
