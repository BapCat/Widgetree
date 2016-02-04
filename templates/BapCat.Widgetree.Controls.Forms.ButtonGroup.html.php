<div class="buttons-container">
  <div class="buttons">
    <?php foreach($control->children as $child): ?>
      <?= $renderer->renderControl($child) ?>
    <?php endforeach; ?>
  </div>
</div>
