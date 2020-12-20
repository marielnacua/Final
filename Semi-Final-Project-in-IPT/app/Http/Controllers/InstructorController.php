<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instructor;

class InstructorController extends Controller
{
    public function index() {
        $instructors = Instructor::Latest()->paginate(10);
        return view('instructors.index', ['instructors'=>$instructors]);
    }

    public function create() {
        return view('instructors.create');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'user_id' => 'required|numeric',
            'aoe' => 'required',
            'rating' => 'required|numeric',
        ]);

        Instructor::create([
            'user_id' => $request['user_id'],
            'aoe' => $request['aoe'],
            'rating' => $request['rating'],
        ]);


        return redirect('/instructors')->with('info', 'New instructor has been added.');
    }
    public function edit($id) {
        $instructor = Instructor::find($id);

        return view('instructors.edit', ['instructor'=>$instructor]);
    }

    public function update(Request $request, $id) {
        $instructor = Instructor::find($id);

        $instructor->update($request->all());

        return redirect('/instructors')->with('info', "The record of $instructor->user_id $instructor->aoe has been updated. ");
    }
    public function delete(Request $request){
        $instructorId = $request['instructor_id'];
        $instructor = Instructor::find($instructorId);
        $name = $instructor->user->fname . " " . $instructor->user->lname;
        $instructor->delete();
        return  redirect('/instructors')->with('info', "The record of $name has been deleted successfully.");
    }
}
