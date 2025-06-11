@extends('main')

@section('title', 'Matakuliah')
@section('content')
    <!--begin::Row-->
    <div class="row">
        <div class="col-12">
            {{-- form tambah matakuliah --}}
            <div class="card card-primary card-outline mb-4">
                  <!--begin::Header-->
                  <div class="card-header"><div class="card-title">Form Ubah Mata Kuliah</div></div>
                  <!--end::Header-->
                  <!--begin::Form-->
                  <form action="{{ route('matakuliah.update', $matakuliah->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <!--begin::Body-->
                    <div class="card-body">
                      <div class="mb-3">
                        <label for="text" class="form-label">Kode Mata Kuliah</label>
                        <input type="text" class="form-control" name="kode" value="{{ old('kode') ? old('kode') : $matakuliah->kode }}">
                      </div>
                      <div class="mb-3">
                        <label for="nama" class="form-label">Nama Matkul</label>
                        <input type="text" class="form-control" name="nama" value="{{ old('nama') ? old('nama') : $matakuliah->nama }}">
                      </div>
                      <div class="mb-3">
                        <label for="prodi" class="form-label">Program Studi</label>
                        <select name="prodi_id" class="form-control">
                          @foreach ($prodi as $item)
                            <option value="{{ $item->id }}" {{ old('prodi_id') == $item->id ? 'selected' : ($matakuliah->prodi_id == $item->id ? 'selected' : null) }}> {{ $item->nama }} </option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <!--end::Footer-->
                  </form>
                  <!--end::Form-->
            </div>
        </div>
    </div>
    <!--end::Row-->
@endsection