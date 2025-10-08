<?php
namespace App\Service;

use Illuminate\Support\Facades\DB;

class SanPhamService
{
    public function getAll()
    {
        return DB::table('sanpham')
            ->where('TrangThai', 1)
            ->get();
    }

    public function find($MaSanPham)
    {
        return DB::table('sanpham')
            ->where('MaSanPham', $MaSanPham)
            ->first();
    }

    public function create($data)
    {
        return DB::table('sanpham')->insert($data);
    }
    public function update($id, $data)
    {
        return DB::table('sanpham')->where('Masanpham', $id)->update($data);
    }
    public function delete($id)
    {
        return DB::table('sanpham')->where('Masanpham', $id)->delete();
    }

   
   
    public function getLatestProducts(int $limit = 50)
    {
        return DB::table('sanpham')
            ->select(
                'MaSanPham as id',
                'Ten as TenSanPham',
                'HinhAnh',
                'GiaSauGiam as Gia'
            )
            ->orderBy('MaSanPham', 'desc')
            ->take($limit)
            ->get();
    }

    public function findById(int $id){
        return DB::table('sanpham')
            ->select(
                'MaSanPham as id',
                'Ten as TenSanPham',
                'HinhAnh',
                'GiaSauGiam as Gia',
                'MoTa',
                'ChiTietKyThuat',
                'DanhMuc'
            )
            ->where('MaSanPham', $id)
            ->first();
    }
}
