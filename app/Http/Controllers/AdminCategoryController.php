<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;
use App\Category;
use Session;
class AdminCategoryController extends Controller
{
    function categoryList(){
        $categories=Category::where("status",1)->get();
        $data['categories']=$categories;
        return view('admin.category.category_list')->with($data);
    }

    function addCategory(){
    	return view("admin.category.add_category");
    }

    function saveCategory(){
    	$catname=request("name");
    	$status=1;
    	Category::create(["category_name"=>$catname,"status"=>$status]);
    	Session::flash("success","Category added successfully");
    	return redirect("admin/category");
    }

    function editCategory($cid){
    	$id=Crypt::decryptString($cid);
    	$data['category']=Category::find($id);
        return view("admin.category.edit_category")->with($data);
    }

    function updateCategory(){
    	$catname=request("name");
    	$cid=request("cid");
    	$id=Crypt::decryptString($cid);
    	
    	Category::where("id",$id)->update(["category_name"=>$catname]);
    	Session::flash("success","Category updated successfully");
    	return redirect("admin/category");
    }
}
