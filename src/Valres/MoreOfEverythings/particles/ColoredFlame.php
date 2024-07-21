<?php

namespace Valres\MoreOfEverythings\particles;

use pocketmine\color\Color;
use pocketmine\math\Vector3;
use pocketmine\network\mcpe\protocol\LevelEventPacket;
use pocketmine\network\mcpe\protocol\types\ParticleIds;
use pocketmine\world\particle\Particle;

class ColoredFlame implements Particle
{
    public function __construct(private readonly Color $color) {}

    public function encode(Vector3 $pos) : array{
        return [LevelEventPacket::standardParticle(ParticleIds::CHERRY_LEAVES, $this->color->toARGB(), $pos)];
    }
}
