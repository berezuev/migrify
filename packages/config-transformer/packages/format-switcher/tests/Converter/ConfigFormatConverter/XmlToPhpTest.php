<?php

declare(strict_types=1);

namespace Migrify\ConfigTransformer\FormatSwitcher\Tests\Converter\ConfigFormatConverter;

use Iterator;
use Symplify\EasyTesting\DataProvider\StaticFixtureFinder;
use Symplify\SmartFileSystem\SmartFileInfo;

final class XmlToPhpTest extends AbstractConfigFormatConverterTest
{
    /**
     * @dataProvider provideData()
     */
    public function test(SmartFileInfo $fixtureFileInfo): void
    {
        $this->doTestOutput($fixtureFileInfo, 'xml', 'php');
    }

    public function provideData(): Iterator
    {
        return StaticFixtureFinder::yieldDirectory(__DIR__ . '/FixtureXmlToPhp', '*.xml');
    }
}
