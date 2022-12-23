@extends('layouts.app')

@section('title')Отзывы@endsection

@section('content')
    <div class="container mt-3">
        <div class="row align-items-center">
            <div class="col-5">
                <!--Подключаем файл вывода ошибок и уведомлений-->
                @include('inc.warnings')

                <form action="{{ route('reviews-form') }}" method="post">
                    <!--Добавление скрытого ключа для безопасной обработки формы-->
                    @csrf
                    <div class="form-group">
                        <label for="name">Оставить отзыв:</label>
                        <input type="text" name="name" placeholder="Введите имя" id="name" class="form-control mt-2">
                        <input type="text" name="email" placeholder="Введите email" id="email" class="form-control mt-2">
                        <textarea type="text" name="msg" placeholder="Введите сообщение" id="msg" class="form-control mt-2"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success mt-2">Отправить</button>
                </form>
            </div>
            <div class="col-5">
                <!--Подключаем вывод отзывов из БД через функцию allData описанной в конструкторе ReviewsController-->
                <h4>Здесь должен быть вывод отзывов из БД</h4>
                @yield('content')
            </div>
        </div>
    </div>
@endsection
