<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\ProductRequest;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Services\Products\ProductAdminService;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductAdminService $productService)
    {
        $this->productService = $productService;
    }

    public function index()
    {
        return view('admin.user.index', [
            'menus' => $this->productService->getMenu(),
            'products' => $this->productService->getProducts(),
        ]);
    }

    public function processAddProduct(ProductRequest $request)
    {
        $this->productService->insertProduct($request);

        return redirect()->back();
    }

    public function editProduct(Product $product)
    {
        return view('admin.products.update', [
            'title' => 'chỉnh sửa thú cưng ' . $product->name,
            'menus' => $this->productService->getMenu(),
            'product' => $product
        ]);
    }

    public function processUpdateProduct(Request $request, Product $product)
    {
        $result = $this->productService->updateProduct($request, $product);

        if ($result === false) {
            return redirect()->back();
        }

        return redirect('admin/index');
    }

    public function deleteProduct(Request $request)
    {
        $data = $this->productService->deleteProduct($request);

        if ($data) {
            return response()->json([
                'success' => true,
                'message' => 'Xóa sản phẩm thành công'
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Xóa sản phẩm thất bại'
        ]);
    }
}