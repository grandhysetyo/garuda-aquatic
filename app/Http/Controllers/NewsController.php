<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{    
    public function index()
    {
        $newss = News::latest()->paginate(5);
        return view('backoffice.news.index',compact('newss'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    
    public function create()
    {
        return view('backoffice.news.create');
    }

    public function edit($id)
    {
        $news = News::find($id); 
        return view('backoffice.news.edit',compact('news'));
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
            $destinationPath = 'images/news/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['filename'] = "$profileImage";
        }
  
        News::create($input);
   
        return redirect()->route('news')->with('success','News created successfully.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $input = $request->all();

        if ($image = $request->file('filename')) {
            $destinationPath = 'images/news/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['filename'] = "$profileImage";
        }else{
            unset($input['filename']);
        }
        
        $news = News::find($id)->update($input);
  
        return redirect()->route('news')->with('success','News updated successfully.');
    }

    public function toggleSlide($id, $status){
        News::where('id',$id)->update(['status'=> $status]);

        if($status == 1){
            return redirect()->route('news')
                        ->with('success','News turned on successfully');
        }else{
            return redirect()->route('news')
                        ->with('success','News turned off successfully');
        }        
    }

    public function delete($id)
    {
        $news = News::find($id)->delete();
  
        return redirect()->route('news')
                        ->with('success','News deleted successfully');
    }
}

