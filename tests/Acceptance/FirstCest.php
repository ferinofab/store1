<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class FirstCest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnPage('/store1/index.php');
    }

    // tests
    public function addProduct(AcceptanceTester $I)
    {
        $I->click('#product');
        $I->fillField('#name', 'new');
        $I->fillField('#art', '100');
        $I->fillField('#amount', '004');
        $I->click('#btn');
        $I->see('new');
    }
}
