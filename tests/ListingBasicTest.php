<?php

use PHPUnit\Framework\TestCase;

class ListingBasicTest extends TestCase
{
    /** @test */
    public function mustHaveData()
    {
        $this->expectException(Exception::class);
        $listing = new ListingBasic();
    }
   
    /** @test */
    public function mustHaveId()
    {
        $this->expectException(Exception::class);
        $data = [
            'id' => null
        ];
        
        $listing = new ListingBasic($data);

    }
   
    /** @test */
    public function mustHaveTitle()
    {
        $this->expectException(Exception::class);
        $data = [
            'title' => null
        ];
        $listing = new ListingBasic($data);
    }

    /** @test */
    function testGetStatus()
    { 
        $data = [
            'id' => 1,
            'title' => 'hello',
            'status' => 'basic'
        ];
 
        $ListingBasic = new ListingBasic($data);
        $this->assertEquals('basic', $ListingBasic->getStatus());
    }
      

    /** @test */
    public function createObject()
    {
        
        $data = [
            'id' => 1,
            'title' => 'hello',
            'status' => 'basic'
        ];
        $listing = new ListingBasic($data);
        $this->assertIsObject($listing);
    }

    
    /** @test */
    public function getMethodsForEachProperty()
    {
        $list = new ListingBasic($data = [
            'id'=> 1,
            'title'=>'hello',
            'website'=>'http://www.teamtreehouse.com',
            'email'=>'treehouse@teamtreehouse.com',
            'twitter'=>'@teamtreehouse',
            'status'=>'basic'
        ]);

        $this->assertEquals(1, $list->getId());
        $this->assertEquals('hello', $list->getTitle());
        $this->assertEquals('http://www.teamtreehouse.com', $list->getWebsite());
        $this->assertEquals('treehouse@teamtreehouse.com', $list->getEmail());
        $this->assertEquals('teamtreehouse', $list->getTwitter());
        $this->assertEquals('basic', $list->getStatus()); 
    }
    
   
    /** @test */
    public function toArrayMethods()
    { 
        $listing = new ListingBasic([
            'id'=> 1,
            'title'=>'hello',
            'website'=>'http://www.teamtreehouse.com',
            'email'=>'treehouse@teamtreehouse.com',
            'twitter'=>'treehouse'
        ]);
          
        $this->assertEquals([
            'id'=> 1,
            'title'=>'hello',
            'website'=>'http://www.teamtreehouse.com',
            'email'=>'treehouse@teamtreehouse.com',
            'twitter'=>'treehouse',
            'status'=>'basic' 
        ],
            $listing->toArray()
        );

    }
}