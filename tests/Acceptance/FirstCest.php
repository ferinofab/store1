<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class FirstCest
{
    public function _before(AcceptanceTester $I)
    {

    }

    // tests
    public function admissiona(AcceptanceTester $I)
    {
        $I->amOnPage('');
        $I->wait(5);
//            $I->click('#admission');
//            $I->canSee('Поступление');
//            $I->click('#add_admission');
//            $I->fillField('#date', "12.12.2024, 10:40");
//            $I->fillField("#amount", "100");
//            $I->click('#btn');
//            $I->canSee('Каталог товаров');
    }
}




