@extends('layouts.app-navbar')
@section('title', 'Daftar Event')

@section('css')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/event/event.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
@endsection
@section('content')
<!DOCTYPE html>
<html lang="en">


<body>

    

    <section class="banner" style=""> <img src="{{ env('APP_BACKEND_URL') . '/images/' . $event->img }}"
            class="w-100 h-auto" alt=""></section>
    <div class="content d-flex flex-column justify-content-start">
        <div class="container">
            <form action="{{ route('events.update', $event) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
                <p class="" style="font-size:40px; font-weight:bold">Isi Data Diri</p>
                <div class="mb-4 mt-4">
                    <label for="nama_depan" class="form-label">Nama Lengkap</label>
                    <input type="text" name="" id="nama_depan" class="form-control" placeholder="Isi disini"
                        required>
                </div>
                <div class="mb-4 mt-4">
                    <label for="nama_depan" class="form-label">Email</label>
                    <input type="text" name="" id="nama_depan" class="form-control" placeholder="Isi disini"
                        required>
                </div>

                <div class="mb-4 mt-4">
                    <label for="pekerjaan" class="form-label">Pekerjaan</label>
                    <select id="pekerjaan" name="pekerjaan" class="form-control" required>
                        <option value="" disabled selected>Pilih Pekerjaan</option>
                        <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
                        <option value="Guru/Dosen">Guru/Dosen</option>
                        <option value="Swasta">Swasta</option>
                        <option value="PNS">PNS</option>
                        <option value="Belum Bekerja">Belum Bekerja</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                    {{-- <input type="text" id="customPekerjaan" class="form-control hidden-input mt-2" placeholder="Isi disini" required> --}}
                </div>


                <div class="mb-4 mt-4">
                    <label for="nama_depan" class="form-label">Nama Instansi/Perusahaan ( Opsional )</label>
                    <input type="text" name="instansi" id="nama_depan" class="form-control" placeholder="Isi disini">
                </div>

                <input type="hidden" name="event_id" value="{{ $event->id }}">
                <button type="submit" class="btn-simpan mt-5"
                        style="font-size: 20px; font-weight:bold">Simpan Data</button>

            </form>
        </div>
    </div>
  

    <script>
        document.getElementById('pekerjaan').addEventListener('change', function() {
            var customInput = document.getElementById('customPekerjaan');
            if (this.value === 'Lainnya') {
                customInput.classList.remove('hidden-input');
            } else {
                customInput.classList.add('hidden-input');
            }
        });
    </script>
</body>

@endsection
