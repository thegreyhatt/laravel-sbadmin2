@if (is_string($item))

    <h6 class="collapse-header">{{ $item }}</h6>

@else

    <a class="collapse-item" href="{{ isset($item['url'])? $item['url'] : '#' }}">{{ $item['text'] }}</a>

@endif
