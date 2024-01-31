<?php
namespace App\Http\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Livewire\Component;

class Google extends Component{
    public function loginGoogle(){
        return Socialite::driver('google')->redirect();
    }

    public function loginGoogleCallback(){
        try {
            $user = Socialite::driver('google')->stateless()->user()->user;
        } catch (\Throwable $th) {
            return redirect('login/google');
        }
        $existingUser = User::where('google_id', $user["id"])->first();
        if($existingUser){
            Auth::login($existingUser);
            session()->flash('successLogin', 'Login successfully');
            return redirect()->route('client.home');
        } else {
            $result = User::create([
                'google_id' => $user["id"],
                'name' => $user["name"],
                'picture' => $user["picture"], 
                'email' => $user["email"],
                'password' => bcrypt(sha1(rand())) // Set some random password
            ]);
            if($result) {
                session()->flash('successLogin', 'Login successfully');
            }
        }
    }
}