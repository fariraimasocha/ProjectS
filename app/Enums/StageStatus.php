<?php

namespace App\Enums;

enum StageStatus: string
{
    case Pending = 'pending';
    case Rejected = 'rejected';
    case Completed = 'completed';
}
