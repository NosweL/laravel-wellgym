@extends('layouts.main')

@section('content')
<div id="main">
    @include('layouts.navbar')
    <div class="main-content container-fluid">
        <div class="page-title">
            <h3>Daftar Coach</h3>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-12">
                    <form method="post" action="{{route('coachs.update', $editData->id)}}" onsubmit="return validateForm()">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" name="nama" id="nama" class="form-control" value="{{$editData->nama}}" required
                                pattern="[A-Za-z\s]+" title="Nama harus berupa huruf"
                                data-validation-required-message="This field is required">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Alamat</label>
                            <input type="text" name="alamat" class="form-control" value="{{$editData->alamat}}" required
                                data-validation-required-message="This field is required">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">No Telp</label>
                            <input type="text" name="no_telp" id="no_telp" class="form-control" value="{{$editData->no_telp}}" required
                                pattern="[0-9]+" title="Nomor telepon harus berupa angka"
                                data-validation-required-message="This field is required">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>

<script>
    function validateForm() {
        var nama = document.getElementById('nama').value;
        var noTelp = document.getElementById('no_telp').value;
        var nameRegex = /^[a-zA-Z\s']+$/;
        var phoneRegex = /^[0-9]+$/;

        if (nama.trim() === '' || !nameRegex.test(nama)) {
            alert('Nama harus terdiri dari huruf dan spasi!');
            return false;
        }

        if (!phoneRegex.test(noTelp)) {
            alert('Nomor telepon harus dalam format yang valid!');
            return false;
        }

        return true;
    }
</script>
@endsection
