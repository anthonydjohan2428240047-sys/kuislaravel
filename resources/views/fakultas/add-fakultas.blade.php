<x-layout>

<div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-lg-7 col-md-9">

            <div class="card border-0 shadow-lg rounded-4 overflow-hidden">

                <!-- Header -->
                <div class="bg-primary bg-gradient text-white p-4">

                    <div class="d-flex align-items-center">

                        <div class="bg-white text-primary rounded-circle d-flex align-items-center justify-content-center"
                             style="width:60px;height:60px;">
                            <i class="bi bi-building-add fs-3"></i>
                        </div>

                        <div class="ms-3">
                            <h3 class="fw-bold mb-1">Tambah Fakultas</h3>
                            <p class="mb-0 opacity-75">
                                Tambahkan data fakultas baru ke sistem
                            </p>
                        </div>

                    </div>

                </div>

                <!-- Body -->
                <div class="card-body p-5">

                    {{-- Error Validation --}}
                    @if ($errors->any())
                        <div class="alert alert-danger border-0 shadow-sm rounded-3">

                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-exclamation-octagon-fill fs-4 me-2"></i>
                                <strong>Terjadi Kesalahan</strong>
                            </div>

                            <ul class="mb-0 ps-3">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>

                        </div>
                    @endif

                    {{-- Session Error --}}
                    @if (session('error'))
                        <div class="alert alert-danger border-0 shadow-sm rounded-3">

                            <i class="bi bi-x-circle-fill me-2"></i>

                            {{ session('error') }}

                        </div>
                    @endif

                    <!-- Form -->
                    <form action="/fakultas" method="POST">

                        @csrf

                        <!-- Nama Fakultas -->
                        <div class="mb-4">

                            <label class="form-label fw-semibold">
                                Nama Fakultas
                            </label>

                            <div class="input-group">

                                <span class="input-group-text bg-light border-end-0">
                                    <i class="bi bi-building text-primary"></i>
                                </span>

                                <input
                                    type="text"
                                    name="nama_fakultas"
                                    class="form-control border-start-0 ps-0 @error('nama_fakultas') is-invalid @enderror"
                                    placeholder="Masukkan nama fakultas"
                                    value="{{ old('nama_fakultas') }}"
                                    required
                                >

                            </div>

                            @error('nama_fakultas')
                                <div class="text-danger small mt-1">
                                    {{ $message }}
                                </div>
                            @else
                                <small class="text-muted">
                                    Maksimal 100 karakter dan harus unik
                                </small>
                            @enderror

                        </div>

                        <!-- Nama Dekan -->
                        <div class="mb-4">

                            <label class="form-label fw-semibold">
                                Nama Dekan
                            </label>

                            <div class="input-group">

                                <span class="input-group-text bg-light border-end-0">
                                    <i class="bi bi-person-badge text-primary"></i>
                                </span>

                                <input
                                    type="text"
                                    name="nama_dekan"
                                    class="form-control border-start-0 ps-0 @error('nama_dekan') is-invalid @enderror"
                                    placeholder="Masukkan nama dekan"
                                    value="{{ old('nama_dekan') }}"
                                    required
                                >

                            </div>

                            @error('nama_dekan')
                                <div class="text-danger small mt-1">
                                    {{ $message }}
                                </div>
                            @else
                                <small class="text-muted">
                                    Contoh: Prof. Dr. Ahmad, M.T.
                                </small>
                            @enderror

                        </div>

                        <!-- Info -->
                        <div class="alert alert-primary border-0 rounded-3 d-flex align-items-start">

                            <i class="bi bi-lightbulb-fill me-2 fs-5"></i>

                            <div>
                                <strong>Informasi</strong>
                                <div class="small">
                                    Pastikan data fakultas dan nama dekan sudah benar sebelum disimpan.
                                </div>
                            </div>

                        </div>

                        <!-- Button -->
                        <div class="d-flex justify-content-between mt-4">

                            <a href="/fakultas"
                               class="btn btn-light border rounded-pill px-4">

                                <i class="bi bi-arrow-left me-1"></i>
                                Kembali

                            </a>

                            <button type="submit"
                                    class="btn btn-primary rounded-pill px-5 shadow-sm">

                                <i class="bi bi-save2 me-1"></i>
                                Simpan Data

                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

</x-layout>