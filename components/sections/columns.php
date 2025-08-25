
<!-- COLUMNS SECTION --><!-- ------------------ --><!-- ------------------ --><!-- ------------------ -->
<!-- --------------- --><!-- ------------------ --><!-- ------------------ --><!-- ------------------ -->


<!-- Dynamic PHP -->

<?php

$about_title   = $about_title   ?? 'over ons';
$about_text    = $about_text    ?? 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non eros leo. Duis luctus eget ligula eget interdum. Suspendisse vitae tortor interdum.';

$contact_title = $contact_title ?? 'contact & info';

$contact_items = $contact_items ?? [
  ['text' => 'Langs de werf 6'],
  ['text' => '1185 XT Amstelveen'],
  ['text' => 'Vergunningnummer: Z23-028565'],
  ['text' => '+31 (0)20–7520594', 'href' => 'tel:+31207520594',      'li_class' => 'primary-color', 'a_class' => 'footer-link'],
  ['text' => 'info@studio-monaco.nl', 'href' => 'mailto:info@studio-monaco.nl', 'li_class' => 'primary-color', 'a_class' => 'footer-link'],
];
?>

<section class="section">
  <div class="container flexbox text-center">

    <div class="column wide text-left">
      <h1 class="title-medium primary-font"><?= htmlspecialchars($about_title) ?></h1>
      <p class="text-medium secondary-font">
        <?= nl2br(htmlspecialchars($about_text)) ?>
      </p>
    </div>

    <div class="column wide text-left">
      <h1 class="title-medium primary-font"><?= htmlspecialchars($contact_title) ?></h1>
      <div class="super-spacial-horizontal-wrapper">
        <ul class="text-medium secondary-font vertical-wrapper">
          <?php foreach ($contact_items as $item):
            $text    = $item['text']     ?? '';
            $href    = $item['href']     ?? '';
            $liClass = $item['li_class'] ?? '';
            $aClass  = $item['a_class']  ?? 'footer-link';
          ?>
            <li class="<?= htmlspecialchars($liClass) ?>">
              <?php if ($href !== ''): ?>
                <a class="<?= htmlspecialchars($aClass) ?>" href="<?= htmlspecialchars($href) ?>">
                  <?= htmlspecialchars($text) ?>
                </a>
              <?php else: ?>
                <?= htmlspecialchars($text) ?>
              <?php endif; ?>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>

  </div>
</section>



<!-- Static HTML -->

<!-- <section class="section">
    <div class="container flexbox text-center">

        <div class="column wide text-left">
            <h1 class="title-medium tertiary-font">over ons</h1>
            <p class="text-medium secondary-font">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non eros leo. Duis luctus eget ligula eget interdum. Suspendisse vitae tortor interdum.
            </p>
        </div>

        <div class="column wide text-left">
            <h1 class="title-medium tertiary-font">contact & info</h1>
            <div class="super-spacial-horizontal-wrapper">
                <ul class="text-medium secondary-font vertical-wrapper">
                    <li>Langs de werf 6</li>
                    <li>1185 XT Amstelveen</li>
                    <li>Vergunningnummer: Z23-028565</li>
                    <li class="primary-color"><a class="footer-link" href="tel:+31 (0)20–7520594">+31 (0)20–7520594</a></li>
                    <li class="primary-color"><a class="footer-link" href="mailto:info@studio-monaco.nl">info@studio-monaco.nl</a></li>
                </ul>
            </div>
        </div>

    </div>
</section> -->