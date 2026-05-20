<x-layout>

<div class="container py-4">

    {{-- ALERT --}}
    @if(session('success'))
        <div class="alert alert-success border-0 shadow-sm rounded-4">
            <i class="bi bi-check-circle-fill me-2"></i>
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger border-0 shadow-sm rounded-4">
            <i class="bi bi-exclamation-triangle-fill me-2"></i>
            {{ session('error') }}
        </div>
    @endif

    {{-- HERO --}}
    <div class="card border-0 shadow-lg rounded-4 overflow-hidden mb-4">

        <div class="bg-primary bg-gradient p-5 text-white">

            <div class="row align-items-center">

                <div class="col-lg-8">

                    <div class="d-flex align-items-center">

                        <div class="bg-white text-primary rounded-circle
                                    d-flex align-items-center justify-content-center"
                             style="width:90px;height:90px;">

                            <i class="bi bi-building fs-1"></i>

                        </div>

                        <div class="ms-4">

                            <h2 class="fw-bold mb-1">
                                {{ $fakultas->nama_fakultas }}
                            </h2>

                            <p class="mb-2 opacity-75">
                                Sistem Informasi Fakultas
                            </p>

                            <span class="badge bg-light text-primary px-3 py-2 rounded-pill">
                                <i class="bi bi-person-badge me-1"></i>
                                {{ $fakultas->nama_dekan }}
                            </span>

                        </div>

                    </div>

                </div>

                <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">

                    <a href="/fakultas"
                       class="btn btn-light rounded-pill px-4 me-2">

                        <i class="bi bi-arrow-left me-1"></i>
                        Kembali

                    </a>

                    <a href="/fakultas/{{ $fakultas->id }}/edit"
                       class="btn btn-warning rounded-pill px-4">

                        <i class="bi bi-pencil-square me-1"></i>
                        Edit

                    </a>

                </div>

            </div>

        </div>

    </div>

    {{-- STATISTIK --}}
    <div class="row g-4 mb-4">

        <div class="col-md-4">

            <div class="card border-0 shadow-sm rounded-4 h-100">

                <div class="card-body text-center p-4">

                    <div class="bg-primary bg-opacity-10 rounded-circle
                                mx-auto d-flex align-items-center justify-content-center mb-3"
                         style="width:70px;height:70px;">

                        <i class="bi bi-book fs-2 text-primary"></i>

                    </div>

                    <h2 class="fw-bold">
                        {{ isset($fakultas->prodis) ? $fakultas->prodis->count() : 0 }}
                    </h2>

                    <p class="text-muted mb-0">
                        Program Studi
                    </p>

                </div>

            </div>

        </div>

        <div class="col-md-4">

            <div class="card border-0 shadow-sm rounded-4 h-100">

                <div class="card-body text-center p-4">

                    <div class="bg-success bg-opacity-10 rounded-circle
                                mx-auto d-flex align-items-center justify-content-center mb-3"
                         style="width:70px;height:70px;">

                        <i class="bi bi-people fs-2 text-success"></i>

                    </div>

                    <h2 class="fw-bold">
                        {{ isset($fakultas->prodis) ? $fakultas->prodis->count() * 2 : 0 }}
                    </h2>

                    <p class="text-muted mb-0">
                        Dosen & Staff
                    </p>

                </div>

            </div>

        </div>

        <div class="col-md-4">

            <div class="card border-0 shadow-sm rounded-4 h-100">

                <div class="card-body text-center p-4">

                    <div class="bg-warning bg-opacity-10 rounded-circle
                                mx-auto d-flex align-items-center justify-content-center mb-3"
                         style="width:70px;height:70px;">

                        <i class="bi bi-building fs-2 text-warning"></i>

                    </div>

                    <h2 class="fw-bold">
                        {{ \App\Models\Fakultas::count() }}
                    </h2>

                    <p class="text-muted mb-0">
                        Total Fakultas
                    </p>

                </div>

            </div>

        </div>

    </div>

    {{-- DETAIL --}}
    <div class="row g-4 mb-4">

        <div class="col-lg-6">

            <div class="card border-0 shadow-sm rounded-4 h-100">

                <div class="card-body p-4">

                    <h5 class="fw-bold mb-4">
                        <i class="bi bi-info-circle text-primary me-2"></i>
                        Informasi Fakultas
                    </h5>

                    <div class="mb-4">

                        <small class="text-muted d-block mb-1">
                            Nama Fakultas
                        </small>

                        <h4 class="fw-bold">
                            {{ $fakultas->nama_fakultas }}
                        </h4>

                    </div>

                    <div>

                        <small class="text-muted d-block mb-1">
                            Nama Dekan
                        </small>

                        <h5 class="fw-semibold">
                            {{ $fakultas->nama_dekan }}
                        </h5>

                    </div>

                </div>

            </div>

        </div>

        <div class="col-lg-6">

            <div class="card border-0 shadow-sm rounded-4 h-100">

                <div class="card-body p-4">

                    <h5 class="fw-bold mb-4">
                        <i class="bi bi-clock-history text-success me-2"></i>
                        Metadata
                    </h5>

                    <div class="mb-4">

                        <small class="text-muted d-block mb-1">
                            Dibuat Pada
                        </small>

                        <div class="fw-semibold">
                            {{ $fakultas->created_at->format('d M Y - H:i') }}
                        </div>

                    </div>

                    <div>

                        <small class="text-muted d-block mb-1">
                            Terakhir Update
                        </small>

                        <div class="fw-semibold">
                            {{ $fakultas->updated_at->format('d M Y - H:i') }}
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    {{-- TABLE PRODI --}}
    <div class="card border-0 shadow-sm rounded-4 overflow-hidden mb-4">

        <div class="card-header bg-white border-0 p-4">

            <div class="d-flex justify-content-between align-items-center">

                <div>

                    <h5 class="fw-bold mb-1">
                        <i class="bi bi-book text-primary me-2"></i>
                        Program Studi
                    </h5>

                    <small class="text-muted">
                        Daftar program studi dalam fakultas
                    </small>

                </div>

                <a href="/prodi/create"
                   class="btn btn-primary rounded-pill">

                    <i class="bi bi-plus-circle me-1"></i>
                    Tambah Prodi

                </a>

            </div>

        </div>

        <div class="card-body p-0">

            @if(isset($fakultas->prodis) && $fakultas->prodis->count() > 0)

                <div class="table-responsive">

                    <table class="table align-middle mb-0">

                        <thead class="table-light">

                            <tr>
                                <th>No</th>
                                <th>Alias</th>
                                <th>Program Studi</th>
                                <th>Kaprodi</th>
                            </tr>

                        </thead>

                        <tbody>

                            @foreach($fakultas->prodis as $key => $prodi)

                                <tr>

                                    <td>{{ $key + 1 }}</td>

                                    <td>
                                        <span class="badge bg-primary rounded-pill px-3">
                                            {{ $prodi->alias_prodi }}
                                        </span>
                                    </td>

                                    <td class="fw-semibold">
                                        {{ $prodi->nama_prodi }}
                                    </td>

                                    <td>
                                        {{ $prodi->nama_kaprodi }}
                                    </td>

                                </tr>

                            @endforeach

                        </tbody>

                    </table>

                </div>

            @else

                <div class="text-center py-5">

                    <i class="bi bi-journal-x fs-1 text-muted"></i>

                    <h5 class="mt-3">
                        Belum Ada Program Studi
                    </h5>

                    <p class="text-muted">
                        Tambahkan program studi untuk fakultas ini
                    </p>

                </div>

            @endif

        </div>

    </div>

    {{-- DELETE --}}
    <div class="text-end">

        <button class="btn btn-danger rounded-pill px-4"
                data-bs-toggle="modal"
                data-bs-target="#deleteModal">

            <i class="bi bi-trash me-1"></i>
            Hapus Fakultas

        </button>

    </div>

</div>

{{-- MODAL DELETE --}}
<div class="modal fade" id="deleteModal" tabindex="-1">

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content border-0 rounded-4 shadow">

            <div class="modal-body text-center p-5">

                <div class="bg-danger bg-opacity-10 rounded-circle
                            d-inline-flex align-items-center justify-content-center mb-4"
                     style="width:90px;height:90px;">

                    <i class="bi bi-trash fs-1 text-danger"></i>

                </div>

                <h4 class="fw-bold">
                    Hapus Fakultas?
                </h4>

                <p class="text-muted mt-3">
                    Data fakultas akan dihapus permanen dan tidak dapat dikembalikan.
                </p>

                <div class="d-flex justify-content-center gap-2 mt-4">

                    <button class="btn btn-light border rounded-pill px-4"
                            data-bs-dismiss="modal">

                        Batal

                    </button>

                    <form action="/fakultas/{{ $fakultas->id }}"
                          method="POST">

                        @csrf
                        @method('DELETE')

                        <button type="submit"
                                class="btn btn-danger rounded-pill px-4">

                            Ya, Hapus

                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

</x-layout>