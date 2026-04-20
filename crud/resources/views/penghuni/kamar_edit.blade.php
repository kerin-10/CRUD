<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Kamar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container py-5">
    <h3 class="fw-bold mb-4">Edit Kamar</h3>

    <div class="card shadow-sm border-0">
        <div class="card-body">

            <form action="{{ route('kamar.update', $kamar->id) }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Nomor Kamar</label>
                    <input type="text" name="nomor_kamar" class="form-control"
                           value="{{ $kamar->nomor_kamar }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Kategori</label>
                    <select name="kategori" class="form-control">
                        <option value="Standar" {{ $kamar->kategori == 'Standar' ? 'selected' : '' }}>Standar</option>
                        <option value="VIP" {{ $kamar->kategori == 'VIP' ? 'selected' : '' }}>VIP</option>
                        <option value="VVIP" {{ $kamar->kategori == 'VVIP' ? 'selected' : '' }}>VVIP</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Harga Sewa</label>
                    <input type="number" name="harga_sewa" class="form-control"
                           value="{{ $kamar->harga_sewa }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Fasilitas</label>
                    <textarea name="fasilitas" class="form-control">{{ $kamar->fasilitas }}</textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Status</label>
                    <select name="status" class="form-control">
                        <option value="kosong" {{ $kamar->status == 'kosong' ? 'selected' : '' }}>Kosong</option>
                        <option value="terisi" {{ $kamar->status == 'terisi' ? 'selected' : '' }}>Terisi</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('kamar.index') }}" class="btn btn-secondary">Kembali</a>

            </form>

        </div>
    </div>
</div>

</body>
</html>