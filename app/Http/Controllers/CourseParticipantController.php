<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\ApiResponse;
use App\Http\Resources\CourseResource;
use App\Models\Course;
use App\Models\CourseParticipant;

class CourseParticipantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return response(['message' => 'Interface not available'], 404);
        return ApiResponse::resourceNotAvailableResponse();
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $course = Course::firstWhere('slug', $request->slug);
        
        if(!$course){
            return ApiResponse::resourceNotAvailableResponse(); 
        }

        $courseParticipant = new CourseParticipant;
        $courseParticipant -> student_name = 'Uiuiui';
        $courseParticipant -> course_id = $course -> id;
        $courseParticipant -> save();

        return ApiResponse::resourceCreatedResponse($courseParticipant);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
