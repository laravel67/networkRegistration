<form wire:submit="changePassword" class="row mb-2 justify-content-center">
    <div class="col-md-4 d-block">
      <hr>
      <h6 class="text-start">{{ __('Update Kata Sandi') }}</h6>            
        <div class="mb-3 text-start">
          <label for="oldPassword">{{ __('Sandi Lama') }}</label>
          <input id="oldPassword" type="{{ $isShowing ? 'text': 'password' }}" class="form-control form-control-sm @error('oldPassword')
            is-invalid
          @enderror" wire:model='oldPassword' required>
          @error('oldPassword')
            <small class="invalid-feedback">{{ $message }}</small>
          @enderror
        </div>
        <div class="mb-3 text-start">
          <label name="newPassword">{{ __('Kata Sandi Baru') }}</label>
          <input id="newPassword" type="{{ $isShowing ? 'text': 'password' }}" class="form-control form-control-sm @error('newPassword')
            is-invalid
          @enderror" wire:model='newPassword' required>
          @error('newPassword')
            <small class="invalid-feedback">{{ $message }}</small>
          @enderror
        </div>

        <div class="mb-3 text-start">
          <label for="newPasswordConfirmation">{{ __('Konfirmasi Kata Sandi Baru') }}</label>
          <input id="newPasswordConfirmation" type="{{ $isShowing ? 'text': 'password' }}" class="form-control form-control-sm @error('newPassword') is-invalid @enderror" wire:model='newPassword_confirmation' required>
        </div>
        <div class="mb-3 form-check text-start">
            <input type="checkbox" class="form-check-input" id="showing" wire:click="toggleShowing">
            <label class="form-check-label" for="showing">{{ __('Periksa Kata sandi') }}</label>
        </div>
        <div class="mb-3 text-start">
          <button type="submit" class="btn btn-info text-light btn-sm col-12">{{ __('Simpan Perubahan') }}</button>
        </div>
    </div>
  </form>
