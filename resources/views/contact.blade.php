@extends('layouts.app')

@section('title')Контакты@endsection

@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-4">
                <h3><img src="http://s1.iconbird.com/ico/2013/8/429/w512h5121377938389185040mappinstreamline.png" class="contact-img" alt="adres_logo"></h3>
                <h5>Адрес</h5>
                Центральный офис:<br>
                219 W 16TH ST NEW YORK NY 10011-6028 USA
            </div>

            <div class="col-4">
                <h3><img src="https://png.pngtree.com/png-vector/20191011/ourlarge/pngtree-phone-icon-png-image_1817554.jpg" class="contact-img" alt="phone_logo"></h3>
                <h5>Телефон:</h5>
                Стационарный номер: 52-23-42;<br>
                Мобильные:<br>
                097 123 12 12;<br>
                063 123 12 12;<br>
            </div>

            <div class="col-4">
                <h3><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQK1Y07sxePGQSWCqRFDDGtbMRr-Jz1HqgnJQ&usqp=CAU" class="contact-img" alt="phone_logo"></h3>
                <h5>Email:</h5>
                email@gmail.com

            </div>
        </div>
    </div>
@endsection
