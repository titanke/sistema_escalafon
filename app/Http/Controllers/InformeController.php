<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
use Yajra\Datatables\Datatables;
use App\Helpers\FileHelper;
use DB;

class InformeController extends Controller
{

    public function index()
    {
        return view('Area.index');
    }

}
