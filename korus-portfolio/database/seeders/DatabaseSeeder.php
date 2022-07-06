<?php

namespace Database\Seeders;

use App\Models\Member;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Member::factory()->create([
            'name' => 'Veréb Gergő',
            'source' => 'deIY0T_vereb gergo.jpg',
            'is_old' => 0
        ]);
        Member::factory()->create([
            'name' => 'Pásztori Pongrác',
            'source' => 'LCrryx_dscn8005.jpg',
            'is_old' => 0
        ]);
        Member::factory()->create([
            'name' => 'Vállaji Bálint',
            'source' => 'Jm3NSR_dscn7995.jpg',
            'is_old' => 0
        ]);
        Member::factory()->create([
            'name' => 'Csák Ádám',
            'source' => 'yVeYb1_dscn7990.jpg',
            'is_old' => 0
        ]);
        Member::factory()->create([
            'name' => 'Képes Levente',
            'source' => 'X6HwCR_dscn7988.jpg',
            'is_old' => 0
        ]);
        Member::factory()->create([
            'name' => 'Dudás Gergely',
            'source' => 'G3fz4O_dscn7986.jpg',
            'is_old' => 0
        ]);
        Member::factory()->create([
            'name' => 'Tajti Péter',
            'source' => 's04W1r_dscn7984.jpg',
            'is_old' => 0
        ]);
        Member::factory()->create([
            'name' => 'Federics Róbert',
            'source' => '7H1d7B_dscn7980.jpg',
            'is_old' => 0
        ]);
        Member::factory()->create([
            'name' => 'Ferenczi Kristóf',
            'source' => '7fR6MO_dscn7978.jpg',
            'is_old' => 0
        ]);
        Member::factory()->create([
            'name' => 'Kormos Dávid',
            'source' => 'nt2mur_dscn7976.jpg',
            'is_old' => 0
        ]);
        Member::factory()->create([
            'name' => 'Farkas Benedek Lajos',
            'source' => 'fWcCRT_dscn7974.jpg',
            'is_old' => 0
        ]);
        Member::factory()->create([
            'name' => 'Pummer Attila',
            'source' => 'qOqldh_dsc05615__cr_tn_fiuk.jpg',
            'is_old' => 0
        ]);
        Member::factory()->create([
            'name' => 'Kovács Bálint',
            'source' => 'eGfFZu_dsc05616_re_cr_tn_fiuk.jpg',
            'is_old' => 0
        ]);
        Member::factory()->create([
            'name' => 'Sós Bulcsú',
            'source' => 'YZl3VW_dsc05610__cr_tn_fiuk.jpg',
            'is_old' => 0
        ]);
        Member::factory()->create([
            'name' => 'Bossányi Benedek',
            'source' => 'oybVnD_hfbadz_ybwjve_zsrneu_bossanyi benedek.jpg',
            'is_old' => 0
        ]);
        Member::factory()->create([
            'name' => 'Tóth Vilmos',
            'source' => 'l7SkaC_toth vili.jpg',
            'is_old' => 1
        ]);
        Member::factory()->create([
            'name' => 'Bartók Szabolcs',
            'source' => '95N4En_bartok szabi.png',
            'is_old' => 1
        ]);
        Member::factory()->create([
            'name' => 'Gáspár Dániel',
            'source' => '1S4NVW_dani.jpg',
            'is_old' => 1
        ]);
        Member::factory()->create([
            'name' => 'Polgár Zsombor',
            'source' => 'JBithi_wyoprs_polgar zsombor.jpg',
            'is_old' => 1
        ]);
        Member::factory()->create([
            'name' => 'Lukács Máté Tibor',
            'source' => 'wJYeT0_ynfln4_lukacs mate.jpg',
            'is_old' => 1
        ]);
        Member::factory()->create([
            'name' => 'Federics Ádám',
            'source' => 'FzNzo2_federics adam.jpg',
            'is_old' => 1
        ]);
        Member::factory()->create([
            'name' => 'Márkus Gergely',
            'source' => 'uRJKsa_lgjlry_ysa0ml_markus gergely (1).jpg',
            'is_old' => 1
        ]);
        Member::factory()->create([
            'name' => 'Képes Péter',
            'source' => 'bnXDFc_uxn09v_dscn7982.jpg',
            'is_old' => 1
        ]);
        Member::factory()->create([
            'name' => 'Lupkovics Kristóf',
            'source' => 'QPSPvM_3gr98w_dscn8000.jpg',
            'is_old' => 1
        ]);
        Member::factory()->create([
            'name' => 'Kőrösi Márk',
            'source' => 'l4sXNG_voun6n_dscn8001.jpg',
            'is_old' => 1
        ]);
        Member::factory()->create([
            'name' => 'Tikovits Fülöp Bertalan',
            'source' => '3bt36Z_xrtxnf_dscn7971.jpg',
            'is_old' => 1
        ]);
        Member::factory()->create([
            'name' => 'Győri Kende',
            'source' => 'W5tZ93_k880ao_ix8h2y_gyori kende.jpg',
            'is_old' => 1
        ]);

    }
}
