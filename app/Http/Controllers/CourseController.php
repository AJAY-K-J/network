<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\CourseCategory;

class CourseController extends Controller
{
    public function addCourse(Request $request)
    {



        $request->validate([



            "course_name"  => 'required',
            "course_code"  => 'required',
"course_short_name"=>'required',
            "course_category_id"  => 'required',
            "small_description"  => 'required',
            "course_description"  => 'required',
            "course_duration"  => 'required',
            "course_fee"  => 'required',
            "course_certification_fee"  => 'required',
            "course_certification_code"  => 'required',
            "course_image"  => 'required',

        ]);


        if ($request->id) {


            $course = Course::find($request->id);
        } else

            $course = new Course;

        $course->course_name = $request->course_name;
        $course->course_short_name = $request->course_short_name;
        $course->course_code = $request->course_code;
        $course->course_category_id = $request->course_category_id;
        $course->small_description = $request->small_description;
        $course->course_description = $request->course_description;
        $course->course_duration = $request->course_duration;
        $course->course_fee = $request->course_fee;
        $course->course_certification_fee = $request->course_certification_fee;
        $course->course_certification_code = $request->course_certification_code;



        if ($request->hasFile('course_image')) {
            $img_ext = $request->file('course_image')->getClientOriginalExtension();
            $filename = $request->course_name . $course->course_code  . time() . '.' . $img_ext;
            $path = $request->file('course_image')->move(public_path('uploads/course_images'), $filename); //image save public folder / uploads/course_upload

        }

        $course->course_image = $filename;


        $course->save();
        return 'success';
    }



    public function getCourses()
    {


        return Course::orderBy('id', 'DESC')->get();
    }
    public function getIndexPageCourses()
    {


        return Course::orderBy('id', 'DESC')->get();
    }


    public function getMainPageCourses()
    {


        return Course::orderBy('id', 'DESC')->get();
    }

    public function Categories(){

        return CourseCategory::orderBy('id', 'DESC')->get();
    }
}
