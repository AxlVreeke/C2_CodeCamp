const btn = document.getElementById('toggle');
const iframe = document.getElementById('map');
const frame = document.getElementById('frame');

btn.addEventListener('click', function() {
    if (iframe === iframe.requestFullscreen) {
        iframe.style.display = "block";
        frame.style.height = "200px";
        frame.style.width = "300px";
    } else {
        frame.style.height = "100%";
        frame.style.width = "100%";
        iframe.requestFullscreen();
    }
});