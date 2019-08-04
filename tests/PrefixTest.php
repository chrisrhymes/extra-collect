<?php

namespace ChrisRhymes\ExtraCollect\Test;

use ChrisRhymes\ExtraCollect\Test\TestCase;

class PrefixTest extends TestCase 
{

    public function test_prefix()
    {
        $collection = collect(['a', 'b', 'c'])->prefix('test');

        $expected = collect(['testa', 'testb', 'testc']);

        $this->assertEquals($expected, $collection);
        $this->assertCount(3, $expected);
    }

    public function test_prefix_with_key()
    {
        $collection = collect([['name' => 'a'], ['name' => 'b'], ['name' => 'c']])->prefix('test', 'name');

        $expected = collect([['name' => 'testa'], ['name' => 'testb'], ['name' => 'testc']]);

        $this->assertEquals($expected, $collection);
        $this->assertCount(3, $expected);
    }

}