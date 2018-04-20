<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;

class CategoryController extends Controller
{
    public function addCategory(){
    	return view("admin.category.addCategory");
    }

    public function saveCategory(Request $request){
        $this->validate($request,[
            "categoryName"=>"required |min:3 |max:10 |unique:categories",
            "categoryDescription"=>"required",
            "publicationStatus"=>"required"

    ]);


    	$categories = new Category();

    	$categories->categoryName = $request->categoryName;
    	$categories->categoryDescription = $request->categoryDescription;
    	$categories->publicationStatus = $request->pub;
    	$categories->save();
    	return redirect("/add-category")->with("msg", "Category save in database successfully");
    }

    public function manageCategory(){
        $categories = Category::all();
        return view("admin.category.manageCategory", ["categories" => $categories]);

    }

    public function editCategory($id){
        $categoryById = Category::where("id", $id)->first();
        return view("admin.category.editCategory", ["categoryById"=>$categoryById]);
    }

    public function updateCategory(Request $request){
        $category = Category::find($request->categoryId);

        $category->categoryName = $request->categoryName;
        $category->categoryDescription = $request->categoryDescription;
        $category->publicationStatus = $request->publicationStatus;
        $category->save();

        return redirect("/manage-category")->with("msg", "Category Updated Successfully");
    }
    public function deleteCategory($delete_id){
        $category = Category::find($delete_id);
        $category->delete();

        return redirect("/manage-category")->with("msg", "Delete Category Successfully");
    }


}
 