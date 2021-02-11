<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Gate;

class adminAuthController extends Controller
{
    public function adminLogin()
    {
        return view('adminAuth.login');
    }

    public function __construct(){

        $this->middleware('auth');

    }
  

     public function index()
     {
        $users = User::get();
        return view('adminAuth.index')->with('users', $users);
     }


    protected function store(Request $request)
    {

        $this->validate($request,[
            // 'role' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:4'],
        ]);
        $user = new User();
        // $user->role=$request->input('role');
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        // $user->status=$request->input('status');
        $user->password=$request->input('password');
        $user->save();
        return back()->with('success','user created successfully.');

    }



    public function edit($id)
    {
      
        if(Gate::denies('edit-users')){
             return redirect()->back()->with('error','you have no right to Edit users, You should be Admin to Edit users');;
        }
        $roles = Role::all();      
        $user = User::find($id);  
   
        return view('adminAuth.edit')->with([
            'user'=>$user,
            'roles'=>$roles
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {


    //   dd($request);
         // =====================
       $role = User::find($id);
       $role->name=$request->input('name');
       $role->email=$request->input('email');
       $role->password=$request->input('password');
       $role->save();
       $role->roles()->sync($request->roles);
   
        return redirect('admin/ruler')->with('success', 'users created successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Gate::denies('edit-users')){
            return redirect()->back()->with('error','you have no right to delete users, You should be Admin to Edit users');
       }
        $users = User::find($id);
        $users->delete();
        return redirect()->back()->with('success', 'user Deleted successfully');
    }

}
