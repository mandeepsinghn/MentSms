<?php

namespace App\Http\Controllers;

use App\Models\EducationStream;
use Illuminate\Http\Request;

class EducationStreamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $educationStream = EducationStream::query()->where('school_id', '=', $this->getSchoolId())
            ->where('branch_id', '=', $this->getBranchId())->paginate(10);
        return view('education-streams.index', compact('educationStream'));
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
        //
        $data = [
            'school_id' => $this->getSchoolId(),
            'branch_id' => $this->getBranchId(),
            'name' => $request->name,
            'status'=> $request->status
        ];
        //dd($data);
        $stream = new EducationStream();
        $stream->fill($data);
        if($request->id){
            $stream->id = $request->id;
            $stream->exists = true;
        }
        $stream->save();
        return redirect('/education-streams')->with('success', ['Greate try.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EducationStream  $educationStream
     * @return \Illuminate\Http\Response
     */
    public function show(EducationStream $educationStream)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EducationStream  $educationStream
     * @return \Illuminate\Http\Response
     */
    public function edit(EducationStream $educationStream)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EducationStream  $educationStream
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EducationStream $educationStream)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EducationStream  $educationStream
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $stream = EducationStream::find($id);    
        $stream->delete();
        return redirect('/education-streams')->with('success', ['Greate try.']);
    }
}
