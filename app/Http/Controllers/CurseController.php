<?php

namespace App\Http\Controllers;

use App\Models\Curse;
use App\Models\CurseUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CurseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $curse = Curse::all();
        return view('Admin.Curse.index',compact('curse'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $result=User::query()->where('rule','teacher')->get();

       return view('Admin.Curse.create',compact('result'));

    }

    public function Add()
    {
        $result=User::query()->where('rule','students')->get();
        $re=Curse::all();
        return view('Admin.Curse.Add',compact('result','re'));

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
            'user_id' => 'required',
            'name' => 'required',
            'start_at' => 'required',
            'end_at' => 'required',

        ]);

        Curse::create([
            'user_id' => $request->user_id,
            'name' => $request->name,
            'start_at' => $request->start_at,
            'end_at' => $request->end_at,

        ]);
        return redirect()->route('curse.index');
    }

    public function zakhire(Request $request)
    {
        $input=$request->all();
       CurseUser::query()->insert(['curse_id'=>$input['curse_id'],
       'user_id' =>$input['user_id'],
       ]);

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Curse $curse)
    {
        $flights = $curse->teacher()->get();
        $result=$curse->users()->get();
        return view('Admin.Curse.show', compact('result','flights'));
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
