<?php

namespace api\tests\api;

use api\tests\ApiTester;

class ButtonsCest
{
    public function buttonsPageCode200(ApiTester $tester)
    {
        $tester->sendGET('/api/v1/buttons');
        $tester->seeResponseCodeIs(200);
        $tester->seeResponseIsJson();
        $tester->seeResponseJsonMatchesJsonPath('$.[*].id');
        $tester->seeResponseJsonMatchesJsonPath('$.[*].type');
        $tester->seeResponseJsonMatchesJsonPath('$.[*].value');
        $tester->dontSeeResponseJsonMatchesJsonPath('$.[*].secret_value');
    }

    public function postCode405(ApiTester $tester)
    {
        $tester->sendPOST('/api/v1/buttons');
        $tester->seeResponseCodeIs(405);
    }
}