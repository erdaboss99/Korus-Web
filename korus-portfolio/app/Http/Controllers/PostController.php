<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public static function show(){

        $news = Post::orderBy('id', 'desc')->get();

        return view('pages/news', ['data' => $news]);
    }

    public static function showOnePost($id){

        $new = Post::find($id);

        return view('pages/news');
    }

    public static function create(Request $request){

        $request->validate([
            'title' => 'required',
            'text' => 'required',
            'img' => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);

        $newImgName = time().'-'.$request->title.'.'.$request->img->extension();

        $request->img->move(public_path('img/news_img'), $newImgName);


        $new = Post::create([
            'title' => $request->input('title'),
            'text' => $request->input('text'),
            'header_img' => $newImgName
        ]);
        
        return redirect()->route('news');
    }

    public function destroy(Request $request)
    {
        
        $new = Post::find($request->id);
        $path = public_path('img/news_img/');
        $name = $new->header_img;
        //dd('img/news_img/'.$new->header_img);
        unlink($path. $name);
        $new->delete();
        Post::destroy($request->input('id'));
        

        
        return redirect()->route('news');
    }
    public function update(Request $request, $id)
    {
        $new = Post::find($id);
        $new->title = $request->input('title');
        $new->text = $request->input('text');
        $new->header_img = $new->header_img;

        $request->validate([
            'title' => 'required',
            'text' => 'required',
            'img' => 'mimes:jpg,png,jpeg|max:5048'
        ]);
        if($request->exists('img')){
            
            $request->img->move(public_path('img/news_img'), $new->header_img);
            
        }

        $new->save();

        return redirect()->route('news');

    }
}
