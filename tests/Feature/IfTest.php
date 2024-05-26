<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IfTest extends TestCase
{
    public function testIfStatement()
    {
        $this->view('if', [
            'hobbies' => []
        ])->assertSeeText("I don't have any hobbies!", false);

        $this->view('if', [
            'hobbies' => ['coding']
        ])->assertSeeText("I have one hobby!");

        $this->view('if', [
            'hobbies' => ['coding', 'gaming']
        ])->assertSeeText("I have multiple hobbies!");
    }
}
