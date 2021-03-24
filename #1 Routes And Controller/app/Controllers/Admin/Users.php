<?php

namespace App\Controllers\Admin; //kalau kita membuat file controller di dalam folder kita harus menambahkan nama folder didalam namespace

use App\Controllers\BaseController; //dan kita juga harus menambahkan use untuk mengakses BaseController

class Users extends BaseController
{
    public function index()
    {
        echo "Ini adalah controller Users di dalam folder admin";
    }
}
