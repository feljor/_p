<?php namespace App\Controllers;


use App\Models\ScraperModel;
use Config\CustomConfig;

class AdminController extends BaseController
{
	public function index()
	{

        echo view('admin/login');
	}

    public function forgot()
    {

        echo view('admin/forgot');
    }




}
