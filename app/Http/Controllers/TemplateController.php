<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\templates;
use App\list_services;
use Validator;
use App;

class TemplateController extends Controller
{
    /**
    * Xoa template
    * @param $id
    * @return array || json
    */
    public function getXoa($id){
      $templates = templates::find($id);
      $templates->delete();
      return redirect('templates')->with('thongbao','Xóa thành công');
   }

 //
   public function getSua($id){
       // // $list_services = list_services::all();
       // $templates = templates::find($id);
       // return view('page.edittemp' ,['template'=>$templates]);
       return view('page.templates.sua');
   }
 public function postSua(Request $request ,$id){
     // $this->validate($request,
     //     [
     //         'services' => 'required|min:3',
     //
     //     ],[
     //         'services.required'=>'Bạn chưa nhập tên',
     //         'services.unique'=>'Tên đã tồn tại',
     //         'services.min'=>'Tên phải có 3 ký tự'
     //     ]);
     //
     // $templates = templates::find($id);
     // $templates->id_list_services = $request->list_services;
     // $templates->service = $request->service;
     // $templates->template =  $request->template;
     // $templates->save();
     //
     // return redirect('page.edittemp'.$id)->with('thongbao','Sửa thành công');
 }

 // thêm template
 public function getThem(){
    $templates = templates::all();
     return view('page/templates/them');
 }
 public function postThem(Request $request){
    $this->validate($request,
     [
         'txtService' => 'required ',
         'txtTemplate' =>'required ',
     ]);

     $templates = new templates();
     $templates->service = $request->txtService;
     $templates->template = $request->txtTemplate;
     $templates->save();
     return redirect()->back()->with('thongbao','Bạn đã thêm thành công');
 }
}
