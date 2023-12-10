document.addEventListener('DOMContentLoaded', function () {
    var video = document.getElementById('myVideo');

    // Optional: Add event listeners for additional functionality
    video.addEventListener('play', function () {
        console.log('Video is playing');
    });

    video.addEventListener('pause', function () {
        console.log('Video is paused');
    });

    video.addEventListener('ended', function () {
        console.log('Video has ended');
    });
});
