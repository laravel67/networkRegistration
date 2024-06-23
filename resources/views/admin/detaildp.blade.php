@extends('layouts.app')
@section('content')
<section class="features my-5">
    <div class="container my-5" data-aos="fade-up">
      <div class="row mb-5">
        <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-right">
          <div class="icon-box mt-5 mt-lg-0">
            <i class="bx bx-receipt"></i>
            <h3>Data Lengkap: <span>{{ $daftar->name }}</span></h3>
            <hr>
            <span>Nama Lengkap:
                <strong>
                    {{ $daftar->name }}
                </strong>
            </span>
            <hr>
            <span>Jenis Kelamin :
                <strong>
                    {{ $daftar->gender == 'L' ? 'Laki-Laki' : 'Perempuan' }}
                </strong>
            </span>
            <hr>
            <span>Tempat, Tanggal Lahir :
                <strong>
                    {{ $daftar->tmptLahir }}, {{ \Carbon\Carbon::parse($daftar->tglLahir)->locale('id')->translatedFormat('d F Y') }} 
                </strong>
            </span>
            <hr>
            <span>Kecamatan :
                <strong>
                    {{ $daftar->kecamatan }}
                </strong>
            </span>
            <hr>
            <span>Kelurahan :
                <strong>
                  {{ $daftar->kelurahan }}
                </strong>
            </span>
            <hr>
            <span>Rw/Rt/No. Rumah :
                <strong>
                   {{ $daftar->alamat }},
                </strong>
            </span>
            <hr>
            <span>Luas Bangunan (m²) :
                <strong>
                   {{ $daftar->luas }}
                </strong>
            </span>
            <hr>
          </div>
        </div>
        @if ($daftar->image)
            <div class="image col-lg-6 order-1 order-lg-2" data-aos="fade-up" style="background-image: url('{{ asset('storage/'.$daftar->image) }}');" data-aos="zoom-in">
        @else
            <div class="image col-lg-6 order-1 order-lg-2" data-aos="fade-up" style="background-image: url('{{ asset('assets/img/slide/noimage.jpg') }}');" data-aos="zoom-in">
        @endif
        </div>

      </div>
      <a href="{{ route('dashboard.index') }}" class="btn btn-sm btn-secondary text-light">Kembali</a>
      <a href="{{ route('dp.edit', $daftar->id ) }}" class="btn btn-sm btn-success text-light"><i class="bi bi-pencil-square"></i> Ubah</a>
    </div>
</section>
@endsection