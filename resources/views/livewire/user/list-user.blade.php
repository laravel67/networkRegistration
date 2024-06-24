<section id="about" class="about my-5">
    <div class="container" >
      <div class="section-title my-5">
        <h2>{{ $title }}</h2>
        <div class="row mb-2">
            <div class="col-md-4 d-flex">
                <a href="{{ route('register') }}" class="btn btn-info btn-sm text-light mx-2">{{ __('Tambah') }}</a>
                <input type="text" class="form-control form-control-sm" placeholder="Pencarian..." wire:model.live='search'>
            </div>
            {{-- <div class="col">
                <input type="text" class="form-control form-control-sm" placeholder="Pencarian...">
            </div> --}}
        </div>
        <div class="table-responsive">
          <table class="table table-striped text-start">
            <thead>
              <tr>
                <th scope="col">{{ __('No.') }}</th>
                <th scope="col">{{ __('Nama Lengkap') }}</th>
                <th scope="col">{{ __('Alamat Email') }}</th>
                <th scope="col">{{ __('Ditambahkan') }}</th>
                <th scope="col">{{ __('Opsi') }}</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($users as $i=> $user)
              <tr>
                <th scope="row">{{ $users->firstItem()+$i }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ \Carbon\Carbon::parse($user->created_at)->locale('id')->translatedFormat('d F Y') }} </td>
                <td>
                    <button wire:click.prevent="deleting({{ $user->id }})" class="btn btn-sm btn-danger text-light"><i class="bi bi-x-circle"></i></button>
                </td>
              </tr>
              @empty
              <tr>
                <td>{{ __('Data tidak ada.') }}</td>
              </tr>
              @endforelse
            </tbody>
          </table>
          {{ $users->links() }}
        </div>
      </div>
    </div>
    @include('layouts.script')
</section>
