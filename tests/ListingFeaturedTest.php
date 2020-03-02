<?php

use PHPUnit\Framework\TestCase;

class ListingFeaturedTest extends TestCase{

/** @test */
function testGetStatus()
{ 
    $data = [
        'id' => 1,
        'title' => 'Featured',
        'status' => 'featured'
    ];

    
    $ListingFeatured = new ListingFeatured($data);
    $this->assertEquals('featured', $ListingFeatured->getStatus());
}

/** @test */
function testCoC()
{ 
    $data = [
        'id' => 1,
        'title' => 'Featured',
        'coc' => 'coc'
    ];

    
    $ListingFeatured = new ListingFeatured($data);
    $this->assertEquals('coc', $ListingFeatured->getCoc());
}






}