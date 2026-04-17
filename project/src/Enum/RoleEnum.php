<?php

namespace App\Enum;

enum RoleEnum: int
{
	case User = 0;
	case Moderator = 1;
	case Admin = 2;
}
