<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function listGallery()
    {
        $galleries = Gallery::orderBy('id','desc')->paginate(50);

        $galleries = Gallery::orderBy('id','desc')->paginate(50);
        for($i=0;$i<sizeof($galleries);$i++){
            $p_count = DB::table('pictures')
                    ->select('gallery_id')
                    ->where('gallery_id','=',$galleries[$i]['attributes']['id'])
                    ->count();
            $p_lead = DB::table('pictures')
                    ->select('thumbnail')
                    ->where('gallery_id','=',$galleries[$i]['attributes']['id'])
                    ->first();
            $copy = $galleries[$i]['attributes'];
            $copy['p_count'] = $p_count;
            $copy['p_lead'] = $p_lead;
            $galleries[$i]['attributes'] = $copy;
        }
        $this->layout->main = View::make('home')->nest('content','galeria',compact('galleries'));
    }
}
