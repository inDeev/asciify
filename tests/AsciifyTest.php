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
        // Eslovenia
        $this->assertSame('Serif bo za vajo spet kuhal domace zgance.',
            Asciify::convert('Šerif bo za vajo spet kuhal domače žgance.'));
        // Esperanto
        $this->assertSame('Lau Ludoviko Zamenhof bongustas fresa ceha mangajo kun spicoj.',
            Asciify::convert('Laŭ Ludoviko Zamenhof bongustas freŝa ĉeĥa manĝaĵo kun spicoj.'));
        // France
        $this->assertSame('Le coeur decu mais l\'ame plutot naive, Louys reva de crapauter en canoe au dela des iles, pres du malstron ou brulent les novae.',
            Asciify::convert('Le cœur déçu mais l\'âme plutôt naïve, Louÿs rêva de crapaüter en canoë au delà des îles, près du mälströn où brûlent les novæ.'));
        // Iceland
        $this->assertSame('Kaemi ny oxi her ykist thjofum nu baedi vil og adrepa.',
            Asciify::convert('Kæmi ný öxi hér ykist þjófum nú bæði víl og ádrepa.'));
        // Portugal
        $this->assertSame('Luis arguia a Julia que «bracoes, fe, cha, oxido, por, zangao» eram palavras do portugues.',
            Asciify::convert('Luís argüia à Júlia que «brações, fé, chá, óxido, pôr, zângão» eram palavras do português.'));
        // Serbia
        $this->assertSame('Ljubazni fenjerdzija chadjavog litsa khoce da mi pokazhe shtos.',
            Asciify::convert('Љубазни фењерџија чађавог лица хоће да ми покаже штос.'));
        // Russia
        $this->assertSame('V chashchakh yuga zhil by tsitrus? Da, no fal\'shivyy ekzemplyar!',
            Asciify::convert('В чащах юга жил бы цитрус? Да, но фальшивый экземпляр!'));
        $this->assertSame('Ekh, chuzhak! Obshchiy s"yom tsen shlyap (yuft\')—vdryzg!',
            Asciify::convert('Эх, чужак! Общий съём цен шляп (юфть)—вдрызг!'));
        $this->assertSame('Eks-graf? Plyush iz"yat. B\'yom chuzhdyy tsen khvoshch!',
            Asciify::convert('Экс-граф? Плюш изъят. Бьём чуждый цен хвощ!'));
        // Turkey
        $this->assertSame('Pijamali hasta yagiz sofore cabucak guvendi.',
            Asciify::convert('Pijamalı hasta yağız şoföre çabucak güvendi.'));

        // $this->assertSame('expected',
        //     Asciify::convert('original'));
    }
}
