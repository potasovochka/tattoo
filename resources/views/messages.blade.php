@extends('layouts.app')

@section('content')
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
@endsection
