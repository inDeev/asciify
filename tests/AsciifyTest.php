<?php

namespace  Indeev\Asciify\Tests;

use Indeev\Asciify\Asciify;
use PHPUnit\Framework\TestCase;

class AsciifyTest extends TestCase
{
    /** @test */
    public function testAsciify()
    {
        // Czechia
        $this->assertSame('Necht jiz hrisne saxofony dablu rozezvuci sin udesnymi tony waltzu, tanga a quickstepu.',
            Asciify::convert('Nechť již hříšné saxofony ďáblů rozezvučí síň úděsnými tóny waltzu, tanga a quickstepu.'));
        // Slovakia
        $this->assertSame('Vypata dcera grofa Maxwella s IQ nizsim ako kon nuti celad hryzt hrbu jablk.',
            Asciify::convert('Vypätá dcéra grófa Maxwella s IQ nižším ako kôň núti čeľaď hrýzť hŕbu jabĺk.'));
        // Poland
        $this->assertSame('Stroz pchnal kosc w quiz gedzb vel fax myjn.',
            Asciify::convert('Stróż pchnął kość w quiz gędźb vel fax myjń.'));
    }
}
