<?php

namespace Valres\MoreOfEverythings\particles;

use pocketmine\math\Vector3;
use pocketmine\network\mcpe\protocol\LevelEventPacket;
use pocketmine\network\mcpe\protocol\types\ParticleIds;
use pocketmine\world\particle\Particle;

class TotemParticle implements Particle
{
    public function encode(Vector3 $pos) : array{
        return [LevelEventPacket::standardParticle(ParticleIds::TOTEM, 0, $pos)];
    }
}
