<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Data Mahasiswa  (Syah Amin Zikri - 5025241197)
     */
    private function getMahasiswaData()
    {
        return [
            'nama' => 'Syah Amin Zikri',
            'nrp' => '5025241197',
            'prodi' => 'Teknik Informatika S1',
            'departemen' => 'Departemen Teknik Informatika',
            'fakultas' => 'FTEIC ITS',
            'angkatan' => '2024',
            'status' => 'Mahasiswa Aktif ITS',
            'ipk_proyeksi' => 3.92,
            'email' => '5025241197@student.its.ac.id',
            'peran_tim' => 'Full-Stack Developer',
            'bio' => 'Mahasiswa Teknik Informatika ITS angkatan 2024 yang berfokus pada pengembangan Intelligent Agentic AI Systems dan Arsitektur Web Modern.',
            'matkul' => ['Pemrograman Berbasis Kerangka Kerja (PBKK)', 'Data Mining', 'RSBP', 'Keamanan Informasi', 'GRAFKOM'],
        ];
    }

    /**
     * Rute 1: Halaman Home (/) & Tantangan 2: Alert Status Interaktif (/beranda?user=...)
     */
    public function index(Request $request)
    {
        $mhsUtama = $this->getMahasiswaData();
        $user = $request->query('user');

        if (!empty($user)) {
            $displayNama = trim($user);
            // Random IPK antara 3.50 dan 4.00
            $randomGpa = mt_rand(350, 400) / 100;
            $displayGpa = number_format($randomGpa, 2);
        } else {
            $displayNama = $mhsUtama['nama'];
            $displayGpa = number_format($mhsUtama['ipk_proyeksi'], 2);
        }

        $ipkNum = (float) $displayGpa;
        if ($ipkNum >= 3.75) {
            $predikatGpa = 'Dengan Pujian';
            $badgeColor = 'lime';
        } else {
            $predikatGpa = 'Sangat Memuaskan';
            $badgeColor = 'yellow';
        }

        $progressPct = min(100, round(($ipkNum / 4.00) * 100));

        return view('home', [
            'mhsUtama' => $mhsUtama,
            'user' => $user,
            'displayNama' => $displayNama,
            'displayGpa' => $displayGpa,
            'predikatGpa' => $predikatGpa,
            'badgeColor' => $badgeColor,
            'progressPct' => $progressPct,
        ]);
    }

    /**
     * Rute 2: Halaman Profil Mahasiswa (/profil-mahasiswa)
     */
    public function profilMahasiswa()
    {
        return $this->mahasiswa('5025241197');
    }

    /**
     * Rute 3: Halaman Ide Agent (/ide-agent) & Tantangan 1: Dynamic Theme (?mode=dark)
     */
    public function ideAgent(Request $request)
    {
        $darkMode = $request->query('mode') === 'dark';

        return view('project', [
            'tema' => 'Career Application Agent',
            'hasTema' => true,
            'darkMode' => $darkMode,
        ]);
    }

    /**
     * Rute 2 Detail: Detail Profil (/mahasiswa/{nrp}) - Protected by 10-digit regex
     */
    public function mahasiswa($nrp)
    {
        $mhsUtama = $this->getMahasiswaData();

        if ($nrp === '5025241197') {
            $mhs = $mhsUtama;
        } else {
            // Dynamic fallback for any valid 10-digit ITS NRP
            $mhs = [
                'nama' => 'Mahasiswa ITS (NRP ' . $nrp . ')',
                'nrp' => $nrp,
                'prodi' => 'Teknik Informatika S1',
                'departemen' => 'Departemen Teknik Informatika',
                'fakultas' => 'FTEIC ITS',
                'angkatan' => '20' . substr($nrp, 4, 2),
                'status' => 'Mahasiswa Aktif ITS',
                'ipk_proyeksi' => 3.75,
                'email' => 'mhs.' . $nrp . '@student.its.ac.id',
                'peran_tim' => 'Sivitas Akademika ITS',
                'bio' => 'Mahasiswa terdaftar resmi di Institut Teknologi Sepuluh Nopember (ITS) Surabaya.',
                'matkul' => ['Pemrograman Berbasis Kerangka Kerja', 'Struktur Data', 'Kecerdasan Artifisial'],
            ];
        }

        return view('mahasiswa', compact('mhs', 'nrp'));
    }

    /**
     * Rute: Ide Platform Agentic AI (/agent/{tema?})
     */
    public function agent(Request $request, $tema = null)
    {
        $hasTema = !empty($tema);
        $temaAktif = $hasTema ? urldecode($tema) : 'General Assistant Agent';
        $darkMode = $request->query('mode') === 'dark';

        return view('project', [
            'tema' => $temaAktif,
            'hasTema' => $hasTema,
            'darkMode' => $darkMode,
        ]);
    }

    /**
     * Tantangan 2: Kalkulator Portofolio Akademis (/hitung-ipk/{ip1}/{ip2})
     */
    public function hitungIpk($ip1, $ip2)
    {
        $val1 = is_numeric($ip1) ? (float)$ip1 : 0.0;
        $val2 = is_numeric($ip2) ? (float)$ip2 : 0.0;

        $total = $val1 + $val2;
        $ipk = round($total / 2, 2);

        if ($ipk >= 3.75) {
            $predikat = 'Dengan Pujian (Cumlaude)';
            $badgeColor = 'success';
        } elseif ($ipk >= 3.50) {
            $predikat = 'Sangat Memuaskan';
            $badgeColor = 'primary';
        } elseif ($ipk >= 3.00) {
            $predikat = 'Memuaskan';
            $badgeColor = 'info';
        } else {
            $predikat = 'Cukup';
            $badgeColor = 'warning';
        }

        return view('ipk', compact('val1', 'val2', 'total', 'ipk', 'predikat', 'badgeColor', 'ip1', 'ip2'));
    }



    /**
     * Tantangan 3: Fallback Route for 404 handling
     */
    public function fallback()
    {
        return response()->view('fallback', [], 404);
    }
}
