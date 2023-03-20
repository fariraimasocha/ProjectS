<?php

namespace App\Enums;

enum ProjectStatus: string
{
    case Pending = 'pending';
    case Rejected = 'rejected';
    case Completed = 'completed';
}
