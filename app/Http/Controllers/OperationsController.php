<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Schedule; //モデルと連携 インポート
use App\Comment;

class OperationsController extends Controller
{
    /**
     * Display a listing of the resource.
     
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('operations.index',compact('comments'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $operations =Schedule::all();
        $comments = Comment::all();
        //$user = Auth::user();
        //$user_name = Auth::name();

        return view('operations.create',compact('comments'));
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
        //$operations =Schedule::all();
        //$schedule = new Schedule();
        //$schedule->sei = $request->sei;
        //$schedule->save();
        $comments = Comment::all();
        $comments =new Comment();
        $comments->id = $request->id;
        $comments->comment_body = $request->comment_body;
        $comments->save();

        return redirect()->route('operations.create')->with('message', 'グループを追加しました');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /*
        $comments = Comment::all();
        return view('operations.show');
    */
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //実質SHOWかな？
        //$comments = Comment::all();
        $comment = Comment::findOrFail($id);
        return view('operations.edit',compact('comment')); 
        //operations/edit   でも動くよね～
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
        $comment = Comment::findOrFail($request->id);
        $comment->comment_body = $request->comment_body;
        $comment->save();
        session()->flash('flash_message', '投稿が完了しました');
        //return view('operations.create',compact('comment'));
        //return redirect('/');
        //return view('operations.create',compact('comment')); 
        return redirect()->route('operations.create')->with('message', '変更が完了しました');

    }

    /**
     * Remove the specified resource from storage.
     *X
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $comment= Comment::findOrFail($id);
 
        $comment->delete();
 
        return redirect()->route('operations.create')->with('message', 'グループを削除しました');
    }
}
