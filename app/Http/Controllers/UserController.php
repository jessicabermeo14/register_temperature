<?php

namespace App\Http\Controllers;

use App\Models\User;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('users.list')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($verification_document = '')
    {
        return view('users.form')->with('verification_document', $verification_document);
    }
    // public function create()
    // {
    //     return view('users.form');
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        User::create($request->all());
        $verification_id = User::where('document_number', '=', $request->document_number)->get();
        return view('records.form')->with('verification_id', $verification_id);
        // $verification_id = User::find($id);
        // return view('records.form')->with('verification_id', $verification_id);
        //return view('users.edit')->with('user', $user);
        //return view('records.form');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'name'            => 'required',
        //     'last_name'       => 'required',
        //     'document_type'   => 'required',
        //     'document_number' => 'required',
        //     'phone'           => 'required',
        //     'address'         => 'required',
        //     'email'           => 'required|email'
        // ]);
        $user = User::find($id);
        $user->update($request->all());
        return redirect('/usuarios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/usuarios');
    }


    public function home()
    {
        return view('users.check');
    }


    public function search(Request $request)
    {
        $request->validate([
            'document' => 'required'
        ]);

        $verification_document = $request->document;

        if (DB::table('users')->where('document_number', $verification_document)->exists()) {

            $verification_id = User::where('document_number', '=', $verification_document)->get();
            return view('records.form')->with('verification_id', $verification_id);
        } else {

            //$this->create($verification_document);
            //$verification_document = $verification_document[0];

            // return redirect()->action(
            //     [UserController::class, 'create'],
            //     ['verification_document' => $verification_document]
            // );
            // return redirect()->action(
            //     [UserController::class, 'create'],
            //     []
            // );
            //return redirect()->route('usuarios.create', [$verification_document]);
            //return redirect()->route('usuarios.create', ['verification_document' => $verification_document]);
            //return redirect('usuarios/create')->with('verification_document', $verification_document);
            return redirect('usuarios/create')->with($verification_document);
            //return view('users.form')->with('verification_document', $verification_document);
            //return view('users.form');
        }
    }
}
