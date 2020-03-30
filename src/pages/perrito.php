<?php $name = $request->get('breed', 'common') ?>

Hello, I'm a <?= htmlspecialchars($name, ENT_QUOTES, 'UTF-8') ?> dog.

