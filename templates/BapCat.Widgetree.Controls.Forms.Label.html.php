<label for="<?= $control->for->name ?>">
  <?= $control->text ?>
  <?php if($control->for->required): ?>
    <span class="aui-icon icon-required">(required)</span>
  <?php endif; ?>
</label>
