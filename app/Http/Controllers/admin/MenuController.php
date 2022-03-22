<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Menu\CreateFormRequest;
use App\Http\Services\Menu\MenuService;
use App\Models\Menu;

class MenuController extends Controller
{
    protected $menuService;

    public function __construct(MenuService $menuService)
    {
        $this->menuService = $menuService;
    }

    function addMenu()
    {
        $data = [
            'menus' => $this->menuService->getParent()
        ];
        return view('admin.menu.add', $data);
    }

    function processAddMenu(CreateFormRequest $request)
    {
        $this->menuService->createMenu($request);

        return redirect()->back();
    }

    function listMenu()
    {
        $data = [
            'menus' => $this->menuService->getAll()
        ];
        return view('admin.menu.list', $data);
    }

    function deleteMenu(Request $request)
    {
        $data = $this->menuService->destroyMenu($request);

        if ($data) {
            return response()->json([
                'success' => true,
                'message' => 'Xóa danh mục thành công'
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Xóa danh mục thất bại'
        ]);
    }

    function editMenu(Menu $menu)
    {
        $data = [
            'title' => "Chỉnh sửa danh mục: $menu->name",
            'menus' => $this->menuService->getAll(),
            'menu' => $menu
        ];
        return view('admin.menu.update', $data);
    }

    function processUpdateMenu(Menu $menu, CreateFormRequest $request)
    {
        $this->menuService->updateMenu($menu, $request);

        return redirect('admin/menus/list');
    }
}