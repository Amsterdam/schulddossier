<?php
declare(strict_types=1);

namespace GemeenteAmsterdam\FixxxSchuldhulp\Service;


use DateTimeImmutable;
use function file_exists;
use function file_put_contents;
use function mkdir;
use PHPUnit\Framework\TestCase;
use function touch;

final class ApplicationVersionTest extends TestCase
{
    private const TEST_DIR = __DIR__.'/../assets/application_version';

    /**
     * .git files are ignored hardcoded by git, so we have to create it manually
     */
    public static function setUpBeforeClass(): void
    {
        if (!file_exists(self::TEST_DIR.'/.git')) {
            mkdir(self::TEST_DIR . '/.git');
        }
        if (!file_exists(self::TEST_DIR.'/.git/refs')) {
            mkdir(self::TEST_DIR . '/.git/refs');
        }
        if (!file_exists(self::TEST_DIR.'/.git/refs/heads/')) {
            mkdir(self::TEST_DIR . '/.git/refs/heads/');
        }
        if (!file_exists(self::TEST_DIR.'/.git/refs/heads/master')) {
            file_put_contents(self::TEST_DIR.'/.git/refs/heads/master', '52e780412399c7179f1022bd242a0e80f7e311ef');
        }

        touch(self::TEST_DIR.'/version_file');
        touch(self::TEST_DIR.'/.git/refs/heads/master');
    }

    public function testGetEnv(): void
    {
        $env = 'dev';

        static::assertEquals($env, (new ApplicationVersion($env, ''))->getEnv());
    }

    public function getEnvVersionDevProvider(): array
    {
        return [
            ['dev', '', sprintf('dev-%s', (new DateTimeImmutable())->format('YmdHis'))],
            ['dev', self::TEST_DIR, sprintf('dev-%s', (new DateTimeImmutable())->format('YmdHis'))],
        ];
    }

    /**
     * @dataProvider getEnvVersionDevProvider
     *
     * @throws \Exception
     */
    public function testGetEnvVersionDev(string $env, string $path, string $expected): void
    {
        $testSubject = new ApplicationVersion($env, $path);

        // Check parts separately to allow for time difference inside test
        $expectedParts = explode('-', $expected);
        $actualParts = explode('-', $testSubject->getEnvVersion());

        self::assertEquals($expectedParts[0], $actualParts[0]);
        self::assertEqualsWithDelta((int)$expectedParts[1], (int)$actualParts[1], 2);
    }

    public function getEnvVersionOtherProvider(): array
    {
        return [
            ['prod', '', 'prod-0000'],
            ['prod', self::TEST_DIR, 'prod-1.0.0'],
        ];
    }

    /**
     * @dataProvider getEnvVersionOtherProvider
     *
     * @throws \Exception
     */
    public function testGetEnvVersionOther(string $env, string $path, string $expected): void
    {
        $testSubject = new ApplicationVersion($env, $path);

        static::assertEqualsWithDelta($expected, $testSubject->getEnvVersion(), 2);
    }

    public function getVersionIdProvider(): array
    {
        return [
            ['dev', '', '0000'],
            ['dev', self::TEST_DIR, '52e7804'],
            ['prod', '', '0000'],
            ['prod', self::TEST_DIR, '1.0.0'],
        ];
    }

    /**
     * @dataProvider getVersionIdProvider
     *
     * @throws \Exception
     */
    public function testGetVersionId(string $env, string $path, string $expected): void
    {
        $testSubject = new ApplicationVersion($env, $path);

        static::assertEquals($expected, $testSubject->getVersionId());
    }

    public function getVersionDateProvider()
    {
        return [
            ['dev', '', ''],
            ['dev', self::TEST_DIR, (new DateTimeImmutable())->format('y-m-d')],
            ['prod', '', ''],
            ['prod', self::TEST_DIR, (new DateTimeImmutable())->format('y-m-d')],
        ];
    }

    /**
     * @dataProvider getVersionDateProvider
     *
     * @throws \Exception
     */
    public function testGetVersionDate(string $env, string $path, string $expected): void
    {
        $testSubject = new ApplicationVersion($env, $path);

        static::assertEquals($expected, $testSubject->getVersionDate());
    }
}
