<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
   public function index(){

    $items=Item::paginate(2);
    return view('index',compact('items'));//links()
   }

   public function create(){

    return view('create');

   }

   public function store(){

        request()->validate([
        'name'=>'required|min:2',
        'image'=>'required|mimes:png,jpg'
    ],[
        'name.required'=>'နာမည်ထည့်ပေးပါ။',
        'name.min'=>'အနဲဆုံးနှစ်လုံးရေးပေးပါ။',
        'image.required'=>'ပုံရွေးချယ်ပါ.....',
        'image.mimes'=>'ပုံသာရွေးချယ်ပေးပါ။'
    ]);

    if(request()-> has ('image')){
    $image=request()->file('image');
    $file_name=$image->getClientOriginalName();
    $image->move(public_path('/image'),$file_name);
    $image_path="/image/".$file_name;// /image/default.png
    }
    Item::create([

        'name'=>request()->name,
        'image'=>$image_path

         ]);
          return redirect('/')->with('success','Created successfully');
   }


        public function edit($id){

            $item=Item::find($id);
            return view('edit',compact('item'));

        }

        public function update($id){

            $item=Item::where('id',$id);


          if(request()->has ('image')){
               $image=request()->file('image');
               $name=$image->getClientOriginalName();
               $image->move(public_path('/image'),$name);
               $image_name='/image/'.$name;

          }else{
            $image_name=$item->first()->image;
          }

          $item->update([
            'name'=>request()->name,
            'image'=>$image_name
          ]);

          return redirect()->back()->with('success','Updated Success');
        }

            public function delete($id){
                Item::where('id',$id)->delete();
                return redirect()->back()->with('success','Deleted Successfully');
            }

}
