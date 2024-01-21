<?php

namespace App\Http\Controllers\Group;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Group;

use App\Http\Requests\Group\UpdateRequest;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Group $group){
        $data = $request->validated();
        $group->update($data);
        return view('group.show', compact('group'));
    }
}
