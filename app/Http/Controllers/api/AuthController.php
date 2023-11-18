<?php

namespace App\Http\Controllers\api;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    //
    public function register(Request $request)
    {
        $datauser = new User();
        $rules = [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'confirm_password' => 'required|same:password'
        ];
        $validator = Validator::make($request->all(),$rules);
        if ($validator->fails()){
            return response()->json([
                'status'=> false,
                'message'=> 'Proses Validasi Gagal',
                'data' => $validator->errors() 
            ], 401);
        }
        $datauser->name = $request->name;
        $datauser->email = $request->email;
        $datauser->password = Hash::make($request->password);
        $datauser->save();

        return response()->json([
            'status'=> true,
            'message'=> 'Berhasil Registrasi',
            'data' => $datauser

        ], 200);
    }

    public function login(Request $request)
    {
        $rules = [
            'email' => 'required|email',
            'password' => 'required'
        ];
        $validator = Validator::make($request->all(),$rules);
        if ($validator->fails()){
            return response()->json([
                'status'=> false,
                'message'=> 'Proses Login Gagal',
                'data' => $validator->errors() 
            ], 401);
       }
       if (!Auth::attempt($request->only(['email','password']))){
            return response()->json([
                'status'=> false,
                'message'=> 'Email Dan Password Tidak Sesuai'
            ], 401);
       }
    
        $datauser = User::where('email', $request->email)->first();
        $role = Role::join("user_role", "user_role.role_id", "=", "roles.id")
                ->join("users", "users.id", "=", "user_role.user_id")
                ->where('user_id', $datauser->id)
                ->pluck('roles.role_name')->toArray();
        if (empty($role)){
            $role = ["Silahkan Hubungi Admin"];
            return response()->json([
                'status'=> false,
                'message'=> 'Silahkan Hubungi Admin',
            ], 401);
        }
        return response()->json([
        'status'=> true,
        'message'=> 'Asik Anda Berhasil Masuk',
        'token' => $datauser->createToken('api-provinsi', $role)->plainTextToken
        ], 200);
    }
       
    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
            return response()->json(['message' => 'Logout berhasil'], 200);
    }


    public function me(Request $request)
    {
        return response()->json([Auth::user()]);
    }
}
