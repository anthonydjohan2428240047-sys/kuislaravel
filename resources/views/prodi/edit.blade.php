<x-layout>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">

                {{-- Card --}}
                <div class="card border-0 shadow-lg rounded-4 overflow-hidden">

                    {{-- Header --}}
                    <div class="bg-warning bg-gradient text-dark p-4">
                        <div class="d-flex align-items-center">
                            <div class="bg-white bg-opacity-50 rounded-circle p-3 me-3">
                                <i class="bi bi-pencil-square fs-3"></i>
                            </div>

                            <div>
                                <h3 class="fw-bold mb-1">Edit Program Studi</h3>
                                <p class="mb-0 opacity-75">
                                    Perbarui informasi program studi dengan data terbaru
                                </p>
                            </div>
                        </div>
                    </div>

                    {{-- Body --}}
                    <div class="card-body p-4 p-lg-5">

                        {{-- Error Alert --}}
                        @if ($errors->any())
                            <div class="alert alert-danger border-0 shadow-sm rounded-3">
                                <div class="d-flex align-items-start">
                                    <i class="bi bi-exclamation-triangle-fill fs-4 me-3"></i>

                                    <div>
                                        <strong>Terjadi Kesalahan!</strong>

                                        <ul class="mb-0 mt-2 ps-3">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endif

                        <form action="{{ route('prodi.update', $prodi->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            {{-- Fakultas --}}
                            <div class="mb-4">
                                <label for="fakultas_id" class="form-label fw-semibold">
                                    <i class="bi bi-building text-primary me-1"></i>
                                    Fakultas
                                </label>

                                <select
                                    name="fakultas_id"
                                    id="fakultas_id"
                                    class="form-select form-select-lg rounded-3 @error('fakultas_id') is-invalid @enderror"
                                    required
                                >
                                    <option value="">-- Pilih Fakultas --</option>

                                    @foreach($fakultas as $f)
                                        <option value="{{ $f->id }}"
                                            {{ old('fakultas_id', $prodi->fakultas_id) == $f->id ? 'selected' : '' }}>
                                            {{ $f->nama_fakultas }}
                                        </option>
                                    @endforeach
                                </select>

                                @error('fakultas_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- Alias --}}
                            <div class="mb-4">
                                <label for="alias_prodi" class="form-label fw-semibold">
                                    <i class="bi bi-tag text-success me-1"></i>
                                    Alias Program Studi
                                </label>

                                <div class="input-group input-group-lg">
                                    <span class="input-group-text bg-light">
                                        <i class="bi bi-bookmark-star"></i>
                                    </span>

                                    <input
                                        type="text"
                                        name="alias_prodi"
                                        id="alias_prodi"
                                        class="form-control @error('alias_prodi') is-invalid @enderror"
                                        value="{{ old('alias_prodi', $prodi->alias_prodi) }}"
                                        placeholder="Contoh: TI, SI, IF"
                                        required
                                    >
                                </div>

                                @error('alias_prodi')
                                    <div class="invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- Nama Prodi --}}
                            <div class="mb-4">
                                <label for="nama_prodi" class="form-label fw-semibold">
                                    <i class="bi bi-mortarboard text-info me-1"></i>
                                    Nama Program Studi
                                </label>

                                <input
                                    type="text"
                                    name="nama_prodi"
                                    id="nama_prodi"
                                    class="form-control form-control-lg rounded-3 @error('nama_prodi') is-invalid @enderror"
                                    value="{{ old('nama_prodi', $prodi->nama_prodi) }}"
                                    placeholder="Contoh: Teknik Informatika"
                                    required
                                >

                                @error('nama_prodi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- Kaprodi --}}
                            <div class="mb-4">
                                <label for="nama_kaprodi" class="form-label fw-semibold">
                                    <i class="bi bi-person-badge text-danger me-1"></i>
                                    Ketua Program Studi
                                </label>

                                <input
                                    type="text"
                                    name="nama_kaprodi"
                                    id="nama_kaprodi"
                                    class="form-control form-control-lg rounded-3 @error('nama_kaprodi') is-invalid @enderror"
                                    value="{{ old('nama_kaprodi', $prodi->nama_kaprodi) }}"
                                    placeholder="Contoh: Dr. Ahmad Budiman, M.Kom"
                                    required
                                >

                                @error('nama_kaprodi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- Info --}}
                            <div class="alert alert-warning border-0 rounded-3 d-flex align-items-start">
                                <i class="bi bi-lightbulb-fill fs-5 me-2"></i>

                                <div>
                                    <strong>Perhatian:</strong>
                                    Pastikan perubahan data sudah benar sebelum disimpan.
                                </div>
                            </div>

                            {{-- Footer Buttons --}}
                            <div class="d-flex justify-content-between align-items-center mt-4 flex-wrap gap-2">

                                {{-- Info ID --}}
                                <small class="text-muted">
                                    <i class="bi bi-hash me-1"></i>
                                    ID Prodi: {{ $prodi->id }}
                                </small>

                                {{-- Buttons --}}
                                <div class="d-flex gap-2">
                                    <a href="{{ route('prodi.index') }}"
                                       class="btn btn-light border px-4 rounded-3">
                                        <i class="bi bi-arrow-left me-1"></i>
                                        Kembali
                                    </a>

                                    <button type="submit"
                                            class="btn btn-warning text-dark fw-semibold px-4 rounded-3 shadow-sm">
                                        <i class="bi bi-check-circle me-1"></i>
                                        Update Data
                                    </button>
                                </div>

                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-layout>