<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\StoreStudentRequest;
use App\Http\Requests\Api\UpdateStudentRequest;
use App\Http\Resources\studentsResource;
use App\Models\students;

class studentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = students::all();

        return studentsResource::collection($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudentRequest $request)
    {
        $student = students::create($request->validated());

        return new studentsResource($student);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = students::findOrFail($id);

        return new studentsResource($student);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentRequest $request, string $id)
    {
        $student = students::findOrFail($id);
        $student->update($request->validated());

        return new studentsResource($student);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
      $student = students::findOrFail($id);
        if(!$student){
            return response()->json([
                'status' => 'error',
                'message' => 'ga ketemu waomwoawoaowmaow'
            ], 404);}
        $student->delete();
        
    }
}
