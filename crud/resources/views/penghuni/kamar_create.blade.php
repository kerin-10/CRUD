<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Kamar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
    <h2 class="fw-bold mb-4">Tambah Kamar</h2>

    <div class="card shadow-sm border-0">
        <div class="card-body">

            <form action="{{ route('kamar.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Nomor Kamar</label>
                    <input type="text" name="nomor_kamar" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Kategori</label>
                    <select name="kategori" class="form-control" required>
                        <option value="">-- Pilih --</option>
                        <option value="Standar">Standar</option>
                        <option value="VIP">VIP</option>
                        <option value="VVIP">VVIP</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Harga Sewa</label>
                    <input type="number" name="harga_sewa" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Fasilitas</label>
                    <textarea name="fasilitas" class="form-control"></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Status</label>
                    <select name="status" class="form-control" required>
                        <option value="kosong">Kosong</option>
                        <option value="terisi">Terisi</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">
                    Simpan
                </button>

                <a href="{{ route('kamar.index') }}" class="btn btn-secondary">
                    Kembali
                </a>

            </form>

        </div>
    </div>
</div>

</body>
</html>