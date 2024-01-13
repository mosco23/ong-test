@php
    $activities = \App\Models\EventPreview::where('active', true)->get();
    $my_events = [];
    foreach ($activities as $activity) {
        array_push($my_events, $activity->toText());
    }
@endphp
<header class="sticky top-0 left-0 right-0 z-30 "
    :class=" atTop ? 'shadow-lg bg-white text-indigo-800': 'bg-blue-950 text-white font-bold' "
    @scroll.window="atTop = (window.pageYOffset < 50) ? false: true"
    x-data="{
        index: -1,
        nextText() {
            this.index = (this.index + 1) % {{count($my_events)}};
        },
        isMobile: window.innerWidth < 768,
    }">
    <template x-if="!isMobile">
        @include('items.events.desktop-header-event')
    </template>
    <template x-if="isMobile">
        @include('items.events.mobile-header-event')
    </template>

    <x-navbar />
    @include('items.notifications.notification')
</header>