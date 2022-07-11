<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;

class ChoirController extends Controller
{
    public function index()
    {
        $current_members = Member::all()->where('is_old', 0);
        $old_members = Member::all()->where('is_old', 1);
        return view('pages/aboutus', compact('current_members', 'old_members'));
    }

    public function editCurrent(){
        $members = Member::all()->where('is_old', 0);
        return view('pages/member/current/edit', compact('members'));

    }

    public function deleteCurrent($id)
    {
        $member = Member::find($id);

        $path = public_path('uploadfolder/members/');
        $pic = $member->source;
        unlink($path. $pic);
        Member::destroy($member->id);
        return redirect('tag/current/edit');
    }
}
