<section class="py-12 bg-white">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 mx-3 md:mx-5 lg:mx-auto lg:w-4/5 gap-y-2 md:gap-3 lg:gap-4 lg:h-3/4">
        @foreach (App\Models\Report::getReports('is_pv') as $key => $report)
            @include('items.report-card')
        @endforeach
    </div>
</section>