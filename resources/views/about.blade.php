@extends('layouts.app')

@section('title', 'Profil Jurusan - DTIF FTEIC ITS')

@section('content')
<!-- Header Banner -->
<div class="text-center mb-5">
    <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill bg-primary-subtle text-primary fw-semibold small mb-3">
        <i class="bi bi-building"></i> Departemen Teknik Informatika
    </div>
    <h1 class="display-5 fw-extrabold text-dark mb-2">
        Teknik Informatika ITS
    </h1>
    <div class="my-2">
        <span class="highlight-pill-dark fs-6 fw-bold">
            Fakultas Teknologi Elektro dan Informatika Cerdas (FTEIC)
        </span>
    </div>
</div>

<!-- Visi & Misi Section -->
<div class="mb-5">
    <h4 class="fw-bold text-dark mb-4 d-flex align-items-center gap-2">
        <i class="bi bi-compass text-primary"></i> Visi & Misi Departemen
    </h4>

    <div class="inner-paper-grid">
        <!-- Visi Card -->
        <div class="nested-white-card mb-4 p-4">
            <div class="d-flex align-items-center mb-3">
                <span class="badge bg-dark text-white px-3 py-2 rounded-pill me-2">VISI</span>
                <h5 class="fw-bold mb-0 text-dark">Visi Departemen Informatika</h5>
            </div>
            <p class="text-secondary leading-relaxed mb-3">
                Sejalan dengan visi ITS yaitu menjadi perguruan tinggi dengan reputasi internasional dalam ilmu pengetahuan, teknologi, dan seni, terutama yang menunjang industri dan kelautan yang berwawasan lingkungan, maka visi Departemen Informatika adalah menjadi inovator bidang informatika yang unggul di tingkat nasional dengan reputasi internasional, serta berperan aktif dalam upaya memajukan dan mensejahterakan bangsa.
            </p>
            <p class="text-secondary leading-relaxed mb-0">
                Visi Departemen Teknik Informatika (DTIF) berfokus untuk menjadi lembaga pendidikan yang unggul dan inovatif-inventif dalam informatika cerdas, mendukung transformasi digital dan berkontribusi kepada masyarakat dengan reputasi internasional.
            </p>
        </div>

        <!-- Misi Card -->
        <div class="nested-white-card p-4">
            <div class="d-flex align-items-center mb-3">
                <span class="badge bg-primary text-white px-3 py-2 rounded-pill me-2">MISI</span>
                <h5 class="fw-bold mb-0 text-dark">Misi Departemen Informatika</h5>
            </div>
            <ol class="list-group list-group-numbered list-group-flush bg-transparent">
                <li class="list-group-item bg-transparent text-secondary border-0 px-0 py-2">
                    Menyelenggarakan proses pembelajaran yang berkualitas, dan memenuhi standar nasional maupun internasional,
                </li>
                <li class="list-group-item bg-transparent text-secondary border-0 px-0 py-2">
                    Melaksanakan penelitian yang inovatif, bermutu, dan bermanfaat,
                </li>
                <li class="list-group-item bg-transparent text-secondary border-0 px-0 py-2">
                    Meningkatkan pemanfaatan teknologi informasi dan komunikasi untuk masyarakat,
                </li>
                <li class="list-group-item bg-transparent text-secondary border-0 px-0 py-2">
                    Menjalin kemitraan dengan berbagai lembaga, baik di dalam maupun di luar negeri.
                </li>
            </ol>
        </div>
    </div>
</div>

<hr class="my-5 text-muted opacity-25">

<!-- Program Studi Section -->
<div class="mb-5">
    <h4 class="fw-bold text-dark mb-3 d-flex align-items-center gap-2">
        <i class="bi bi-journal-bookmark text-primary"></i> Program Studi (6 Jenjang)
    </h4>
    <p class="text-secondary mb-4">Departemen Teknik Informatika FTEIC ITS menyelenggarakan 6 jenjang program studi:</p>
    
    <div class="inner-paper-grid">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3">
            <div class="col">
                <div class="nested-white-card h-100 d-flex align-items-center">
                    <i class="bi bi-mortarboard-fill text-primary fs-3 me-3"></i>
                    <div>
                        <h6 class="fw-bold mb-0 text-dark">Teknik Informatika S1</h6>
                        <small class="text-secondary">Sarjana Reguler</small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="nested-white-card h-100 d-flex align-items-center">
                    <i class="bi bi-globe2 text-info fs-3 me-3"></i>
                    <div>
                        <h6 class="fw-bold mb-0 text-dark">Teknik Informatika (IUP)</h6>
                        <small class="text-secondary">International Undergraduate</small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="nested-white-card h-100 d-flex align-items-center">
                    <i class="bi bi-cpu-fill text-success fs-3 me-3"></i>
                    <div>
                        <h6 class="fw-bold mb-0 text-dark">Rekayasa Kecerdasan Artifisial (S1)</h6>
                        <small class="text-secondary">Sarjana AI</small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="nested-white-card h-100 d-flex align-items-center">
                    <i class="bi bi-code-square text-warning fs-3 me-3"></i>
                    <div>
                        <h6 class="fw-bold mb-0 text-dark">Rekayasa Perangkat Lunak (S1)</h6>
                        <small class="text-secondary">Sarjana Software Engineering</small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="nested-white-card h-100 d-flex align-items-center">
                    <i class="bi bi-book-half text-danger fs-3 me-3"></i>
                    <div>
                        <h6 class="fw-bold mb-0 text-dark">Teknik Informatika (S2)</h6>
                        <small class="text-secondary">Magister</small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="nested-white-card h-100 d-flex align-items-center">
                    <i class="bi bi-award-fill text-secondary fs-3 me-3"></i>
                    <div>
                        <h6 class="fw-bold mb-0 text-dark">Ilmu Komputer (S3)</h6>
                        <small class="text-secondary">Doktor</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<hr class="my-5 text-muted opacity-25">

<!-- Laboratorium Bidang Minat Section -->
<div>
    <h4 class="fw-bold text-dark mb-3 d-flex align-items-center gap-2">
        <i class="bi bi-motherboard text-primary"></i> Laboratorium Bidang Minat (6 Lab)
    </h4>
    <p class="text-secondary mb-4">Terdapat 6 laboratorium utama pendukung riset dan pembelajaran di DTIF ITS:</p>

    <div class="inner-paper-grid">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3">
            <div class="col">
                <div class="nested-white-card h-100">
                    <div class="d-flex align-items-center mb-2">
                        <i class="bi bi-diagram-3-fill text-primary me-2 fs-5"></i>
                        <h6 class="fw-bold mb-0 text-dark">Lab Rekayasa Perangkat Lunak</h6>
                    </div>
                    <small class="text-secondary">Pengembangan metodologi, arsitektur, dan pengujian sistem perangkat lunak.</small>
                </div>
            </div>
            <div class="col">
                <div class="nested-white-card h-100">
                    <div class="d-flex align-items-center mb-2">
                        <i class="bi bi-robot text-info me-2 fs-5"></i>
                        <h6 class="fw-bold mb-0 text-dark">Lab Komputasi Cerdas & Visi</h6>
                    </div>
                    <small class="text-secondary">Riset seputar kecerdasan buatan, machine learning, dan pengolahan citra digital.</small>
                </div>
            </div>
            <div class="col">
                <div class="nested-white-card h-100">
                    <div class="d-flex align-items-center mb-2">
                        <i class="bi bi-controller text-success me-2 fs-5"></i>
                        <h6 class="fw-bold mb-0 text-dark">Lab Grafika, Interaksi, Gim, & Analitik</h6>
                    </div>
                    <small class="text-secondary">Pengembangan teknologi grafika komputer, UI/UX, game dev, dan data analytics.</small>
                </div>
            </div>
            <div class="col">
                <div class="nested-white-card h-100">
                    <div class="d-flex align-items-center mb-2">
                        <i class="bi bi-terminal-box text-warning me-2 fs-5"></i>
                        <h6 class="fw-bold mb-0 text-dark">Lab Algoritma & Pemrograman</h6>
                    </div>
                    <small class="text-secondary">Pendalaman struktur data, kompleksitas algoritma, dan pemrograman kompetitif.</small>
                </div>
            </div>
            <div class="col">
                <div class="nested-white-card h-100">
                    <div class="d-flex align-items-center mb-2">
                        <i class="bi bi-database-fill-gear text-danger me-2 fs-5"></i>
                        <h6 class="fw-bold mb-0 text-dark">Lab Manajemen Cerdas Informasi</h6>
                    </div>
                    <small class="text-secondary">Riset pengolahan basis data skala besar, pengenalan pola data, dan sistem informasi.</small>
                </div>
            </div>
            <div class="col">
                <div class="nested-white-card h-100">
                    <div class="d-flex align-items-center mb-2">
                        <i class="bi bi-calculator-fill text-secondary me-2 fs-5"></i>
                        <h6 class="fw-bold mb-0 text-dark">Lab Pemodelan & Komputasi Terapan</h6>
                    </div>
                    <small class="text-secondary">Simulasi sistem kompleks, komputasi terdistribusi, dan pemodelan matematis.</small>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
