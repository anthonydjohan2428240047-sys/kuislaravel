<x-layout>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">

                {{-- Card Form --}}
                <div class="card border-0 shadow-lg rounded-4 overflow-hidden">

                    {{-- Header --}}
                    <div class="bg-primary bg-gradient text-white p-4">
                        <div class="d-flex align-items-center">
                            <div class="bg-white bg-opacity-25 rounded-circle p-3 me-3">
                                <i class="bi bi-journal-plus fs-3"></i>
                            </div>
                            <div>
                                <h3 class="fw-bold mb-1">Tambah Program Studi</h3>
                                <p class="mb-0 opacity-75">
                                    Lengkapi data program studi dengan benar
                                </p>
                            </div>
                        </div>
                    </div>

                    {{-- Body --}}
                    <div class="card-body p-4 p-lg-5">

                        {{-- Alert Error --}}
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

                        <form action="{{ route('prodi.store') }}" method="POST">
                            @csrf

                           

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

                                    @foreach($listFakultas as $f)
                                        <option value="{{ $f->id }}"
                                            {{ old('fakultas_id') == $f->id ? 'selected' : '' }}>
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

                            {{-- Alias Prodi --}}
                            <div class="mb-4">
                                <label for="alias_prodi" class="form-label fw-semibold">
                                    <i class="bi bi-tag text-success me-1"></i>
                                    Alias Prodi
                                </label>

                                <div class="input-group input-group-lg">
                                    <span class="input-group-text bg-light">
                                        <i class="bi bi-bookmark"></i>
                                    </span>

                                    <input
                                        type="text"
                                        name="alias_prodi"
                                        id="alias_prodi"
                                        class="form-control rounded-end @error('alias_prodi') is-invalid @enderror"
                                        value="{{ old('alias_prodi') }}"
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
                                    value="{{ old('nama_prodi') }}"
                                    placeholder="Contoh: Teknik Informatika"
                                    required
                                >

                                @error('nama_prodi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- Nama Kaprodi --}}
                            <div class="mb-4">
                                <label for="nama_kaprodi" class="form-label fw-semibold">
                                    <i class="bi bi-person-badge text-warning me-1"></i>
                                    Ketua Program Studi
                                </label>

                                <input
                                    type="text"
                                    name="nama_kaprodi"
                                    id="nama_kaprodi"
                                    class="form-control form-control-lg rounded-3 @error('nama_kaprodi') is-invalid @enderror"
                                    value="{{ old('nama_kaprodi') }}"
                                    placeholder="Contoh: Dr. Ahmad Budiman, M.Kom"
                                    required
                                >

                                @error('nama_kaprodi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- Info Box --}}
                            <div class="alert alert-info border-0 rounded-3 d-flex align-items-start">
                                <i class="bi bi-lightbulb-fill fs-5 me-2"></i>
                                <div>
                                    <strong>Tips:</strong>
                                    Pastikan data program studi sudah benar sebelum disimpan ke sistem.
                                </div>
                            </div>

                            {{-- Button --}}
                            <div class="d-flex justify-content-end gap-2 mt-4">
                                <a href="{{ route('prodi.index') }}"
                                   class="btn btn-light border px-4 rounded-3">
                                    <i class="bi bi-arrow-left me-1"></i>
                                    Kembali
                                </a>

                                <button type="submit"
                                        class="btn btn-primary px-4 rounded-3 shadow-sm">
                                    <i class="bi bi-save me-1"></i>
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