# Brewbaker Café — site notes

Built on the Cilantro Café engine (PHP 8, Hostinger). Same layout: Home, Menu,
Gallery, Book a table, Privacy, plus the `/staff/` booking diary.

## Facts used (from Google Maps + Instagram, 29 Oct 2026)

- 21 South Frederick Street, Dublin 2 · pin 53.3423302,-6.2563186
- Mon–Fri 07:00–17:00, Sat 08:00–17:00, Sun closed
- 4.4★ from 416 Google reviews (update `rating` / `review_count` in config now and then)
- No phone or email on the Google listing, so the site points people to Instagram

## Where to edit

- `includes/config.php` — name, domain, address, hours, rating, booking rules, emails
- `includes/menu-data.php` — the menu (STARTER: no prices, no allergen codes yet)
- `gallery.php` — the `$photos` list
- `index.php` — home page copy, featured dishes and the six review quotes

## Still to do

1. **Domain** — confirmed as `brewbaker.ie` (config, robots.txt, sitemap and
   email links all use it). Point the domain at Hostinger and turn on SSL.
2. **Menu** — get the real menu board, add prices and allergen codes, then flip
   `$site['show_prices']` to true.
3. **Phone / email** — fill in `$site['phone']` / `$site['email']` if they want them shown.
4. **Bookings** — the form works now in "request" mode: with no database set up,
   each request is emailed to `$booking['notify_email']` (Nicholas for now) and
   the guest gets a confirmation email. To wire up the full diary, create the
   MySQL database in hPanel, run `/setup.php` (see `docs/database-setup.md`) —
   no code change needed, it switches over automatically.
5. **Mail** — `$mail['from']` must be an address on the live domain or emails go to spam.
6. Google Analytics is off (`$analytics['ga4_id']` empty) until Brewbaker has its own ID.
   Catering page is off (`$catering['enabled'] = false`).

## Tests

No PHP on this PC by default — download portable PHP 8.3 (windows.php.net, nts-vs16-x64), then:

    php db/test.php && php db/test-seo.php && php db/test-setup.php

## Photos

Source screenshots live in `Extras/` (gitignored). Site images are cropped from
them into `images/`. `badge.png` is the floral logo cropped from the Instagram profile.
