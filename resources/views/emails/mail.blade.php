<h1>{{$mailData['page_name']}}</h1>
<p>Имя: {{$mailData['name']}}</p>
<p>Номер телефона: {{$mailData['number']}}</p>
@if (isset($mailData['title']))
    <p>Название товара {{$mailData['title']}}</p>
@endif