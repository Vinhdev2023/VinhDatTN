<div @if (@isset($cardSolid))
    @class(['card', 'card-solid' => $cardSolid])
    @else
    class="card"
    @endif >
    {{ $slot }}
</div>