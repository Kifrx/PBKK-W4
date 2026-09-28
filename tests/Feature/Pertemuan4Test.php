<?php

namespace Tests\Feature;

use Tests\TestCase;

class Pertemuan4Test extends TestCase
{
    /**
     * Test route / returns 200 and master layout elements.
     */
    public function test_home_route_is_successful(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertSee('Departemen Teknik Informatika ITS');
        $response->assertSee('Portal Profil');
    }

    /**
     * Test route /profil-mahasiswa returns 200 and uses components.
     */
    public function test_profil_mahasiswa_route_is_successful(): void
    {
        $response = $this->get('/profil-mahasiswa');
        $response->assertStatus(200);
        $response->assertSee('Syah Amin Zikri');
        $response->assertSee('5025241197');
        $response->assertSee('info-card-component');
        $response->assertSee('status-banner');
    }

    /**
     * Test route /ide-agent returns 200 in normal mode.
     */
    public function test_ide_agent_route_is_successful(): void
    {
        $response = $this->get('/ide-agent');
        $response->assertStatus(200);
        $response->assertSee('theme-light');
        $response->assertSee('Career Application Agent');
    }

    /**
     * Test Challenge 1: /ide-agent?mode=dark enables dark mode.
     */
    public function test_ide_agent_dark_mode_challenge(): void
    {
        $response = $this->get('/ide-agent?mode=dark');
        $response->assertStatus(200);
        $response->assertSee('theme-dark');
        $response->assertSee('Mode Normal');
        $response->assertDontSee('Dynamic Dark Theme Aktif');
    }

    /**
     * Test Challenge 2: /beranda?user=Andi displays interactive greeting and updates GPA card.
     */
    public function test_beranda_user_greeting_challenge(): void
    {
        $response = $this->get('/beranda?user=Andi');
        $response->assertStatus(200);
        $response->assertSee('Selamat datang,');
        $response->assertSee('Andi');
        $response->assertDontSee('Coba "Budi"');
        $response->assertDontSee('Coba "Andi"');
        $response->assertDontSee('Query Parameter: ?user=...');

        $displayGpa = (float) $response->viewData('displayGpa');
        $this->assertGreaterThanOrEqual(3.50, $displayGpa);
        $this->assertLessThanOrEqual(4.00, $displayGpa);

        $displayNama = $response->viewData('displayNama');
        $this->assertEquals('Andi', $displayNama);
    }

    /**
     * Test existing routes still function without errors.
     */
    public function test_existing_routes_are_preserved(): void
    {
        $this->get('/mahasiswa/5025241197')->assertStatus(200);
        $this->get('/agent')->assertStatus(200);
        $this->get('/hitung-ipk/3.8/3.9')->assertStatus(200);
    }
}
