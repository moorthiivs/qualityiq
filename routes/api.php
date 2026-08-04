<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\API\DunkTankController;
use App\Http\Controllers\API\ConfigurationsController;
use App\Http\Controllers\API\CauseActionController;
use App\Http\Controllers\API\WhyWhyAnalysisController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::post('register', [RegisterController::class, 'register']);

Route::post('login', [RegisterController::class, 'login']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {

    return $request->user();

});
Route::get('/modals', [ConfigurationsController::class, 'listModals'])->name('api.list.modals');
Route::get('/defects', [ConfigurationsController::class, 'listDefects'])->name('list.defects');
Route::get('/categories', [ConfigurationsController::class, 'listCategories'])->name('list.categories');


Route::get('/getdunktank', [DunkTankController::class, 'listDefectData'])->name('list.defectdata');
Route::get('/dunktank/{id}', [DunkTankController::class, 'editDefectData'])->name('edit.defectdata');

Route::post('/save/dunktank', [DunkTankController::class, 'saveDunkTank'])->name('save.defectdata');
Route::put('/update/dunktank/{id}', [DunkTankController::class, 'updateDunkTank'])->name('update.defectdata');

Route::delete('/delete/dunktank/{id}', [DunkTankController::class, 'deleteDefectData'])->name('delete.defectdata');


Route::post('/causeEffect', [CauseActionController::class, 'saveCauseEffect'])->name('save.causeEffect');

Route::post('/getDefectDetails', [CauseActionController::class, 'listDefectDetails'])->name('list.DefectDetails');

Route::put('/update/causeEffect/{id}', [CauseActionController::class, 'updateCauseEffect'])->name('update.causeEffect');


Route::post('/causeDetails', [CauseActionController::class, 'listCauseDetails'])->name('list.causeDetails');

Route::put('/causeActionBulkUpdate', [CauseActionController::class, 'causeActionBulkUpdate'])->name('list.causeActionBulkUpdate');

Route::post('/bulkWhyAnalysisData', [WhyWhyAnalysisController::class, 'bulkWhyAnalysisData'])->name('list.bulkWhyAnalysisData');


