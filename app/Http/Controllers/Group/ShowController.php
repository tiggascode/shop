<?php

namespace App\Http\Controllers\Group;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Group;



class ShowController extends Controller
{
    public function __invoke(Group $group){
        return view('group.show', compact('group'));
    }
}
