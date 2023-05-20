<?php

namespace App\Http\Controllers;
use App\Models\Tanya as ModelsTanya;
use App\Models\Tanya;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TanyaController extends Controller
{
    // Host page
    public function join()
    {
        return view('pages.host.home');
    }

    public function crud()
    {
        return view('pages.host.crud.crud');
    }

    // Show of crud
    
    public function show()
    {
        $user = Auth::user();
        $id = Auth::id();

        $tanyas = Tanya::paginate(15);
        return view('pages.host.crud.crud', ['tanyas' => $tanyas, 'user' => $user, 'id' => $id]);
    }

    public function show1()
    {
        $user = Auth::user();
        $id = Auth::id();

        $tanyas = Tanya::paginate(3);
        return view('pages.host.home', ['tanyas' => $tanyas, 'user' => $user, 'id' => $id]);
    }

    // end show

    // create of crud

    public function create()
    {
        return view('pages.host.crud.create');
    }
   
    public function store(Request $request)
    {
        $request->validate([
            'addMoreInputFields.*.soal' => 'required',
            'addMoreInputFields.*.jawaban' => 'required',
            'addMoreInputFields.*.skor' => 'required'
           ],
           [
           'addMoreInputFields.*.soal' => 'The nama filed is required!',
           'addMoreInputFields.*.jawaban' => 'The jawaban filed is required!',
           'addMoreInputFields.*.skor' => 'The skor filed is required!',
           ]
        );
        foreach ($request->addMoreInputFields as $key => $value) {
        Tanya::create($value);
        }
           // return back()->with('success','The post has been added!');
        return Redirect::route('crud');
    }

    // end cereate

    // update/edit of curd

    public function edit(Tanya $tanya)
    {
        return view('pages.host.crud.edit', compact('tanya'));
    }

    public function update(Request $request, Tanya $tanya)
    {
        $tanya->update([
            'soal' => $request->soal,
            'jawaban' => $request->jawaban,
            'skor' => $request->skor

        ]);
        return Redirect::route('crud');
    }
    
    // end update/edit

    // delete of crud

    public function delete(Tanya $tanya)
    {
        $tanya->delete();
        return Redirect::route('crud');
    }

    // end delete

    // public function view1()
    // {
    //     $user = Auth::user();
    //     $id = Auth::id();

    //     $tanyas = Tanya::paginate(3);
    //     return view('pages.users.try.viewrs', ['tanyas' => $tanyas, 'user' => $user, 'id' => $id]);
    // }
}
