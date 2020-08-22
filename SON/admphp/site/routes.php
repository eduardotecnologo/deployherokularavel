<?php
if (resolve('/')) {
  echo 'Home';
} elseif (resolve('/constato')) {
  echo 'Página de Contato';
} else {
  echo "Página não encontrada!";
}
