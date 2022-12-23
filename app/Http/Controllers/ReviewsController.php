<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Подключаем файл ReviewsRequest к данному контроллеру на проверку вадлиности
use App\Http\Requests\ReviewsRequest;
// Подключаем модельный файл (класс), для работы с БД. По умолчанию содержит основные встроенные функции, необходимых для работы с таблицей отзывов Reviews из БД.
use App\Models\Reviews;

// Это основной контроллер с описанием функций для обработки и вывода данных из формы отзывов
class ReviewsController extends Controller
{
    /* Описание функции проверки валидности при отправке формы отзывов
       Функция принимает два параметра: 1. Правила валидности описанные в ReviewsRequest.php; 2. $value - передаваемое значение из формы отзывов  */
    public function submit(ReviewsRequest $value){
        // Создаём объект класса на основе модели класса Reviews
        $reviews = new Reviews();
        // Обращаемся к данному объекту класса->обращаемся к полю из БД = устанавливаем значение в переменную 'name/email/msg'
        $reviews->name = $value->input('name');
        $reviews->email = $value->input('email');
        $reviews->msg = $value->input('msg');

        // Добавляем все введённые значения из формы отзывов в БД
        $reviews->save();

        // Переадресовываем пользоваетя после отправки отзыва на страницу отзывов ->with вызывая сессию 'success' с уведомлением об отправке отзыва
        return redirect()->route('reviews')->with('success', 'Отзыв отправлен');
    }

    // Функция вывода всех отзывов на странцие Reviews
    public function allData(){
        // Создаём класс на основе нашей модели Reviews работающей с БД
        $reviews = new Reviews();
        return view('messages', ['data' => $reviews->all()]);
    }
}
