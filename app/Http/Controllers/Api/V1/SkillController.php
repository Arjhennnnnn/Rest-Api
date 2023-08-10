<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSkillRequest;
use App\Http\Resources\V1\skillCollection;
use App\Http\Resources\V1\skillResource;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index(){
        // return response()->json("Skill Index");
        // return skillResource::collection(Skill::all());
        return new skillCollection(Skill::paginate(1));


    }


    public function show(Skill $skill){
        return new skillResource($skill);
    }

    public function store(StoreSkillRequest $request){
        Skill::create($request->validated());
        return response()->json("Skill Created");
    }


    public function update(StoreSkillRequest $request, Skill $skill){
        $skill->update($request->validated());
        return response()->json("Skill Updated");
    }

    public function destroy(Skill $skill){
        $skill->delete();
        return response()->json("Skill Delete");
    }

}
