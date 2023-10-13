<?php
use App\Models\Post;
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('🏚️', route('index'));
});

Breadcrumbs::for('sejarah', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Sejarah', route('sejarah'));
});

Breadcrumbs::for('about', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Tentang Kami', route('about'));
});

Breadcrumbs::for('visimisi', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Visi Misi', route('visimisi'));
});

Breadcrumbs::for('wilayah', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Wilayah', route('wilayah'));
});

Breadcrumbs::for('struktur', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Struktur Organisasi', route('struktur'));
});

Breadcrumbs::for('perangkat', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Perangkat Kelurahan', route('perangkat'));
});

Breadcrumbs::for('lembaga', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Lembaga Kelurahan', route('lembaga'));
});

Breadcrumbs::for('berita', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Berita', route('berita'));
});

Breadcrumbs::for('artikel', function (BreadcrumbTrail $trail, POST $post) {
    $trail->parent('berita');
    $trail->push($post->title, route('artikel', $post));
});

Breadcrumbs::for('agenda', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Agenda', route('agenda'));
});

Breadcrumbs::for('wisata', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Wisata', route('wisata'));
});
