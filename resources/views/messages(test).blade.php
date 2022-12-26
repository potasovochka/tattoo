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
                        <input type="text" name="email" placeholder="Введите email" id="email"
                               class="form-control mt-2">
                        <textarea type="text" name="msg" placeholder="Введите сообщение" id="msg"
                                  class="form-control mt-2"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success mt-2">Отправить</button>
                </form>
            </div>
            <div class="col-5">
                <h3>Отзывы:</h3>
                @foreach($data as $element)
                    <div class="alert alert-info">
                        <!--Обращаемся к элементу массива для вывода из таблицы БД поля сообщение 'msg'-->
                        <h4>{{ $element->msg }}</h4>
                        <!--Обращаемся к имени автора сообщения-->
                        <p>{{ $element->name }}</p>
                        <!--Обращаемся к дате создания данного сообщения-->
                        <p><small>{{ $element->created_at }}</small></p>
                    </div>
                @endforeach
            </div>
@endsection
