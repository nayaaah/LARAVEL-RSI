@extends('main')

@section('title', 'Jadwal')
@section('content')
    <!--begin::Row-->
    <div class="row">
        <div class="col-12">
            {{-- form tambah prodi --}}
            <div class="card card-primary card-outline mb-4">
                  <!--begin::Header-->
                  <div class="card-header"><div class="card-title">Form Tambah Jadwal</div></div>
                  <!--end::Header-->
                  <!--begin::Form-->
                  <form action="{{ route('jadwal.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!--begin::Body-->
                    <div class="card-body">
                      <div class="mb-3">
                        <label for="tahun" class="form-label">Tahun Akademi</label>
                        <input type="text" class="form-control" name="tahun" value="{{ old('tahun') }}">
                        @error('tahun')
                          <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="kode_smt" class="form-label">Kode Semester</label>
                        <input type="text" class="form-control" name="kode_smt" value="{{ old('kode_smt') }}">
                        @error('kode')
                          <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="kelas" class="form-label">Kelas</label>
                        <input type="date" class="form-control" name="kelas" value="{{ old('kelas') }}">
                        @error('kelas')
                          <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="sesi" class="form-label">Sesi</label>
                        <input type="text" class="form-control" name="sesi" value="{{ old('sesi') }}">
                        @error('sesi')
                          <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="matakuliah" class="form-label">Mata Kuliah</label>
                        <input type="text" class="form-control" name="matakuliah" value="{{ old('matakuliah') }}">
                        @error('matakuliah')
                          <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="foto" class="form-label">Dosen</label>
                        <input type="file" class="form-control" name="foto">
                        @error('foto')
                          <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="jk" class="form-label">Jenis Kelamin</label>
                        <input type="radio" value="L" name="jk" {{ old('jk') == 'L' ? 'selected' : null }}> Laki-laki
                        <input type="radio" value="P" name="jk" {{ old('jk') == 'P' ? 'selected' : null }}> Perempuan
                      </div>
                      <div class="mb-3">
                        <label for="prodi_id" class="form-label">Program Studi</label>
                        <select name="prodi_id" class="form-control">
                          @foreach ($prodi as $item)
                            <option value="{{ $item->id }}" {{ old('prodi_id') == $item->id ? "selected" : null }}> {{ $item->nama }} </option>
                          @endforeach
                        </select>
                        @error('prodi_id')
                          <div class="text-danger">{{ $message }}</div>
                        @enderror
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