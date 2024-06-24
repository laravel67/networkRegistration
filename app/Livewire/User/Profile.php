<?php

namespace App\Livewire\User;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Profile extends Component
{
    public $title='Akun';

    public $name, $email;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
    ];

    protected $messages = [
        'name.required' => 'Nama lengkap harus diisi.',
        'email.required' => 'Alamat email harus diisi.',
        'email.email' => 'Alamat email tidak valid.',
    ];

    public function mount()
    {
        $user = Auth::user();
        $this->name = $user->name;
        $this->email = $user->email;
    }
    
    public function render()
    {
        return view('livewire.user.profile');
    }

    public function update(){
        $this->validate();
        $user = Auth::user();
        $user->name = $this->name;
        $user->email = $this->email;
        $user->save();
        $this->dispatch('success', ['message' => 'Perubahan berhasil disimpan!']);
    }
}
