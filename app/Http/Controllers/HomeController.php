<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function top()
    // topアクションを動作させる為記述
    {   
        $posts = \App\Models\Post::all(); 
        // postsテーブルのデータを変数$postsに代入
        
        return view('home.top',compact("posts"));
        // viewファイルにhome/topとcompact関数で変数postsの中身の配列を渡している。ここでのドットはスラッシュと同じ意味
    }

    public function show($id)
    // $idを引数で受け取っている(中身は空)
    {
        $post = \App\Models\Post::find($id);
        // postsテーブルからデータを取得している。findメソッドは引数にテーブルの id を入れることで、データを取得できる
        return view('home.show', compact("post"));
    }

    public function new()
    //new.blade.phpを動作させる為記述
    {
        return view('home.new');
    }

    public function create(Request $request)
    {
        $title = $request->input('title');
        //formからの情報を受取る
        \App\Models\Post::create(["title" => $title]);
        //受け取った情報をDBに保存する
        return redirect("/hello");
        //一覧にリダイレクトさせる。 
    }

    public function edit($id)
    {
        $post = \App\Models\Post::find($id);
        // Postテーブルからfindメソッドでデータを取得、変数に格納
        return view('home.edit', compact("post"));
        // ビューのhome/edit.blade.phpを参照するように設定
    }

    public function update($id, Request $request)
    {
        $post = \App\Models\Post::find($id);
        // Postテーブルからfindメソッドでデータを取得、変数に格納
        $post->title = $request->title;
        //入力されたデータを代入
        $post->save();
        // saveメソッドを使っデータを保存
        return redirect("/hello");
        //一覧にリダイレクトさせる。 
    }

    public function destroy($id)
    {
        $post = \App\Models\Post::find($id);
        // Postテーブルからfindメソッドでデータを取得、変数に格納
        $post->delete();
        // deleteメソッドで$postの中身を消去
        return redirect("/hello");
        //一覧にリダイレクトさせる。
    }
}