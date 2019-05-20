<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\templates;

class PageController extends Controller
{
    public function getIndex(){
      return view('page.trangchu');
    }
    public function getTemplates(){
      $template = templates::all();
      return view('page.templates',compact('template'));
    }
    public function getAddTemp(){
      return view('page.addtemp');
    }
    public function getXoa($id)
   {
      $templates = templates::find($id);

      // $tintuc = TinTuc::where('idLoaiTin',$id)->delete();

       $templates->delete();
       return redirect('templates')->with('thongbao','Xóa thành công');
   }
}
