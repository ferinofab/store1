<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class SecondCest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnPage('/store1/index.php');
    }

    // tests
    public function addAdmission(AcceptanceTester $I)
    {
        $I->click('#admission');
        $I->fillField('#date', '2023-12-31 15:30');
        $I->selectOption('#select', '2');
        $I->fillField('#amount', '30');
        $I->click('#submit');
        $I->canSee('Каталог товаров');
    }
}
