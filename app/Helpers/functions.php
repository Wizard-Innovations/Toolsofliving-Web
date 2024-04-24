<?php

use Carbon\Carbon;

  function formatDate($date)
{
    return Carbon::parse($date)->isoFormat('MMMM Do YYYY');
}