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

$oCart = new Cart;

$oItem = (new Item)
    ->setTitle('Example 1')
    ->setPrice(10)
    ->setQuantity(1)
    ->setRef(666);
$oCart->Items()->addItem($oItem, '#test123');

$oItem->Promo()
    ->setToken('#123456789ABCD')
    ->setPriceCut(3);

$oItem = (new Item)
    ->setTitle('Tutu')
    ->setPrice(function($oItem) {
        /** @var Item $oItem*/
        if($oItem->getQuantity() > 5) {
            return 15;
        }
        else {
            return 20;
        }
    })
    ->setQuantity(3)
    ->setRef(777);
$oCart->Items()->addItem($oItem);

$oCart->User()
    ->setRef(42)
    ->setLanguage('EN')
    ->setFirstName('Example FName')
    ->setLastName('Example LName')
    ->setEmail('example@coercive.fr');

$oCart->Shipping()
    ->setTitle('Example Shipping Title')
    ->setFirstName('Example FName')
    ->setLastName('Example LName')
    ->setAddress('Example Address')
    ->setZip('#12345')
    ->setTown('Example Town')
    ->setCountry('Example Country')
    ->setIsoCountry('EN');

$oCart->Billing()
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
<p>User : <?= $oCart->User()->getEmail() ?></p>
<p>Shipping : <?= $oCart->Shipping()->getTitle() ?></p>
<p>Billing : <?= $oCart->Billing()->getTitle() ?></p>
<br /><?php
foreach ($oCart->Items()->keys() as $mId):
    $oItem = $oCart->Items()->getItem($mId); ?>
    <p>----------------------------------------</p>
    <p>Title : <?= $oItem->getTitle() ?></p>
    <p>Price : <?= $oItem->getPrice() ?></p>
    <p>Quantity : <?= $oItem->getQuantity() ?></p>
    <p>Ref : <?= $oItem->getRef() ?></p><?php

    if($oItem->Promo()->isModified()): ?>
        <p>Token : <?= $oItem->Promo()->getToken() ?></p>
        <p>Price cut : <?= $oItem->Promo()->getPriceCut() ?></p>
        <p>New item price : <?= $oItem->Promo()->calc($oItem->getPrice()) ?></p><?php
    endif;

endforeach ?>
<br /><br />
<h1># EXAMPLE END #</h1><?php

# Storage in session
$oSession = new Session;
$oSession->store($oCart);

# Retrieve from session
$oCart = $oSession->retrieve();

```
