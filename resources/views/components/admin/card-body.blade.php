<div class="card-body @if(@isset($class)){{$class}}@endif" @if(@isset($style))style="{{$style}}"@endif>
    {{ $slot }}
</div>