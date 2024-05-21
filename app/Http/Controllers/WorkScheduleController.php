<?php

namespace App\Http\Controllers;

use App\Helpers\WorkScheduleHelper;

class WorkScheduleController extends Controller
{
    public function index()
    {
        $schedule = WorkScheduleHelper::generateWorkSchedule();
        return view('work_schedule.index', compact('schedule'));
    }
}

