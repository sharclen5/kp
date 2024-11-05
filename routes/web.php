<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FinancialDataController;
use App\Http\Controllers\FileDownloadController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/get-data-by-year', [FinancialDataController::class, 'getDataByYear'])->name('getDataByYear');

Route::get('/{province}/dashboard', [FinancialDataController::class, 'showDashboard'])->name('dashboard');

Route::get('/{province}/pendapatan', [FinancialDataController::class, 'showPendapatan']);

Route::post('/{province}/pendapatan/create', [FinancialDataController::class, 'createFinancialData'])->name('pendapatan.create');

Route::post('/{province}/pendapatan/update', [FinancialDataController::class, 'updateFinancialData'])->name('pendapatan.update');

Route::delete('/{province}/pendapatan/delete', [FinancialDataController::class, 'deleteFinancialData'])->name('pendapatan.delete');

Route::get('/{province}/belanja', [FinancialDataController::class, 'showBelanja']);

Route::post('/{province}/belanja/create', [FinancialDataController::class, 'createFinancialData'])->name('belanja.create');

Route::post('/{province}/belanja/update', [FinancialDataController::class, 'updateFinancialData'])->name('Belanja.update');

Route::post('/{province}/belanja/delete', [FinancialDataController::class, 'deleteFinancialData'])->name('belanja.delete');

Route::get('/{province}/pembiayaan', [FinancialDataController::class, 'showPembiayaan']);

Route::post('/{province}/pembiayaan/create', [FinancialDataController::class, 'createFinancialData'])->name('pembiayaan.create');

Route::post('/{province}/pembiayaan/update', [FinancialDataController::class, 'updateFinancialData'])->name('pembiayaan.update');

Route::post('/{province}/pembiayaan/delete', [FinancialDataController::class, 'deleteFinancialData'])->name('pembiayaan.delete');

Route::get('/{province}/pendapatan/pendapatanaslidaerah', [FinancialDataController::class, 'showPendapatanAsliDaerah']);

Route::post('/{province}/pendapatan/pendapatanaslidaerah/create', [FinancialDataController::class, 'createFinancialData'])->name('pendapatanaslidaerah.create');

Route::post('/{province}/pendapatan/pendapatanaslidaerah/update', [FinancialDataController::class, 'updateFinancialData'])->name('pendapatanaslidaerah.update');

Route::get('/{province}/pendapatan/pendapatanaslidaerah/pajakdaerah', [FinancialDataController::class, 'showPendapatanPajakDaerah']);

Route::post('/{province}/pendapatan/pendapatanaslidaerah/pajakdaerah/create', [FinancialDataController::class, 'createFinancialData'])->name('pajakdaerah.create');

Route::post('/{province}/pendapatan/pendapatanaslidaerah/pajakdaerah/update', [FinancialDataController::class, 'updateFinancialData'])->name('pajakdaerah.update');

Route::get('/{province}/pendapatan/pendapatanaslidaerah/retribusidaerah', [FinancialDataController::class, 'showPendapatanRetribusiDaerah']);

Route::post('/{province}/pendapatan/pendapatanaslidaerah/retribusidaerah/create', [FinancialDataController::class, 'createFinancialData'])->name('retribusidaerah.create');

Route::post('/{province}/pendapatan/pendapatanaslidaerah/retribusidaerah/update', [FinancialDataController::class, 'updateFinancialData'])->name('retribusidaerah.update');

Route::get('/{province}/pendapatan/pendapatanaslidaerah/phpkdd', [FinancialDataController::class, 'showPendapatanHPKDD']);

Route::post('/{province}/pendapatan/pendapatanaslidaerah/phpkdd/create', [FinancialDataController::class, 'createFinancialData'])->name('phpkdd.create');

Route::post('/{province}/pendapatan/pendapatanaslidaerah/phpkdd/update', [FinancialDataController::class, 'updateFinancialData'])->name('phpkdd.update');

Route::get('/{province}/pendapatan/pendapatanaslidaerah/lainlainpad', [FinancialDataController::class, 'showPendapatanLainLainPAD']);

Route::post('/{province}/pendapatan/pendapatanaslidaerah/lainlainpad/create', [FinancialDataController::class, 'createFinancialData'])->name('lainlainpad.create');

Route::post('/{province}/pendapatan/pendapatanaslidaerah/lainlainpad/update', [FinancialDataController::class, 'updateFinancialData'])->name('lainlainpad.update');


