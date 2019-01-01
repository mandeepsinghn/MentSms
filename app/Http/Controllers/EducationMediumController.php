<?php

namespace App\Http\Controllers;

use App\Models\EducationMedium;
use Illuminate\Http\Request;

class EducationMediumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $educationMedium = EducationMedium::query()->where('school_id', '=', $this->getSchoolId())
            ->where('branch_id', '=', $this->getBranchId())->paginate(1);
        return view('education-mediums.index', compact('educationMedium'));        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [
            'school_id' => $this->getSchoolId(),
            'branch_id' => $this->getBranchId(),
            'name' => $request->name
        ];
//        dd($data);
        $cat = new EducationMedium();
        $cat->fill($data);
        $cat->save();
        return redirect('/education-mediums')->with('success', ['Greate try.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EducationMedium  $educationMedium
     * @return \Illuminate\Http\Response
     */
    public function show(EducationMedium $educationMedium)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EducationMedium  $educationMedium
     * @return \Illuminate\Http\Response
     */
    public function edit(EducationMedium $educationMedium)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EducationMedium  $educationMedium
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EducationMedium $educationMedium)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EducationMedium  $educationMedium
     * @return \Illuminate\Http\Response
     */
    public function destroy(EducationMedium $educationMedium)
    {
        //
    }
}
