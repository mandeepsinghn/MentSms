<?php

namespace App\Http\Controllers;

use App\Models\Standard;
use Illuminate\Http\Request;

class StandardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $standards = Standard::query()->where('school_id', '=', $this->getSchoolId())
            ->where('branch_id', '=', $this->getBranchId())->paginate(10);
        return view('standards.index', compact('standards'));
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
        $stream = new Standard();
        $stream->fill($data);
        if($request->id){
            $stream->id = $request->id;
            $stream->exists = true;
        }
        $stream->save();
        return redirect('/standards')->with('success', ['Greate try.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Standard  $standard
     * @return \Illuminate\Http\Response
     */
    public function show(Standard $standard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Standard  $standard
     * @return \Illuminate\Http\Response
     */
    public function edit(Standard $standard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Standard  $standard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Standard $standard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Standard  $standard
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $stream = Standard::find($id);
        $stream->delete();
        return redirect('/standards')->with('success', ['Greate try.']);
    }
}
