<section id="about" class="about my-5">
    <div class="container" >
      <div class="section-title my-5">
        <h2>{{ $title }}</h2>
        <div class="row mb-2">
            <div class="col">
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
                <th scope="col">No.</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Tempat, Tanggal Lahir</th>
                <th scope="col">Opsi</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($daftars as $i=> $daftar)
              <tr>
                <th scope="row">{{ $daftars->firstItem()+$i }}</th>
                <td>{{ $daftar->name }}</td>
                <td>{{ $daftar->gender == 'L' ? 'Laki-Laki' : 'Perempuan' }}</td>
                <td>{{ $daftar->tmptLahir }}, {{ \Carbon\Carbon::parse($daftar->tglLahir)->locale('id')->translatedFormat('d F Y') }} </td>
                <td>
                    <a href="{{ route('dp.detail', $daftar->id ) }}" class="btn btn-sm btn-info text-light"><i class="bi bi-eye-fill"></i></a>
                    <a href="{{ route('dp.edit', $daftar->id ) }}" class="btn btn-sm btn-success text-light"><i class="bi bi-pencil-square"></i></a>
                    <button wire:click.prevent="deleting({{ $daftar->id }})" class="btn btn-sm btn-danger text-light"><i class="bi bi-x-circle"></i></button>
                </td>
              </tr>
              @empty
              <tr>
                <td>Data tidak ada.</td>
              </tr>
              @endforelse
            </tbody>
          </table>
          {{ $daftars->links() }}
        </div>
      </div>
    </div>
    @include('layouts.script')
  </section>
