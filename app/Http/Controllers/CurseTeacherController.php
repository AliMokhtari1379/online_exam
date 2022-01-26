<?php

namespace App\Http\Controllers;

use App\Models\Curse;
use App\Models\Exam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CurseTeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $curse = Curse::query()->where('user_id','=',auth::user()->id)->get();
//        $curse=Curse::all();
        return view('Teacher.Curse.index',compact('curse'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $result=Curse::all();
        return view('Teacher.Curse.create',compact('result'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'curse_id' => 'required',
            'name' => 'required',
            'start_date' => 'required',
            'time' => 'required',
            'end_date' => 'required',

        ]);

        Exam::create([
            'curse_id' => $request->curse_id,
            'name' => $request->name,
            'start_date' => $request->start_date,
            'time' => $request->time,
            'end_date' => $request->end_date,

        ]);
        return redirect()->route('curse.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showexams( $exam)
    {
        $exams=Exam::query()->where('curse_id',$exam)->get();
        return view('Teacher.Curse.show', compact('exams'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Exam $exam)
    {
        return view('Teacher.Curse.edit', compact('exam'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Exam $exam)
    {
        $request->validate([
            'name' => 'required',
            'start_date' => 'required',
            'time' => 'required',
            'end_date' => 'required',


        ]);

        $exam->update([
            'name' => $request->name,
            'start_date' => $request->start_date,
            'time' => $request->time,
            'end_date' => $request->end_date,
        ]);

        return redirect()->route('curse.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exam $exam)
    {
        $exam->delete();
        return redirect()->route('curse.index');
    }
}
