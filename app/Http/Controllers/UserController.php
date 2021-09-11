<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegUserRequest;
use App\Traits\ImageUpload;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::latest()->paginate(7);
        return view('admin.users.list',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     private $user;

     public function __construct(User $user)
     {
      $this->user = $user;   
     }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegUserRequest $request)
    {
        //
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
        //
        $user = User::find($id);
        return view('admin.users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    use ImageUpload;
    public function update(Request $request, $id)
    {
        //
        $userUpdate = [
            'email' => $request->email,
            'name' => $request->name,
            'address' => $request->address,
            'phone_number' =>$request->phone_number,
            'about' => $request->about,
            'github_link' => $request->github_link,
            'facebook_link' => $request->facebook_link,
        ];
        
        $user = $this->user->find($id);

        $user->update($userUpdate);

        return redirect()->route('user.edit',['id' => $user->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
