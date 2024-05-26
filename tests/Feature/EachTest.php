<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EachTest extends TestCase
{
    public function testEach()
    {
        $this->view('each', [
            'users' => [
                [
                    'name' => 'Christian',
                    'hobbies' => ['Coding', 'Gaming']
                ],
                [
                    'name' => 'Budi',
                    'hobbies' => ['Coding', 'Gaming']
                ]
            ]
        ])->assertSeeInOrder([
            ".red",
            "Christian",
            "Coding",
            "Gaming",
            "Budi",
            "Coding",
            "Gaming"
        ]);
    }
}
