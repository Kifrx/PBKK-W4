<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Halaman Beranda (Home)
     */
    public function index()
    {
        $anggota = [
            ['nama' => 'Aziz Adi Pramana', 'nrp' => '5025241195'],
            ['nama' => 'Syah Amin Zikri', 'nrp' => '5025241197'],
            ['nama' => 'Muhammad Solihuddin Rizky', 'nrp' => '5025241171'],
            ['nama' => 'Ananda Aryasatya Zhafran Aqila', 'nrp' => '5025241142'],
            ['nama' => 'Rafi Attar Maulana', 'nrp' => '5025241141'],
            ['nama' => 'Abdurrahman Ar-Rafi Ravsan Zarnadi', 'nrp' => '5025241241'],
        ];

        return view('home', compact('anggota'));
    }


    /**
     * Halaman Profil Jurusan (About)
     */
    public function about()
    {
        return view('about');
    }

    /**
     * Halaman Rencana Proyek Akhir (Project Idea)
     */
    public function project()
    {
        return view('project');
    }

    /**
     * Halaman Kalkulator Interaktif
     */
    public function calculator()
    {
        return view('calculator');
    }

    /**
     * Route: /hitung/{angka1}/{angka2}/{operasi}
     */
    public function hitung($angka1, $angka2, $operasi)
    {
        $num1 = is_numeric($angka1) ? (float)$angka1 : 0;
        $num2 = is_numeric($angka2) ? (float)$angka2 : 0;
        $op = strtolower($operasi);
        $hasil = null;
        $pesanHasil = '';
        $simbol = '';
        $error = null;

        switch ($op) {
            case 'tambah':
                $hasil = $num1 + $num2;
                $simbol = '+';
                $pesanHasil = "Hasil dari {$num1} tambah {$num2} adalah {$hasil}";
                break;
            case 'kurang':
                $hasil = $num1 - $num2;
                $simbol = '-';
                $pesanHasil = "Hasil dari {$num1} kurang {$num2} adalah {$hasil}";
                break;
            case 'kali':
                $hasil = $num1 * $num2;
                $simbol = '×';
                $pesanHasil = "Hasil dari {$num1} kali {$num2} adalah {$hasil}";
                break;
            case 'bagi':
                if ($num2 == 0) {
                    $error = "Pembagian dengan angka 0 (nol) tidak diperbolehkan.";
                    $pesanHasil = "Error: Pembagian dengan 0!";
                } else {
                    $hasil = $num1 / $num2;
                    $simbol = '÷';
                    $pesanHasil = "Hasil dari {$num1} bagi {$num2} adalah {$hasil}";
                }
                break;
            default:
                $error = "Operasi '{$operasi}' tidak dikenali. Gunakan: tambah, kurang, kali, atau bagi.";
                $pesanHasil = "Error: Operasi tidak valid!";
                break;
        }

        return view('calculator', compact('num1', 'num2', 'op', 'hasil', 'pesanHasil', 'simbol', 'error', 'angka1', 'angka2', 'operasi'));
    }
}


