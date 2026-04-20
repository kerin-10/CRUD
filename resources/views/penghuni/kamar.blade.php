<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kamar</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container py-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="fw-bold text-primary mb-0">Data Kamar</h3>

        <a href="{{ route('kamar.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle me-1"></i> Tambah Kamar
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card shadow-sm border-0">
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">

                    <thead class="table-primary">
                        <tr>
                            <th>No</th>
                            <th>Nomor Kamar</th>
                            <th>Kategori</th>
                            <th>Harga Sewa</th>
                            <th>Fasilitas</th>
                            <th>Status</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($kamars as $index => $kamar)
                            <tr>
                                <td>{{ $index + 1 }}</td>

                                <td class="fw-semibold">
                                    {{ $kamar->nomor_kamar }}
                                </td>

                                <td>
                                    <span class="badge bg-primary-subtle text-primary">
                                        {{ $kamar->kategori }}
                                    </span>
                                </td>

                                <td>
                                    Rp {{ number_format($kamar->harga_sewa, 0, ',', '.') }}
                                </td>

                                <td>
                                    {{ $kamar->fasilitas ?? '-' }}
                                </td>

                                <td>
                                    @if($kamar->status == 'kosong')
                                        <span class="badge bg-success">Kosong</span>
                                    @else
                                        <span class="badge bg-danger">Terisi</span>
                                    @endif
                                </td>

                                <td class="text-center">
                                    <a href="{{ route('kamar.edit', $kamar->id) }}" class="btn btn-warning btn-sm me-1">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>

                                    <a href="{{ route('kamar.delete', $kamar->id) }}" class="btn btn-danger btn-sm"
                                       onclick="return confirm('Yakin ingin menghapus data kamar ini?')">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center text-muted py-4">
                                    Belum ada data kamar
                                </td>
                            </tr>
                        @endforelse
                    </tbody>

                </table>
            </div>

            <div class="mt-3">
                <a href="{{ route('dashboard') }}" class="btn btn-outline-secondary">
                    <i class="bi bi-arrow-left"></i> Kembali
                </a>
            </div>

        </div>
    </div>

</div>

</body>
</html>