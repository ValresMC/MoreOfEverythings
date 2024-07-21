<?php

namespace Valres\MoreOfEverythings\particles;

use pocketmine\math\Vector3;
use pocketmine\network\mcpe\protocol\LevelEventPacket;
use pocketmine\network\mcpe\protocol\types\ParticleIds;
use pocketmine\world\particle\Particle;

class SoulParticle implements Particle
{
    public function encode(Vector3 $pos) : array{
        return [LevelEventPacket::standardParticle(ParticleIds::SOUL, 0, $pos)];
    }
}
