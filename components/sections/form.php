
<!-- FORM SECTION --><!-- ------------------ --><!-- ------------------ --><!-- ------------------ -->
<!-- ------------ --><!-- ------------------ --><!-- ------------------ --><!-- ------------------ -->


<!-- Dynamic PHP -->

<?php

$title        = $title        ?? 'Neem contact op';
$form_action  = $form_action  ?? '';      
$form_method  = $form_method  ?? ''; 
$form_class   = $form_class   ?? 'contact-form form-row';
$submit_text  = $submit_text  ?? 'Submit';

$fields = $fields ?? [
  ['id' => 'name',    'type' => 'text',     'label' => 'Name',    'placeholder' => '', 'required' => true,  'col' => 'x-50',  'autocomplete' => 'name'],
  ['id' => 'email',   'type' => 'email',    'label' => 'E-mail',  'placeholder' => '', 'required' => true,  'col' => 'x-50',  'autocomplete' => 'email'],
  ['id' => 'message', 'type' => 'textarea', 'label' => 'Message', 'placeholder' => '', 'required' => true,  'col' => 'x-100', 'autocomplete' => 'off'],
];
?>

<section class="section contact-form">
  <div class="container">

    <h1 class="form-title title-medium" data-animate><?= htmlspecialchars($title) ?></h1>

    <form class="<?= htmlspecialchars($form_class) ?>"
          action="<?= htmlspecialchars($form_action) ?>"
          method="<?= htmlspecialchars($form_method) ?>">

      <?php foreach ($fields as $f):
        $id    = $f['id']           ?? '';
        $type  = strtolower($f['type'] ?? 'text');
        $label = $f['label']        ?? '';
        $ph    = $f['placeholder']  ?? '';
        $req   = !empty($f['required']);
        $col   = in_array($f['col'] ?? 'x-100', ['x-50','x-100'], true) ? $f['col'] : 'x-100';
        $ac    = $f['autocomplete'] ?? '';
        $hint  = $f['hint']         ?? '';
      ?>
        <div class="form-field col <?= htmlspecialchars($col) ?>">
          <?php if ($type === 'textarea'): ?>
            <textarea id="<?= htmlspecialchars($id) ?>"
                      name="<?= htmlspecialchars($id) ?>"
                      class="input-text js-input"
                      placeholder="<?= htmlspecialchars($ph) ?>"
                      <?= $req ? 'required' : '' ?>
                      <?= $ac !== '' ? 'autocomplete="'.htmlspecialchars($ac).'"' : '' ?>></textarea>
          <?php else: ?>
            <input id="<?= htmlspecialchars($id) ?>"
                   name="<?= htmlspecialchars($id) ?>"
                   class="input-text js-input"
                   type="<?= htmlspecialchars($type) ?>"
                   placeholder="<?= htmlspecialchars($ph) ?>"
                   <?= $req ? 'required' : '' ?>
                   <?= $ac !== '' ? 'autocomplete="'.htmlspecialchars($ac).'"' : '' ?>>
          <?php endif; ?>

          <label class="label" for="<?= htmlspecialchars($id) ?>"><?= htmlspecialchars($label) ?></label>

          <?php if ($hint !== ''): ?>
            <small class="hint"><?= htmlspecialchars($hint) ?></small>
          <?php endif; ?>
        </div>
      <?php endforeach; ?>

      <div class="form-field col x-100 text-center">
        <button class="btn btn-primary" type="submit"><?= htmlspecialchars($submit_text) ?></button>
      </div>

    </form>

  </div>
</section>



<!-- Static HTML -->

<!-- <section class="section contact-form">
    <div class="container">

        <h1 class="form-title title-medium">Neem contact op</h1>

        <form class="contact-form form-row">

            <div class="form-field col x-50">
                <input id="name" class="input-text js-input" type="text" required>
                <label class="label" for="name">Name</label>
            </div>

            <div class="form-field col x-50">
                <input id="email" class="input-text js-input" type="email" required>
                <label class="label" for="email">E-mail</label>
            </div>

            <div class="form-field col x-100">
                <input id="message" class="input-text js-input" type="text" required>
                <label class="label" for="message">Message</label>
            </div>

            <div class="form-field col x-100 text-center">
                <input class="btn btn-primary" type="submit" value="Submit">
            </div>

        </form>
    
    </div>
</section> -->
