@extends('layouts.app')

@section('content')
<section class="logos-section theme-bg-primary py-5">
    <div class="container" style="border-radius: 20px;">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card bg-light border-primary" style="border-radius: 20px">
                    <div class="card-body">
                        <div class="text-center mb-4">
                            <h4 class="text-center">Tambah Penilaian</h4>
                        </div>

                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <b>Terjadi kesalahan pada proses input data</b> <br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <form action="{{ route('penilaian.store') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="coach_id" class="form-label">Nama Coach</label>
                                <select name="coach_id" id="coach_id" class="form-control">
                                    <option value="">Pilih Coach</option>
                                    @foreach ($coaches as $coach)
                                    <option value="{{ $coach->id }}">{{ $coach->nama }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="latihan_id" class="form-label">Nama Latihan</label>
                                <select name="latihan_id" id="latihan_id" class="form-control">
                                    <option value="">Pilih Latihan</option>
                                    @foreach ($latihans as $latihan)
                                    <option value="{{ $latihan->id }}">{{ $latihan->nama }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="nilai" class="form-label">Nilai</label>
                                <input type="number" class="form-control" id="nilai" name="nilai">
                            </div>

                            <div class="d-grid gap-2 mt-4">
                                <button type="submit" class="btn btn-primary btn-lg" type="button">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
