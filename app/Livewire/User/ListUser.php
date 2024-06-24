<?php

namespace App\Livewire\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class ListUser extends Component
{
    use WithPagination;
    public $search = '';
    public $perPage = 5;
    public $title='Daftar Pengguna';
    public $userId;

    protected $listeners = [
        'deleteConfirmed' => 'delete'
    ];

    public function mount()
    {
        $this->search = request()->query('search', $this->search);
        $this->perPage = request()->query('perPage', $this->perPage);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $users = User::where('name', 'like', '%' . $this->search . '%')->orderBy('id', 'desc')->paginate($this->perPage);
        return view('livewire.user.list-user', compact('users'));
    }

    public function deleting($id){
        $this->userId=$id;
        $this->dispatch('show-delete-confirmation');
    }

    public function delete(){
        $user= User::where('id', $this->userId)->first();
        if($user){
            $user->delete();
            $this->dispatch('success', ['message' => 'Pengguna Berhasil Dihapus!']);
        }else{
            $this->dispatch('error', ['message' => 'Pengguna tidak ditemukan!']);
        }
    }
}
