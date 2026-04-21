<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda Kos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="
    background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)),
    url('{{ asset('images/kos.jpg') }}');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
">

<nav class="navbar navbar-light bg-white border-bottom">
    <div class="container">
        <span class="navbar-brand fw-bold text-dark fs-2 ">Sistem Kos</span>
    </div>
</nav>

<div class="container py-5">

    <h3 class="fw-bold mb-4 text-white">Beranda Kos</h3>
   

    <div class="row g-4">

        <!-- KAMAR -->
        <div class="col-md-6">
            <div class="card border-0 shadow-sm h-100 rounded-4">
                <div class="card-body d-flex flex-column">

                   <h5 class="fw-bold fs-3" style="color: #1fd8f0;">🏠 Data Kamar</h5>

                    <div class="row text-center mb-4">
                        <div class="col-4">
                            <div class="p-3 bg-light rounded-3">
                                <div class="text-muted small">Total</div>
                                <h5 class="fw-bold mb-0">{{ $totalKamar }}</h5>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="p-3 bg-light rounded-3">
                                <div class="text-muted small">Kosong</div>
                                <h5 class="fw-bold mb-0">{{ $kamarKosong }}</h5>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="p-3 bg-light rounded-3">
                                <div class="text-muted small">Terisi</div>
                                <h5 class="fw-bold mb-0">{{ $kamarTerisi }}</h5>
                            </div>
                        </div>

                    </div>

                    <div class="mb-4">
                        <h6 class="fw-semibold mb-2 text-dark">Kategori</h6>

                        @forelse($kategoriKamar as $item)
                            <span class="badge bg-light text-primary border me-1 mb-1">
                                {{ $item->kategori }} ({{ $item->total }})
                            </span>
                        @empty
                            <p class="text-muted small mb-0">Belum ada data kategori</p>
                        @endforelse
                    </div>

                    <div class="mt-auto">
                        <a href="{{ route('kamar.index') }}" class="btn btn-outline-primary w-100 rounded-3">
                            Lihat Kamar
                        </a>
                    </div>

                </div>
            </div>
        </div>

        <!-- PENGHUNI -->
        <div class="col-md-6">
            <div class="card border-0 shadow-sm h-100 rounded-4">
                <div class="card-body d-flex flex-column text-center">

                    <h5 class="fw-bold fs-3" style="color: #1fd8f0;">👤 Total Penghuni</h5>

                    <div class="mb-4">
                        <h1 class="display-5 fw-bold text-dark">{{ $totalPenghuni }}</h1>
                        <p class="text-muted mb-0">Jumlah penghuni kos</p>
                    </div>

                    <div class="mt-auto">
                        <a href="{{ route('penghuni.index') }}" class="btn btn-outline-primary w-100 rounded-3">
                            Lihat Data Penghuni
                        </a>
                    </div>

                </div>
            </div>
        </div>

    </div>

</div>

</body>
</html>