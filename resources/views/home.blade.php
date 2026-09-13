@extends('layouts.app')
@section('title', 'Beranda — ITS Academic Portal')
@section('content')

{{-- ═══ HERO — lime green block, big display text ═══ --}}
<div class="hero-block" style="background: var(--lime); min-height: 480px;">
    <div class="wrap">

        <div class="row align-items-end g-0" style="min-height: 400px;">

            {{-- Left: Text --}}
            <div class="col-12 col-lg-6" style="padding-bottom: var(--s8);">
                <div class="pill pill-white-strong mb-5" style="font-size: 0.78rem;">
                    <i class="bi bi-mortarboard-fill"></i> PBKK 2026 · Teknik Informatika ITS
                </div>

                <h1 class="t-display mb-5" style="color: var(--ink);">
                    Portal Profil<br>Akademis ITS.
                </h1>

                <p style="font-size: 1.05rem; color: rgba(26,26,18,0.65); max-width: 440px; line-height: 1.7; margin-bottom: var(--s8);">
                    Portal akademis Departemen Teknik Informatika, FTEIC — Institut Teknologi Sepuluh Nopember Surabaya.
                </p>

                <div style="display: flex; flex-wrap: wrap; gap: var(--s3);">
                    <a href="{{ route('mahasiswa.detail', ['nrp' => '5025241197']) }}" class="btn btn-ink btn-lg">
                        <i class="bi bi-person-fill"></i> Profil Mahasiswa
                    </a>
                    <a href="{{ route('agent') }}" class="btn btn-white btn-lg">
                        <i class="bi bi-cpu-fill"></i> Agentic AI
                    </a>
                </div>
            </div>

            {{-- Right: Large stat block on white card --}}
            <div class="col-12 col-lg-6 d-flex justify-content-end align-items-end" style="padding-bottom: var(--s8);">
                <div style="background: var(--white); border-radius: var(--r-2xl); padding: var(--s8); max-width: 320px; width: 100%; box-shadow: var(--sh-md);">
                    <div class="t-label mb-2">Syah Amin Zikri</div>
                    <div class="t-stat mb-1" style="color: var(--ink);">3.92</div>
                    <div style="font-size: 0.82rem; color: var(--ink-soft); margin-bottom: var(--s4);">IPK Proyeksi · Angkatan 2024</div>
                    <div class="progress-track">
                        <div class="progress-fill" style="width: 98%;"></div>
                    </div>
                    <div style="display: flex; justify-content: space-between; margin-top: var(--s2);">
                        <span class="t-small">0.00</span>
                        <span class="t-small">4.00</span>
                    </div>
                    <div style="margin-top: var(--s4);">
                        <span class="chip lime"><i class="bi bi-award-fill"></i> Dengan Pujian</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

{{-- ═══ STUDENT SPOTLIGHT — cream bg ═══ --}}
<div style="background: var(--cream); padding: var(--s16) 0;">
    <div class="wrap">

        <div style="display: flex; flex-wrap: wrap; align-items: flex-start; justify-content: space-between; gap: var(--s6); margin-bottom: var(--s8);">
            <div>
                <div class="pill pill-green mb-3"><i class="bi bi-person-badge-fill"></i> Mahasiswa Aktif ITS</div>
                <h2 class="t-heading" style="margin-top: var(--s3);">Profil Utama</h2>
            </div>
            <a href="{{ route('mahasiswa.detail', ['nrp' => $mhsUtama['nrp']]) }}" class="btn btn-outline-ink btn-sm" style="margin-top: var(--s2);">
                Lihat Profil Lengkap <i class="bi bi-arrow-right"></i>
            </a>
        </div>

        <div class="card" style="padding: var(--s8);">
            <div style="display: flex; align-items: flex-start; gap: var(--s6); flex-wrap: wrap;">
                <div class="avatar">SZ</div>
                <div style="flex: 1; min-width: 0;">
                    <div style="display: flex; flex-wrap: wrap; gap: var(--s2); margin-bottom: var(--s3);">
                        <span class="chip cream"><i class="bi bi-hash"></i> 5025241197</span>
                        <span class="chip lime"><i class="bi bi-graph-up-arrow"></i> IPK Proyeksi: 3.92</span>
                    </div>
                    <h3 style="font-size: 1.4rem; margin-bottom: var(--s2);">{{ $mhsUtama['nama'] }}</h3>
                    <p class="t-body" style="margin-bottom: var(--s5); max-width: 580px;">{{ $mhsUtama['bio'] }}</p>
                    <a href="{{ route('mahasiswa.detail', ['nrp' => $mhsUtama['nrp']]) }}" class="btn btn-yellow">
                        Lihat Profil Lengkap <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>

{{-- ═══ FEATURE CARDS — white bg section ═══ --}}
<div style="background: var(--white); padding: var(--s16) 0;">
    <div class="wrap">

        <div style="margin-bottom: var(--s10);">
            <h2 class="t-heading mb-3">Fitur Portal</h2>
            <p class="t-body">Akses cepat ke seluruh layanan akademis yang tersedia.</p>
        </div>

        <div class="row g-4">

            <div class="col-12 col-md-4">
                <div class="feat-card">
                    <div class="icon-box lime"><i class="bi bi-cpu-fill"></i></div>
                    <div style="flex:1;">
                        <h4 class="t-subhead mb-2">Platform Agentic AI</h4>
                        <p class="t-body">Sistem AI yang menganalisis profil karier dan merekomendasikan peluang kerja relevan secara personal.</p>
                    </div>
                    <a href="{{ route('agent') }}" class="btn btn-yellow btn-full">
                        Eksplorasi <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="feat-card">
                    <div class="icon-box teal"><i class="bi bi-calculator-fill"></i></div>
                    <div style="flex:1;">
                        <h4 class="t-subhead mb-2">Kalkulator IPK</h4>
                        <p class="t-body">Simulasi dan perhitungan rata-rata IPK dari dua semester akademis secara otomatis.</p>
                    </div>
                    <a href="{{ route('hitung.ipk', ['ip1' => 3.85, 'ip2' => 3.90]) }}" class="btn btn-yellow btn-full">
                        Kalkulasi IPK <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="feat-card">
                    <div class="icon-box purple"><i class="bi bi-journal-bookmark-fill"></i></div>
                    <div style="flex:1;">
                        <h4 class="t-subhead mb-2">Riwayat & Matkul</h4>
                        <p class="t-body">Riwayat studi, kurikulum, dan mata kuliah yang ditempuh di Teknik Informatika ITS.</p>
                    </div>
                    <a href="{{ route('mahasiswa.detail', ['nrp' => '5025241197']) }}" class="btn btn-yellow btn-full">
                        Lihat Detail <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

{{-- ═══ BOTTOM CTA — dark block ═══ --}}
<div style="background: var(--cream); padding: 0 0 var(--s16);">
    <div class="wrap">
        <div class="cta-block">
            <div style="position: relative; z-index: 1; max-width: 520px;">
                <div class="pill pill-lime mb-4" style="background: rgba(168,200,64,.20); color: var(--lime); border-color: rgba(168,200,64,.3);">
                    <i class="bi bi-stars"></i> Portofolio Akademis
                </div>
                <h3 style="color: var(--white); font-size: clamp(1.4rem, 3vw, 2rem); margin-bottom: var(--s3);">
                    Simulasikan Predikat IPK Portofolio
                </h3>
                <p style="color: rgba(255,255,255,0.50); font-size: 0.9rem;">
                    Hitung proyeksi IPK kumulatif semester 1 dan semester 2 secara interaktif via routing parameter dinamis.
                </p>
            </div>
            <a href="{{ route('hitung.ipk', ['ip1' => 3.85, 'ip2' => 3.90]) }}" class="btn btn-yellow btn-lg" style="position: relative; z-index: 1; flex-shrink: 0;">
                Hitung IPK Sekarang <i class="bi bi-arrow-right"></i>
            </a>
        </div>
    </div>
</div>

@endsection