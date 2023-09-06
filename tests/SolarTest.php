<?php

namespace NystronSolar\FakerSolarTests;

use Faker\Factory;
use NystronSolar\FakerSolar\Solar;
use PHPUnit\Framework\TestCase;

class SolarTest extends TestCase
{
    /**
     * @psalm-suppress UndefinedMagicMethod
     */
    public function testCanBeSolarInverterModelReturnString(): void
    {
        $faker = Factory::create();
        $faker->addProvider(new Solar($faker));

        $result = $faker->solarInverterModel();

        $this->assertIsString($result);
        $this->assertNotEmpty($result);
    }
}
