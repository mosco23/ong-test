document.addEventListener('alpine:init', () => {
    Alpine.data('clock', () => ({
        counter: 0,
        max: 100,
        init(){
            setInterval(() => {
                if(this.counter === this.max){
                    clearInterval;
                }else{
                    this.counter += 1;
                }
            }, 30)
        },
    }))
});





