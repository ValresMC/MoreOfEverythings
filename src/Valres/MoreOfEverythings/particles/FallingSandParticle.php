<?php

namespace Valres\MoreOfEverythings\particles;

use pocketmine\math\Vector3;
use pocketmine\network\mcpe\protocol\LevelEventPacket;
use pocketmine\network\mcpe\protocol\types\ParticleIds;
use pocketmine\world\particle\Particle;

class FallingSandParticle implements Particle
{
    public function encode(Vector3 $pos) : array{
        return [LevelEventPacket::standardParticle(ParticleIds::FALLING_DUST, 0, $pos)];
    }
}
