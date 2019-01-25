<?php

namespace api\tests\api;

use api\tests\ApiTester;

class ButtonsCest
{
    public function buttonsPageCode200(ApiTester $I)
    {
        $I->sendGET('/buttons');
        $I->seeResponseCodeIs(200);
        $I->seeResponseIsJson();
    }
}