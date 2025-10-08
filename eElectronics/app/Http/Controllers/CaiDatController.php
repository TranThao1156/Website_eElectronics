<?php

namespace App\Http\Controllers;

use App\Service\CaiDatService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CaiDatController extends Controller
{
    protected $CaiDat;

    public function __construct(CaiDatService $CaiDat)
    {
        $this->CaiDat = $CaiDat;
    }
    
    public function index() {
        $dsCaiDat = $this->CaiDat->getAll();
        return view('home', ['home' => $dsCaiDat]);
    }
}
