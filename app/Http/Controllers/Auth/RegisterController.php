<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Alumni;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;


class RegisterController extends Controller
{
    use RegistersUsers;
    protected $redirectTo = '/dash';
    public function __construct(){
        $this->middleware('guest');
    }

    protected function validator(array $data){
        return Validator::make($data, [
            'email' => 'required|string|email|max:255|unique:users',
            'username' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    protected function create(array $data){
        $nim = $data['username'];
        if ($this->hasData($nim)) {
            return User::create([
                'username' => $data['username'],
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
            ]);
        } else {
            return Redirect::route('login');
        }
    }

    private function hasData($nim){
        if (Alumni::where('nim','=',$nim)->count() === 1) {
            return true;
        } else {
            return false;
        }
    }

    private function getRegData($nim){
        if ((Alumni::where("nim","=",$nim)->count() === 1)) {
            $data = Alumni::where('nim','=',$nim)->first();
            $data = ["id" => $data->id];
            return (object) $data;
        } else {
            return (object) $data = ["id"=>null];
        }
    }
}
