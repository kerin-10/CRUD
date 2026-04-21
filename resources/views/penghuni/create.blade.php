<!DOCTYPE html>
<html>
<head>
    <title>Tambah Penghuni</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4>Tambah Penghuni Kos</h4>
        </div>

        <div class="card-body">

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
                    <input type="text" name="umur" class="form-control">
                </div>

                <div class="mb-3">
                    <label>No Kamar</label>
                    <input type="text" name="no_kamar" class="form-control">
                </div>

                <div class="mb-3">
                    <label>No HP</label>
                    <input type="text" name="no_hp" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control">
                </div>

                <button type="submit" class="btn btn-success">
                    Simpan
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