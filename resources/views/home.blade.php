@extends('layouts.app')

@section('title', 'Beranda - ITS Academic Profile (Kelompok 10)')

@section('content')
<!-- Hero Header Section -->
<div class="text-center py-2 mb-5">
    <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill bg-light border text-secondary fw-semibold small mb-3">
        <span class="badge bg-dark rounded-pill px-2.5 py-1">PBKK</span>
        <span>Pemrograman Berbasis Kerangka Kerja</span>
    </div>

    <h1 class="display-4 fw-extrabold text-dark mb-3">
        Portal Akademik Kelompok 10
    </h1>

    <div class="my-3">
        <span class="highlight-pill-dark fs-5 fw-bold">
            Teknik Informatika FTEIC ITS <i class="bi bi-stars text-warning ms-1"></i>
        </span>
    </div>
</div>

<hr class="my-5 text-muted opacity-25">

<!-- Group Members Section with Inner Paper Grid & Nested Cards -->
<div class="mb-5">
    <div class="d-flex align-items-center justify-content-between mb-4">
        <div>
            <h3 class="fw-bold mb-1 text-dark">Anggota Kelompok 10</h3>
            <p class="text-secondary small mb-0">6 Mahasiswa Departemen Teknik Informatika ITS</p>
        </div>
        <span class="badge bg-dark text-white px-3 py-2 rounded-pill fw-semibold">
            <i class="bi bi-people-fill me-1"></i> 6 Tim Penyusun
        </span>
    </div>

    <!-- Inner Paper Grid Container -->
    <div class="inner-paper-grid">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3">
            @foreach($anggota as $index => $item)
                <div class="col">
                    <div class="nested-white-card h-100 d-flex align-items-center">
                        <div class="bg-dark text-white rounded-circle d-flex align-items-center justify-content-center fw-bold me-3 flex-shrink-0" style="width: 44px; height: 44px; font-size: 0.95rem;">
                            0{{ $index + 1 }}
                        </div>
                        <div class="overflow-hidden">
                            <h6 class="fw-bold mb-1 text-dark text-truncate" title="{{ $item['nama'] }}">{{ $item['nama'] }}</h6>
                            <span class="badge bg-light text-secondary border fw-normal">
                                NRP: {{ $item['nrp'] }}
                            </span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<hr class="my-5 text-muted opacity-25">

<!-- Quick Navigation Cards matching Reference Design -->
<div class="row g-4">
    <div class="col-md-4">
        <div class="inner-paper-grid h-100 d-flex flex-column p-4">
            <div class="nested-white-card flex-grow-1 d-flex flex-column justify-content-between p-4">
                <div>
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <span class="badge bg-primary-subtle text-primary rounded-pill px-3 py-1.5 fw-bold">PROFIL</span>
                        <i class="bi bi-building fs-4 text-primary"></i>
                    </div>
                    <h4 class="fw-bold text-dark mb-2">Profil Jurusan</h4>
                    <p class="text-secondary small mb-4">
                        Informasi lengkap Departemen Teknik Informatika FTEIC ITS, Visi, Misi, 6 Program Studi, dan 6 Laboratorium.
                    </p>
                </div>
                <a href="{{ route('about') }}" class="btn btn-dark w-100 rounded-pill fw-semibold">
                    Lihat Profil <i class="bi bi-arrow-right ms-1"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="inner-paper-grid h-100 d-flex flex-column p-4">
            <div class="nested-white-card flex-grow-1 d-flex flex-column justify-content-between p-4">
                <div>
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <span class="badge bg-info-subtle text-info-emphasis rounded-pill px-3 py-1.5 fw-bold">PROYEK</span>
                        <i class="bi bi-cpu fs-4 text-info"></i>
                    </div>
                    <h4 class="fw-bold text-dark mb-2">Rencana Proyek</h4>
                    <p class="text-secondary small mb-4">
                        Sub-tema platform Autonomous Agentic AI yang diusung oleh Kelompok 10 untuk akhir semester.
                    </p>
                </div>
                <a href="{{ route('project') }}" class="btn btn-dark w-100 rounded-pill fw-semibold">
                    Lihat Proyek <i class="bi bi-arrow-right ms-1"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="inner-paper-grid h-100 d-flex flex-column p-4">
            <div class="nested-white-card flex-grow-1 d-flex flex-column justify-content-between p-4">
                <div>
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <span class="badge bg-success-subtle text-success rounded-pill px-3 py-1.5 fw-bold">FITUR</span>
                        <i class="bi bi-calculator fs-4 text-success"></i>
                    </div>
                    <h4 class="fw-bold text-dark mb-2">Kalkulator Dinamis</h4>
                    <p class="text-secondary small mb-4">
                        Hitung ekspresi secara dinamis melalui rute URL <code class="bg-light text-dark px-1.5 py-0.5 rounded border">/hitung/{angka1}/{angka2}/{operasi}</code>.
                    </p>
                </div>
                <a href="{{ route('calculator') }}" class="btn btn-dark w-100 rounded-pill fw-semibold">
                    Buka Kalkulator <i class="bi bi-arrow-right ms-1"></i>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection