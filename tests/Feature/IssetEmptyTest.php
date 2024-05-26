<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IssetEmptyTest extends TestCase
{
    public function testIssetEmpty()
    {
        $this->view('isset-empty', [])
            ->assertDontSeeText("Hello");

        $this->view('isset-empty', [
            'name' => 'Christian'
        ])->assertSeeText("Hello, my name is Christian", false)
            ->assertSeeText("I don't have any hobbies", false);

        $this->view('isset-empty', [
            'name' => 'Christian',
            'hobbies' => ['coding']
        ])->assertDontSeeText("I don't have any hobbies", false)
            ->assertSeeText("Hello, my name is Christian", false);
    }
}
