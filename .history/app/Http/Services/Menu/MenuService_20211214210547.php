<?php

namespace App\Http\Services\Menu;

use Illuminate\Support\Facades\Session;
use App\Models\Menu;

class MenuService
{
    public function getParent()
    {
        return Menu::where('parent_id', 0)->get();
    }

    public function getAll()
    {
        return Menu::orderByDesc('id')->get();
    }

    public function createMenu($request)
    {
        try {
            Menu::create([
                'name' => (string)$request->input('name'),
                'parent_id' => (int)$request->input('parent_id'),
                'description' => (string)$request->input('description'),
                'content' => (string)$request->input('content'),
                'active' => (int)$request->input('active'),
            ]);

            Session::flash('success', 'Tạo danh mục thành công');
        } catch (\Exception $error) {
            Session::flash('error', $error->getMessage());
            return false;
        }

        return true;
    }

    public function destroyMenu($request)
    {
        $id = (int)$request->input('id');
        $result = Menu::where('id', $id)->first();

        if ($result) {
            return Menu::where('id', $id)->orWhere('parent_id', $id)->delete();
        }

        return false;
    }

    public function updateMenu($menu, $request)
    {
        // $menu->fill($request->input());
        // $menu->save();

        if ($menu->id != (int)$request->input('parent_id')) {
            $menu->name = (string)$request->input('name');
            $menu->parent_id = (int)$request->input('parent_id');
            $menu->description = (string)$request->input('description');
            $menu->content = (string)$request->input('content');
            $menu->active = (int)$request->input('active');

            $menu->save();

            Session::flash('success', 'Chỉnh sửa danh mục thành công');
            return true;
        }
        Session::flash('error', 'Chỉnh sửa danh mục thất bại! không thể trùng danh mục cha');
        return false;
    }

    public function getId($id)
    {
        return Menu::where('id', $id)->where('active', 1)->firstOrFail();
    }

    public function getProducts($menu, $request)
    {
        return $menu->products()->select('id', 'name', 'price', 'price_sale', 'thumbnail')
            ->where('active', 1)
            ->orderByDesc('id')
            ->paginate(4);
    }
}