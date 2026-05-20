<x-layout>

<div class="container-fluid py-4">

    {{-- HEADER --}}
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
                                Manajemen Fakultas
                            </h2>

                            <p class="mb-0 opacity-75">
                                Kelola data fakultas dengan tampilan modern dan profesional
                            </p>

                        </div>

                    </div>

                </div>

                <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">

                    <a href="/fakultas/create"
                       class="btn btn-light rounded-pill px-4 shadow-sm">

                        <i class="bi bi-plus-circle me-1"></i>
                        Tambah Fakultas

                    </a>

                </div>

            </div>

        </div>

    </div>

    {{-- ALERT --}}
    @if(session('success'))

        <div class="alert alert-success border-0 rounded-4 shadow-sm">

            <i class="bi bi-check-circle-fill me-2"></i>

            {{ session('success') }}

        </div>

    @endif

    @if(session('error'))

        <div class="alert alert-danger border-0 rounded-4 shadow-sm">

            <i class="bi bi-exclamation-triangle-fill me-2"></i>

            {{ session('error') }}

        </div>

    @endif

    {{-- STATISTICS --}}
    <div class="row g-4 mb-4">

        <div class="col-md-3">

            <div class="card border-0 shadow-sm rounded-4 h-100">

                <div class="card-body">

                    <div class="d-flex align-items-center justify-content-between">

                        <div>

                            <small class="text-muted d-block mb-2">
                                Total Fakultas
                            </small>

                            <h2 class="fw-bold mb-0">
                                {{ $fakultas->total() ?? $fakultas->count() }}
                            </h2>

                        </div>

                        <div class="bg-primary bg-opacity-10 rounded-circle
                                    d-flex align-items-center justify-content-center"
                             style="width:65px;height:65px;">

                            <i class="bi bi-building fs-3 text-primary"></i>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="col-md-3">

            <div class="card border-0 shadow-sm rounded-4 h-100">

                <div class="card-body">

                    <div class="d-flex align-items-center justify-content-between">

                        <div>

                            <small class="text-muted d-block mb-2">
                                Total Prodi
                            </small>

                            <h2 class="fw-bold mb-0">
                                {{ App\Models\Prodi::count() }}
                            </h2>

                        </div>

                        <div class="bg-success bg-opacity-10 rounded-circle
                                    d-flex align-items-center justify-content-center"
                             style="width:65px;height:65px;">

                            <i class="bi bi-book fs-3 text-success"></i>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="col-md-3">

            <div class="card border-0 shadow-sm rounded-4 h-100">

                <div class="card-body">

                    <div class="d-flex align-items-center justify-content-between">

                        <div>

                            <small class="text-muted d-block mb-2">
                                Total Dekan
                            </small>

                            <h2 class="fw-bold mb-0">
                                {{ $fakultas->count() }}
                            </h2>

                        </div>

                        <div class="bg-warning bg-opacity-10 rounded-circle
                                    d-flex align-items-center justify-content-center"
                             style="width:65px;height:65px;">

                            <i class="bi bi-person-badge fs-3 text-warning"></i>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="col-md-3">

            <div class="card border-0 shadow-sm rounded-4 h-100">

                <div class="card-body">

                    <div class="d-flex align-items-center justify-content-between">

                        <div>

                            <small class="text-muted d-block mb-2">
                                Fakultas Baru
                            </small>

                            <h6 class="fw-bold mb-0">
                                {{ $fakultas->isNotEmpty() ? $fakultas->first()->nama_fakultas : '-' }}
                            </h6>

                        </div>

                        <div class="bg-info bg-opacity-10 rounded-circle
                                    d-flex align-items-center justify-content-center"
                             style="width:65px;height:65px;">

                            <i class="bi bi-stars fs-3 text-info"></i>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    {{-- TABLE CARD --}}
    <div class="card border-0 shadow-sm rounded-4 overflow-hidden">

        {{-- HEADER --}}
        <div class="card-header bg-white border-0 p-4">

            <div class="row align-items-center g-3">

                <div class="col-lg-6">

                    <h5 class="fw-bold mb-1">

                        <i class="bi bi-table text-primary me-2"></i>

                        Daftar Fakultas

                    </h5>

                    <small class="text-muted">
                        Data seluruh fakultas yang terdaftar
                    </small>

                </div>

                <div class="col-lg-6">

                    <div class="d-flex justify-content-lg-end gap-2 flex-wrap">

                        {{-- SEARCH --}}
                        <div class="position-relative">

                            <i class="bi bi-search position-absolute top-50 start-0 translate-middle-y ms-3 text-muted"></i>

                            <input type="text"
                                   id="searchInput"
                                   class="form-control rounded-pill ps-5"
                                   placeholder="Cari fakultas..."
                                   style="width:250px;">

                        </div>

                        <a href="/fakultas"
                           class="btn btn-light border rounded-pill">

                            <i class="bi bi-arrow-repeat"></i>

                        </a>

                    </div>

                </div>

            </div>

        </div>

        {{-- TABLE --}}
        <div class="table-responsive">

            <table class="table align-middle mb-0" id="fakultasTable">

                <thead class="table-light">

                    <tr>

                        <th class="ps-4">No</th>
                        <th>Fakultas</th>
                        <th>Dekan</th>
                        <th>Jumlah Prodi</th>
                        <th class="text-center pe-4">Aksi</th>

                    </tr>

                </thead>

                <tbody>

                    @forelse($fakultas as $item)

                        <tr class="searchable-row">

                            {{-- NO --}}
                            <td class="ps-4">

                                <span class="badge bg-primary rounded-pill px-3">

                                    {{ $loop->iteration }}

                                </span>

                            </td>

                            {{-- FAKULTAS --}}
                            <td>

                                <div class="d-flex align-items-center gap-3">

                                    <div class="bg-primary bg-opacity-10 rounded-circle
                                                d-flex align-items-center justify-content-center"
                                         style="width:50px;height:50px;">

                                        <i class="bi bi-building text-primary fs-5"></i>

                                    </div>

                                    <div>

                                        <div class="fw-bold searchable-name">

                                            {{ $item->nama_fakultas }}

                                        </div>

                                        <small class="text-muted">
                                            ID Fakultas: {{ $item->id }}
                                        </small>

                                    </div>

                                </div>

                            </td>

                            {{-- DEKAN --}}
                            <td>

                                <div class="d-flex align-items-center gap-2">

                                    <div class="bg-success bg-opacity-10 rounded-circle
                                                d-flex align-items-center justify-content-center"
                                         style="width:40px;height:40px;">

                                        <i class="bi bi-person text-success"></i>

                                    </div>

                                    <div>

                                        <div class="fw-semibold searchable-dekan">

                                            {{ $item->nama_dekan }}

                                        </div>

                                        <small class="text-muted">
                                            Dekan Fakultas
                                        </small>

                                    </div>

                                </div>

                            </td>

                            {{-- PRODI --}}
                            <td>

                                <span class="badge bg-info rounded-pill px-3 py-2">

                                    <i class="bi bi-book me-1"></i>

                                    {{ isset($item->prodis) ? $item->prodis->count() : 0 }}

                                </span>

                            </td>

                            {{-- ACTION --}}
                            <td class="pe-4">

                                <div class="d-flex justify-content-center gap-2">

                                    <a href="/fakultas/{{ $item->id }}"
                                       class="btn btn-light border rounded-circle">

                                        <i class="bi bi-eye text-info"></i>

                                    </a>

                                    <a href="/fakultas/{{ $item->id }}/edit"
                                       class="btn btn-light border rounded-circle">

                                        <i class="bi bi-pencil text-warning"></i>

                                    </a>

                                    <button class="btn btn-light border rounded-circle btn-delete"
                                            data-bs-toggle="modal"
                                            data-bs-target="#deleteModal"
                                            data-id="{{ $item->id }}"
                                            data-nama="{{ $item->nama_fakultas }}">

                                        <i class="bi bi-trash text-danger"></i>

                                    </button>

                                </div>

                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td colspan="5" class="text-center py-5">

                                <div class="py-5">

                                    <div class="bg-light rounded-circle
                                                d-inline-flex align-items-center justify-content-center mb-3"
                                         style="width:90px;height:90px;">

                                        <i class="bi bi-building-x fs-1 text-muted"></i>

                                    </div>

                                    <h5 class="fw-bold">
                                        Belum Ada Data Fakultas
                                    </h5>

                                    <p class="text-muted">
                                        Silakan tambahkan data fakultas baru
                                    </p>

                                    <a href="/fakultas/create"
                                       class="btn btn-primary rounded-pill px-4">

                                        <i class="bi bi-plus-circle me-1"></i>

                                        Tambah Fakultas

                                    </a>

                                </div>

                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

        {{-- FOOTER --}}
        <div class="card-footer bg-white border-0 p-4">

            <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">

                <small class="text-muted">

                    <i class="bi bi-info-circle me-1"></i>

                    Menampilkan {{ $fakultas->count() }} data fakultas

                </small>

                @if(method_exists($fakultas,'links'))

                    {{ $fakultas->links() }}

                @endif

            </div>

        </div>

    </div>

</div>

{{-- DELETE MODAL --}}
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

                <p class="text-muted">
                    Data akan dihapus permanen dan tidak dapat dikembalikan.
                </p>

                <h5 class="text-danger fw-bold mb-4"
                    id="modalNamaFakultas">

                    -

                </h5>

                <div class="d-flex justify-content-center gap-2">

                    <button class="btn btn-light border rounded-pill px-4"
                            data-bs-dismiss="modal">

                        Batal

                    </button>

                    <form id="deleteForm" method="POST">

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

{{-- STYLE --}}
<style>

    .table tbody tr{
        transition: all .2s ease;
    }

    .table tbody tr:hover{
        background: rgba(13,110,253,.04);
        transform: scale(1.002);
    }

    .card{
        transition: all .2s ease;
    }

    .card:hover{
        transform: translateY(-3px);
    }

</style>

{{-- SCRIPT --}}
<script>

document.addEventListener('DOMContentLoaded', function(){

    // SEARCH
    const searchInput = document.getElementById('searchInput');

    searchInput.addEventListener('keyup', function(){

        const value = this.value.toLowerCase();

        document.querySelectorAll('.searchable-row').forEach(row => {

            const nama = row.querySelector('.searchable-name')?.textContent.toLowerCase();
            const dekan = row.querySelector('.searchable-dekan')?.textContent.toLowerCase();

            row.style.display =
                nama.includes(value) || dekan.includes(value)
                ? ''
                : 'none';

        });

    });

    // DELETE MODAL
    const deleteModal = document.getElementById('deleteModal');

    deleteModal.addEventListener('show.bs.modal', function(event){

        const button = event.relatedTarget;

        const id = button.getAttribute('data-id');
        const nama = button.getAttribute('data-nama');

        document.getElementById('modalNamaFakultas').textContent = nama;

        document.getElementById('deleteForm').action =
            `/fakultas/${id}`;

    });

    // AUTO CLOSE ALERT
    setTimeout(() => {

        document.querySelectorAll('.alert').forEach(alert => {

            const bsAlert = new bootstrap.Alert(alert);

            bsAlert.close();

        });

    }, 5000);

});

</script>

</x-layout>