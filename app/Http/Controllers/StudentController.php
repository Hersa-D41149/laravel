<?php

namespace App\Http\Controllers;
use App\Models\Tanya as ModelsTanya;
use App\Models\Tanya;
use App\Models\Student as ModelsStudent;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // view of try
     
    public function view1()
    {
        $user = Auth::user();
        $id = Auth::id();

        $students = Student::paginate(13);
        return view('pages.users.try.viewrs', ['students' => $students, 'user' => $user, 'id' => $id]);
    }

    // end view

    // show of try

    public function showtry()
    { 
        return view('pages.users.try.show');
    }

    // end show

    // store of try

    public function storetry(Request $request)
    {   
        $request->validate([
            'addMoreInputFields.*.jawaban' => 'required'
            ],
            [
            'addMoreInputFields.*.jawaban' => 'The jawaban filed is required!',
            ]
        );
        foreach ($request->addMoreInputFields as $key => $value) {
        Student::create($value);
        }
        return Redirect::route('viewrs');
    }

    // end store
}
