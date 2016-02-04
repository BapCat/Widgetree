<fieldset>
  <?php foreach($control->fields as $field): ?>
    <div class="field-group">
      <?= $renderer->renderControl($field['label']) ?>
      <?= $renderer->renderControl($field['field']) ?>
    </div>
  <?php endforeach; ?>
</fieldset>
