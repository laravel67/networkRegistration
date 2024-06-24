<section id="about" class="about my-5">
    <div class="container" >
      <div class="section-title my-5">
        <h2>{{ $title }}</h2>
        <form wire:submit="update" class="row mb-4 justify-content-center">
            <div  class="col-md-4 d-block">
              <hr>
                <h6 class="text-start">__('Update profile')</h6>
                <div class="mb-3 text-start">
                  <label for="name">__('Nama Lengkap')</label>
                  <input id="name" type="text" class="form-control form-control-sm @error('name')
                    is-invalid
                  @enderror " wire:model='name' required>
                  @error('name')
                    <small class="invalid-feedback">{{ $message }}</small>
                  @enderror
                </div>
                <div class="mb-3 text-start">
                  <label for="email">__('Alamat Email')</label>
                  <input id="email" type="email" class="form-control form-control-sm @error('email')
                    is-invalid
                  @enderror" wire:model='email' required>
                  @error('email')
                  <small class="invalid-feedback">{{ $message }}</small>
                  @enderror
                </div>
                <div class="mb-3 text-start">
                  <button type="submit" class="btn btn-info text-light btn-sm col-12">{{ __('Simpan Perubahan') }}</button>
                </div>
            </div>
        </form>
        @livewire('user.change-password')
      </div>
    </div>
    @include('layouts.script')
</section>
