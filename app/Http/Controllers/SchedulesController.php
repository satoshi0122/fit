<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Schedule; //モデルと連携 インポート
use App\Comment;

class SchedulesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexH($group_id,$tn)
    {
        $schedules =Schedule::all();
        $comment = Comment::findOrFail($group_id);
        //$group_id=$group_id;

        return view('schedules.index',compact('schedules','comment','tn','group_id'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($group_id,$tn)
    {
        $schedules =Schedule::all();
        $comment = Comment::findOrFail($group_id);
        //$id=$group_id;
        
        //$schedules = schedule::all();

        return view('schedules.create',compact('schedules','group_id','comment','tn'));
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //storeからcreateに変更してるなう
    public function store(Request $request)
    {
        //$schedules =Schedule::all();
        $schedules = new Schedule();
        $schedules->sei = $request->sei;
        $schedules->mei = $request->mei;
        $schedules->SY = $request->SY;
        $schedules->group_id=$request->group_id;
        $schedules->w1=$request->w1;
        $schedules->w2=$request->w2;
        $schedules->w3=$request->w3;
        $schedules->w4=$request->w4;
        $schedules->w5=$request->w5;
        $schedules->w6=$request->w6;
        $schedules->w7=$request->w7;
        $schedules->w8=$request->w8;
        $schedules->w9=$request->w9;
        $schedules->w10=$request->w10;
        $schedules->w11=$request->w11;
        $schedules->w12=$request->w12;
        $schedules->w13=$request->w13;
        $schedules->w14=$request->w14;
        $schedules->w15=$request->w15;
        $schedules->w16=$request->w16;
        $schedules->w17=$request->w17;
        $schedules->w18=$request->w18;
        $schedules->w19=$request->w19;
        $schedules->w20=$request->w20;
        $schedules->w21=$request->w21;
        $schedules->w22=$request->w22;
        $schedules->w23=$request->w23;
        $schedules->w24=$request->w24;
        $schedules->w25=$request->w25;
        if(isset($request->remarks)){
            $schedules->remarks=$request->remarks;
        }else{
            $schedules->remarks='';
        }
        

        $schedules->save();
        /* ??????
        if($schedules->sei!=null&&$schedules->sei!=null){
        $schedules->save();}else{
            $error_input='すべて入力されていません';
        */
        $group_id=$request->group_id;
        $tn=$request->tn;
        $schedules =Schedule::all();
        $comment = Comment::findOrFail($group_id);
        //$group_id=$group_id;

        //return view('schedules.index',compact('schedules','comment','tn','group_id'));
        //
        return redirect()->route('schedules.index',compact('schedules','comment','tn','group_id'));
        //->route('schedules.index',compact('schedules','comment','tn','group_id'))->with('message', 'あなたのスケジュールを追加しました。');

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
    public function edit($group_id,$tn,$id)
    {
        //schedulesではない　大本の配列ではなく、一つのＩＤのデータしかない！
        $schedule = schedule::findOrFail($id);
        return view('schedules.edit',compact('schedule','group_id','tn'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $schedule = Schedule::findOrFail($request->id);
        $schedule->sei = $request->sei;
        $schedule->mei = $request->mei;
        $schedule->SY = $request->SY;
        //group_idは変更なし
        $schedule->w1=$request->w1;
        $schedule->w2=$request->w2;
        $schedule->w3=$request->w3;
        $schedule->w4=$request->w4;
        $schedule->w5=$request->w5;
        $schedule->w6=$request->w6;
        $schedule->w7=$request->w7;
        $schedule->w8=$request->w8;
        $schedule->w9=$request->w9;
        $schedule->w10=$request->w10;
        $schedule->w11=$request->w11;
        $schedule->w12=$request->w12;
        $schedule->w13=$request->w13;
        $schedule->w14=$request->w14;
        $schedule->w15=$request->w15;
        $schedule->w16=$request->w16;
        $schedule->w17=$request->w17;
        $schedule->w18=$request->w18;
        $schedule->w19=$request->w19;
        $schedule->w20=$request->w20;
        $schedule->w21=$request->w21;
        $schedule->w22=$request->w22;
        $schedule->w23=$request->w23;
        $schedule->w24=$request->w24;
        $schedule->w25=$request->w25;
        if(isset($request->remarks)){
            $schedule->remarks=$request->remarks;
        }else{
            $schedule->remarks='';
        }
        $schedule->save();

        //session()->flash('flash_message', '変更が完了しました');
        //return redirect()->route('index')->with('message', '変更が完了しました');



        $group_id=$request->group_id;
        $tn=$request->tn;
        $schedules =Schedule::all();
        $comment = Comment::findOrFail($group_id);
        //$group_id=$group_id;

        //return view('schedules.index',compact('schedules','comment','tn','group_id'));
        //
        session()->flash('flash_message', '投稿が完了しました');
        return redirect()->route('schedules.index',compact('schedules','comment','tn','group_id'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        //
        $schedule= Schedule::findOrFail($id);
 
        $schedule->delete();

        $group_id=$request->group_id;
        $tn=$request->tn;
        $schedules =Schedule::all();
        $comment = Comment::findOrFail($group_id);
 
        return redirect()->route('schedules.index',compact('schedules','comment','tn','group_id'));
    }
}
