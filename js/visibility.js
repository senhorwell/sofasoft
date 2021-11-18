function isInViewport(el) {
    const rect = el.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)

    );
}

function animateText() {
    var textWrapper = document.querySelector('.ml3');
    textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

    anime.timeline({ loop: true })
        .add({
            targets: '.ml3 .letter',
            opacity: [0, 1],
            easing: "easeInOutQuad",
            duration: 500,
            delay: (el, i) => 150 * (i + 1)
        }).add({
            targets: '.ml3',
            opacity: 0,
            duration: 500,
            easing: "easeOutExpo",
            delay: 500
        });
}

const box = document.querySelector('#medindo');
const message = document.querySelector('#message');

document.addEventListener('scroll', function() {
    const tentativa1 = isInViewport(box) ?
        animateText() : '';

}, {
    passive: true
});