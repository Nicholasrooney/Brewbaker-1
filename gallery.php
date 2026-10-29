<?php
$pageTitle       = 'Gallery | Brewbaker Café, South Frederick Street, Dublin 2';
$pageDescription = 'Photos from Brewbaker Café in Dublin 2: fresh scones, full Irish breakfasts, pancakes, latte art and the shopfront on South Frederick Street.';
$pageKeywords    = 'Brewbaker Café photos, scones Dublin, breakfast Dublin 2, café near Trinity College';
$activePage      = 'gallery';

require_once __DIR__ . '/includes/seo.php';
$pageSchema = [seo_breadcrumbs(['Gallery' => 'gallery.php'])];

require __DIR__ . '/includes/header.php';

// To add a photo: upload it to /images and add a line here.
$photos = [
    ['scones.jpg',                     'Raspberry scones, fresh out of the oven'],
    ['full-irish-and-coffees.jpg',     'Full Irish breakfast with scrambled eggs, toast and cappuccinos'],
    ['latte-art.jpg',                  'Latte art'],
    ['pancake-stack.jpg',              'Pancakes with bacon, blueberries and maple syrup'],
    ['storefront.jpg',                 'The shopfront on South Frederick Street'],
    ['scone-jam-cream.jpg',            'Scone with jam and cream'],
    ['brunch-table.jpg',               'Brunch for the table'],
    ['strawberry-pancake.jpg',         'Strawberry, yoghurt and pistachio pancake'],
    ['coffee-and-bakes.jpg',           'Cappuccino over the bakery counter'],
    ['avocado-eggs.jpg',               'Poached eggs on avocado toast'],
    ['granola-bowl.jpg',               'Granola bowl with strawberries and blueberries'],
    ['pancakes-bacon-blueberries.jpg', 'Pancakes with bacon and blueberries'],
    ['cappuccino.jpg',                 'Cappuccino with chocolate dusting'],
    ['porridge.jpg',                   'Porridge with berries, granola and honey'],
    ['pancakes-maple.jpg',             'Pancakes, bacon and blueberries with icing sugar'],
    ['storefront-awning.jpg',          'Brewbaker, under the red awning'],
];
?>

<section class="page-intro">
    <div class="container">
        <h1>Gallery</h1>
        <p>More on <a class="text-link" href="<?= e($site['instagram']) ?>" target="_blank" rel="noopener">Instagram</a>.</p>
    </div>
</section>

<div class="container">
    <ul class="gallery">
        <?php foreach ($photos as $i => [$file, $caption]): ?>
            <li>
                <button type="button" class="gallery-item" data-index="<?= $i ?>"
                        data-src="images/<?= e($file) ?>" data-caption="<?= e($caption) ?>"
                        aria-label="Open photo: <?= e($caption) ?>">
                    <img src="images/<?= e($file) ?>" alt="<?= e($caption) ?>" loading="lazy">
                </button>
            </li>
        <?php endforeach; ?>
    </ul>
</div>

<dialog class="lightbox" aria-label="Photo viewer">
    <figure>
        <img src="" alt="">
        <figcaption></figcaption>
    </figure>
    <button type="button" class="lb-btn lb-prev" aria-label="Previous photo">&#8249;</button>
    <button type="button" class="lb-btn lb-next" aria-label="Next photo">&#8250;</button>
    <button type="button" class="lb-btn lb-close" aria-label="Close">&times;</button>
</dialog>

<?php require __DIR__ . '/includes/footer.php'; ?>
