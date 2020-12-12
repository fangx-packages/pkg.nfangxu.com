<ol class="breadcrumb">
    @foreach($breadcrumb as $i => $item)
        @if($i + 1 === count($breadcrumb))
            <li class="breadcrumb-item active" aria-current="page">{{ $item['label'] ?? '#' }}</li>
        @else
            <li class="breadcrumb-item"><a href="{{ $item['url'] ?? '' }}">{{ $item['label'] ?? '#' }}</a></li>
        @endif
    @endforeach
</ol>