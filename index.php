<?php
require 'php/render.php';
$styles = [
    'styles/css/pages/home.css',
];
render('pages/home.php', [
  'title' => 'TURBO | Главная страница',
  'styles' => $styles,
]);
