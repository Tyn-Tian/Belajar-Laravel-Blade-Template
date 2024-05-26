<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FormTest extends TestCase
{
    public function testForm()
    {
        $this->view('form', [
            'user' => [
                'premium' => true,
                'name' => 'Christian',
                'admin' => true
            ]
        ])->assertSee("checked")
            ->assertSee("Christian")
            ->assertDontSee("readonly");

        $this->view('form', [
            'user' => [
                'premium' => false,
                'name' => 'Christian',
                'admin' => false
            ]
        ])->assertDontSee("checked")
            ->assertSee("Christian")
            ->assertSee("readonly");
    }
}
