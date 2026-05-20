<x-layout>

<div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-lg-8">

            <div class="card border-0 shadow-lg rounded-4 overflow-hidden">

                {{-- HEADER --}}
                <div class="bg-primary bg-gradient text-white p-5">

                    <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">

                        <div class="d-flex align-items-center">

                            <div class="bg-white text-primary rounded-circle
                                        d-flex align-items-center justify-content-center"
                                 style="width:80px;height:80px;">

                                <i class="bi bi-pencil-square fs-2"></i>

                            </div>

                            <div class="ms-4">

                                <h2 class="fw-bold mb-1">
                                    Edit Fakultas
                                </h2>

                                <p class="mb-0 opacity-75">
                                    Perbarui informasi fakultas dengan mudah
                                </p>

                            </div>

                        </div>

                        <a href="/fakultas"
                           class="btn btn-light rounded-pill px-4">

                            <i class="bi bi-arrow-left me-1"></i>
                            Kembali

                        </a>

                    </div>

                </div>

                {{-- BODY --}}
                <div class="card-body p-5">

                    {{-- ALERT VALIDASI --}}
                    @if ($errors->any())

                        <div class="alert alert-danger border-0 rounded-4 shadow-sm">

                            <div class="d-flex align-items-start">

                                <i class="bi bi-exclamation-octagon-fill fs-4 me-3"></i>

                                <div>

                                    <strong>Terjadi Kesalahan</strong>

                                    <ul class="mb-0 mt-2 ps-3">

                                        @foreach ($errors->all() as $error)

                                            <li>{{ $error }}</li>

                                        @endforeach

                                    </ul>

                                </div>

                            </div>

                        </div>

                    @endif

                    {{-- ALERT SESSION --}}
                    @if(session('success'))

                        <div class="alert alert-success border-0 rounded-4 shadow-sm">

                            <i class="bi bi-check-circle-fill me-2"></i>

                            {{ session('success') }}

                        </div>

                    @endif

                    @if(session('error'))

                        <div class="alert alert-danger border-0 rounded-4 shadow-sm">

                            <i class="bi bi-x-circle-fill me-2"></i>

                            {{ session('error') }}

                        </div>

                    @endif

                    {{-- FORM --}}
                    <form action="/fakultas/{{ $fakultas->id }}" method="POST">

                        @csrf
                        @method('PUT')

                        {{-- NAMA FAKULTAS --}}
                        <div class="mb-4">

                            <label class="form-label fw-semibold mb-2">
                                Nama Fakultas
                            </label>

                            <div class="input-group input-group-lg">

                                <span class="input-group-text bg-light border-0">
                                    <i class="bi bi-building text-primary"></i>
                                </span>

                                <input
                                    type="text"
                                    name="nama_fakultas"
                                    class="form-control border-0 bg-light @error('nama_fakultas') is-invalid @enderror"
                                    placeholder="Masukkan nama fakultas"
                                    value="{{ old('nama_fakultas', $fakultas->nama_fakultas) }}"
                                    required
                                >

                            </div>

                            @error('nama_fakultas')

                                <small class="text-danger">
                                    {{ $message }}
                                </small>

                            @else

                                <small class="text-muted">
                                    Contoh: Fakultas Teknik, Fakultas Kedokteran
                                </small>

                            @enderror

                        </div>

                        {{-- NAMA DEKAN --}}
                        <div class="mb-4">

                            <label class="form-label fw-semibold mb-2">
                                Nama Dekan
                            </label>

                            <div class="input-group input-group-lg">

                                <span class="input-group-text bg-light border-0">
                                    <i class="bi bi-person-badge text-success"></i>
                                </span>

                                <input
                                    type="text"
                                    name="nama_dekan"
                                    class="form-control border-0 bg-light @error('nama_dekan') is-invalid @enderror"
                                    placeholder="Masukkan nama dekan"
                                    value="{{ old('nama_dekan', $fakultas->nama_dekan) }}"
                                    required
                                >

                            </div>

                            @error('nama_dekan')

                                <small class="text-danger">
                                    {{ $message }}
                                </small>

                            @else

                                <small class="text-muted">
                                    Gunakan nama lengkap beserta gelar
                                </small>

                            @enderror

                        </div>

                        {{-- METADATA --}}
                        <div class="card bg-light border-0 rounded-4 mb-4">

                            <div class="card-body">

                                <div class="row g-4">

                                    <div class="col-md-4">

                                        <small class="text-muted d-block mb-1">
                                            ID Fakultas
                                        </small>

                                        <div class="fw-bold text-primary">
                                            #{{ $fakultas->id }}
                                        </div>

                                    </div>

                                    <div class="col-md-4">

                                        <small class="text-muted d-block mb-1">
                                            Dibuat Pada
                                        </small>

                                        <div class="fw-semibold">
                                            {{ $fakultas->created_at->format('d M Y') }}
                                        </div>

                                    </div>

                                    <div class="col-md-4">

                                        <small class="text-muted d-block mb-1">
                                            Terakhir Update
                                        </small>

                                        <div class="fw-semibold">
                                            {{ $fakultas->updated_at->format('d M Y') }}
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        {{-- INFO --}}
                        <div class="alert alert-warning border-0 rounded-4">

                            <div class="d-flex align-items-center">

                                <i class="bi bi-exclamation-triangle-fill me-2"></i>

                                <span>
                                    Pastikan data yang diperbarui sudah benar sebelum disimpan.
                                </span>

                            </div>

                        </div>

                        {{-- BUTTON --}}
                        <div class="d-flex justify-content-end gap-2 mt-4">

                            <a href="/fakultas"
                               class="btn btn-light border rounded-pill px-4">

                                <i class="bi bi-x-circle me-1"></i>
                                Batal

                            </a>

                            <button type="submit"
                                    class="btn btn-primary rounded-pill px-5 shadow-sm">

                                <i class="bi bi-check-circle me-1"></i>
                                Simpan Perubahan

                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

{{-- AUTO CLOSE ALERT --}}
<script>

    document.addEventListener('DOMContentLoaded', function () {

        setTimeout(function () {

            document.querySelectorAll('.alert').forEach(function(alert){

                let bsAlert = new bootstrap.Alert(alert);

                bsAlert.close();

            });

        }, 5000);

    });

</script>

</x-layout>