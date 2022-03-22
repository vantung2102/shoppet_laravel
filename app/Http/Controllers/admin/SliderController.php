<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Http\Services\Slider\SliderService;

class SliderController extends Controller
{
    protected $sliderService;

    public function __construct(SliderService $sliderService)
    {
        $this->sliderService = $sliderService;
    }

    public function index()
    {
        return view('admin.slider.list', [
            'sliders' => $this->sliderService->getSlider(),
        ]);
    }

    public function addSlider()
    {
        return view('admin.slider.add');
    }

    public function processAddSlider(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'thumbnail' => 'required',
            'url' => 'required',
        ]);

        $this->sliderService->insertSlider($request);

        return redirect('admin/slider/list');
    }

    public function editSlider(Slider $slider)
    {
        return view('admin.slider.update', [
            'title' => 'Chỉnh sửa slider' . $slider->name,
            'slider' => $slider,
        ]);
    }

    public function processUpdateSlider(Slider $slider, Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'thumbnail' => 'required',
            'url'   => 'required'
        ]);

        $result = $this->sliderService->updateSlider($slider, $request);

        if ($result === false) {
            return redirect()->back();
        }

        return redirect('admin/slider/list');
    }

    public function deleteSlider(Request $request)
    {
        $result = $this->sliderService->deleteSlider($request);

        if ($result) {
            return response()->json([
                'success' => true,
                'message' => 'Xóa Slider thành công'
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Xóa Slider thất bại'
        ]);
    }
}