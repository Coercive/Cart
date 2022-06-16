Coercive Shop Cart
==================

Cart / Basket shopping handler 

Get
---
```
composer require coercive/cart
```

Usage
-----
```php

<?php
use Coercive\Shop\Cart\Cart;
use Coercive\Shop\Cart\Item;
use Coercive\Shop\Cart\Store\Session;

include __DIR__ . "/dist/Store/Session.php";

include __DIR__ . "/dist/Ext/Entity.php";
include __DIR__ . "/dist/Ext/Collection.php";
include __DIR__ . "/dist/Ext/Address.php";

include __DIR__ . "/dist/Cart.php";
include __DIR__ . "/dist/User.php";
include __DIR__ . "/dist/Item.php";
include __DIR__ . "/dist/Shipping.php";
include __DIR__ . "/dist/Billing.php";
include __DIR__ . "/dist/Promo.php";

$cart = new Cart;

$item = (new Item)
    ->setTitle('Example 1')
    ->setPrice(10)
    ->setQuantity(1)
    ->setRef(666);
$cart->Items()->addItem($item, '#test123');

$item->Promo()
    ->setToken('#123456789ABCD')
    ->setPriceCut(3);

$item = (new Item)
    ->setTitle('Tutu')
    ->setPrice('\MyClass\For\Calculate\PriceItem::price')
    ->setQuantity(3)
    ->setRef(777);
$cart->Items()->addItem($item);

$cart->User()
    ->setRef(42)
    ->setLanguage('EN')
    ->setFirstName('Example FName')
    ->setLastName('Example LName')
    ->setEmail('example@coercive.fr');

$cart->Shipping()
    ->setTitle('Example Shipping Title')
    ->setFirstName('Example FName')
    ->setLastName('Example LName')
    ->setAddress('Example Address')
    ->setZip('#12345')
    ->setTown('Example Town')
    ->setCountry('Example Country')
    ->setIsoCountry('EN');

$cart->Billing()
    ->setTitle('Example Billing Title')
    ->setFirstName('Example FName')
    ->setLastName('Example LName')
    ->setAddress('Example Address')
    ->setZip('#12345')
    ->setTown('Example Town')
    ->setCountry('Example Country')
    ->setIsoCountry('FR');


// -------------------------- ?>


<h1># EXAMPLE START #</h1>
<br /><br />
<p>User : <?= $cart->User()->getEmail() ?></p>
<p>Shipping : <?= $cart->Shipping()->getTitle() ?></p>
<p>Billing : <?= $cart->Billing()->getTitle() ?></p>
<br /><?php
foreach ($cart->Items()->keys() as $mId):
    $item = $cart->Items()->getItem($mId); ?>
    <p>----------------------------------------</p>
    <p>Title : <?= $item->getTitle() ?></p>
    <p>Price : <?= $item->getPrice() ?></p>
    <p>Quantity : <?= $item->getQuantity() ?></p>
    <p>Ref : <?= $item->getRef() ?></p><?php

    if($item->Promo()->isModified()): ?>
        <p>Token : <?= $item->Promo()->getToken() ?></p>
        <p>Price cut : <?= $item->Promo()->getPriceCut() ?></p>
        <p>New item price : <?= $item->Promo()->calc($item->getPrice()) ?></p><?php
    endif;

endforeach ?>
<br /><br />
<h1># EXAMPLE END #</h1><?php

# Storage in session
$session = new Session;
$session->store($cart);

# Retrieve from session
$cart = $session->retrieve();

```
