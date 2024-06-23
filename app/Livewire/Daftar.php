<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Daftar as Daftr;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class Daftar extends Component
{
    use WithFileUploads;


    public $name;
    public $gender; 
    public $tmptLahir; 
    public $tglLahir; 
    public $kecamatan; 
    public $kelurahan; 
    public $alamat; 
    public $luas; 
    public $image;

    public $loading = false;

    protected $rules = [
        'name' => 'required|string|max:255',
        'gender' => 'required|in:L,P',
        'tmptLahir' => 'required|string|max:255',
        'tglLahir' => 'required|date',
        'kecamatan' => 'required|string|max:255',
        'kelurahan' => 'required|string|max:255',
        'alamat' => 'required|string|max:255',
        'luas' => 'required|numeric',
        'image' => 'nullable|image|max:2048',
    ];
    protected $messages = [
        'name.required' => 'Nama wajib diisi.',
        'name.string' => 'Nama harus berupa teks.',
        'name.max' => 'Nama maksimal 255 karakter.',
        'gender.required' => 'Jenis kelamin wajib diisi.',
        'gender.in' => 'Jenis kelamin harus L (Laki-laki) atau P (Perempuan).',
        'tmptLahir.required' => 'Tempat lahir wajib diisi.',
        'tmptLahir.string' => 'Tempat lahir harus berupa teks.',
        'tmptLahir.max' => 'Tempat lahir maksimal 255 karakter.',
        'tglLahir.required' => 'Tanggal lahir wajib diisi.',
        'tglLahir.date' => 'Tanggal lahir harus berupa tanggal yang valid.',
        'kecamatan.required' => 'Kecamatan wajib diisi.',
        'kecamatan.string' => 'Kecamatan harus berupa teks.',
        'kecamatan.max' => 'Kecamatan maksimal 255 karakter.',
        'kelurahan.required' => 'Kelurahan wajib diisi.',
        'kelurahan.string' => 'Kelurahan harus berupa teks.',
        'kelurahan.max' => 'Kelurahan maksimal 255 karakter.',
        'alamat.required' => 'Alamat wajib diisi.',
        'alamat.string' => 'Alamat harus berupa teks.',
        'alamat.max' => 'Alamat maksimal 255 karakter.',
        'luas.required' => 'Luas wajib diisi.',
        'luas.numeric' => 'Luas harus berupa angka.',
        'image.image' => 'File harus berupa gambar.',
        'image.max' => 'Ukuran gambar maksimal 2048 kilobyte.',
    ];

    public function render()
    {
        return view('livewire.daftar');
    }

    public function store()
    {
        sleep(2);
        $this->validate();
        $pendaftaran=([
            'name' => $this->name,
            'gender' => $this->gender,
            'tmptLahir' => $this->tmptLahir,
            'tglLahir' => $this->tglLahir,
            'kecamatan' => $this->kecamatan,
            'kelurahan' => $this->kelurahan,
            'alamat' => $this->alamat,
            'luas' => $this->luas,
            'image' => $this->image ? $this->image->store('images') : null,
        ]);
        Daftr::create($pendaftaran);
        Storage::disk('public')->deleteDirectory('livewire-tmp');
        $this->resetForm();
        $this->dispatch('success', ['message' => 'Pendaftaran berhasil!']);
    }
    public function resetForm()
    {
        $this->name = '';
        $this->gender = '';
        $this->tmptLahir = '';
        $this->tglLahir = '';
        $this->kecamatan = '';
        $this->kelurahan = '';
        $this->alamat = '';
        $this->luas = '';
        $this->image = null;
    }
}
