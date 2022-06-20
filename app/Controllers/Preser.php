<?php

namespace App\Controllers;

class Preser extends BaseController
{
    public function cssIII()
    {
        $data['title'] = 'CSS III';
        return view('preser/css_III', $data);
    }

    public function cssIV()
    {
        $data['title'] = 'CSS IV';
        return view('preser/css_IV', $data);
    }

    public function htmlIII()
    {
        $data['title'] = 'HTML III';
        return view('preser/html_III', $data);
    }

    public function htmlIV()
    {
        $data['title'] = 'HTML IV';
        return view('preser/html_IV', $data);
    }
}
