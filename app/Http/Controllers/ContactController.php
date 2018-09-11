<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\NewMessageMail;
use App\Message;
use Mail;

class ContactController extends Controller
{
  public function index(Request $request)
  {
    $messages = Message::all();
    $unread_messages = Message::where('open',0)->count();
    $read_messages = Message::where('open',1)->count();

    //Actualizando array de la sesión para cambiar el numero de mensajes no leídos
    $request->session()->forget('unread_messages');

    $unread_messages = Message::where('open',0)->count();
    session(['unread_messages' => $unread_messages]);

    return view('admin.messages.index',compact('messages','unread_messages','read_messages'));
  }

    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Http\Response
    */
  public function store(Request $request)
  {
     $this->validate($request, [
      'name' => 'required',
      'email' => 'required|email',
      'message' => 'required'
    ]);

     Message::create($request->all());

     Mail::to('lipocero.centrodekinesiologia@gmail.com')->send(new NewMessageMail($request->name,$request->email,$request->message));

     return response()->json(['message' => 'OK']);
   }

   public function show(Request $request, $id)
   {
    $message = Message::findOrFail($id);

    if($message->open==0){
      $message->open=1;
      $message->update();

        //Actualizando array de la sesión para cambiar el numero de mensajes no leídos
      $request->session()->forget('unread_messages');

      $unread_messages = Message::where('open',0)->count();
      session(['unread_messages' => $unread_messages]);
    }

    return view('admin.messages.show',compact('message'));
  }

  public function destroy ($id){
    try {
      $message = Message::findOrFail($id);
      $message->delete();

      return response()->json(['message' => 'Ok']);
    }
    catch (\Exception $e) {
      return response()->json(['message' => $e]);
    }
  }
}
