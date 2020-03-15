<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\gameControl;
use App\User;
use Illuminate\support\Facades\Hash;


class HomeController extends Controller
{   
    
    /**
     * Display a listing of the resource.
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $users = gameControl::all()->toArray();
        // return view('home',compact('users'));
        $user_id = auth()->user()->id; 
        $user = User::find($user_id);
        return view('home')->with('gameControl',$user->gameControl); 
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['Team_name'=>'required',
                                'Tournament_Name'=>'required',
                                'Tournament_Details'=>'required',
                                'Tournament_Date'=>'required',
                                'Game_name'=>'required',
                                'Game_rules'=>'required',
                                'Game_format'=>'required']);
        $game_control = new gameControl;
        $game_control->tid = (str_random(8));
        $game_control->Team_name = $request->input('Team_name');
        $game_control->Tournament_Name = $request->input('Tournament_Name');
        $game_control->Tournament_Details = $request->input('Tournament_Details');
        $game_control->Tournament_Date = $request->input('Tournament_Date');
        $game_control->Game_name = $request->input('Game_name');
        $game_control->Game_rules = $request->input('Game_rules');
        $game_control->Game_format = $request->input('Game_format');
        $game_control->user_id = auth()->user()->id;
        
                                    /*(['Tournament_Name'=>$request->get('Tournament_Name'),
                                    'Tournament_Details'=>$request->get('Tournament_Details'),
                                    'Tournament_Date'=>$request->get('Tournament_Date'),
                                    'Game_name'=>$request->get('Game_name'),
                                    'Game_rules'=>$request->get('Game_rules'),
                                    'Game_format'=>$request->get('Game_format'),
                                    'user_id'=>$request->get(auth()->user()->id)]); */ 
                                    
        $game_control->save();
        // return redirect()->route('home')->with('success','บันทึกข้อมูลเรียบร้อย');
        return redirect('home');                            
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
