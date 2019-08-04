<?php

namespace ChrisRhymes\ExtraCollect\Test;

use ChrisRhymes\ExtraCollect\Test\TestCase;

class DoubleQuoteTest extends TestCase 
{

    public function test_double_quote()
    {
        $collection = collect(['a', 'b', 'c'])->doubleQuote();

        $expected = collect(['"a"', '"b"', '"c"']);

        $this->assertEquals($expected, $collection);
        $this->assertCount(3, $expected);
    }

    public function test_double_quote_with_key()
    {
        $collection = collect([['name' => 'a'], ['name' => 'b'], ['name' => 'c']])->doubleQuote('name');

        $expected = collect([['name' => '"a"'], ['name' => '"b"'], ['name' => '"c"']]);

        $this->assertEquals($expected, $collection);
        $this->assertCount(3, $expected);
    }

}