<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\Upload\UploadService;

class UploadController extends Controller
{
    protected $upload;

    public function __construct(UploadService $upload)
    {
        $this->upload = $upload;
    }

    public function uploadProductAjax(Request $request)
    {
        $url = $this->upload->uploadProduct($request);

        if ($url !== false) {
            return response()->json([
                'success' => true,
                'message' => 'Upload ảnh thành công',
                'url' => $url
            ]);
        }

        return response()->json([
            'error' => true,
            'message' => 'Upload ảnh thất bại'
        ]);
    }
}