<?php
// Данный файл предназначен для описания проверок валидности заполненых полей в форме отзывов, а также настройки уведомлений

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReviewsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // При значении ture пользователь может отправлять данные даже если он не авторизован
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */

    /* В функции указываем правила для проверки на валидность (правильность) заполнения полей формы
       где required - обязательное к заполнению, min и max - длина значений требуемых к заполнению поля */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email',
            'msg' => 'required|min:10|max:100',
        ];
    }
    // Изменение стандартного вывода ошибок бутсрапом, с переводом сообщения из английского
    public function messages() {
        return [
            'name.required' => 'поле Имя является обязательным',
            'email.email' => 'поле Емейл является обязательным',
            'msg.required' => 'поле Сообщение является обязательным',
        ];
    }
}
