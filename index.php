<?php
$pageTitle       = 'Brewbaker Café | Best Scones in Dublin · South Frederick Street, Dublin 2';
$pageDescription = 'Brewbaker Café on South Frederick Street, Dublin 2, beside Trinity College. Scones baked every morning, full Irish breakfasts, pancakes, homemade soup and sandwiches, and Lavazza coffee.';
$pageKeywords    = 'best scones Dublin, café Dublin 2, breakfast Dublin city centre, brunch near Trinity College, coffee South Frederick Street, Brewbaker Café';
$activePage      = 'home';

// Answers here are all true of the café — everything comes from the Google
// listing, the café's own photos or its reviews. A wrong answer in a rich
// result is worse than no rich result at all.
require_once __DIR__ . '/includes/seo.php';
$pageSchema = [
    seo_faq([
        'Where is Brewbaker Café?' =>
            'Brewbaker Café is at 21 South Frederick Street, Dublin 2, a couple of minutes from Trinity College, Nassau Street and Grafton Street.',
        'What are the opening hours?' =>
            'Monday to Friday 7:00 to 17:00, Saturday 8:00 to 17:00. Closed on Sundays.',
        'Do you take bookings?' =>
            'Yes, you can request a table through the website. Walk-ins are always welcome too.',
        'Do you serve breakfast?' =>
            'Yes. Full Irish breakfasts, pancakes, poached eggs on avocado toast, porridge and granola bowls, from 7:00 on weekdays.',
        'What are Brewbaker scones like?' =>
            'They are baked here every morning. The raspberry and white chocolate scone is the favourite, alongside blueberry, apple and ginger, and a scone of the day.',
        'Can you sit outside?' =>
            'Yes, there are tables out front on South Frederick Street when the weather allows, as well as tables and a window bench inside.',
    ]),
];
require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/directions.php';

$featured = [
    ['img' => 'scones.jpg',           'name' => 'Fresh scones',             'price' => '', 'alt' => 'A pile of golden raspberry scones with a sugar crumble top'],
    ['img' => 'pancake-stack.jpg',    'name' => 'Pancakes & blueberries',   'price' => '', 'alt' => 'A stack of pancakes with bacon, blueberries, rose petals and maple syrup'],
    ['img' => 'coffee-and-bakes.jpg', 'name' => 'Lavazza coffee',           'price' => '', 'alt' => 'A cappuccino with latte art held over a counter of scones and traybakes'],
];

// Real Google reviews, quoted as written (trimmed for length).
$reviews = [
    ['name' => 'Flora T.',  'text' => 'There\'s a sign in front of the café that says "best scones in Dublin," which you would think is an exaggeration. It\'s not.'],
    ['name' => 'Rylee H.',  'text' => 'My aunt and I visited from the States & have been talking about their white chocolate raspberry scone since we got back.'],
    ['name' => 'Gerry C.',  'text' => 'The coffee is top quality and the staff are extremely welcoming and friendly. Well worth a visit!'],
    ['name' => 'Celina T.', 'text' => 'I can\'t decide if the service or the scones (best in the world btw) are better.'],
    ['name' => 'Sofia R.',  'text' => 'The perfect spot for food and a nice catch up with friends. The terrace is brilliant when the sun is out!'],
    ['name' => 'Doreen',    'text' => 'This was the best scone during our weeks round trip through Ireland! The coffee was super tasty and the service warmhearted.'],
];

$strip = [
    ['full-irish-and-coffees.jpg', 'A full Irish breakfast, scrambled eggs, toast and two cappuccinos'],
    ['avocado-eggs.jpg',           'Poached eggs on avocado toast with chilli flakes'],
    ['strawberry-pancake.jpg',     'Pancake with strawberries, yoghurt, pistachios and edible flowers'],
    ['porridge.jpg',               'Porridge with berries, granola, cashews and honey'],
];
?>

<section class="hero hero-photo-bleed">
    <div class="hero-photo">
        <img src="images/storefront.jpg" alt="The charcoal Brewbaker Café shopfront on South Frederick Street, with red lettering and tables outside" width="1512" height="932" fetchpriority="high">
    </div>
    <div class="hero-text">
        <p class="hero-eyebrow">South Frederick Street · Dublin 2</p>
        <h1>Best scones in Dublin<span class="hero-h1-aside">(and probably the world)</span></h1>
        <p class="hero-lede">Baked every morning, a minute from Trinity College. Full Irish breakfasts, pancakes, homemade soup and sandwiches, and proper Lavazza coffee.</p>
        <div class="hero-actions">
            <a class="btn btn-accent" href="menu.php">See the menu</a>
            <a class="btn btn-outline-light" href="booking.php">Book a table</a>
        </div>
        <?php if (!empty($site['rating'])): ?>
            <a class="rating-chip" href="<?= e($site['maps_url']) ?>" target="_blank" rel="noopener">
                <span class="rating-stars" aria-hidden="true">★★★★★</span>
                <span><strong><?= e($site['rating']) ?></strong> from <?= (int) $site['review_count'] ?> Google reviews</span>
            </a>
        <?php endif; ?>
    </div>
</section>

<section class="section featured">
    <div class="container">
        <div class="section-head">
            <h2>From the counter</h2>
            <a class="text-link" href="menu.php">Full menu</a>
        </div>
        <ul class="dish-row">
            <?php foreach ($featured as $dish): ?>
                <li class="dish">
                    <a href="menu.php">
                        <img src="images/<?= e($dish['img']) ?>" alt="<?= e($dish['alt']) ?>" loading="lazy">
                        <span class="dish-name"><?= e($dish['name']) ?></span>
                        <?php if (show_prices() && $dish['price'] !== ''): ?>
                            <span class="dish-price">€<?= e($dish['price']) ?></span>
                        <?php endif; ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>

<section class="section inside">
    <div class="container inside-grid">
        <img class="inside-photo" src="images/scone-jam-cream.jpg" alt="A warm scone split open with strawberry jam and whipped cream" width="620" height="600" loading="lazy">
        <div class="inside-text">
            <p class="script-kicker">baked fresh every morning</p>
            <h2>The scones people fly home talking about</h2>
            <p>Raspberry and white chocolate. Blueberry, packed to the edges. Apple and ginger. Every batch comes out of our oven first thing, under a sweet crumble top, and is served warm with butter, jam and cream.</p>
            <p>Grab one on the way to work, or sit in with a pot of tea and an apple and rhubarb tart for afters.</p>
            <a class="btn btn-accent" href="menu.php#scones">See the bakes</a>
        </div>
    </div>
</section>

<section class="section reviews" aria-labelledby="reviews-title">
    <div class="container">
        <div class="section-head">
            <h2 id="reviews-title">What people say</h2>
            <?php if (!empty($site['rating'])): ?>
                <a class="text-link" href="<?= e($site['maps_url']) ?>" target="_blank" rel="noopener"><?= e($site['rating']) ?> ★ on Google</a>
            <?php endif; ?>
        </div>
        <ul class="review-grid">
            <?php foreach ($reviews as $r): ?>
                <li class="review">
                    <span class="review-stars" aria-label="5 out of 5 stars">★★★★★</span>
                    <blockquote><p><?= e($r['text']) ?></p></blockquote>
                    <p class="review-name"><?= e($r['name']) ?> · Google review</p>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>

<section class="section breakfast">
    <div class="container">
        <div class="section-head">
            <h2>Breakfast from 7am</h2>
            <a class="text-link" href="gallery.php">More photos</a>
        </div>
        <p class="section-lede">A proper full Irish, fluffy pancakes, poached eggs on avocado toast, and porridge loaded with fruit. Then soup and big sandwiches at lunch.</p>
        <ul class="photo-strip">
            <?php foreach ($strip as [$file, $alt]): ?>
                <li><a href="gallery.php"><img src="images/<?= e($file) ?>" alt="<?= e($alt) ?>" loading="lazy"></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>

<section class="section visit">
    <div class="container visit-grid">
        <div>
            <h2>Visit us</h2>
            <?php render_directions_actions($site); ?>
            <?php if (!empty($site['hours'])): ?>
                <dl class="hours hours-large">
                    <?php foreach ($site['hours'] as $days => $time): ?>
                        <div><dt><?= e($days) ?></dt><dd><?= e($time) ?></dd></div>
                    <?php endforeach; ?>
                </dl>
            <?php endif; ?>
            <p>Two minutes from Trinity College, Nassau Street and the bottom of Grafton Street. See what's fresh on <a class="text-link" href="<?= e($site['instagram']) ?>" target="_blank" rel="noopener">Instagram</a>.</p>
        </div>
        <a class="visit-photo" href="gallery.php">
            <img src="images/brunch-table.jpg" alt="A table full of brunch plates, pots of tea and fresh orange juice" loading="lazy">
            <span>View the gallery</span>
        </a>
    </div>
</section>

<?php render_map_section($site); ?>

<?php require __DIR__ . '/includes/footer.php'; ?>
