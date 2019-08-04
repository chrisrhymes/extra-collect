<?php

namespace ChrisRhymes\ExtraCollect\Test;

use ChrisRhymes\ExtraCollect\Test\TestCase;

class SuffixTest extends TestCase 
{

    public function test_suffix()
    {
        $collection = collect(['a', 'b', 'c'])->suffix('test');

        $expected = collect(['atest', 'btest', 'ctest']);

        $this->assertEquals($expected, $collection);
        $this->assertCount(3, $expected);
    }

    public function test_suffix_with_key()
    {
        $collection = collect([['name' => 'a'], ['name' => 'b'], ['name' => 'c']])->suffix('test', 'name');

        $expected = collect([['name' => 'atest'], ['name' => 'btest'], ['name' => 'ctest']]);

        $this->assertEquals($expected, $collection);
        $this->assertCount(3, $expected);
    }

}