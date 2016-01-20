<form id="<?= $control->id ?>" class="aui">
  <?php foreach($control->groups as $child): ?>
    <?= $renderer->render($child) ?>
  <?php endforeach; ?>
</form>
