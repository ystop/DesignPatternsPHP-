<?php

namespace DesignPatterns\Structural\Adapter\Tests;

use DesignPatterns\Structural\Adapter\PaperBookInterface;
use DesignPatterns\Structural\Adapter\Book;
use DesignPatterns\Structural\Adapter\Kindle;
use DesignPatterns\Structural\Adapter\EBookAdapter;

/**
 * AdapterTest 展示了使用一个电子书像纸质书一样
 * 你不需要改变你的基本(client)代码
 */
class AdapterTest extends \PHPUnit_Framework_TestCase
{
    public function getBook()
    {
        return array(
            array(new Book()),
            //我们建立一个 "包裹好的" 电子书在适配器中
            array(new EBookAdapter(new Kindle())),
        );
    }

    public function testIAmAnOldClient(PaperBookInterface $book)
    {

    }
}