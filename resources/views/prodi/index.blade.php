<x-layout>
    <div class="container-fluid py-4">

        {{-- Header --}}
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4 gap-3">
            <div>
                <h3 class="fw-bold text-dark mb-1">
                    <i class="bi bi-journal-bookmark-fill text-primary me-2"></i>
                    Data Program Studi
                </h3>
                <p class="text-muted mb-0">
                    Kelola seluruh data program studi secara mudah dan modern.
                </p>
            </div>

            <a href="{{ route('prodi.create') }}" class="btn btn-primary px-4 shadow-sm">
                <i class="bi bi-plus-circle me-1"></i>
                Tambah Prodi
            </a>
        </div>

        {{-- Alert --}}
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm rounded-4">
                <div class="d-flex align-items-center">
                    <i class="bi bi-check-circle-fill me-2 fs-5"></i>
                    <span>{{ session('success') }}</span>
                    <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert"></button>
                </div>
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show border-0 shadow-sm rounded-4">
                <div class="d-flex align-items-center">
                    <i class="bi bi-exclamation-triangle-fill me-2 fs-5"></i>
                    <span>{{ session('error') }}</span>
                    <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert"></button>
                </div>
            </div>
        @endif

        {{-- Statistik --}}
        <div class="row g-3 mb-4">
            <div class="col-md-4">
                <div class="card border-0 shadow-sm rounded-4 h-100">
                    <div class="card-body d-flex align-items-center">
                        <div class="bg-primary bg-opacity-10 rounded-circle p-3 me-3">
                            <i class="bi bi-book text-primary fs-3"></i>
                        </div>
                        <div>
                            <small class="text-muted">Total Program Studi</small>
                            <h4 class="fw-bold mb-0">{{ $prodis->count() }}</h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card border-0 shadow-sm rounded-4 h-100">
                    <div class="card-body d-flex align-items-center">
                        <div class="bg-success bg-opacity-10 rounded-circle p-3 me-3">
                            <i class="bi bi-building text-success fs-3"></i>
                        </div>
                        <div>
                            <small class="text-muted">Total Fakultas</small>
                            <h4 class="fw-bold mb-0">{{ App\Models\Fakultas::count() }}</h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card border-0 shadow-sm rounded-4 h-100">
                    <div class="card-body d-flex align-items-center">
                        <div class="bg-warning bg-opacity-10 rounded-circle p-3 me-3">
                            <i class="bi bi-person-badge text-warning fs-3"></i>
                        </div>
                        <div>
                            <small class="text-muted">Ketua Prodi</small>
                            <h4 class="fw-bold mb-0">{{ $prodis->count() }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Main Card --}}
        <div class="card border-0 shadow-sm rounded-4 overflow-hidden">

            {{-- Header --}}
            <div class="card-header bg-white border-0 py-3 px-4">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h5 class="fw-bold mb-0">
                            <i class="bi bi-table me-2 text-primary"></i>
                            Daftar Program Studi
                        </h5>
                    </div>

                    <div class="col-md-6 mt-3 mt-md-0">
                        <div class="input-group">
                            <span class="input-group-text bg-light border-0">
                                <i class="bi bi-search"></i>
                            </span>
                            <input type="text"
                                   id="searchInput"
                                   class="form-control border-0 bg-light"
                                   placeholder="Cari program studi...">
                        </div>
                    </div>
                </div>
            </div>

            {{-- Table --}}
            <div class="table-responsive">
                <table class="table align-middle table-hover mb-0" id="prodiTable">
                    <thead class="table-light">
                        <tr>
                            <th class="ps-4">No</th>
                            <th>Program Studi</th>
                            <th>Fakultas</th>
                            <th>Kaprodi</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($prodis as $item)
                            <tr class="search-row">

                                {{-- Nomor --}}
                                <td class="ps-4 fw-semibold">
                                    {{ $loop->iteration }}
                                </td>

                                {{-- Prodi --}}
                                <td>
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="bg-primary bg-opacity-10 rounded-3 d-flex align-items-center justify-content-center"
                                             style="width: 48px; height: 48px;">
                                            <i class="bi bi-book text-primary fs-5"></i>
                                        </div>

                                        <div>
                                            <div class="fw-semibold search-name">
                                                {{ $item->nama_prodi }}
                                            </div>

                                            <span class="badge bg-primary-subtle text-primary mt-1">
                                                {{ $item->alias_prodi }}
                                            </span>
                                        </div>
                                    </div>
                                </td>

                                {{-- Fakultas --}}
                                <td>
                                    <div class="fw-medium">
                                        {{ $item->fakultas->nama_fakultas ?? '-' }}
                                    </div>
                                </td>

                                {{-- Kaprodi --}}
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="bg-success bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center"
                                             style="width: 38px; height: 38px;">
                                            <i class="bi bi-person text-success"></i>
                                        </div>

                                        <span class="search-kaprodi">
                                            {{ $item->nama_kaprodi }}
                                        </span>
                                    </div>
                                </td>

                                {{-- Action --}}
                                <td class="text-center">
                                    <div class="d-flex justify-content-center gap-2">

                                        <a href="{{ route('prodi.show', $item->id) }}"
                                           class="btn btn-sm btn-light border rounded-3 shadow-sm">
                                            <i class="bi bi-eye text-info"></i>
                                        </a>

                                        <a href="{{ route('prodi.edit', $item->id) }}"
                                           class="btn btn-sm btn-light border rounded-3 shadow-sm">
                                            <i class="bi bi-pencil-square text-warning"></i>
                                        </a>

                                        <form action="{{ route('prodi.destroy', $item->id) }}"
                                              method="POST"
                                              class="d-inline">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit"
                                                    class="btn btn-sm btn-light border rounded-3 shadow-sm"
                                                    onclick="return confirm('Yakin ingin menghapus data ini?')">
                                                <i class="bi bi-trash text-danger"></i>
                                            </button>
                                        </form>

                                    </div>
                                </td>

                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center py-5">

                                    <div class="py-4">
                                        <div class="bg-light rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
                                             style="width: 90px; height: 90px;">
                                            <i class="bi bi-journal-x fs-1 text-muted"></i>
                                        </div>

                                        <h5 class="fw-semibold text-muted">
                                            Belum Ada Program Studi
                                        </h5>

                                        <p class="text-muted mb-4">
                                            Silakan tambahkan data program studi baru.
                                        </p>

                                        <a href="{{ route('prodi.create') }}"
                                           class="btn btn-primary px-4 rounded-3">
                                            <i class="bi bi-plus-circle me-1"></i>
                                            Tambah Sekarang
                                        </a>
                                    </div>

                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            {{-- Footer --}}
            @if(method_exists($prodis, 'links'))
                <div class="card-footer bg-white border-0 py-3">
                    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
                        <small class="text-muted">
                            Menampilkan {{ $prodis->count() }} data program studi
                        </small>

                        {{ $prodis->links() }}
                    </div>
                </div>
            @endif

        </div>
    </div>

    {{-- Custom Style --}}
    <style>
        .table tbody tr {
            transition: all .2s ease;
        }

        .table tbody tr:hover {
            background-color: rgba(13, 110, 253, 0.04);
            transform: scale(1.001);
        }

        .card {
            transition: all .3s ease;
        }

        .card:hover {
            transform: translateY(-3px);
        }
    </style>

    {{-- Search Script --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {

            const searchInput = document.getElementById('searchInput');

            searchInput.addEventListener('keyup', function () {

                const keyword = this.value.toLowerCase();
                const rows = document.querySelectorAll('.search-row');

                rows.forEach(row => {

                    const nama = row.querySelector('.search-name')?.textContent.toLowerCase() || '';
                    const kaprodi = row.querySelector('.search-kaprodi')?.textContent.toLowerCase() || '';

                    if (nama.includes(keyword) || kaprodi.includes(keyword)) {
                        row.style.display = '';
                    } else {
                        row.style.display = 'none';
                    }

                });

            });

            // Auto close alert
            setTimeout(() => {
                document.querySelectorAll('.alert').forEach(alert => {
                    let bsAlert = new bootstrap.Alert(alert);
                    bsAlert.close();
                });
            }, 5000);

        });
    </script>

</x-layout>