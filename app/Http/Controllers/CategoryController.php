<?php

namespace Advance\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Controllers\Controller;

use Advance\category;
use Advance\Http\Requests;

use Session;

class CategoryController extends Controller
{
   
    public function index()
    {
        $cat = category::all();

         return view('admin/category/mng_category')->withCat($cat);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin/category/mng_category');
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'name' => 'required|max:25',
            'description' => 'required|max:222'

            ));

        $cat =new category;
        $cat->name =$request->name;
        $cat->description =$request->description;
       
        $cat->save();
        //dd($cat);
        return redirect()->route('category.index');
       // return back()->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
