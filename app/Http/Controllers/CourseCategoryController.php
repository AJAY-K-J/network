<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CourseCategory;
use App\Models\CourseEnquiry;

class CourseCategoryController extends Controller
{
    public function addCategory(Request $request)
    {

        $request->validate([



            "category_name"  => 'required',

            "category_image"  => 'required',

        ]);


        if ($request->id) {


            $category = CourseCategory::find($request->id);
        } else

            $category = new CourseCategory;

        $category->category_name = $request->category_name;




        if ($request->hasFile('category_image')) {
            $img_ext = $request->file('category_image')->getClientOriginalExtension();
            $filename = $request->category_name  . time() . '.' . $img_ext;
            $path = $request->file('category_image')->move(public_path('uploads/category_images'), $filename); //image save public folder / uploads/category_upload

        }

        $category->category_image = $filename;


        $category->save();
        return 'success';
    }
    public function getCategory()
    {


        return CourseCategory::orderBy('id', 'DESC')->get();
    }

    public function getIndexCategory()
    {


        return CourseCategory::orderBy('id', 'DESC')->get();
    }




    public function addEnquiry(Request $request)
    {


        $request->validate([


            'enquirer_name'  => 'required',
            'enquirer_email' => 'required',
    'enquirer_mobile'  => 'required',
    'enquirer_dob' => 'required',
    'enquirer_district'  => 'required',
    'enquirer_state' => 'required',
    'enquirer_street'  => 'required',
    'enquirer_pin'  => 'required',
    'enquirer_education'  => 'required',
    'enquirer_preferred_course'  => 'required',
    'enquirer_preferred_course_time'  => 'required',

        ]);

        

        $enquirer = new CourseEnquiry;


        $enquirer->enquirer_name = $request->enquirer_name ;
        $enquirer->enquirer_email = $request->enquirer_email ;
        $enquirer->enquirer_mobile = $request->enquirer_mobile ;
        $enquirer->enquirer_dob = $request->enquirer_dob ;
        $enquirer->enquirer_district = $request->enquirer_district ;
        $enquirer->enquirer_state = $request->enquirer_state ;
        $enquirer->enquirer_street = $request->enquirer_street ;
        $enquirer->enquirer_pin = $request->enquirer_pin ;
        $enquirer->enquirer_education = $request->enquirer_education ;
        $enquirer->enquirer_preferred_course = $request->enquirer_preferred_course ;
        $enquirer->enquirer_preferred_course_time = $request->enquirer_preferred_course_time ;
        $enquirer->enquirer_remarks = $request->enquirer_remarks ;


        $enquirer->save();
        return 'success';
    }
}
