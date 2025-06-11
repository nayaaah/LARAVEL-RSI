@extends('main')

@section('title', 'Materi')
@section('content')
    <!--begin::Row-->
    <div class="row">
        <div class="col-12">
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
            <h3 class="card-title">Materi</h3>
            <div class="card-tools">
                <button
                type="button"
                class="btn btn-tool"
                data-lte-toggle="card-collapse"
                title="Collapse"
                >
                <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                </button>
                <button
                type="button"
                class="btn btn-tool"
                data-lte-toggle="card-remove"
                title="Remove"
                >
                <i class="bi bi-x-lg"></i>
                </button>
            </div>
            </div>
            <div class="card-body">
                <a href="{{ route('materi.create') }}" class="btn btn-primary">Tambah</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Mata Kuliah</th>
                            <th>Dosen</th>
                            <th>Pertemuan</th>
                            <th>Pokok Bahasan</th>
                            <th>File Materi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($materi as $item)
                        <tr>
                            <td>{{ $item->matkul->kode_mk }}</td>
                            <td>{{ $item->dosen->nama }}</td>
                            <td>{{ $item->pertemuan }}</td>
                            <td>{{ $item->pokok_bahasan }}</td>
                            <td>{{ $item->file }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>  
            </div>
            <!-- /.card-body -->
            <div class="card-footer">Footer</div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->
        </div>
    </div>
    <!--end::Row-->
@endsection