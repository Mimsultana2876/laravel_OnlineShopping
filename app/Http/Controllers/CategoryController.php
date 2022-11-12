<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $show = Category::all();
        return view('admin.category.addCategory',compact('show'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.category.addCategory',compact('categories'));
        //return view('admin.category.addCategory');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       

        $validatedData = $request->validate([
            'category_name' => 'required|string|unique:categories',
           
        ],
        [
                'category_name.required'=> 'Please,Fill up Category Name',
            
        ]);
        $show = Category::create($validatedData);
        if($show){
            return redirect('/category/addCategory')->with('message', 'inserted');
        }else{
            return redirect('/category/addCategory')->with('message', 'fail');

        }
       

      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
    
        $category = Category::find($id);
        return view('admin.category.edit',['category'=>$category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Category $category)
    {
        $category = Category::find($request->id);
        $category->category_name = $request->category_name;
        $category->save();
        return redirect('category/addCategory');

        // $id=$request->id;
        // $data = array(
        //    'category_name' => $request->category_name
          
        // );
        // $category = Category::find($id);
        // $category->update($data);
        // return redirect('/category/addCategory')->with('message', 'edit');
        // if($data){
        //     return redirect('/category/addCategory')->with('message', 'edit');
        // }else{
        //     return redirect('/category/addCategory')->with('message', 'not_edit');

        // }
        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
