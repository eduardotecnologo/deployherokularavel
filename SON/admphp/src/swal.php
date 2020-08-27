<?php
function swal($message = null, $type = null)
{
  if ($message) {
    $_SESSION['swal'][] = compact('message', 'type');
  } else {
    $flash = $_SESSION['swal'] ?? [];
    if (!count($flash)) {
      return;
    }
    foreach ($flash as $key => $message) {
      render('swal', 'ajax', $message);
      unset($_SESSION['swal'][$key]);
    }
  }
}
