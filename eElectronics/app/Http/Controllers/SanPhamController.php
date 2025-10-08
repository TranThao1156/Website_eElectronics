<?php

namespace App\Http\Controllers;

use App\Service\SanPhamService; 
use Illuminate\Http\Request;

class SanPhamController extends Controller
{
    protected $productsService;

    public function __construct(SanPhamService $productsService)
    {
        $this->productsService = $productsService;
    }

 
    public function index(SanPhamService $productsService)
    {
        $latestProducts = $productsService->getLatestProducts(20); // Lấy 10 sản phẩm mới nhất

        return view('user.home', compact('latestProducts'));
    }

    public function show($id)
    {
        $product = $this->productsService->findById($id);

        if (!$product) {
            abort(404, 'Sản phẩm không tồn tại');
        }

        return view('product-detail', compact('product'));
    }
    public function topseller()
    {
        $topseller = $this->productsService->topseller();
        return view('user.home', compact('topseller'));
    }
}