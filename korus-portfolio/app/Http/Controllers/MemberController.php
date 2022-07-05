<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $current_members = Member::all()->where('is_old', 0);
        $old_members = Member::all()->where('is_old', 1);
        return view('member.index', compact('current_members', 'old_members'));
    }

    public function show(Member $member)
    {
        return view('member.show', compact('member'));
    }
}
