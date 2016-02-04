<form id="<?= $control->id ?>" class="aui">
  <?php foreach($control->groups as $child): ?>
    <?= $renderer->renderControl($child) ?>
  <?php endforeach; ?>
</form>
