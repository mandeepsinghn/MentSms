<?php

namespace App\Http\Controllers;

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

        $categories = Category::query()->where('school_id', '=', $this->getSchoolId())
            ->where('branch_id', '=', $this->getBranchId())->paginate(10);

        return view('categories.index', compact('categories'));
        // return $categories;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->status, $request->id);
        $data = [
            'school_id' => $this->getSchoolId(),
            'branch_id' => $this->getBranchId(),
            'name' => $request->name,
            'status'=> $request->status
        ];
        //dd($request->status, $request->id, $data);
        $cat = new Category();
        $cat->fill($data);
        if($request->id){
            $cat->id = $request->id;
            $cat->exists = true;
        }
        $cat->save();
        return redirect('/categories')->with('success', ['Greate try.']);
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
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $cat = Category::find($id);    
        $cat->delete();
        return redirect('/categories')->with('success', ['Greate try.']);
    }
}
