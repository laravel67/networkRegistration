<?php

namespace App\Livewire\Dashboard;

use App\Models\Daftar;
use Livewire\Component;
use Livewire\WithPagination;
use Database\Factories\DaftarFactory;
use Illuminate\Support\Facades\Storage;


class Index extends Component
{
    use WithPagination;

    public $isEditing=false;
    public $isShowing=false;

    public $daftarId;

    public $title='Data Pendaftaran';
    public $search = '';
    public $perPage = 10;

    protected $listeners = [
        'deleteConfirmed' => 'delete'
    ];

    public function mount()
    {
        $this->search = request()->query('search', $this->search);
        $this->perPage = request()->query('perPage', $this->perPage);
        // $this->start = request()->query('start');
        // $this->end = request()->query('end');
        // $this->categoryId = request()->query('categoryId', $this->categoryId);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $daftars = Daftar::where('name', 'like', '%' . $this->search . '%')->orderBy('id', 'desc')->paginate(10);
        return view('livewire.dashboard.index', compact('daftars'));
    }

    public function show($daftarId){
        $this->isShowing=true;
        $dp=Daftar::find($daftarId);
        $this->dispatch('showDaftar', $dp);
    }

    public function deleting($id){
        $this->daftarId=$id;
        $this->dispatch('show-delete-confirmation');
    }

    public function delete(){
        $daftar= Daftar::where('id', $this->daftarId)->first();
        if($daftar){
            if($daftar->image){
                Storage::delete($daftar->image);
            }
            $daftar->delete();
            $this->dispatch('success', ['message' => 'Data Berhasil Dihapus!']);
        }else{
            $this->dispatch('error', ['message' => 'Data tidak ditemukan!']);
        }
    }
}
