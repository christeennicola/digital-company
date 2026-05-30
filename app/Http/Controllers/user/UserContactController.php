<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;

class UserContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //dd("im arrived");
        $dataToshow = auth()->user()->messages;
        return view('user.user_contents.datashow.usermessagetable', compact('dataToshow'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);
        $dataToinsert = $request->all();
        $dataToinsert['user_id'] = auth()->id();
        $dataToinsert['name'] = $request->name;
        $dataToinsert['surname'] = $request->surname;
        $dataToinsert['email'] = $request->email;
        $dataToinsert['message'] = $request->message;
        Message::create($dataToinsert);
        return redirect()->route('user-contact.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dataToupdate = Message::findOrFail($id);
        return view('user.user_contents.formupdate.usermessageupdate', compact('dataToupdate'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dataToupdate['name'] = $request->name;
        $dataToupdate['surname'] = $request->surname;
        $dataToupdate['email'] = $request->email;
        $dataToupdate['message'] = $request->message;
        Message::query()->where('id', '=', $id)->update($dataToupdate);
        return redirect()->route('user-contact.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //dd("hello" . $id);
        $dataTodelete = Message::findOrFail($id);
        if ($dataTodelete) {
            $dataTodelete->delete();
        }
        return redirect()->route('user-contact.index')->with('success', 'Message Deleted Successfully!');
    }
}
