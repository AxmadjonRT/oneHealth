<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSliderRequest;
use App\Http\Requests\UpdateSliderRequest;
use App\Models\Slider;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Illuminate\Http\Response
     * \Illuminate\Contracts\View\Factory|
     * \Illuminate\Contracts\View\View|
     */
    public function index()
    {
        $slider = Slider::all();
        return view('Admin.admin.slider.index', [
            'sliders' => $slider
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $slider = new Slider();
        return view('Admin.admin.slider.create', [
            'slider' => $slider
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSliderRequest  $request
     * @return Response
     */
    public function store(StoreSliderRequest $request)
    {
        $slider = new Slider();
        $slider->name = $request->post('name');
        $slider->job = $request->post('specialization');
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('public/images/', $filename);
            $slider->image = $filename;
        }
        $slider->tel = $request->post('tel');
        $slider->email = $request->post('email');

        if ($slider->save())
        {
            return redirect('/admin/slider');
        }else{
            dd($slider);
        }

        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return Response
     */
    public function edit($id)
    {
        $slider = Slider::find($id);
        return view('Admin.admin.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSliderRequest  $request
     * @param  \App\Models\Slider  $slider
     * @return Response
     */
    public function update(UpdateSliderRequest $request, $id)
    {
        $slider = Slider::find($id);
        $slider->name = $request->post('name');
        $slider->job = $request->post('specialization');
        if($request->hasfile('image'))
        {
            $destination = 'public/images/'.$slider->image;
            if (File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('public/images/', $filename);
            $slider->image = $filename;
        }
        $slider->tel = $request->post('tel');
        $slider->email = $request->post('email');

        if ($slider->update())
        {
            return redirect('/admin/slider');
        }else{
            dd($slider);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return Response
     */
    public function destroy($id)
    {
        $slider = Slider::find($id);
        $destination = 'public/images/'.$slider->image;
        if (File::exists($destination))
            {
                File::delete($destination);
            }
        if ($slider->delete())
        {
            return redirect('/admin/slider');
        }else{
            dd($slider);
        }
    }
}
