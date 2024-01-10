<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Product;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /*
    public function menu()
    {
        return view ('admin.pages.menu.addmenu');
    }
*/
    public function list()
{
    $menudata = Menu::all(); // Assuming you want to pass menu data to the addmenu view
    return view('admin.pages.menu.addmenu', compact('menudata'));
}

public function menu()
{   
    // dd('hi');
    $menudata = Menu::all();
    return view('admin.pages.menu.list', compact('menudata'));
}

    public function delete($id)
    {
      $menu=Menu::find($id);
    //   dd($menu);
      if($menu)
      {
        $menu->delete();      }

      return redirect()->back();
    }

    public function edit($id)
    {
      $menu= Menu::find($id);
      return view('admin.pages.menu.edit',compact('menu'));

    }
    public function update(Request $request, $id)
    {
      $menu= Menu::find($id);
    //   dd($menu);

      if($menu){
        $fileName=$menu->image;
        if($request->hasFile('image'))
          {
              $file=$request->file('image');
              $fileName=date('Ymdhis').'.'.$file->getClientOriginalExtension();

              $file->storeAs('/food/image',$fileName);

          }

        $menu->update([
            'food_name'=>$request->food_name ,
            'food_type'=>$request->food_type ,
            'image'=>$fileName,
            'food_price'=>$request->food_price,
        ]);

      }
      return redirect()->route('menu.list');

    //   return view('admin.pages.menu.edit',compact('menu'));

    }

    
  
    public function storeMenu(Request $request)
    {
        // dd($request->all());
        $fileName=null;
      if($request->hasFile('image'))
      {
          $file=$request->file('image');
          $fileName=date('Ymdhis').'.'.$file->getClientOriginalExtension();
         
          $file->storeAs('/food/image',$fileName);

      }
        Menu::create([
            'food_name'=>$request->food_name ,
            'food_type'=>$request->food_type ,
            'image'=>$fileName,
            'food_price'=>$request->food_price,
        ]);

        // dd($request->all());
        //return redirect()->back();
       return redirect(route('menu'));
    }
    
}

