<x-layout>
    <div class="container py-4">

        {{-- Header --}}
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4 gap-3">
            <div>
                <h3 class="fw-bold mb-1">
                    <i class="bi bi-journal-text text-primary me-2"></i>
                    Detail Program Studi
                </h3>
                <p class="text-muted mb-0">
                    Informasi lengkap mengenai data program studi.
                </p>
            </div>

            <div class="d-flex gap-2">
                <a href="{{ route('prodi.index') }}" class="btn btn-light border shadow-sm">
                    <i class="bi bi-arrow-left me-1"></i>
                    Kembali
                </a>

                <a href="{{ route('prodi.edit', $prodi->id) }}" class="btn btn-warning shadow-sm text-white">
                    <i class="bi bi-pencil-square me-1"></i>
                    Edit
                </a>
            </div>
        </div>

        {{-- Main Card --}}
        <div class="card border-0 shadow-sm rounded-4 overflow-hidden">

            {{-- Top Banner --}}
            <div class="bg-primary bg-gradient text-white p-4">
                <div class="d-flex align-items-center gap-3">

                    <div class="bg-white bg-opacity-25 rounded-4 d-flex align-items-center justify-content-center"
                         style="width: 80px; height: 80px;">
                        <i class="bi bi-book fs-1"></i>
                    </div>

                    <div>
                        <h3 class="fw-bold mb-1">{{ $prodi->nama_prodi }}</h3>

                        <div class="d-flex flex-wrap gap-2 align-items-center">
                            <span class="badge bg-light text-primary px-3 py-2 rounded-pill">
                                {{ $prodi->alias_prodi }}
                            </span>

                            <small class="opacity-75">
                                <i class="bi bi-building me-1"></i>
                                {{ $prodi->fakultas->nama_fakultas ?? '-' }}
                            </small>
                        </div>
                    </div>

                </div>
            </div>

            {{-- Body --}}
            <div class="card-body p-4">

                <div class="row g-4">

                    {{-- Informasi Utama --}}
                    <div class="col-md-6">

                        <div class="card border-0 bg-light rounded-4 h-100">
                            <div class="card-body">

                                <h5 class="fw-bold mb-4">
                                    <i class="bi bi-info-circle text-primary me-2"></i>
                                    Informasi Utama
                                </h5>

                                <div class="mb-4">
                                    <small class="text-muted d-block mb-1">
                                        ID Program Studi
                                    </small>

                                    <div class="fw-semibold fs-5">
                                        #{{ $prodi->id }}
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <small class="text-muted d-block mb-1">
                                        Alias Program Studi
                                    </small>

                                    <span class="badge bg-primary px-3 py-2 rounded-pill fs-6">
                                        {{ $prodi->alias_prodi }}
                                    </span>
                                </div>

                                <div class="mb-4">
                                    <small class="text-muted d-block mb-1">
                                        Nama Program Studi
                                    </small>

                                    <div class="fw-semibold fs-5">
                                        {{ $prodi->nama_prodi }}
                                    </div>
                                </div>

                                <div>
                                    <small class="text-muted d-block mb-1">
                                        Fakultas
                                    </small>

                                    <div class="fw-semibold">
                                        <i class="bi bi-building text-primary me-1"></i>
                                        {{ $prodi->fakultas->nama_fakultas ?? '-' }}
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    {{-- Informasi Kaprodi --}}
                    <div class="col-md-6">

                        <div class="card border-0 bg-light rounded-4 h-100">
                            <div class="card-body">

                                <h5 class="fw-bold mb-4">
                                    <i class="bi bi-person-badge text-success me-2"></i>
                                    Ketua Program Studi
                                </h5>

                                <div class="text-center mb-4">

                                    <div class="bg-success bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
                                         style="width: 90px; height: 90px;">
                                        <i class="bi bi-person-fill fs-1 text-success"></i>
                                    </div>

                                    <h4 class="fw-bold mb-1">
                                        {{ $prodi->nama_kaprodi }}
                                    </h4>

                                    <p class="text-muted mb-0">
                                        Ketua Program Studi
                                    </p>

                                </div>

                                <hr>

                                <div class="row text-center">

                                    <div class="col-6">
                                        <small class="text-muted d-block">
                                            Dibuat
                                        </small>

                                        <div class="fw-semibold mt-1">
                                            {{ $prodi->created_at->format('d/m/Y') }}
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <small class="text-muted d-block">
                                            Diupdate
                                        </small>

                                        <div class="fw-semibold mt-1">
                                            {{ $prodi->updated_at->format('d/m/Y') }}
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>

                </div>

                {{-- Timeline Info --}}
                <div class="card border-0 bg-light rounded-4 mt-4">
                    <div class="card-body">

                        <h5 class="fw-bold mb-4">
                            <i class="bi bi-clock-history text-warning me-2"></i>
                            Riwayat Data
                        </h5>

                        <div class="row g-3">

                            <div class="col-md-6">
                                <div class="border rounded-4 p-3 bg-white h-100">
                                    <div class="d-flex align-items-start gap-3">

                                        <div class="bg-primary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center"
                                             style="width: 48px; height: 48px;">
                                            <i class="bi bi-calendar-plus text-primary"></i>
                                        </div>

                                        <div>
                                            <small class="text-muted d-block">
                                                Data Dibuat
                                            </small>

                                            <div class="fw-semibold">
                                                {{ $prodi->created_at->format('d F Y') }}
                                            </div>

                                            <small class="text-muted">
                                                {{ $prodi->created_at->format('H:i:s') }}
                                            </small>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="border rounded-4 p-3 bg-white h-100">
                                    <div class="d-flex align-items-start gap-3">

                                        <div class="bg-warning bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center"
                                             style="width: 48px; height: 48px;">
                                            <i class="bi bi-calendar-check text-warning"></i>
                                        </div>

                                        <div>
                                            <small class="text-muted d-block">
                                                Terakhir Diperbarui
                                            </small>

                                            <div class="fw-semibold">
                                                {{ $prodi->updated_at->format('d F Y') }}
                                            </div>

                                            <small class="text-muted">
                                                {{ $prodi->updated_at->format('H:i:s') }}
                                            </small>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>

        </div>

    </div>

    {{-- Custom Style --}}
    <style>
        .card {
            transition: all .3s ease;
        }

        .card:hover {
            transform: translateY(-2px);
        }

        .rounded-4 {
            border-radius: 1rem !important;
        }
    </style>

</x-layout>