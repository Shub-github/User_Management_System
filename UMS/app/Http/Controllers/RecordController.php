<?php

namespace App\Http\Controllers;

use App\record;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use DateTime;



class RecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = record::all();
        return view('user.record', compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $record = new record;
        $record->name = $request->name;
        $record->email = $request->email;
        
        $datetime1 = new DateTime($request->start);
        $datetime2 = new DateTime($request->end);
        $interval = $datetime1->diff($datetime2);
        $interval=$interval->format('%y years %m months');
        // dd($interval);
        $var=(string)$interval;
        $record->experience=$var;

         

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('uploads/avatar/', $filename);
            $record->image = $filename;
        }

        $record->save();
        return redirect()->route('record');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\record  $record
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\record  $record
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editrecord = record::find($id);
        return view('record.edit', compact('editrecord'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\record  $record
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\record  $record
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $record = record::find($id);
        $destination = 'uploads/avatar/' . $record->image;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $record->delete();
        return redirect()->back();
    }
}