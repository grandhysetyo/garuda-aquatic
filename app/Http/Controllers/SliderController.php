<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sliders;

class SliderController extends Controller
{    
    public function index()
    {
        $sliders = Sliders::latest()->paginate(5);
        return view('backoffice.slider.index',compact('sliders'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    
    public function create()
    {
        return view('backoffice.slider.create');
    }

    public function edit($id)
    {
        $slider = Sliders::find($id); 
        return view('backoffice.slider.edit',compact('slider'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'filename' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();        
        if ($image = $request->file('filename')) {
            $destinationPath = 'images/sliders/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['filename'] = "$profileImage";
        }
  
        Sliders::create($input);
   
        return redirect()->route('slider')->with('success','Slider created successfully.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $input = $request->all();

        if ($image = $request->file('filename')) {
            $destinationPath = 'images/sliders/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['filename'] = "$profileImage";
        }else{
            unset($input['filename']);
        }
        
        $slider = Sliders::find($id)->update($input);
  
        return redirect()->route('slider')->with('success','Slider updated successfully.');
    }

    public function toggleSlide($id, $status){
        Sliders::where('id',$id)->update(['status'=> $status]);

        if($status == 1){
            return redirect()->route('slider')
                        ->with('success','Slider turned on successfully');
        }else{
            return redirect()->route('slider')
                        ->with('success','Slider turned off successfully');
        }        
    }

    public function delete($id)
    {
        $slider = Sliders::find($id)->delete();
  
        return redirect()->route('slider')
                        ->with('success','Slider deleted successfully');
    }
}
