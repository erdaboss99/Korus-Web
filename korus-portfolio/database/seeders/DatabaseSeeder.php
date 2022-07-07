<?php

namespace Database\Seeders;

use App\Models\Member;
use App\Models\Gallery;
use App\Models\Picture;
use App\Models\Post;
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
        Gallery::factory()->create([
            'name' => 'Noszvaj (2012)'
        ]);
        Gallery::factory()->create([
            'name' => 'Nyári tábor (2012)'
        ]);
        Gallery::factory()->create([
            'name' => 'Őszi tábor (2012)'
        ]);
        Picture::factory()->create([
            'gallery_id' => 1,
            'name' => 'FvHItd_DSCF1742.JPG',
            'thumbnail' => 'th_FvHItd_DSCF1742.JPG',
        ]);
        Picture::factory()->create([
            'gallery_id' => 1,
            'name' => 'FduJ11_DSCF1745.JPG',
            'thumbnail' => 'th_FduJ11_DSCF1745.JPG',
        ]);
        Picture::factory()->create([
            'gallery_id' => 1,
            'name' => 'hq4CUW_DSCF1746.JPG',
            'thumbnail' => 'th_hq4CUW_DSCF1746.JPG',
        ]);
        Picture::factory()->create([
            'gallery_id' => 2,
            'name' => 'IYmYz9__MG_9318.JPG',
            'thumbnail' => 'th_IYmYz9__MG_9318.JPG',
        ]);
        Picture::factory()->create([
            'gallery_id' => 2,
            'name' => 'R1IvbC__MG_9320.JPG',
            'thumbnail' => 'th_R1IvbC__MG_9320.JPG',
        ]);
        Picture::factory()->create([
            'gallery_id' => 2,
            'name' => 'TAt5u2__MG_9324.JPG',
            'thumbnail' => 'th_TAt5u2__MG_9324.JPG',
        ]);
        Picture::factory()->create([
            'gallery_id' => 3,
            'name' => 'YWFDxq_IMG_0622.JPG',
            'thumbnail' => 'th_YWFDxq_IMG_0622.JPG',
        ]);
        Picture::factory()->create([
            'gallery_id' => 3,
            'name' => 'QmBu3l_IMG_0623.JPG',
            'thumbnail' => 'th_QmBu3l_IMG_0623.JPG',
        ]);
        Picture::factory()->create([
            'gallery_id' => 3,
            'name' => 'gQbwbE_IMG_0628.JPG',
            'thumbnail' => 'th_gQbwbE_IMG_0628.JPG',
        ]);
        Post::factory()->create([
            'lang_id' => 1,
            'header_img' => 'Karacsonyi_2014.jpg',
            'title' => 'Adventi koncert',
            'content' => 'Adventi koncert leírása hosszan',
        ]);
        Post::factory()->create([
            'lang_id' => 1,
            'header_img' => 'Karacsonyi_2014.jpg',
            'title' => 'Videntes Stellam Kórus Hangverseny',
            'content' => 'Videntes Stellam Kórus Hangverseny leírása hosszan',
        ]);
        Post::factory()->create([
            'lang_id' => 1,
            'header_img' => 'Karacsonyi_2014.jpg',
            'title' => 'Karácsonyi Koncert',
            'content' => 'Nagy &ouml;r&ouml;mnap a mai, hiszen k&oacute;rusunk &ouml;n&aacute;ll&oacute; Kar&aacute;csonyi Koncertj&eacute;vel kedvesked&uuml;nk zeneszerető k&ouml;z&ouml;ns&eacute;g&uuml;nknek. De ezen a sz&eacute;p esem&eacute;nyen k&iacute;v&uuml;l m&eacute;g egy nagy &ouml;r&ouml;m &eacute;rt ma benn&uuml;nket. Elindult az Egri &Eacute;rseki Fi&uacute;k&oacute;rus honlapja. H&aacute;l&aacute;s sz&iacute;vvel k&ouml;sz&ouml;nj&uuml;k a honlap elk&eacute;sz&iacute;t&eacute;s&eacute;t Tajti Tibornak (egyik k&oacute;rustagunk apuk&aacute;ja) &eacute;s csapat&aacute;nak.</p>\r\n\r\n<p>Szeretettel k&ouml;sz&ouml;nt&uuml;nk Mindenkit honlapunkon!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Boldog Kar&aacute;csonyt!',
        ]);
    }
}
