<?php
namespace App\Service;
use Illuminate\Support\Facades\DB;

class CaiDatService{
    public function getAll()
    {
        return DB::table('caidat')->get();
    }
}