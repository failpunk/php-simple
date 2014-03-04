<?php

function pick(array $arr, $whitelist) {
  $extracted = [];

  $whitelist = is_array($whitelist) ? $whitelist : [$whitelist];

  foreach($arr as $key => $value) {
    if(in_array($key, $whitelist)) {
      $extracted[$key] = $value;
    }
  }

  return $extracted;
}