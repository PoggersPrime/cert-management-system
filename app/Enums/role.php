<?php

namespace app\Enums;

enum Role: string
{
    case ADMIN = "admin";

    case STUDENT = "student";

    case INTERN = "intern";
}
