<?php


namespace App\Http\Controllers;
use App\Models\User;
use illuminate\Support\Str;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function newdata(Request $request)
    {

        // dd($request->all());

        // $request->validate([
        //     'name' => 'required|string',
        //     'email' => 'required|email|unique:users',
        //     'password' => 'required|min:6',
        //     'role' => 'required|in:Admin,Ataff,Pj,Asisten',
        //     'remember_token' => Str::random(60),
        // ]);
    
        // if (!in_array($request->role, ['Admin', 'Staff', 'Pj', 'Asisten'])) {
        //     return redirect()->back()->with('error', 'Registrasi failed. Masukkan Role yang benar!!');
        // }

        // if (strpos($request->email, '@') === false) {
        //     return redirect()->back()->with('error', 'Registrasi failed. Email must contain "@" symbol.');
        // }


            $code = Str::random(8); // Generate random code

            $user = new User();
            $user->id_asisten = $code;
            $user->name = $request->name;
            $user->Role = $request->Role;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->remember_token = Str::random(60);
            $user->save();


        return view ('/login');

    }

}

