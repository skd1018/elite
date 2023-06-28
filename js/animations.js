const faders = document.querySelectorAll('.fade');
const sliders = document.querySelectorAll('.from-left');
const upFaders = document.querySelectorAll('.fadeup');
const slowFaders = document.querySelectorAll('.fadeups');
const appearOptions = {
    threshold: 0,
    rootMargin: "0px 0px -250px 0px"
};

const appearOnScroll = new IntersectionObserver(function(
        entries,
        appearOnScroll
    ) {
        entries.forEach(entry => {
            if (!entry.isIntersecting) {
                return;
            } else {
                entry.target.classList.add('show');
                appearOnScroll.unobserve(entry.target);
            }
        })
    },
    appearOptions);

faders.forEach(fader => {
    appearOnScroll.observe(fader);
});
sliders.forEach(slider => {
    appearOnScroll.observe(slider);
});
upFaders.forEach(upFader => {
    appearOnScroll.observe(upFader);
});
slowFaders.forEach(slowFader => {
    appearOnScroll.observe(slowFader);
});