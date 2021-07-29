<?php

namespace App\Http\Controllers;
use App\Models\Notes;
use DB;
use Carbon\Carbon;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function displaylist()
    {
        $notes = Notes::get();
        return view('home')->with('notes', $notes);
    }

    public function addnote(Request $request)
    {
        if (Notes::get() == null){
            $values = array('number' => 1,'notes' => $request->notes,'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString());
            DB::table('notes')->insert($values);
        }
        else{
            $max = Notes::max('number');
            $values = array('number' => $max+1,'notes' => $request->notes,'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString());
            DB::table('notes')->insert($values);
        }
      
        // $add = new Notes();
        // $add->notes = $request->notes;
        // $add->save();
        return redirect('/');

    }

    public function update($number) 
    {
        $note= Notes::where('number', $number)->first();
        return view('update')->with('note', $note);
    }

    public function updatenote(Request $request) 
    {
        $ambik = Notes::where('number', $request->number)->first();
        // dd ($request->all());
        $values = array('number' => $ambik->number,'notes' => $request->notes,'updated_at' => $ambik->created_at, 'updated_at' => Carbon::now()->toDateTimeString());
        DB::table('notes')->where('number', $ambik->number)->update($values);
        return redirect('/');

    }
    public function deletenote($number)
    {
        Notes::where('number', $number)->delete();
        return redirect('/');

    }
}
