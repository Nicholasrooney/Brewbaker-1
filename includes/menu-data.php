<?php
/*
 * Menu items and prices. To change a price, edit the 'price' value.
 * Allergen codes go in 'allergens' as an array, e.g. ['G', 'D'].
 *
 * STARTER MENU. Built only from what Brewbaker's own photos and Google reviews
 * show they serve. Prices are blank and hidden ($site['show_prices'] = false)
 * and no allergen codes are filled in yet — get the real menu board from the
 * café and fill both in from it. Never guess an allergen code.
 */

$allergenKey = [
    'G'  => 'Gluten (wheat/barley/oats)',
    'D'  => 'Dairy (milk/cheese/cream/butter)',
    'E'  => 'Eggs',
    'F'  => 'Fish',
    'N'  => 'Nuts',
    'Se' => 'Sesame',
    'So' => 'Soy',
    'S'  => 'Sulphites',
];

$menu = [
    [
        'id'    => 'scones',
        'title' => 'Scones & bakes',
        'note'  => 'baked here every morning',
        'items' => [
            [
                'name' => 'Raspberry & white chocolate scone', 'price' => '', 'allergens' => [],
                'desc' => 'The one people fly home talking about. Served warm with butter, jam and cream.',
                'extra' => [],
            ],
            [
                'name' => 'Blueberry scone', 'price' => '', 'allergens' => [],
                'desc' => 'Packed with blueberries under a sweet crumble top.',
                'extra' => [],
            ],
            [
                'name' => 'Apple & ginger scone', 'price' => '', 'allergens' => [],
                'desc' => 'Soft, spiced and lovely with a pot of tea.',
                'extra' => [],
            ],
            [
                'name' => 'Scone of the day', 'price' => '', 'allergens' => [],
                'desc' => 'Ask what came out of the oven this morning.',
                'extra' => [],
            ],
            [
                'name' => 'Apple & rhubarb tart', 'price' => '', 'allergens' => [],
                'desc' => 'Homemade, by the slice.',
                'extra' => [],
            ],
            [
                'name' => 'Traybakes & focaccia', 'price' => '', 'allergens' => [],
                'desc' => 'A changing counter of slices, bars and fresh focaccia.',
                'extra' => [],
            ],
        ],
    ],
    [
        'id'    => 'breakfast',
        'title' => 'Breakfast & brunch',
        'note'  => '',
        'items' => [
            [
                'name' => 'Full Irish breakfast', 'price' => '', 'allergens' => [],
                'desc' => 'Sausages, bacon, a fried egg, black and white pudding and grilled tomato, with toast.',
                'extra' => [],
            ],
            [
                'name' => 'Pancakes with bacon & blueberries', 'price' => '', 'allergens' => [],
                'desc' => 'A stack of fluffy pancakes with crispy bacon, fresh blueberries and maple syrup.',
                'extra' => [],
            ],
            [
                'name' => 'Strawberry & pistachio pancakes', 'price' => '', 'allergens' => [],
                'desc' => 'Pancakes with fresh strawberries, yoghurt, pistachios, maple syrup and edible flowers.',
                'extra' => [],
            ],
            [
                'name' => 'Poached eggs on avocado toast', 'price' => '', 'allergens' => [],
                'desc' => 'Smashed avocado on toasted sourdough, two poached eggs, chilli flakes and fresh herbs.',
                'extra' => [],
            ],
            [
                'name' => 'Scrambled eggs & bacon', 'price' => '', 'allergens' => [],
                'desc' => 'Soft scrambled eggs with bacon, rocket and toast.',
                'extra' => [],
            ],
            [
                'name' => 'Porridge', 'price' => '', 'allergens' => [],
                'desc' => 'Creamy porridge topped with berries, granola, nuts and honey.',
                'extra' => [],
            ],
            [
                'name' => 'Granola bowl', 'price' => '', 'allergens' => [],
                'desc' => 'Crunchy granola with strawberries, blueberries and yoghurt.',
                'extra' => [],
            ],
        ],
    ],
    [
        'id'    => 'lunch',
        'title' => 'Lunch',
        'note'  => '',
        'items' => [
            [
                'name' => 'Soup of the day', 'price' => '', 'allergens' => [],
                'desc' => 'Homemade, with fresh bread.',
                'extra' => [],
            ],
            [
                'name' => 'Sandwiches', 'price' => '', 'allergens' => [],
                'desc' => 'Big, generous sandwiches made to order.',
                'extra' => ['Ask about our soup and sandwich deal'],
            ],
        ],
    ],
    [
        'id'    => 'coffee',
        'title' => 'Coffee, tea & hot drinks',
        'note'  => 'Lavazza coffee',
        'items' => [
            ['name' => 'Espresso',       'price' => '', 'allergens' => [], 'desc' => '', 'extra' => []],
            ['name' => 'Americano',      'price' => '', 'allergens' => [], 'desc' => '', 'extra' => []],
            ['name' => 'Flat white',     'price' => '', 'allergens' => [], 'desc' => '', 'extra' => []],
            ['name' => 'Cappuccino',     'price' => '', 'allergens' => [], 'desc' => '', 'extra' => []],
            ['name' => 'Latte',          'price' => '', 'allergens' => [], 'desc' => '', 'extra' => []],
            ['name' => 'Mocha',          'price' => '', 'allergens' => [], 'desc' => '', 'extra' => []],
            ['name' => 'Hot chocolate',  'price' => '', 'allergens' => [], 'desc' => '', 'extra' => []],
            ['name' => 'Pot of tea',     'price' => '', 'allergens' => [], 'desc' => 'Breakfast tea or a herbal blend, blackcurrant included.', 'extra' => []],
        ],
    ],
];
