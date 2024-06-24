<section class="features my-5">
    <div class="container my-5">
        <form wire:submit.prevent='update'> 
            <div class="row mb-5">
                <div class="col order-2 order-lg-1">
                <div class="icon-box mt-5 mt-lg-0">
                    <i class="bx bx-pencil"></i>
                    <h3>{{ __('Ubah Data') }}</h3>
                    <hr>
                    <div class="form-group mb-3">
                        <label for="name">{{ __('Nama Lengkap') }}</label>
                        <input type="text" name="name" wire:model="name" class="form-control @error('name')
                        is-invalid
                        @enderror" id="name" placeholder="Nama Lengkap">
                        @error('name') <small class="invalid-feedback">{{ $message }}</small> @enderror
                    </div>

                    <div class="form-group mb-3">
                            <label for="gender">{{ __('Jenis Kelamin') }}</label>
                        <select name="gender" id="gender" class="form-select @error('gender')
                        is-invalid
                        @enderror" wire:model="gender">
                            <option value="">--</option>
                            <option value="L">{{ __('Laki-Laki') }}</option>
                            <option value="P">{{ __('Perempuan') }}</option>
                        </select>
                        @error('gender') <small class="invalid-feedback">{{ $message }}</small> @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="tmptLahir">{{ __('Tempat Lahir') }}</label>
                        <input type="text" class="form-control @error('tmptLahir')
                        is-invalid
                        @enderror" name="tmptLahir" id="tmptLahir" wire:model="tmptLahir" placeholder="Tempat Lahir">
                        @error('tmptLahir') <small class="invalid-feedback">{{ $message }}</small> @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="tglLahir">{{ __('Tanggal Lahir') }}</label>
                        <input type="date" name="tglLahir" id="tglLahir" class="form-control @error('tglLahir')
                        is-invalid
                        @enderror" wire:model="tglLahir">
                        @error('tglLahir') <small class="invalid-feedback">{{ $message }}</small> @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="kecamatan">{{ __('Kecamatan') }}</label>
                        <input class="form-control @error('kecamatan')
                        is-invalid
                        @enderror" wire:model="kecamatan">
                        @error('kecamatan') <small class="invalid-feedback">{{ $message }}</small> @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="kelurahan">{{ __('Kelurahan') }}</label>
                        <input class="form-control @error('kelurahan')
                        is-invalid
                        @enderror" wire:model="kelurahan">
                        @error('kelurahan') <small class="invalid-feedback">{{ $message }}</small> @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="alamat">{{ __('Rw/Rt/No Rumah') }}</label>
                        <input type="text" name="alamat" id="alamat" class="form-control @error('alamat')
                        is-invalid
                        @enderror" placeholder="Rw/Rt/No Rumah" wire:model="alamat">
                        @error('alamat') <small class="invalid-feedback">{{ $message }}</small> @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="luas">{{ __('Luas Bangunan (m²)') }}</label>
                        <input type="text" name="luas" id="luas" class="form-control @error('luas')
                        is-invalid
                        @enderror" placeholder="Luas Bangunan" wire:model="luas">
                        @error('luas') <small class="invalid-feedback">{{ $message }}</small> @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="image" style="cursor: pointer">
                            {{ __('Upload Gambar') }}
                        </label>
                        <input type="file" name="image" id="image" class="form-control @error('image')
                          is-invalid
                        @enderror" wire:model="image">
                        @error('image') <small class="invalid-feedback">{{ $message }}</small> @enderror
                        <div class="my-4">
                            @if ($image)
                                <img src="{{ $image->temporaryUrl() }}" alt="Image Preview" class="img-fluid w-50">
                            @elseif ($oldImage)
                                <img src="{{ asset('storage/'.$oldImage) }}" alt="Image Preview" class="img-fluid w-50">
                            @else
                                <img src="{{ asset('assets/img/slide/noimage.jpg') }}" alt="Image Preview" class="img-fluid w-50">
                            @endif
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="text-end">
                <a href="{{ route('dashboard.index') }}" class="btn btn-sm btn-secondary text-light">{{ __('Kembali') }}</a>
                <button type="submit" class="btn btn-sm btn-info text-light">
                    <span wire:loading wire:target="update">
                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                        <span>{{ __('Loading...') }}</span>
                      </span>
                      <span wire:loading.remove>
                        <i class="bi bi-pencil-square"></i> {{ __('Simpan Perubahan') }}
                     </span>
                </button>
            </div>
        </form>
    </div>
    @include('layouts.script')
</section>
    
