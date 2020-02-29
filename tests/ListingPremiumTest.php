<?php

use PHPUnit\Framework\TestCase;

class ListingPremiumTest extends TestCase{
    
    /** @test */
     public function DataMustBeSet()
     {
         $this->expectException(Exception::class);
         $listing = new ListingPremium();
     } 
    /** @test */
     public function checkGetStatus()
    { 
        $listing = new ListingPremium();
        $this->assertEquals('premium', $this->$list->getStatus());
    
    }
    /*
    
    public function checkGtetStatus()
    {
        $list = new ListingPremium($data = [
            'id'=>2,
            'title'=>'hey',
            'website'=>'http://www.freepremium.com',
            'email'=>'preme@preme.com',
            'twitter'=>'@premium',
            'status'=>''
        ]);
        
        $this->assertEquals('premium', $list->getStatus());
        
    }
    */
}