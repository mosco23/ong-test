@php
    // $progs = \App\Models\ProgActivity::all()->toArray();
    // $texts = [];
    // foreach ($progs as $prog) {
    //     $text= "Du"
    // }
@endphp
<header class="sticky top-0 left-0 right-0 z-30 "
    :class=" atTop ? 'shadow-lg bg-white text-indigo-800': 'bg-blue-950 text-white font-bold' "
    @scroll.window="atTop = (window.pageYOffset < 50) ? false: true">
    <div class="wow fadeIn overflow-hidden font-bold" :class=" atTop ? 'bg-white text-slate-800': 'bg-blue-950 text-white' "
        x-data="{
            events: [
                'Lancements des activites et dipisicing elit. Iusto quas culpa corporis voluptatem amet aliquid dolorem', 
                'text 2, ipsum dolor sit amet consectetur adipisicing elit. Iusto quas culpa corporis voluptatem amet aliquid doloremque corrupti aspernatur itaque? Nesciunt beatae corporis est blanditiis. Repellat cum maiores est quaerat! Voluptates?', 
                'text 3, ipsum dolor sit amet consectetur adipisicing elit. Iusto quas culpa corporis voluptatem amet aliquid doloremque corrupti aspernatur itaque? Nesciunt beatae corporis est blanditiis. Repellat cum maiores est quaerat! Voluptates?'
            ],
            index: -1,
            initTexts() {
                this.index = 0,
                setInterval(() => {
                    this.nextText();
                }, 10000); // 10000 milliseconds = 10 seconds
            },
            nextText() {
                this.index = (this.index + 1) % this.events.length;
            }
        }"
        x-init="initTexts()">
        <template x-for="(text, i) in events" :key="i">
            <div class="py-2" :class="i == index ?'px-2 scrolling-text' : 'hidden' ">
                <p x-text="text"></p>
            </div>
        </template>
    </div>

    <x-navbar />
</header>