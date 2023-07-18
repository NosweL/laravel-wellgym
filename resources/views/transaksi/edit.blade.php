@extends('layouts.main')

@section('content')
<div id="main">
    @include('layouts.navbar')
    <div class="main-content container-fluid">
        <div class="page-title">
            <h3>Update Transaksi</h3>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-12">
                    <form method="post" action="{{ url('transaksi/update', $data->id) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Status</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" value="1" id="flexRadioDefault1" {{ $data->status == 1 ? 'checked' : '' }}>
                                <label class="form-check-label" for="flexRadioDefault1">Aktif</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" value="0" id="flexRadioDefault2" {{ $data->status == 0 ? 'checked' : '' }}>
                                <label class="form-check-label" for="flexRadioDefault2">Belum Aktif</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Member</label>
                            <input type="text" name="nama" class="form-control" value="{{ $data->member->name }}" disabled required data-validation-required-message="This field is required">
                        </div>
                        <div class="mb-3">
                            <label for="tanggal" class="form-label">Nama Coach</label>
                            <select class="form-select" name="coach_id">
                                @foreach($coachs as $coach)
                                <option value="{{ $coach->id }}" {{ $data->coach_id == $coach->id ? 'selected' : '' }}>{{ $coach->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="tanggal" class="form-label">Pilihan Paket</label>
                            <select class="form-select" name="paket_id">
                                @foreach($pakets as $paket)
                                <option value="{{ $paket->id }}" {{ $data->paket_id == $paket->id ? 'selected' : '' }}>{{ $paket->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jadwal Mulai</label>
                            <input type="date" name="jadwal_mulai" class="form-control" value="{{ $data->jadwal_mulai }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jadwal Selesai</label>
                            <input type="date" name="jadwal_selesai" class="form-control" value="{{ $data->jadwal_selesai }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Metode Pembayaran</label>
                            <input type="text" name="pembayaran" class="form-control" value="{{ $data->pembayaran == 0 ? 'Bayar Di Tempat' : 'Transfer' }}" disabled>
                            <input type="file" name="bukti" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
<script>
    $(function () {
        $("#pembayaran").change(function () {
            if ($("#cod").is(":selected")) {
                $("#norek").hide();
                $("#bukti_tf").hide();
            } else {
                $("#norek").show();
                $("#bukti_tf").show();
            }
        }).trigger('change');
    });
</script>
@endsection
