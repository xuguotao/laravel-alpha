<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $f = new \App\Services\Financial();
        echo 'XIRR: ' . $f->XIRR(array(-15000,5015,5015,5015), array(
                mktime(0,0,0,12,25,2016),
                mktime(0,0,0,1,1,2017),
                mktime(0,0,0,1,8,2017),
                mktime(0,0,0,1,15,2017),
            ), 0.1) . "\n";

        $test = $f->XIRR(array(-15000,5015,5015,5015), array(
            strtotime('2016-12-25'), strtotime('2017-01-01'), strtotime('2017-01-08'), strtotime('2017-01-15')
            ), 0.1) . "\n";

        var_dump($test);
    }
}
