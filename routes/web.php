<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'App\Http\Controllers\DirectoriesController@splash_page');

// Route::get('/home', 'HomeController@index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('books/menu/{menu}', [App\Http\Controllers\BooksController::class, 'menu'])->name('bkmenu');
Route::get('buildings/plmenu/{menu}', [App\Http\Controllers\BuildingsController::class, 'plmenu'])->name('plan');
Route::get('buildings/menu/{menu}', [App\Http\Controllers\BuildingsController::class, 'menu'])->name('buildmenu');
Route::get('Chapters/diy', [App\Http\Controllers\ChaptersController::class, 'diy'])->name('diy');
Route::get('people/menu/{menu}', [App\Http\Controllers\PeopleController::class, 'menu'])->name('pplmenu');
Route::get('projects/menu/{menu}', [App\Http\Controllers\ProjectsController::class,'menu'])->name('pjmenu');

// Route::get('akimages/show/{id}', [App\Http\Controllers\AkimagesController::class, 'show']);

Route::resources([
    'addresses' => App\Http\Controllers\AddressesController::class,
    'akimages' => App\Http\Controllers\AkimagesController::class,
    'books' => App\Http\Controllers\BooksController::class,
    'buildings' => App\Http\Controllers\BuildingsController::class,
    'chapters' => App\Http\Controllers\ChaptersController::class,
    'directories' => App\Http\Controllers\DirectoriesController::class,
    'diys' => App\Http\Controllers\DiysController::class,
    'locations' => App\Http\Controllers\LocationsController::class,
    'people' => App\Http\Controllers\PeopleController::class,
    'plans' => App\Http\Controllers\PlansController::class,
    'projects' => App\Http\Controllers\ProjectsController::class,
]);

Route::get('SearchAddresses', 'App\Http\Controllers\SearchController@searchaddresses')->name('SearchAddresses');
Route::get('SearchImages', 'App\Http\Controllers\SearchController@searchimages')->name('SearchImages');
Route::get('SearchBooks', 'App\Http\Controllers\SearchController@searchbooks')->name('SearchBooks');
Route::get('SearchBuildings', 'App\Http\Controllers\SearchController@searchbuildings')->name('SearchBuildings');
Route::get('SearchChapters', 'App\Http\Controllers\SearchController@searchchapters')->name('SearchChapters');
Route::get('SearchDirectories', 'App\Http\Controllers\SearchController@searchdirectories')->name('SearchDirectories');
Route::get('SearchDiys', 'App\Http\Controllers\SearchController@searchchapters')->name('SearchDiys');
Route::get('SearchPeople', 'App\Http\Controllers\SearchController@searchpeople')->name('SearchPeople');
Route::get('SearchPlans', 'App\Http\Controllers\SearchController@searchplans')->name('SearchPlans');
Route::get('SearchProjects', 'App\Http\Controllers\SearchController@searchprojects')->name('SearchProjects');

// Route::get('/home', [App\Http\Controllers\HomeController::class,'index'])->name('home');
// Route::get('building', [App\Http\Controllers\BuildingsController::class, 'index'])->name('buildings');
// Route::get('chapters', [App\Http\Controllers\ChaptersController::class, 'index'])->name('chapters');
// Route::get('people', [App\Http\Controllers\PeopleController::class, 'index'])->name('people');
// Route::get('plans', [App\Http\Controllers\PlansController::class, 'index'])->name('plans');
// Route::get('buildings/demolished/', 'BuildingsController@demolished')->name('demolished');
// Route::get('buildings/endangered/', 'BuildingsController@endangered')->name('endangered');

// require __DIR__.'/auth.php';
