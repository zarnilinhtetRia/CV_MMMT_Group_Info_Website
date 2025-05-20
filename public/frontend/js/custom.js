// For Date

document.addEventListener("DOMContentLoaded", function () {
    const options = {
        year: "numeric",
        month: "long",
        day: "numeric",
    };
    const englishDate = new Date().toLocaleDateString("en-US", options);
    const arabicDate = new Date().toLocaleDateString(
        "ar-EG-u-ca-islamic",
        options
    );

    document.getElementById(
        "date-display"
    ).innerText = `(${englishDate} / ${arabicDate})`;
});

//  For Text Scroll

document.addEventListener("DOMContentLoaded", function () {
    const tickerText = document.getElementById("ticker-text");
    const spans = tickerText.querySelectorAll("span");
    const container = document.querySelector(".ticker-container");
    let index = 0;

    function startScroll() {
        // Hide all spans
        spans.forEach((span) => span.classList.add("d-none"));

        // Show current span
        const currentSpan = spans[index];
        currentSpan.classList.remove("d-none");

        // Reset ticker position
        tickerText.style.transition = "none";
        tickerText.style.transform = `translateX(${container.offsetWidth}px)`;

        void tickerText.offsetWidth; // Force reflow

        const textWidth = currentSpan.offsetWidth;
        const containerWidth = container.offsetWidth;
        const totalDistance = textWidth + containerWidth;
        const speed = 0.1; // px/ms
        const duration = totalDistance / speed;

        // Scroll
        tickerText.style.transition = `transform ${duration}ms linear`;
        tickerText.style.transform = `translateX(-${textWidth}px)`;

        // On scroll end, move to next
        setTimeout(() => {
            setTimeout(() => {
                index = (index + 1) % spans.length;
                startScroll();
            }, 500);
        }, duration);
    }

    startScroll();
});

//  For Carousel

$(document).ready(function () {
    $("#myCarousel").carousel({
        interval: 3000,
        ride: "carousel",
    });
});
