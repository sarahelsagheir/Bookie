<?php

namespace App\Http\Controllers;
use App\Message;
use App\User;
use Illuminate\Http\Request;
use App\Events\NewMessage;


class ContactsController extends Controller
{
    function __construct() {
        $this->middleware('auth');
    }

    public function index()
    {
       return view('chat.index');
    }
<<<<<<< HEAD
    //all user for admin chat
    public function getAllUser()
    {
        $contacts = User::where('id', '!=', auth()->id())->get();

        $unreadIds = Message::select(\DB::raw('`from` as sender_id, count(`from`) as messages_count'))
            ->where('to', auth()->id())
            ->where('read', false)
            ->groupBy('from')
            ->get();
            $contacts = $contacts->map(function($contact) use ($unreadIds) {
                $contactUnread = $unreadIds->where('sender_id', $contact->id)->first();

                $contact->unread = $contactUnread ? $contactUnread->messages_count : 0;

                return $contact;
            });


        return response()->json($contacts);
    }

=======
>>>>>>> 382d3327ad305d1a6da17b37cd4956a2677db6ab
//user contact
    public function create()
    {
        $contacts = Message::where('from', '=', auth()->id())
                   ->orwhere('to','=',auth()->id())
                   ->get();
       $contacts = User::find($contacts);

        $unreadIds = Message::select(\DB::raw('`from` as sender_id, count(`from`) as messages_count'))
            ->where('to', auth()->id())
            ->where('read', false)
            ->groupBy('from')
            ->get();
            $contacts = $contacts->map(function($contact) use ($unreadIds) {
                $contactUnread = $unreadIds->where('sender_id', $contact->id)->first();

                $contact->unread = $contactUnread ? $contactUnread->messages_count : 0;

                return $contact;
            });


        return response()->json($contacts);
    }
    //send and store message
    public function store(request $request)
    {
        $message = Message::create([
            'from' => auth()->id(),
            'to' => $request->contact_id,
            'text'=>$request->text
        ]);
        broadcast(new NewMessage($message));
        return response()->json($message);
    }

    //all messages from or to user
    public function show($id)
    {
        Message::where('from', $id)->where('to', auth()->id())->update(['read' => true]);

        $messages = Message::where(function($q) use ($id) {
            $q->where('from', auth()->id());
            $q->where('to', $id);
        })->orWhere(function($q) use ($id) {
            $q->where('from', $id);
            $q->where('to', auth()->id());
        })
        ->get();

        return response()->json($messages);
    }
    //borrow chat
    public function sendMessage(request $request,$id)
    {
        $message = Message::create([
            'from' => auth()->id(),
            'to' => $id,
            'text'=>$request->text
        ]);

        broadcast(new NewMessage($message));
         response()->json($message);
         return back();
    }

}
