<?php

declare(strict_types=1);

class SuperHero
{
    public function __construct(
        private string $name,
        public array $powers,
        public string $planet
    ) {
    }

    public function attack(): string
    {
        return "¡$this->name lanza un ataque con sus poderes!";
    }

    public function show_all(): array
    {
        return get_object_vars($this);
    }

    public function description(): string
    {
        $powers = implode(", ", $this->powers);

        return "$this->name es un superhéroe originario de $this->planet y posee los siguientes poderes: $powers";
    }

    public static function random(): SuperHero
    {
        $names = ["Thor", "Spiderman", "Wolverine", "Ironman", "Hulk"];
        $powers = [
            ["Superfuerza", "Vuelo", "Rayos láser"],
            ["Superfuerza", "Agilidad sobrehumana", "Telarañas"],
            ["Regeneración", "Fuerza aumentada", "Garras de adamantium"],
            ["Armadura potenciada", "Tecnología avanzada", "Propulsores"],
            ["Fuerza descomunal", "Resistencia", "Transformación"],
        ];
        $planets = ["Asgard", "HulkWorld", "Krypton", "Tierra"];

        $name = $names[array_rand($names)];
        $power = $powers[array_rand($powers)];
        $planet = $planets[array_rand($planets)];

        return new self($name, $power, $planet);
    }
}

$hero = SuperHero::random();
echo $hero->description();