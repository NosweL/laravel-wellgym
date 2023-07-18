@extends('layouts.main')

@section('content')
<div id="main">
    @include('layouts.navbar')
    <div class="main-content container-fluid">
        <div class="page-title">
            <h3>Tambah Coach</h3>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-12">
                    <form method="post" action="{{route('coachs.store')}}" onsubmit="return validateForm()">
                        @csrf
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" name="nama" id="nama" class="form-control" required
                                pattern="[A-Za-z\s]+" title="Nama harus berupa huruf"
                                data-validation-required-message="This field is required">
                        </div>
                        <div class="mb-3">
                            <label for="no_telp" class="form-label">No Telp</label>
                            <input type="text" name="no_telp" id="no_telp" class="form-control" required
                                pattern="[0-9]+" title="Nomor telepon harus berupa angka"
                                data-validation-required-message="This field is required">
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" name="alamat" class="form-control" required
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
        var nameRegex = /^[A-Za-z\s]+$/;
        var phoneRegex = /^[0-9]+$/;

        if (nama.trim() === '' || !nameRegex.test(nama)) {
            alert('Nama harus berupa huruf!');
            return false;
        }

        if (!phoneRegex.test(noTelp)) {
            alert('Nomor telepon harus berupa angka!');
            return false;
        }

        return true;
    }
</script>
@endsection
