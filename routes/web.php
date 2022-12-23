<?php
/* Для корректного нахождения контоллеров необходимо роскомментировать строку: protected $namespace = 'App\\Http\\Controllers'
   по адресу: app/Providers/RouteServiceProvider.php, строка №29 */

use Illuminate\Support\Facades\Route;
//url: 'физический адресс страницы', view: 'вызов шаблона для отображения', ->name: 'добавление именного url адреса'
// Вызов главной страницы
Route::get('/', function(){
    return view('home');
})->name('home');

// Вызов страницы "Портфолио"
Route::get('/portfolio', function(){
   return view('portfolio');
})->name('portfolio');

// Вызов страницы "Отзывы"
Route::get('/reviews', function(){
    return view('reviews');
})->name('reviews');

// Вызов страницы "Контакты"
Route::get('/contact', function(){
   return view('contact');
})->name('contact');

/* Вызов страницы-обработчика формы отправки отзыва на странице "Отзывы"
   передавая данные методом post вызывается ReviewsController, где @ - это обращение к функции submit */
Route::post('/reviews/submit', 'ReviewsController@submit')->name('reviews-form');

// Вызов всех отзывов из БД через функцию allData описанной в конструкторе ReviewsController
Route::get('/reviews', 'ReviewsController@allData')->name('reviews');
