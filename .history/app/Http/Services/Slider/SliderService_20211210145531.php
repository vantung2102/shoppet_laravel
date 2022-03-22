<?php

namespace App\Http\Services\Slider;

use Illuminate\Support\Facades\Session;
use App\Models\Slider;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class SliderService
{
    public function insertSlider($request)
    {
        try {
            // $request->except('_token');
            Slider::create($request->input());

            Session::flash('success', 'thêm slider thành công');
        } catch (\Exception $error) {
            Session::flash('error', 'thêm slider thất bại');
            Log::info($error->getMessage());

            return false;
        };

        return true;
    }

    public function getSlider()
    {
        return Slider::orderByDesc('id')->paginate(15);
    }

    public function updateSlider($slider, $request)
    {
        try {
            $slider->fill($request->input());
            $slider->save();

            Session::flash('success', 'Chỉnh sửa slider thành công');
        } catch (\Exception $error) {
            Session::flash('error', 'Chỉnh sửa slider thất bại');
            Log::info($error->getMessage());

            return false;
        }

        return true;
    }

    public function deleteSlider($request)
    {
        $slider = Slider::where('id', $request->input('id'))->first();

        if ($slider) {
            $path = str_replace('storage', 'public', $slider->thumbnail);
            Storage::delete($path);
            $slider->delete();
            return true;
        }

        return false;
    }
}