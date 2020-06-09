<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $contacts=Contact::all();
        return view('welcome',compact('contacts'));

    }
    public function store(Request $request){
        $contacts=Contact::all();
        
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'price'=>'required',
        ]);

        $contact=new Contact();
    
        $contact->Title =$request->title;
        $contact->Description =$request->description;
        $contact->Price =$request->price;
        $contact->save();
        return redirect()->back();

    }

    public function edit(Contact $contact){
        //$contact=Contact::findOrFail($id);

        return view('welcome',compact('contact'));
    }
    public function destroy($id){
        //DB::table('tasks')->where('id','=',$id)->delete();
        $task=Contact::find($id);
        
        $task->delete();
       return redirect()->back();
       }
       public function update(Request $request,Contact $contact){
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'price'=>'required',
        ]);
        //$contact= Contact::findOrFail($id);
        $contact->Title =$request->title;
        $contact->Description =$request->description;
        $contact->Price =$request->price;
        $contact->save();
        return redirect()->back();

 }


}

