<!--В данном файле отслеживается вывод различных сообщений, таких как вывод ошибок, а также информативные сообщения-->

<!--Вывод ошибок при нарушении требований правил к валидности, описанных в ReviewsRequest.php при заполнении формы отзывов-->
@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!--Вывод информативных сообщений о выполненных действиях-->
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
