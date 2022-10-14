<?php

namespace App\Http\Controllers\Home;

use Carbon\Carbon;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogCategoryController extends Controller
{
    public function AllBlogCateogry(){
        $blogcategory = BlogCategory::latest()->get();
        return view('admin.blog_category.blog_category_all', compact('blogcategory'));
    }
    public function AddBlogCategory(){
        return view('admin.blog_category.blog_category_add');
    }

    public function StoreBlogCategory(Request $request){
        $request->validate([
            'blog_category' => 'required',
        ],[
            'blog_category.required' => 'Blog Category Name is Required',
        ]);

            BlogCategory::insert([
                'blog_category' => $request->blog_category,
                'created_at' => Carbon::now(),
            ]);
            $notification = array(
            'message' => 'BlogCateogry Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.blog.category')->with($notification);
    }

    public function EditBlogCategory($id){
        $editBlogCateogry = BlogCategory::findOrFail($id);
        return view('admin.blog_category.blog_category_edit', compact('editBlogCateogry'));
    }
    public function UpdateBlogCategory(Request $request){
        $request->validate([
            'blog_category' => 'required',
        ],[
            'blog_category.required' => 'Blog Category Name is Required',
        ]);
        $blog_category_id = $request->id;
        BlogCategory::findOrFail($blog_category_id)->update([
            'blog_category' => $request->blog_category,
            'created_at' => Carbon::now(),
        ]);
        $notification = array(
            'message' => 'BlogCateogry Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.blog.category')->with($notification);
    }

    public function DeleteBlogCategory($id){
        BlogCategory::findOrFail($id)->delete();
        $notification = array(
            'message' => 'BlogCateogry Deleted Successfully',
            'alert-type' => 'error'
        );

        return redirect()->route('all.blog.category')->with($notification);
    }
}
