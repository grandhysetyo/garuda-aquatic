<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sections;

class SectionController extends Controller
{
  public function index()
  {
      $sections = Sections::latest()->paginate(5);
      return view('backoffice.home.index',compact('sections'))
          ->with('i', (request()->input('page', 1) - 1) * 5);
  }

  public function create()
  {
      return view('backoffice.home.create');
  }

  public function edit($id)
  {
      $section = Sections::find($id); 
      return view('backoffice.home.edit',compact('section'));
  }
       
  public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category' => 'required',
            'filename' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();        
        if ($image = $request->file('filename')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['filename'] = "$profileImage";
        }
  
        Sections::create($input);
   
        return redirect()->route('home')->with('success','Sections created successfully.');
    }

    public function update(Request $request, $id)
    {
      $request->validate([
          'title' => 'required',
          'description' => 'required',
          'category' => 'required',
      ]);

      $input = $request->all();

      if ($image = $request->file('filename')) {
          $destinationPath = 'images/';
          $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
          $image->move($destinationPath, $profileImage);
          $input['filename'] = "$profileImage";
      }else{
          unset($input['filename']);
      }
      
      $section = Sections::find($id)->update($input);

      return redirect()->route('home')->with('success','Section updated successfully.');
    }

    public function toggleSlide($id, $status){
      Sections::where('id',$id)->update(['status'=> $status]);

      if($status == 1){
          return redirect()->route('home')
                      ->with('success','Section turned on successfully');
      }else{
          return redirect()->route('home')
                      ->with('success','Section turned off successfully');
      }        
    }

    public function delete($id)
    {
        $section = Sections::find($id)->delete();

        return redirect()->route('home')
                        ->with('success','Section deleted successfully');
    }
}
