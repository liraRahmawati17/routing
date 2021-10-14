<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// route basic
Route::get('about', function () {
    return view('tentang');
});

route::get('profile', function (){
    $nama = "abdul";
    return view('profile', compact ('nama'));

});

Route::get('biodata', function (){
    $nama = "lira";
    $umur = "17 tahun";
    $alamat = "kp. ciodeng";
    $sekolah = "smk assalaam";
    $kelas = "12 rpl 1";
    $hobi = "makan";
    return view('biodata', compact ('nama','umur','alamat','sekolah','kelas','hobi'));
});

//route parameter
route::get('post/{id?}', function($a){
    return view('post', ['post' => $a]);
});

//route parameter
route::get('bio/{nama}/{umur}/{alamat}', function($a, $b, $c){
   return view('bio', compact ( 'a', 'b', 'c'));
});

route::get('blog', function(){
    $posts = [
        ['id' =>1, 'title'=>'lorem ipsum 1', 'content'=>'conten pertama'],
        ['id' =>2, 'title'=>'lorem ipsum 2', 'content'=>'conten kedua'],
        ['id' =>3, 'title'=>'lorem ipsum 3', 'content'=>'conten ketiga'],
    ];
    //dd ($sports);
    return view('blog', compact('posts'));
});

//route optional parameter
route::get('page/{page?}', function ($hal =1){
    return "halaman <b>$hal</b>";
});

route::get('data', function(){
    $data1 = [
        ['id' => 1,
        'name' => 'lira',
        'username' => 'lira_rahma',
        'email' => 'lirarahma@gmail.com',
        'alamat' => 'bandung',
        'mapel' => [
            'mapel1' => 'mtk',
            'mapel2' => 'ipa',
            'mapel3' => 'ips',]
        ]
        ];
        return view('data', compact('data1'));
});

//route optional parameter
route::get('pesan/{makanan?}/{minuman?}/{cemilan?}', function ( $a = null, $b = null, $c= null){
    if ($a == null && $b = null && $c = null ){
        $pesan = "anda tidak pesan, silahkan pulang";
    }
    if ($a != null){
        $pesan = "anda memesan"
        . "<br> makan : <b>$a</b>";
    }
    if ($a != null && $b != null){
        $pesan = "anda memesan"
        . "<br> makan : <b>$a</b>"
        . "<br> minuum <b>$b</b>";
    }
    if ($a != null && $b != null && $c != null){
        $pesan = "anda memesan"
        . "<br> makan : <b>$a</b>"
        . "<br> minum : <b>$b</b>"
        . "<br> cemilan : <b>$c</b>";
    }
    return $pesan ;
});


