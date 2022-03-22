<?php

namespace App\Helpers;

use Illuminate\Support\Str;

class Helper
{
    public static function menu($menus, $parent_id = 0, $str = '')
    {
        $html = '';

        foreach ($menus as $key => $menu) {
            if ($menu->parent_id == $parent_id) {
                $html .= '
                    <tr>
                        <td>' . $menu->id . '</td>
                        <td>' . $str . $menu->name . '</td>
                        <td style="text-align:center">' . self::active($menu->active) . '</td>
                        <td style="text-align:center">' . $menu->updated_at . '</td>
                        <td>
                            <a href="/admin/menus/update/' . $menu->id . '">
                                <button
                                    type="button"
                                    class="btn btn-primary btn-sm"
                                    title="Edit"
                                >
                                    <i class="far fa-edit" style="color:#fff"></i>
                                </button>
                            </a>
                            <a href="" onclick="removeRow(' . $menu->id . ',\'/admin/menus/destroy\')">
                                <button
                                    type="button"
                                    class="btn btn-danger btn-sm js-sweetalert"
                                    title="Delete"
                                    data-type="confirm"
                                >
                                    <i class="fa fa-trash text-danger"></i>
                                </button>
                            </a>
                        </td>
                    </tr>
                ';

                unset($menus[$key]);

                $html .= self::menu($menus, $menu->id, $str . '|--');
            }
        }
        return $html;
    }

    public static function active($active = 0)
    {
        return $active == 0 ? '<span class="btn btn-danger btn-xs">Không</span>' : '<span class="btn btn-success btn-xs">Có</span>';
    }

    public static function sex($sex = 0)
    {
        return $sex == 0 ? '<span class="btn btn-info btn-xs">Đực</span>' : '<span class="btn btn-success btn-xs">Cái</span>';
    }

    public static function menus($menus, $parent_id = 0)
    {
        $html = '';

        foreach ($menus as $key => $menu) {
            if ($menu->parent_id == $parent_id) {
                $html .= '
                <li class="header__nav-menu-item">
                    <a class="header__nav-menu--link" href="/danh-muc/"' . $menu->id . '-' . Str::slug($menu->name, '-') . '.html">
                    ' . $menu->name . '
                    </a>';

                unset($menus[$key]);

                if (self::isChild($menus, $menu->id)) {
                    $html .= '<ul class="navbar__shop">';
                    $html .= self::menuSecond($menus, $menu->id);
                    $html .= '</ul>';
                }

                $html .= '</li>';
            }
        }

        return $html;
    }

    public static function menuSecond($menus, $id)
    {
        $html = '';
        foreach ($menus as $key => $menu) {
            if ($menu->parent_id == $id) {
                $html .= '
                <li class="navbar__shop--item">
                    <a class="navbar__shop--link arrow-right" href="/danh-muc/"' . $menu->id . '-' . Str::slug($menu->name, '-') . '.html">
                    ' . $menu->name . '
                    </a>
                </li>';

                unset($menus[$key]);
            }
        }

        return $html;
    }

    public static function isChild($menus, $id)
    {
        foreach ($menus as $menu) {
            if ($menu->parent_id == $id) {
                return true;
            }
        }

        return false;
    }
}