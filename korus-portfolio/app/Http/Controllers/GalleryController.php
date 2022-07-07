<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\Picture;
use App\Models\Video;


class GalleryController extends Controller
{
    public function listGallery()
    {
        if(Gallery::all()->count() > 0) {
            $galleries = Gallery::all();
            foreach($galleries as $g){
                $g->count = Picture::where('gallery_id', $g->id)->count();
                $g->lead = Picture::where('gallery_id', $g->id)->first()->thumbnail;

            }
            return view('pages/gallery/galeria', compact('galleries'));
        }
        else {
            $notFound = true;
            return view('pages/gallery/galeria', compact('notFound'));
        }
    }

    public function showGallery($id) {

        $pictures = Picture::all()->where('gallery_id', $id);
        $videos = Video::all()->where('gallery_id', $id);

        return view('pages/gallery/show', compact('pictures', 'videos'));

    }
}
