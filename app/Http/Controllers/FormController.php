<?php

namespace App\Http\Controllers;

class FormController extends Controller
{
    public function index()
    {
    }

    public function generalElements()
    {
        return view('forms.general-elements');
    }

    public function advancedElements()
    {
        return view('forms.advanced-elements');
    }

    public function editors()
    {
        return view('forms.editors');
    }

    public function validation()
    {
        return view('forms.validation');
    }

    public function m_user(){
        return view('forms.m_user');
    }

    public function m_level(){
        return view('forms.m_level');
    }
}