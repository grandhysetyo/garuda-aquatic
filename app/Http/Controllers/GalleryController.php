<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{    
    public function index()
    {
        $gallerys = Gallery::latest()->paginate(5);
        return view('backoffice.gallery.index',compact('gallerys'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    
    public function create()
    {
        return view('backoffice.gallery.create');
    }

    public function edit($id)
    {
        $gallery = Gallery::find($id); 
        return view('backoffice.gallery.edit',compact('gallery'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',            
            'filename' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();        
        if ($image = $request->file('filename')) {
            $destinationPath = 'images/gallery/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['filename'] = "$profileImage";
        }
  
        Gallery::create($input);
   
        return redirect()->route('gallery')->with('success','Gallery created successfully.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $input = $request->all();

        if ($image = $request->file('filename')) {
            $destinationPath = 'images/gallery/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['filename'] = "$profileImage";
        }else{
            unset($input['filename']);
        }
        
        $gallery = Gallery::find($id)->update($input);
  
        return redirect()->route('gallery')->with('success','Gallery updated successfully.');
    }

    public function toggleSlide($id, $status){
        Gallery::where('id',$id)->update(['status'=> $status]);

        if($status == 1){
            return redirect()->route('gallery')
                        ->with('success','Gallery turned on successfully');
        }else{
            return redirect()->route('gallery')
                        ->with('success','Gallery turned off successfully');
        }        
    }

    public function delete($id)
    {
        $gallery = Gallery::find($id)->delete();
  
        return redirect()->route('gallery')
                        ->with('success','Gallery deleted successfully');
    }
}

