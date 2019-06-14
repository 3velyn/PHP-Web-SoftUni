<?php

class Trainer
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $badges;

    /**
     * @var Pokemon[]
     */
    private $pokemons;

    /**
     * Trainer constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
        $this->badges = 0;
        $this->pokemons = [];
    }

    /**
     * @return int
     */
    public function getBadges(): int
    {
        return $this->badges;
    }


    public function catchPokemon(Pokemon $pokemon): void
    {
        $this->pokemons[$pokemon->getElement()][] = $pokemon;
    }

    public function receiveBadge(): void
    {
        $this->badges++;
    }

    public function hasPokemonsByElement(string $element): bool
    {
        return key_exists($element, $this->pokemons) && count($this->pokemons[$element]) > 0;
    }

    public function hitPokemons(int $dmg): void
    {
        foreach ($this->pokemons as $type => $pokemonsByType) {
            foreach ($pokemonsByType as $key => $pokemon) {
                $pokemon->hit($dmg);
                if (!$pokemon->isAlive()) {
                    unset($this->pokemons[$type][$key]);
                }
            }
        }
    }

    public function __toString()
    {
        $pokemonsCount = 0;
        foreach ($this->pokemons as $pokemonsByType) {
            $pokemonsCount += count($pokemonsByType);
        }

        return $this->name . ' ' . $this->badges . ' ' . $pokemonsCount;
    }
}

class Pokemon
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $element;

    /**
     * @var int
     */
    private $health;

    /**
     * Pokemon constructor.
     * @param string $name
     * @param string $element
     * @param int $health
     */
    public function __construct(string $name, string $element, int $health)
    {
        $this->name = $name;
        $this->element = $element;
        $this->health = $health;
    }

    public function getElement()
    {
        return $this->element;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getHealth(): int
    {
        return $this->health;
    }

    /**
     * @param int $health
     */
    public function setHealth(int $health): void
    {
        $this->health = $health;
    }

    /**
     * @param string $element
     */
    public function setElement(string $element): void
    {
        $this->element = $element;
    }

    public function isAlive(): bool
    {
        return $this->getHealth() > 0;
    }

    public function hit(int $dmg): void
    {
        $this->health -= max(0, $dmg);
    }
}

/** @var Trainer[] $trainers */
$trainers = [];

$line = readline();

while ($line !== 'Tournament') {
    list($trainerName, $pokemonName, $element, $health) = explode(' ', $line);

    if (!key_exists($trainerName, $trainers)) {
        $trainers[$trainerName] = new Trainer($trainerName);
    }
    $trainer = $trainers[$trainerName];
    $trainer->catchPokemon(new Pokemon($pokemonName, $element, $health));

    $line = readline();
}

$line = readline();

while ($line !== 'End') {
    foreach ($trainers as $trainer) {
        if ($trainer->hasPokemonsByElement($line)) {
            $trainer->receiveBadge();
        } else {
            $trainer->hitPokemons(10);
        }
    }
    $line = readline();
}

uksort($trainers, function ($key1, $key2) use ($trainers) {
    $trainer1 = $trainers[$key1];
    $trainer2 = $trainers[$key2];

    return $trainer2->getBadges() <=> $trainer1->getBadges();
});

echo  implode(PHP_EOL, $trainers);