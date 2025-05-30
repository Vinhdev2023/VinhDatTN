<div @if (@isset($cardSolid))
    @class(['card', 'card-solid' => $cardSolid])
    @else
    class="card @if(@isset($class)){{$class}}@endif"
    @endif >
    {{ $slot }}
</div>