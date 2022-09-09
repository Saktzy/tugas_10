<?php

namespace App\Service;


class TimeServices
{
    public function showTimeNow()
    {
        return date("H:i");
    }
}
