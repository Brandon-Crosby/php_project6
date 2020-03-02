<?php

use PHPUnit\Framework\TestCase;

class ListingPremiumTest extends TestCase{
    
    /** @test */
    function testGetStatus()
    { 
        $data = [
            'id' => 1,
            'title' => 'Premium Subscription',
            'status' => 'premium'
        ];
 
        
        $ListingPremium = new ListingPremium($data);
        $this->assertEquals('premium', $ListingPremium->getStatus());
    }
  /** @test */
  function testGetDescription()
  { 
      $data = [
          'id' => 1,
          'title' => 'Premium Subscription',
          'description' => 'description'
      ];

      
      $ListingPremium = new ListingPremium($data);
      $this->assertEquals('description', $ListingPremium->getDescription());
  }
}