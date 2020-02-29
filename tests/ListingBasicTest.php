<?php

use PHPUnit\Framework\TestCase;

class ListingBasicTest extends TestCase
{
    /** @test */
    public function DataMustBeSet()
    {
        $this->expectException(Exception::class);
        $listing = new ListingBasic();
    }
   
    /** @test */
    public function idMustBeSet()
    {
        $this->expectException(Exception::class);
        $data = [
            'id' => null
        ];
        
        $listing = new ListingBasic($data);

    }
   
    /** @test */
    public function titleMustBeSet()
    {
        $this->expectException(Exception::class);
        $data = [
            'title' => null
        ];
        $listing = new ListingBasic($data);
    }

     /** @test */
    public function getMethodEachProperty()
    {
        $list = new ListingBasic($data = [
            'id'=>1,
            'title'=>'hello',
            'website'=>'http://www.teamtreehouse.com',
            'email'=>'test@test.com',
            'twitter'=>'@teamtreehouse',
            'status'=>''
        ]);

        $this->assertEquals(1, $list->getId());
        $this->assertEquals('hello', $list->getTitle());
        $this->assertEquals('http://www.teamtreehouse.com', $list->getWebsite());
        $this->assertEquals('test@test.com', $list->getEmail());
        $this->assertEquals('teamtreehouse', $list->getTwitter());
        $this->assertEquals('basic', $list->getStatus());

        $list = new ListingBasic($data = [
            'id'=>1,
            'title'=>'hello',
            'website'=>''
        ]);

        $this->assertEquals(null, $list->getWebsite());

        $list = new ListingBasic($data = [
            'id'=>1,
            'title'=>'hello',
            'website'=>'www.teamtreehouse.com'
        ]);

        $this->assertEquals('http://www.teamtreehouse.com', $list->getWebsite());
    }


}
