<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message'); //jika dijalankan home/index ini akan menampilkan dari folder view dan file welcome_message.php
	}
}
