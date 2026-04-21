<!DOCTYPE html>
<html>
<head>
    <title>Edit Penghuni</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <div class="card shadow">
        <div class="card-header bg-warning">
            <h4>Edit Penghuni Kos</h4>
        </div>

        <div class="card-body">

            <form action="/penghuni/update/{{ $data->id }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama_lengkap" value="{{ $data->nama_lengkap }}" class="form-control">
                </div>

                <div class="mb-3">
                    <label>NIK</label>
                    <input type="text" name="nik" value="{{ $data->nik }}" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Umur</label>
                    <input type="number" name="umur" value="{{ $data->umur }}" class="form-control">
                </div>

<div class="mb-3">
    <label>Kamar</label>

    <select name="kamar_id" class="form-control" required>
        <option value="" disabled selected>-- Pilih Kamar --</option>

        @foreach($kamars as $kamar)
            <option value="{{ $kamar->id }}">
                ID: {{ $kamar->id }} | No: {{ $kamar->nomor_kamar }} | {{ ucfirst($kamar->status) }}
            </option>
        @endforeach
    </select>

    @error('kamar_id')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
                <div class="mb-3">
                    <label>No HP</label>
                    <input type="text" name="no_hp" value="{{ $data->no_hp }}" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Email</label>
                    <input type="text" name="email" value="{{ $data->email }}" class="form-control">
                </div>

                <button type="submit" class="btn btn-success">
                    Update
                </button>

                <a href="/penghuni" class="btn btn-secondary">
                    Kembali
                </a>

            </form>

        </div>
    </div>

</div>

</body>
</html>