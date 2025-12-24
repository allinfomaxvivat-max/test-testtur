<?php
require 'php/render.php';
$styles = [
  'styles/css/pages/deposits.css',
];
render('pages/deposits.php', [
  'title' => 'TURBO | Покупки',
  'styles' => $styles,
]);
