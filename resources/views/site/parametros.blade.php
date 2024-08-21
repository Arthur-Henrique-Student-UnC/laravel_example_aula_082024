{{-- --}}
@php
//Blocos de PHP puro, como esse bloco, em que o texto está escrito, precisam de ponto e vírgula.

@endphp

@if (count($frutas) > 0 && count($frutas) < 10)
    <h3>Há algumas frutas no Array</h3>
    @elseif (count($frutas) > 10)
        <h3>Há muitas frutas aqui!</h3>
    @else
        <h3>Não há frutas aqui.</h3>
@endif

<ul>
    @unless(empty($frutas))
    <li>Frutas disponíveis: </li>
    @foreach ($frutas as $fruta)
        <li>{{ $fruta }}</li>
    @endforeach
    @else
        <li>Nenhuma Fruta Disponível</li>
    @endunless
</ul>

{{--@isset--}}

<ul>
    @isset($frutas)
    <li>A variável $frutas está definida</li>
    @foreach ($frutas as $fruta)
        <li>{{ $fruta }}</li>
    @endforeach
    @endisset
</ul>