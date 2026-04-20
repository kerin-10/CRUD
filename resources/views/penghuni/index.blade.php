<!DOCTYPE html>
<html>
<head>
    <title>Sistem Kos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Sistem Kos</h3>
        <a href="/penghuni/create" class="btn btn-primary">
            + Tambah Data
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card shadow">
        <div class="card-body">

            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>NIK</th>
                        <th>Umur</th>
                        <th>No Kamar</th>
                        <th>No HP</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @php $no = 1; @endphp

                    @foreach($data as $d)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $d->nama_lengkap }}</td>
                        <td>{{ $d->nik }}</td>
                        <td>{{ $d->umur }}</td>
                        <td>{{ $d->kamar->nomor_kamar ?? '-' }}</td>
                        <td>{{ $d->no_hp }}</td>
                        <td>{{ $d->email }}</td>
                        <td>
                            <a href="/penghuni/edit/{{ $d->id }}" class="btn btn-warning btn-sm">
                                Edit
                            </a>

                            <form action="{{ route('penghuni.destroy', $d->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Konfirmasi penghapusan data ini')">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
                </div>
            </div>
            <div class="mt-3">
            <a href="{{ route('dashboard') }}" class="btn btn-secondary">
                ← Kembali 
            </a>
        </div>

        </div>
        </div>
    </div>

</div>

</body>
</html>