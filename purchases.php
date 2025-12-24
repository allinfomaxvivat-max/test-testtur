<?php
require 'php/render.php';
$styles = [
  'styles/css/pages/purchases.css',
];
render('pages/purchases.php', [
  'title' => 'TURBO | Покупки',
  'styles' => $styles,
]);
