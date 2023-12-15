<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Alert;
use Illuminate\Support\Facades\Log;

class Register extends Component
{

    public $name, $email, $password, $confirm_password, $registSuccess;

    public function render()
    {
        session()->has('successRegist') ? $this->alertSuccessRegist() : null;
        return view('livewire.auth.register')->extends('layouts.auth')->section('content');

    }

    public function alertSuccessRegist()
    {
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'message' => 'Sucessfully Regist',
            'text' => 'Redirecting....'
        ]);
    }


    public function regist()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'email|required',
            'password' => 'required|max:13',
            'confirm_password' => 'required|same:password'
        ]);
        try {
            $result = User::create([
                'name' => $this->name,
                'email' => $this->email,
                'password' => bcrypt($this->password)
            ]);
            if($result) {
                session()->flash('successRegist', 'Regist successfully');
            }
        } catch (\Throwable $th) {
            Log::info("Error in " . $th->getFile() . " " . $th->getLine() . ": " . $th->getMessage());
        }
    }


}
