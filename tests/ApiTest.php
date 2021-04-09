<?php
namespace Test;

use App\Secret;
use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;
use Test\TestCase;

class FooTest extends TestCase
{


    public function testSomethingIsTrue()
    {
        $this->assertTrue(true);
    }


    public function testCreateSecret()
    {
        $this->json('POST', 'v1/secret', [
                'secret' =>  'teszt',
                'expire_after_views' => '15',
                'expire_after' => '2021-03-29 13:20:54'
            ])
             ->seeJsonStructure([
                'hash',
                'secretText',
                'createdAt',
                'expiresAt',
                'remainingViews'
             ]);
    }

    public function testCreateError()
    {
        $this->json('POST', 'v1/secret', ['secret' => null])->seeJsonStructure([
                'errors'
             ]);
    }

    public function testGetSecret()
    {
        $secret = factory(\App\Secret::class)->create();
           
        $this->json('GET', '/v1/secret/'.$secret->hash)
             ->seeJsonStructure([
                'hash',
                'secretText',
                'createdAt',
                'expiresAt',
                'remainingViews'
             ]);
    }




}