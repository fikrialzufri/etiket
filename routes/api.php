<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MonitorController;
//
Route::post('/monitortap', [MonitorController::class, 'tap'])->name('monitor.tab');
