<?php

namespace App\Http\Services\Upload;

use Illuminate\Support\Facades\Session;
use App\Models\Product;

class UploadService
{
    public function uploadProduct($request)
    {
        if ($request->hasFile('file')) {

            try {
                $nameFile = $request->file('file')->getClientOriginalName();

                $pathFull = 'uploads/' . date('Y/m/d');

                $request->file('file')->storeAs('public/' . $pathFull, $nameFile);

                return '/storage/' . $pathFull . '/' . $nameFile;
            } catch (\Exception $error) {
                return false;
            };
        }
    }
}