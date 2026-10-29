<?php
$pageTitle       = 'Menu | Brewbaker Café, South Frederick Street, Dublin 2';
$pageDescription = 'The Brewbaker Café menu: scones baked every morning, full Irish breakfast, pancakes, avocado toast, porridge, soup and sandwiches, and Lavazza coffee.';
$pageKeywords    = 'scones Dublin, breakfast menu Dublin 2, brunch Dublin city centre, café menu near Trinity College';
$activePage      = 'menu';

require_once __DIR__ . '/includes/menu-data.php';
require_once __DIR__ . '/includes/seo.php';
$pageSchema = [
    seo_menu_node($menu),
    seo_breadcrumbs(['Menu' => 'menu.php']),
];

require __DIR__ . '/includes/header.php';
?>

<section class="page-intro">
    <div class="container">
        <h1>Menu</h1>
        <?php $hasAllergens = (bool) array_filter(array_merge(...array_column($menu, 'items')), fn($i) => !empty($i['allergens'])); ?>
        <?php if ($hasAllergens): ?>
            <p>Allergen codes are listed next to each dish. The full key is at the bottom of the page. Ask a member of staff if you have any dietary needs.</p>
        <?php else: ?>
            <p>Everything from the oven is baked here every morning, so the counter changes daily. Ask a member of staff about allergens or any dietary needs.</p>
        <?php endif; ?>
        <nav class="menu-jump" aria-label="Menu sections">
            <?php foreach ($menu as $section): ?>
                <a href="#<?= e($section['id']) ?>"><?= e($section['title']) ?></a>
            <?php endforeach; ?>
        </nav>
    </div>
</section>

<div class="container menu-layout">
    <?php foreach ($menu as $section): ?>
        <section class="menu-section" id="<?= e($section['id']) ?>" aria-labelledby="<?= e($section['id']) ?>-title">
            <h2 id="<?= e($section['id']) ?>-title">
                <?= e($section['title']) ?>
                <?php if ($section['note']): ?><span class="menu-note">(<?= e($section['note']) ?>)</span><?php endif; ?>
            </h2>
            <ul class="menu-items">
                <?php foreach ($section['items'] as $item): ?>
                    <li class="menu-item">
                        <div class="menu-item-top">
                            <h3>
                                <?= e($item['name']) ?>
                                <?php if (!empty($item['allergens'])): ?>
                                    <span class="allergens">
                                        <?php foreach ($item['allergens'] as $code): ?>
                                            <abbr title="<?= e($allergenKey[$code] ?? $code) ?>"><?= e($code) ?></abbr>
                                        <?php endforeach; ?>
                                    </span>
                                <?php endif; ?>
                            </h3>
                            <?php if (show_prices()): ?>
                                <?php if ($item['price'] !== ''): ?><span class="price">€<?= e($item['price']) ?></span><?php endif; ?>
                            <?php endif; ?>
                        </div>
                        <?php if ($item['desc']): ?>
                            <p class="menu-desc"><?= e($item['desc']) ?></p>
                        <?php endif; ?>
                        <?php foreach ($item['extra'] as $extra): ?>
                            <p class="menu-extra"><?= e(show_prices() ? $extra : strip_prices($extra)) ?></p>
                        <?php endforeach; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </section>
    <?php endforeach; ?>

    <?php if ($hasAllergens): ?>
    <section class="allergen-key" aria-labelledby="allergen-title">
        <h2 id="allergen-title">Allergens</h2>
        <dl>
            <?php foreach ($allergenKey as $code => $label): ?>
                <div><dt><?= e($code) ?></dt><dd><?= e($label) ?></dd></div>
            <?php endforeach; ?>
        </dl>
    </section>
    <?php endif; ?>
</div>

<section class="section cta-band">
    <div class="container cta-inner">
        <h2>Saving you a seat?</h2>
        <a class="btn btn-light" href="booking.php">Book a table</a>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
