<!DOCTYPE html>
<html>
<head>
    <title>Tambah Penghuni</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h3 class="mb-4">Tambah Data Penghuni</h3>

    <form action="/penghuni/store" method="POST">
        @csrf

        <div class="mb-3">
            <label>Nama Lengkap</label>
            <input type="text" name="nama_lengkap" class="form-control">
        </div>

        <div class="mb-3">
            <label>NIK</label>
            <input type="text" name="nik" class="form-control">
        </div>

        <div class="mb-3">
            <label>Umur</label>
            <input type="number" name="umur" class="form-control">
        </div>

           <div class="mb-3">
            <label>Kamar</label>

            <select name="kamar_id" class="form-control" required>
                <option value="" disabled selected>-- Pilih Kamar --</option>

                @foreach($kamars as $kamar)
                    <option value="{{ $kamar->id }}">
                        {{ $kamar->nomor_kamar }} ({{ $kamar->status }})
                    </option>
                @endforeach
            </select>

            @error('kamar_id')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label>No HP</label>
            <input type="text" name="no_hp" class="form-control">
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control">
        </div>

        <button class="btn btn-primary">Simpan</button>
        <a href="/penghuni" class="btn btn-secondary">Kembali</a>
    </form>
</div>

</body>
</html>