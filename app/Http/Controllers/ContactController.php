<?php
  
namespace App\Http\Controllers;
  
use App\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
  
  
class ContactController extends Controller {

    public function index(){
        $Contact  = Contact::all();
        return response()->json($Contact);
  
    }

    public function getContact($id) {
        $Contact  = Contact::find($id);  
        return response()->json($Contact);
    }
   
    public function createContact(Request $request){
    	$Contact = Contact::create($request->all());
    	return response()->json($Contact);
 
    }

    public function updateContact(Request $request, $id){

    	$Contact  = Contact::find($id);
    	$Contact->name = $request->input('name');
    	$Contact->email = $request->input('email');
    	$Contact->save();

    	return response()->json($Contact);
	}

    public function deleteContact($id){
    	$Contact  = Contact::find($id);
    	$Contact->delete();
 
    	return response()->json('Removed successfully.');
	}



}

?>
