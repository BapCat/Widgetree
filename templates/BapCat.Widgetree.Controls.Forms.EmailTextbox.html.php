<input
  id="<?= $control->name ?>"
  name="<?= $control->name ?>"
  type="email"
  class="text"
  <?php if($control->hasPlaceholder()): ?>
    placeholder="<?= $control->placeholder ?>"
  <?php endif; ?>
  <?php if($control->hasText()): ?>
    value="<?= $control->text ?>"
  <?php endif; ?>
  <?php if($control->required): ?>
    required
  <?php endif; ?>
/>
