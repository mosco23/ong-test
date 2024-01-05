@php
    $notifType = Session::get('type');
    $bg = '';
    switch ($notifType) {
        case 'error':
            $bg = 'bg-red-600';
            break;
        case 'warning':
            $bg = 'bg-orange-600';
            break;
        default:
            $bg = 'bg-green-600';
            break;
    }

@endphp
@if (Session::has('message'))
    <div class="{{ $bg }} text-white w-max mx-auto p-2 flex items-center justify-between space-x-3" :class="show ? 'block' : 'hidden'"
    x-data="{
        show: true,
    }">
    <p>{{ Session::get('message') }}</p>
    <p class="p-2 text-red-700 cursor-pointer" x-on:click="show = !show">X</p>
</div>
@endif