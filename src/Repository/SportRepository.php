<?php

namespace App\Repository;

use App\Entity\Sport;
use Core\Attributes\TargetEntity;
use Core\Repository\Repository;

#[TargetEntity(name: Sport::class)]
class SportRepository extends Repository
{

}