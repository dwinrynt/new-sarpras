@extends('myLayouts.main')

@section('tambahcss')
    <style>
        .input-group-prepend button i {
            position: absolute;
            left: 35px;
        }

    </style>
@endsection

@section('container')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark display-4" style="padding: 0 !important;">Ruang Penunjang</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="container-fluid">

        {{-- ---------------------------------------------------------------------------------------- KONDISI IDEAL ---------------------------------------------------------------------------------------- --}}
        <div class="info-box p-0 pimpinan-infobox">
            <span class="info-box-icon p-4" style="background-color: #25b5e9; width: auto; min-width: 300px;">
                <img src="/assets/img/icons/flaticons/town.png"
                    style="filter: invert(100%); object-fit: cover; width: 80px; aspect-ratio: 1/1;">
                <div class="ml-4">
                    <span class="text-white font-weight-bold" style="font-size: 25px">
                        Kondisi Ideal
                    </span>
                    <div class="d-flex align-items-end justify-content-center">
                        <h1 class="display-4 text-white font-weight-bold">{{ $bangunan->kondisi_ideal }}</h1>
                        <p class="text-white font-weight-bold" style="font-size: 15px">/ Kantor</p>
                    </div>
                </div>
            </span>
            <div class="info-box-content">
                @if ($bangunan->ket_kondisi_ideal != null)
                    <label>Keterangan:</label>
                @endif
                <button type="button" class="btn btn-tool text-dark" style="position: absolute; right:0%; padding-top:8px"
                    data-toggle="modal" data-target="#edit-kondisi-ideal"><i class="bi bi-pencil-square"></i>
                </button>
                <p>{{ $bangunan->ket_kondisi_ideal }}</p>
                @if ($bangunan->ket_kondisi_ideal == null)
                    <div class="container d-flex justify-content-center align-items-center" style="height: 10rem">
                        <div class="alert" role="alert">
                            Data Tidak Ditemukan
                        </div>
                    </div>
                @endif

            </div>
        </div>
        {{-- modal --}}
        <div class="modal fade" id="edit-kondisi-ideal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #25b5e9; margin-left:-1px">
                        <h4 class="modal-title text-white">Kondisi Ideal</h4>
                        <button type="button" class="close" style="color: aliceblue" data-dismiss="modal"
                            aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="/bangunan-all/update-kondisi-ideal/{{ $bangunan->id }}" method="post">
                        @csrf
                        @method('patch')
                        <div class="modal-body">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="ideal" class="col-sm-2 col-form-label">Kondisi Ideal</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" id="ideal" name="kondisi_ideal"
                                            value="{{ $bangunan->kondisi_ideal }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="ideal" class="col-sm-2 col-form-label">Keterangan kondisi
                                        ideal</label>
                                    <div class="col-sm-10">
                                        <textarea name="ket_kondisi_ideal" id="ideal" rows="5" class="form-control"
                                            placeholder="Keterangan Kondisi Ideal">{{ $bangunan->ket_kondisi_ideal }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn text-white float-right"
                                style="background-color: #00a65b">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- modal --}}

        {{-- ---------------------------------------------------------------------------------------- KETERSEDIAAN ---------------------------------------------------------------------------------------- --}}
        <div class="info-box p-0 pimpinan-infobox">
            <span class="info-box-icon p-4" style="background-color: #fcc12d; width: auto; min-width: 300px;">
                <img src="/assets/img/icons/flaticons/building.png"
                    style="filter: invert(100%); object-fit: cover; width: 80px; aspect-ratio: 1/1;">
                <div class="ml-4 text-white font-weight-bold">
                    <span class="text white font-weight-bold" style="font-size: 25px">
                        Ketersediaan
                    </span>
                    <div class="d-flex align-items-end justify-content-center">
                        <h1 class="display-4 text-white font-weight-bold">{{ $bangunan->ketersediaan }}</h1>
                        <p class="text-white font-weight-bold" style="font-size: 15px">/ Kantor</p>
                    </div>
                </div>
            </span>
            <div class="info-box-content">
            @if ($bangunan->ket_ketersediaan != null)
                    <label>Keterangan:</label>
                @endif
                <button type="button" class="btn btn-tool text-dark" style="position: absolute; right:0%; padding-top:8px"
                    data-toggle="modal" data-target="#edit-ketersediaan"><i class="bi bi-pencil-square"></i>
                </button>
                @if ($bangunan->ket_ketersediaan == null)
                    <div class="container d-flex justify-content-center align-items-center" style="height: 10rem">
                        <div class="alert" role="alert">
                            Data Tidak Ditemukan
                        </div>
                    </div>
                @endif
                <p>{{ $bangunan->ket_ketersediaan }}</p>

            </div>
        </div>
        {{-- modal --}}
        <div class="modal fade" id="edit-ketersediaan">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #fcc12d; margin-left:-1px">
                        <h4 class="modal-title text-white">Ketersediaan</h4>
                        <button type="button" class="close" style="color: aliceblue" data-dismiss="modal"
                            aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="/bangunan-all/update-ketersediaan/{{ $bangunan->id }}" method="post">
                        @csrf
                        @method('patch')
                        <div class="modal-body">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="ideal" class="col-sm-2 col-form-label">Ketersediaan</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" id="ideal" name="ketersediaan"
                                            value="{{ $bangunan->ketersediaan }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="ideal" class="col-sm-2 col-form-label">Keterangan
                                        Ketersediaan</label>
                                    <div class="col-sm-10">
                                        <textarea name="ket_ketersediaan" id="ideal" rows="5" class="form-control"
                                            placeholder="Keterangan Ketersediaan">{{ $bangunan->ket_ketersediaan }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn text-white float-right"
                                style="background-color: #00a65b">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- modal --}}

        {{-- ---------------------------------------------------------------------------------------- KEKURANGAN ---------------------------------------------------------------------------------------- --}}
        <div class="info-box p-0 pimpinan-infobox">
            <span class="info-box-icon p-4" style="background-color: #263238; width: auto; min-width: 300px;">
                <img src="/assets/img/icons/flaticons/school.png"
                    style="filter: invert(100%); object-fit: cover; width: 50px; aspect-ratio: 1/1;">
                <div class="ml-4">
                    <span class="text-white font-weight-bold" style="font-size: 25px">
                        Kekurangan
                    </span>
                    <div class="d-flex align-items-end justify-content-center">
                        <h1 class="display-4 text-white font-weight-bold">{{ $bangunan->kekurangan }}</h1>
                        <p class="text-white font-weight-bold" style="font-size: 15px">/ Kantor</p>
                    </div>
                </div>
            </span>
            <div class="info-box-content">
                @if ($bangunan->ket_kekurangan != null)
                    <label>Keterangan:</label>
                @endif
                <button type="button" class="btn btn-tool text-dark" style="position: absolute; right:0%; padding-top:8px"
                    data-toggle="modal" data-target="#edit-kekurangan"><i class="bi bi-pencil-square"></i>
                </button>
                @if ($bangunan->ket_kekurangan == null)
                    <div class="container d-flex justify-content-center align-items-center" style="height: 10rem">
                        <div class="alert" role="alert">
                            Data Tidak Ditemukan
                        </div>
                    </div>
                @endif
                <p>{{ $bangunan->ket_kekurangan }}</p>

            </div>
        </div>
        {{-- modal --}}
        <div class="modal fade" id="edit-kekurangan">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #263238; margin-left:-1px">
                        <h4 class="modal-title text-white">Kekurangan</h4>
                        <button type="button" class="close" style="color: aliceblue" data-dismiss="modal"
                            aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="/bangunan-all/update-kekurangan/{{ $bangunan->id }}" method="post">
                        @csrf
                        @method('patch')
                        <div class="modal-body">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="ideal" class="col-sm-2 col-form-label">Kekurangan</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" id="ideal" name="kekurangan"
                                            value="{{ $bangunan->kekurangan }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="ideal" class="col-sm-2 col-form-label">Keterangan Kekurangan</label>
                                    <div class="col-sm-10">
                                        <textarea name="ket_kekurangan" id="ideal" rows="5" class="form-control"
                                            placeholder="Keterangan Kekurangan">{{ $bangunan->ket_kekurangan }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn text-white float-right"
                                style="background-color: #00a65b">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- modal --}}

        {{-- ---------------------------------------------------------------------------------------- USULAN PENUNJANG ---------------------------------------------------------------------------------------- --}}
        <div class="card">
            <div class="card-header" style="background-color: #25b5e9">
                <h3 class="card-title text-white font-weight-bold">Ruang Penunjang Tersedia</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool border border-light text-white" data-toggle="modal"
                        data-target="#tambah-tersedia"><i class="bi bi-plus"></i> Tambah Ketersediaan Ruang Penunjang
                    </button>
                </div>
            </div>
            <div class="card-body">
                @if (count($datas) > 0)
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr class="text-center">
                                    <th style="vertical-align: middle;">No</th>
                                    <th style="vertical-align: middle;">Jenis Ruang</th>
                                    <th style="vertical-align: middle;">Nama</th>
                                    <th style="vertical-align: middle;">Panjang(M)</th>
                                    <th style="vertical-align: middle;">Lebar(M)</th>
                                    <th style="vertical-align: middle;">Luas (M²)</th>
                                    <th style="vertical-align: middle;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($datas as $data)
                                    <tr>
                                        <input type="hidden" class="id_pimpinan" value="{{ $data['id'] }}">
                                        <td class="text-center" style="vertical-align: middle">{{ $loop->iteration }}
                                        </td>
                                        <td class="text-center jenis" style="vertical-align: middle"
                                            data-id="{{ $data['id_jenis'] }}">{{ $data['jenis'] }}</td>
                                        <td class="text-center nama" style="vertical-align: middle">{{ $data['nama'] }}
                                        </td>
                                        <td class="text-center panjang" style="vertical-align: middle">
                                            {{ $data['panjang'] }}
                                        </td>
                                        <td class="text-center lebar" style="vertical-align: middle">
                                            {{ $data['lebar'] }}
                                        </td>
                                        <td class="text-center luas" style="vertical-align: middle">{{ $data['luas'] }}
                                        </td>
                                        <td>
                                            <div class="card-body">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <button type="button" class="btn"
                                                            data-toggle="dropdown">
                                                            <i class="bi bi-three-dots-vertical"></i>
                                                        </button>
                                                        <div class="dropdown-menu" style="margin-left: -73px">
                                                            <button type="submit" class="dropdown-item tombol-edit-ketersediaan" data-toggle="modal" data-target="#edit-tersedia">Edit</button>
                                                            <form action="/bangunan/penunjang/{{ $data['id'] }}"
                                                                method="post">
                                                                @csrf
                                                                @method('delete')
                                                                <button type="submit" class="dropdown-item"
                                                                    onclick="return confirm('Apakah anda yakin akan manghapus ketersediaan ruang penunjang ini?')">Hapus</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <div class="container d-flex justify-content-center align-items-center" style="height: 10rem">
                        <div class="alert" role="alert">
                            Data Tidak Ditemukan
                        </div>
                    </div>
                @endif
            </div>
        </div>

        {{-- ---------------------------------------------------------------------------------------- MODAL USULAN ---------------------------------------------------------------------------------------- --}}
        <div class="modal fade" id="tambah-tersedia">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Tambah Ketersediaan Ruang Penunjang</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @if (count($jenis_pimpinans) > 0)
                            <form class="form-horizontal" action="/bangunan/penunjang" method="POST">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="jumlah-lahan" class="col-sm-2 col-form-label">Jenis Ruang</label>
                                        <div class="col-sm-10">
                                            <select name="jenis_pimpinan_id" id="" required class="custom-select">
                                                @foreach ($jenis_pimpinans as $data)
                                                    <option value="{{ $data->id }}">{{ $data->nama }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="luas-lahan" class="col-sm-2 col-form-label">Nama Bangunan</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="luas-lahan" name="nama" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="luas-lahan" class="col-sm-2 col-form-label">Panjang(M)</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" id="luas-lahan" name="panjang"
                                                required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="luas-lahan" class="col-sm-2 col-form-label">Lebar(M)</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" id="luas-lahan" name="lebar"
                                                required>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success float-right">Simpan</button>
                                </div>
                            </form>
                        @else
                            <div class="container d-flex justify-content-center align-items-center" style="height: 10rem">
                                <div class="alert" role="alert">
                                    Belum ada jenis ruang Penunjang
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="edit-tersedia">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Ketersediaan Ruang Penunjang</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @if (count($jenis_pimpinans) > 0)
                            <form class="form-horizontal" action="/bangunan/penunjang" method="POST">
                                @csrf
                                @method('patch')
                                <div class="card-body">
                                    <div class="form-group row">
                                        <input type="hidden" name="id_pimpinan" class="id_pimpinan_input">
                                        <label for="jumlah-lahan" class="col-sm-2 col-form-label">Jenis Ruang</label>
                                        <div class="col-sm-10">
                                            <select name="jenis_pimpinan_id" id="" required class="custom-select">
                                                @foreach ($jenis_pimpinans as $data)
                                                    <option value="{{ $data->id }}" class="option-jenis">
                                                        {{ $data->nama }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="luas-lahan" class="col-sm-2 col-form-label">Nama Bangunan</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control input-nama" id="luas-lahan" name="nama"
                                                required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="luas-lahan" class="col-sm-2 col-form-label">Panjang(M)</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control input-panjang" id="luas-lahan"
                                                name="panjang" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="luas-lahan" class="col-sm-2 col-form-label">Lebar(M)</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control input-lebar" id="luas-lahan"
                                                name="lebar" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success float-right">Simpan</button>
                                </div>
                            </form>
                        @else
                            <div class="container d-flex justify-content-center align-items-center" style="height: 10rem">
                                <div class="alert" role="alert">
                                    Belum ada jenis ruang Penunjang
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        {{-- --------------------------------------- USULAN RUANG PENUNJANG --------------------------------------- --}}
        <div class="card card-info">
            <div class="card-header bg-warning">
                <h3 class="card-title font-weight-bold text-white">Usulan Ruang Penunjang</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool border border-light text-white" data-toggle="modal"
                        data-target="#tambah-usulan"><i class="bi bi-plus"></i> Tambah Usulan
                    </button>
                </div>
            </div>
            <div class="card-body">
                @if (count($usulans) > 0)
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr class="text-center">
                                    <th rowspan="2" style="vertical-align: middle;">No</th>
                                    <th rowspan="2" style="vertical-align: middle;">Jenis Ruang</th>
                                    <th rowspan="2" style="vertical-align: middle;">Jumlah Ruang</th>
                                    <th colspan="2">Ketersedian Lahan</th>
                                    <th rowspan="2" style="vertical-align: middle;">Proposal</th>
                                    <th rowspan="2" style="vertical-align: middle;">Keterangan</th>
                                    <th rowspan="2" style="vertical-align: middle;">Aksi</th>
                                </tr>
                                <tr class="text-center">
                                    <th>Luas Lahan</th>
                                    <th>Gambar Lahan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($usulans as $key => $usulan)
                                    <tr>
                                        <th class="text-center">{{ $loop->iteration }}</th>
                                        <td class="text-center text-capitalize">{{ $usulanJenis[$key]->nama }}
                                        </td>
                                        <td class="text-center">{{ $usulan->jml_ruang }}</td>
                                        <td class="text-center">{{ $usulan->luas_lahan }} M²</td>
                                        <td class="text-center" style="vertical-align: middle">
                                            @foreach ($usulanFotos[$key] as $ke => $foto)
                                                <a href="{{ asset('storage/' . $foto->nama) }}" class="fancybox"
                                                    data-fancybox="gallery{{ $key }}">
                                                    <img src="{{ asset('storage/' . $foto->nama) }}"
                                                        class="rounded"
                                                        style="object-fit: cover; width: 150px; aspect-ratio: 1/1;{{ $ke == 0 ? '' : 'display:none;' }}">
                                                </a>
                                            @endforeach
                                        </td>
                                        <td class="text-center">
                                            <a href="{{ asset('storage/' . $usulan->proposal) }}" target="_blank">
                                                <img src="/img/pdf.png" alt="image" style="width: 30px">
                                            </a>
                                        </td>
                                        <td class="text-center">{{ $usulan->keterangan }}</td>
                                        <td class="text-center">
                                            <a href="/bangunan/usulan/{{ $usulan->id }}/edit"
                                                class="btn btn-warning text-white">Edit</a>
                                            <form action="/usulan-bangunan/{{ $usulan->id }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn text-white mt-2"
                                                    style="background-color: #00a65b"
                                                    onclick="return confirm('Apakah anda yakin akan membatalkan usulan ini?')">Batalkan</button>
                                            </form>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <div class="container d-flex justify-content-center align-items-center" style="height: 10rem">
                        <div class="alert" role="alert">
                            Data Tidak Ditemukan
                        </div>
                    </div>
                @endif
            </div>
        </div>

        {{-- ------------------------------------------- MODAL USULAN ------------------------------------------ --}}
        <div class="modal fade" id="tambah-usulan">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <form action="/bangunan/usulan-ruang-penunjang" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-header">
                            <h4 class="modal-title">Usulan Ruang Penunjang</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            @if (count($jenis_pimpinans) > 0)
                                <div class="form-group row">
                                    <label for="jumlah-lahan" class="col-sm-4 col-form-label">Jenis Ruang</label>
                                        <select name="jenis_pimpinan_id" id="" required class="custom-select col-sm-7">
                                            @foreach ($jenis_pimpinans as $data)
                                                <option value="{{ $data->id }}">{{ $data->nama }}</option>
                                            @endforeach
                                        </select>
                                </div>
                                {{-- input jumlah ruangan --}}
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Jumlah Ruang</label>
                                    <input type="number" class="form-control col-sm-7 loading-tambah" placeholder="Masukan Jumlah Ruangan"
                                        id="jumlah-ruangan" name="jml_ruang" required>
                                </div>
                                {{-- end input jumlah ruangan --}}

                                {{-- input luas lahan --}}
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Luas Lahan (M²)</label>
                                    <input type="number" class="form-control col-sm-7 loading-tambah" placeholder="Masukan Luas Lahan"
                                        id="luas-lahan" name="luas_lahan" required>
                                </div>
                                {{-- end luas lahan --}}

                                {{-- upload gambar lokasi --}}
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label pt-1" for="customFile">Gambar Lahan</label>
                                    <input type="file" class="loading-tambah" id="gambar-lahan" required multiple accept="image/*" name="gambar[]">
                                </div>
                                {{-- end upload gambar lokasi --}}
                                {{-- upload proposal --}}
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label pt-1" for="customFile">Proposal</label>
                                    <input type="file" class="loading-tambah" id="proposal" required accept=".pdf" name="proposal">
                                </div>
                                {{-- end upload proposal --}}
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn text-white loading-simpan" style="background-color: #00a65b">Simpan</button>
                        </div>
                    </form>
                @else
                    <div class="container d-flex justify-content-center align-items-center" style="height: 10rem">
                        <div class="alert" role="alert">
                            Belum ada jenis ruang Penunjang
                        </div>
                    </div>
                    @endif
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

    </div><!-- /.container-fluid -->
@endsection

@section('tambahjs')
    <script>
        const jenis = document.querySelectorAll('.jenis');
        const nama = document.querySelectorAll('.nama');
        const panjang = document.querySelectorAll('.panjang');
        const lebar = document.querySelectorAll('.lebar');
        const optionJenis = document.querySelectorAll('.option-jenis');
        const inputNama = document.querySelector('.input-nama');
        const inputPanjang = document.querySelector('.input-panjang');
        const inputLebar = document.querySelector('.input-lebar');
        const id_pimpinan = document.querySelectorAll('.id_pimpinan');
        const id_pimpinan_input = document.querySelector('.id_pimpinan_input');
        const tombolEditKetersediaan = document.querySelectorAll('.tombol-edit-ketersediaan');

        tombolEditKetersediaan.forEach((e, i) => {
            e.addEventListener('click', function() {
                optionJenis.forEach((elem) => {
                    if (elem.value == jenis[i].getAttribute('data-id')) {
                        elem.setAttribute('selected', 'selected');
                    }
                });
                id_pimpinan_input.value = '';
                id_pimpinan_input.value = id_pimpinan[i].value;
                inputNama.value = '';
                inputNama.value = nama[i].innerHTML;
                inputPanjang.value = '';
                inputPanjang.value = parseInt(panjang[i].innerHTML);
                inputLebar.value = '';
                inputLebar.value = parseInt(lebar[i].innerHTML);
            })
        });
    </script>
@endsection
