@php
    $activities = \App\Models\Activity::all();
    $my_events = [];
    foreach ($activities as $activity) {
        array_push($my_events, $activity->toText());
    }
@endphp
<header class="sticky top-0 left-0 right-0 z-30 "
    :class=" atTop ? 'shadow-lg bg-white text-indigo-800': 'bg-blue-950 text-white font-bold' "
    @scroll.window="atTop = (window.pageYOffset < 50) ? false: true">
    @include('items.events.desktop-header-event')
    @include('items.events.mobile-header-event')

    <x-navbar />
    @include('items.notifications.notification')
</header>