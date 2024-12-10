<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class FirstCest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnPage('/index.php');

    }

    // tests
    public function admissiona(AcceptanceTester $I)
    {
        $I->wait(5);
            $I->click('#admission');
            $I->click('#add_admission');
            $I->fillField('#date', "12.12.2024, 10:40");
            $I->fillField("#amount", "100");
            $I->click('#btn');
            $I->canSee('Каталог товаров');
    }
    public function addproduct(AcceptanceTester $I)
    {
        $I->wait(5);
        $I->click('#addproduct');
        $I->click('#add_admission');
        $I->fillField('#name', "bananna");
        $I->fillField("#price", "100");
        $I->fillField("#article", "007");
        $I->click('#btn');
        $I->canSee('Каталог товаров');
    }
}




