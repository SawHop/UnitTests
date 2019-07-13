<?php


class FormCest
{
    /** загружать фикстуру для проверки логина и пароля */
//    public function _before(\FunctionalTester $I)
//    {
//        $I->haveFixtures([
//            'user'=> [
//              'class' => \app\tests\fixtures\UserFixture::className(),
//            ],
//        ]);
//    }

    public function checkForm(\FunctionalTester $I)
    {
        $I->amOnRoute('site/login');
//        login-form
        $formParams = [
            'LoginForm[username]' => 'admin',
            'LoginForm[password]' => 'admin',
        ];
        $I->submitForm('#login-form', $formParams);
        $I->see('Congratulations!', 'h1');
    }
}
