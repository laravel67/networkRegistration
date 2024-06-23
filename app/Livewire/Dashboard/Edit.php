<?php

namespace App\Livewire\Dashboard;

use App\Models\Daftar;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;

    public $daftarId, $name, $gender, $tmptLahir, $tglLahir, $kecamatan, $kelurahan, $image, $luas, $alamat, $oldImage;
    public $daftar;


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
    public function mount(Daftar $daftar)
    {
        $this->daftar = $daftar;
        $this->name = $daftar->name;
        $this->gender = $daftar->gender;
        $this->tmptLahir = $daftar->tmptLahir;
        $this->tglLahir = $daftar->tglLahir;
        $this->kecamatan = $daftar->kecamatan;
        $this->kelurahan = $daftar->kelurahan;
        $this->alamat = $daftar->alamat;
        $this->luas = $daftar->luas;
        $this->oldImage= $daftar->image;
    }

    public function render()
    {
        return view('livewire.dashboard.edit');
    }


    public function update()
    {
        sleep(2);
        $this->validate();
        if ($this->image) {
            $imagePath = $this->image->store('images');
            if ($this->oldImage) {
                Storage::delete($this->oldImage);
            }
        } else {
            $imagePath = $this->oldImage;
        }

        $this->daftar->update([
            'name' => $this->name,
            'gender' => $this->gender,
            'tmptLahir' => $this->tmptLahir,
            'tglLahir' => $this->tglLahir,
            'kecamatan' => $this->kecamatan,
            'kelurahan' => $this->kelurahan,
            'alamat' => $this->alamat,
            'luas' => $this->luas,
            'image' => $imagePath,
        ]);
        Storage::disk('public')->deleteDirectory('livewire-tmp');
        $this->reset('image');
        $this->dispatch('updated', ['message' => 'Perubahan berhasil disimpan!']);
    }
}
