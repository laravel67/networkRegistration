<section id="Daftar" class="appointment my-5">
    <div class="container">
      <div class="section-title my-5">
        <h2>{{ __('Form Pendaftaran') }}</h2>
        <p>{{ __('Silahkan isi form dibawah ini, untuk mendaftarkan pemasangan jaringan') }}</p>
      </div>
      <form wire:submit.prevent="store" role="form" class="php-email-form">
        <div class="row">
            <div class="col-md-4 form-group">
                <label for="name">{{ __('Nama Lengkap') }}</label>
                <input type="text" name="name" wire:model="name" class="form-control @error('name')
                  is-invalid
                @enderror" id="name" placeholder="Nama Lengkap">
                @error('name') <small class="invalid-feedback">{{ $message }}</small> @enderror
            </div>

            <div class="col-md-4 form-group mt-3 mt-md-0">
                <label for="gender">{{ __('Jenis Kelamin') }}</label>
                <select name="gender" id="gender" class="form-select @error('gender')
                  is-invalid
                @enderror" wire:model="gender">
                    <option value="">{{ __('--') }}</option>
                    <option value="L">{{ __('Laki-Laki') }}</option>
                    <option value="P">{{ __('Perempuan') }}</option>
                </select>
                @error('gender') <small class="invalid-feedback">{{ $message }}</small> @enderror
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
                <label for="tmptLahir">{{ __('Tempat Lahir') }}</label>
                <input type="text" class="form-control @error('tmptLahir')
                  is-invalid
                @enderror" name="tmptLahir" id="tmptLahir" wire:model="tmptLahir" placeholder="Tempat Lahir">
                @error('tmptLahir') <small class="invalid-feedback">{{ $message }}</small> @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 form-group mt-3 mt-md-0">
                <label for="tglLahir">{{ __('Tanggal Lahir') }}</label>
                <input type="date" name="tglLahir" id="tglLahir" class="form-control @error('tglLahir')
                  is-invalid
                @enderror" wire:model="tglLahir">
                @error('tglLahir') <small class="invalid-feedback">{{ $message }}</small> @enderror
            </div>
          <div class="col-md-4 form-group mt-3 mt-md-0">
              <label for="kecamatan">{{ __('Kecamatan') }}</label>
              <input type="text" class="form-control @error('kecamatan') is-invalid @enderror" wire:model="kecamatan" placeholder="Kecamatan">
              @error('kecamatan') <small class="text-danger">{{ $message }}</small> @enderror
          </div>
          <div class="col-md-4 form-group mt-3 mt-md-0">
              <label for="kelurahan">{{ __('Kelurahan') }}</label>
              <input type="text" class="form-control @error('kelurahan') is-invalid @enderror" wire:model="kelurahan" placeholder="Kelurahan">
              @error('kelurahan') <small class="text-danger">{{ $message }}</small> @enderror
          </div>          
            <div class="col-md-4 form-group mt-3 mt-md-0">
                <label for="alamat">{{ __('Rw/Rt/No Rumah') }}</label>
                <input type="text" name="alamat" id="alamat" class="form-control @error('alamat')
                  is-invalid
                @enderror" placeholder="Rw/Rt/No Rumah" wire:model="alamat">
                @error('alamat') <small class="invalid-feedback">{{ $message }}</small> @enderror
            </div>
    
            <div class="col-md-4 form-group mt-3 mt-md-0">
                <label for="luas">{{ __('Luas Bangunan (m²)') }}</label>
                <input type="text" name="luas" id="luas" class="form-control @error('luas')
                  is-invalid
                @enderror" placeholder="Luas Bangunan" wire:model="luas">
                @error('luas') <small class="invalid-feedback">{{ $message }}</small> @enderror
            </div>
        </div>
        <div class="form-group mt-3">
            <div class="col-md-4 form-group mt-3 mt-md-0">
                <label for="image" style="cursor: pointer">
                    <small class="btn btn-sm btn-light"><i class="bi bi-image text-secondary"></i> {{ __('Upload Gambar') }}</small>
                {{ __('') }}</label>
                @if ($image)
                  <div class="my-4">
                      <img src="{{ $image->temporaryUrl() }}" alt="Image Preview" class="img-fluid">
                  </div>
                @endif
                <input type="file" name="image" id="image" class="form-control d-none @error('image')
                  is-invalid
                @enderror" wire:model="image">
                @error('image') <small class="invalid-feedback">{{ $message }}</small> @enderror
            </div>
        </div>
        
        <div class="text-center">
            <button type="submit">
              <span wire:loading wire:target="store">
                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                <span>{{ __('Loading...') }}</span>
              </span>
              <span wire:loading.remove>
                {{ __('Daftar Sekarang') }}
             </span>
            </button>
        </div>
      </form>    
    </div>
      @include('layouts.script')
</section>