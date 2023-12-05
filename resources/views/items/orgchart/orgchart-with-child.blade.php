@php
    $flexDirection = $direction == 'v' ? 'flex-col' : 'flex-row';
    $flexReverse = $reverse ? $flexDirection.'-reverse' : $flexDirection;
    $orientation = $direction == 'v' ? 'vertical' : 'horizontal';
    $line = "items.orgchart.orgchart-$orientation-line";
@endphp
<div class="flex {{$flexReverse}} justify-center w-min">
    @include('items.orgchart.orgchart-item')
    <div class="flex justify-center items-center">
        @include($line)
    </div>
</div>