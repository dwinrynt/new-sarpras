@extends('mylayouts.main')

@section('tambahcss')
    <style>
        .info-box-content p {
            padding-top: 60px;
        }

        .col-5 h1 {
            font-weight: 600;
            font-size: 2rem;
        }

        .card-content {
            font-size: 5rem;
        }

        .col-8 {
            padding-top: 40px;
        }

        .col-5 h1 {
            margin-left: 25px;
            margin-bottom: 30px;
        }
    </style>
@endsection

@section('container')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark display-4" style="padding: 0 !important;text-transform: capitalize;">Usulan
                        {{ str_replace('_', ' ', $data->jenis) }}</h1>
                </div>
            </div>
        </div>
    </div>

    {{-- Main-Content --}}
    <div class="container-fluid">
        {{-- @dd($profil) --}}
        <div class="card">
            <div class="card-header" style="background-color: #25b5e9">
                <h3 class="card-title text-white font-weight-bold">
                    Profil Sekolah
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <div class="tab-content p-0">
                    <div class="tab-pane active" id="data-sekolah">
                        <table class="table table-hover table-borderless text-nowrap">
                            <tr>
                                <th>NPSN</th>
                                <td>: {{ $profil->npsn }}</td>
                            </tr>
                            <tr>
                                <th>Nama Sekolah</th>
                                <td>: {{ $profil->nama }}</td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <td>: {{ $profil->alamat }}</td>
                            </tr>
                            <tr>
                                <th>Kecamatan</th>
                                <td>: {{ $profil->kecamatan }}</td>
                            </tr>
                            <tr>
                                <th>Kabupaten</th>
                                <td>: {{ $profil->kabupaten }}</td>
                            </tr>
                            <tr>
                                <th>Provinsi</th>
                                <td>: {{ $profil->provinsi }}</td>
                            </tr>
                            <tr>
                                <th>Nomor Telepon</th>
                                <td>: {{ $profil->nomor_telepon }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.row -->

        <div class="card">
            <div class="card-header" style="background-color: #00a65b">
                <h3 class="card-title text-white font-weight-bold">
                    Usulan
                </h3>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active" id="">
                        <table class="table table-hover table-bordered text-center">
                            <thead class="bg-light text-center">
                                <tr>
                                    @if ($data->jenis != 'ruang_pimpinan' && $data->jenis != 'ruang_praktek' && $data->jenis != 'laboratorium')
                                        <th rowspan="2" style="vertical-align: middle;">Jenis Ruang</th>
                                    @elseif($data->jenis == 'ruang_praktek')
                                        <th rowspan="2" style="vertical-align: middle;">Jurusan</th>
                                    @elseif($data->jenis == 'ruang_pimpinan')
                                        <th rowspan="2" style="vertical-align: middle;">Jenis Ruang</th>
                                    @else
                                        <th rowspan="2" style="vertical-align: middle;">Jenis Laboratorium</th>
                                    @endif

                                    @if ($data->jenis != 'perpustakaan' || $data->jenis != 'toilet')
                                        <th rowspan="2" style="vertical-align: middle;">Jumlah Ruang</th>
                                    @endif
                                    <th colspan="2" style="vertical-align: middle;">Ketersedian Lahan</th>
                                    <th rowspan="2" style="vertical-align: middle;">Keterangan</th>
                                </tr>
                                <tr>
                                    <th class="text-center">Gambar Lahan</th>
                                    <th class="text-center">Luas Lahan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @if ($data->jenis != 'ruang_pimpinan' && $data->jenis != 'ruang_praktek' && $data->jenis != 'laboratorium')
                                        <td style="vertical-align: middle;text-transform: capitalize;">
                                            {{ str_replace('_', ' ', $data->jenis) }}</td>
                                    @elseif($data->jenis == 'ruang_praktek')
                                        <td style="vertical-align: middle;">{{ $jurusan }}</td>
                                    @elseif($data->jenis == 'ruang_pimpinan')
                                        <td style="vertical-align: middle;">{{ $jenisPimpinan }}</td>
                                    @else
                                        <td style="vertical-align: middle;">{{ $jenisLaboratorium }}</td>
                                    @endif

                                    @if ($data->jenis != 'perpustakaan')
                                        @if ($data->jenis != 'toilet')
                                            <td class="text-center" style="vertical-align: middle;">
                                                {{ $data->jml_ruang }}
                                        @endif
                                    @endif
                                    </td>
                                    <td style="vertical-align: middle">
                                        @foreach ($usulanFoto as $key => $foto)
                                            <a href="{{ asset('storage/' . $foto->nama) }}" class="fancybox"
                                                data-fancybox="gallery"><img src="{{ asset('storage/' . $foto->nama) }}"
                                                    class="rounded"
                                                    style="object-fit: cover; width: 150px; aspect-ratio: 1/1;{{ $key == 0 ? '' : 'display:none;' }}">
                                            </a>
                                        @endforeach
                                    </td>
                                    <td class="text-center" style="vertical-align: middle;">{{ $data->luas_lahan }} m²
                                    </td>
                                    <td style="vertical-align: middle;">{{ $data->keterangan }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <iframe src="{{ asset('storage/' . $data->proposal) }}" frameborder="0" style="width: 66%;
                                                                                    height: 72rem;"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
