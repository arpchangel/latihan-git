<?php
$slides = require __DIR__ . '/slides.php';
$total  = count($slides);
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= htmlspecialchars($slides[0]['title']) ?></title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div class="progress"><div class="progress-bar" id="progressBar"></div></div>

  <main id="deck">
    <?php foreach ($slides as $i => $s): ?>
      <section class="slide <?= $i === 0 ? 'active' : '' ?>" data-index="<?= $i ?>">
        <div class="slide-inner">
          <?php if (($s['type'] ?? 'content') === 'cover'): ?>
            <h1><?= htmlspecialchars($s['title']) ?></h1>
            <p class="subtitle"><?= htmlspecialchars($s['subtitle'] ?? '') ?></p>
            <div class="meta"><?= $s['meta'] ?? '' ?></div>
          <?php else: ?>
            <h2><?= htmlspecialchars($s['title']) ?></h2>
            <div class="content"><?= $s['content'] ?></div>
          <?php endif; ?>
        </div>
        <footer class="slide-footer">
          <span><?= htmlspecialchars($s['title']) ?></span>
          <span><?= $i + 1 ?> / <?= $total ?></span>
        </footer>
      </section>
    <?php endforeach; ?>
  </main>

  <nav class="controls">
    <button id="prev" title="Sebelumnya (←)">‹</button>
    <span id="counter">1 / <?= $total ?></span>
    <button id="next" title="Berikutnya (→)">›</button>
    <button id="fs" title="Fullscreen (F)">⛶</button>
  </nav>

  <script src="script.js"></script>
</body>
</html>