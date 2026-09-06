@extends('layouts.app')

@section('title', 'Kalkulator Dinamis - ITS Academic Profile')

@section('content')
<div class="text-center mb-5">
    <h1 class="display-4 fw-extrabold text-dark mb-2">
        Kalkulator Dinamis
    </h1>
    <div class="my-2">
        <span class="highlight-pill-dark fs-6 fw-bold">
            Kelompok 10 PBKK <i class="bi bi-calculator text-success ms-1"></i>
        </span>
    </div>
</div>

<!-- Dynamic Result Callout Box (If accessed via /hitung/{angka1}/{angka2}/{operasi}) -->
@if(isset($pesanHasil))
    <div class="inner-paper-grid mb-5">
        <div class="nested-white-card p-4 p-md-5 {{ isset($error) && $error ? 'border-danger' : 'border-dark' }}">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <span class="badge {{ isset($error) && $error ? 'bg-danger text-white' : 'bg-dark text-white' }} px-3 py-2 rounded-pill">
                    <i class="bi {{ isset($error) && $error ? 'bi-exclamation-triangle-fill' : 'bi-check-circle-fill' }} me-1"></i>
                    {{ isset($error) && $error ? 'Error Perhitungan' : 'Hasil Kalkulasi' }}
                </span>
                <span class="badge bg-light text-secondary border">
                    <code>/hitung/{{ $angka1 }}/{{ $angka2 }}/{{ $operasi }}</code>
                </span>
            </div>

            @if(isset($error) && $error)
                <h3 class="fw-bold text-danger mb-2">{{ $pesanHasil }}</h3>
                <p class="mb-0 text-secondary">{{ $error }}</p>
            @else
                <div class="py-2">
                    <span class="text-secondary text-uppercase tracking-wider small fw-bold d-block mb-1">Hasil Perhitungan:</span>
                    <h2 class="display-6 fw-bold text-dark mb-3">
                        "{{ $pesanHasil }}"
                    </h2>
                    <div class="d-inline-flex align-items-center gap-3 bg-light border px-4 py-2.5 rounded-pill">
                        <span class="fs-5 fw-bold text-primary">{{ $num1 }} {{ $simbol }} {{ $num2 }}</span>
                        <span class="fs-5 text-muted">=</span>
                        <span class="fs-4 fw-extrabold text-success">{{ $hasil }}</span>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endif

<!-- Interactive Form in Inner Paper Grid -->
<div class="inner-paper-grid mb-5">
    <div class="nested-white-card p-4 p-md-5">
        <h4 class="fw-bold mb-4 text-dark d-flex align-items-center gap-2">
            <i class="bi bi-calculator-fill text-primary"></i> Form Perhitungan
        </h4>

        <form id="calcForm" onsubmit="calculateUrl(event)">
            <div class="row g-3 align-items-center">
                <div class="col-md-4">
                    <label class="form-label fw-semibold text-secondary small">Angka Pertama</label>
                    <input type="number" step="any" id="inputNum1" class="form-control form-control-lg rounded-3 border" 
                        placeholder="Contoh: 10" value="{{ $num1 ?? 10 }}" required>
                </div>

                <div class="col-md-3">
                    <label class="form-label fw-semibold text-secondary small">Operasi</label>
                    <select id="inputOp" class="form-select form-select-lg rounded-3 border fw-semibold" required>
                        <option value="tambah" {{ (isset($op) && $op == 'tambah') ? 'selected' : '' }}>+ Tambah</option>
                        <option value="kurang" {{ (isset($op) && $op == 'kurang') ? 'selected' : '' }}>- Kurang</option>
                        <option value="kali" {{ (isset($op) && $op == 'kali') ? 'selected' : (empty($op) ? 'selected' : '') }}>× Kali</option>
                        <option value="bagi" {{ (isset($op) && $op == 'bagi') ? 'selected' : '' }}>÷ Bagi</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <label class="form-label fw-semibold text-secondary small">Angka Kedua</label>
                    <input type="number" step="any" id="inputNum2" class="form-control form-control-lg rounded-3 border" 
                        placeholder="Contoh: 5" value="{{ $num2 ?? 5 }}" required>
                </div>

                <div class="col-md-1 d-flex align-items-end pt-md-4">
                    <button type="submit" class="btn btn-dark btn-lg w-100 rounded-3 d-flex align-items-center justify-content-center" title="Hitung Sekarang">
                        <i class="bi bi-arrow-right-circle-fill"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Quick Presets -->
<div class="text-center">
    <span class="text-secondary small fw-bold text-uppercase tracking-wider d-block mb-3">
        <i class="bi bi-lightning-charge-fill text-warning me-1"></i> Uji Coba Presets Rute Cepat:
    </span>
    <div class="d-flex flex-wrap justify-content-center gap-2">
        <a href="{{ url('/hitung/10/5/kali') }}" class="btn btn-outline-dark btn-sm rounded-pill">
            <code>/hitung/10/5/kali</code>
        </a>
        <a href="{{ url('/hitung/100/25/tambah') }}" class="btn btn-outline-dark btn-sm rounded-pill">
            <code>/hitung/100/25/tambah</code>
        </a>
        <a href="{{ url('/hitung/50/10/kurang') }}" class="btn btn-outline-dark btn-sm rounded-pill">
            <code>/hitung/50/10/kurang</code>
        </a>
        <a href="{{ url('/hitung/20/4/bagi') }}" class="btn btn-outline-dark btn-sm rounded-pill">
            <code>/hitung/20/4/bagi</code>
        </a>
    </div>
</div>

@push('scripts')
<script>
    function calculateUrl(e) {
        e.preventDefault();
        const num1 = document.getElementById('inputNum1').value || '0';
        const num2 = document.getElementById('inputNum2').value || '0';
        const op = document.getElementById('inputOp').value || 'tambah';
        
        window.location.href = `{{ url('/hitung') }}/${num1}/${num2}/${op}`;
    }
</script>
@endpush
@endsection
