<?php

namespace App\Http\Controllers\Sub_Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Sub_Category\StoreRequest;
use App\Http\Requests\Sub_Category\Sub_CategoryRequest;
use App\Http\Requests\Sub_Category\UpdateRequest;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class Sub_CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sub_categories = SubCategory::all();
        $categories = Category::all();
        return view('sub_category.index', compact('sub_categories', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('sub_category.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        SubCategory::firstOrCreate($data);
        return redirect()->route('sub_category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sub_category = SubCategory::where('id', $id)->first();
        return view('sub_category.show', compact('sub_category'));
    }

    /**
     * Show the form for editing the specified resource.
     *

     * @return \Illuminate\Http\Response
     */
    public function edit(SubCategory $sub_category)
    {
        $categories = Category::all();
        return view('sub_category.edit', compact('sub_category', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, SubCategory $sub_category)
    {
        $data = $request->validated();
        $sub_category->update($data);

        return view('sub_category.show', compact('sub_category'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubCategory $sub_category)
    {
        $sub_category->delete();
        return redirect()->route('sub_category.index');
    }

}
