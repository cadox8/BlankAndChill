<?php
  function pickWord() {
    $file = file('nouns.txt');
    $noun = $file[rand(0, count($file) - 1)];
    return $noun;
  }
?>
