<?php

namespace App\Models;

use CodeIgniter\Model;

class GrupModel extends Model
{
    protected $table      = 'auth_groups';
    protected $useTimestamps = true;

    public function getGrup($slug = false)
    {
        if ($slug == false)
        {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}