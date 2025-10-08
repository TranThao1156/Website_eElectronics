<?php
namespace App\Http\Controllers;
use App\Service\ProductsService;
use App\Service\SanPhamService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    protected $ProductsService;
    public function __construct(SanPhamService $products)  
    {
        $this->ProductsService = $products;
    }
    public function index(){
        $dsSanPham = $this->ProductsService->getAll();
        return view();
    }
    public function topseller(Request $request)
    {
        $recentlyViewed = $request->session()->get('topseller', []);

        $recentProducts = [];
        foreach ($recentlyViewed as $MaSanPham) {
            $sp = $this->ProductsService->find($MaSanPham);
            if ($sp) {
                $recentProducts[] = $sp;
            }
        }

        return view('user.recently-viewed', [
            'recentProducts' => $recentProducts
        ]);
    }
}