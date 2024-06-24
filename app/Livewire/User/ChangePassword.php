<?php

namespace App\Livewire\User;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangePassword extends Component
{
    public $newPassword, $oldPassword, $newPassword_confirmation;
    public $isShowing=false;
    

    protected $rules = [
        'oldPassword' => 'required',
        'newPassword' => 'required|string|min:8|confirmed|different:oldPassword',
        'newPassword_confirmation' => 'required|string|min:8',
    ];

    protected $messages = [
        'oldPassword.required' => 'Kata sandi lama harus diisi.',
        'newPassword.required' => 'Kata sandi baru harus diisi.',
        'newPassword.min' => 'Kata sandi baru harus minimal 8 karakter.',
        'newPassword.confirmed' => 'Konfirmasi kata sandi baru tidak cocok.',
        'newPassword.different' => 'Kata sandi baru harus berbeda dengan kata sandi lama.',
        'newPassword_confirmation.required' => 'Konfirmasi kata sandi baru harus diisi.',
        'newPassword_confirmation.min' => 'Konfirmasi kata sandi baru harus minimal 8 karakter.',
    ];

    public function render()
    {
        return view('livewire.user.change-password');
    }

    public function changePassword(){
        $this->validate();

        $user = Auth::user();
        if (!Hash::check($this->oldPassword, $user->password)) {
            $this->addError('oldPassword', 'Kata sandi lama yang dimasukkan tidak cocok dengan kata sandi Anda saat ini.');
            return;
        }
        $user->password = Hash::make($this->newPassword);
        $user->save();
        $this->dispatch('success', ['message' => 'Kata sandi berhasil diubah!']);
    }

    public function toggleShowing()
    {
        $this->isShowing = !$this->isShowing;
    }
}
