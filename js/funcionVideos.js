
/*const videoThumbnails = document.querySelectorAll('.video-thumbnail');

videoThumbnails.forEach(thumbnail => {
    thumbnail.addEventListener('click', function (e) {
        e.preventDefault();

        const videoContainer = this.nextElementSibling;
        const videoPlayer = videoContainer.querySelector('.video-player');
        const videoSource = this.getAttribute('data-video');

        if (!videoPlayer.paused) {
            videoPlayer.pause();
            videoPlayer.currentTime = 0;
            videoContainer.style.display = 'none';
            thumbnail.style.display = 'block';
        } else {
            if (videoContainer.requestFullscreen) {
                videoContainer.requestFullscreen();
            } else if (videoContainer.mozRequestFullScreen) {
                videoContainer.mozRequestFullScreen();
            } else if (videoContainer.webkitRequestFullscreen) {
                videoContainer.webkitRequestFullscreen();
            } else if (videoContainer.msRequestFullscreen) {
                videoContainer.msRequestFullscreen();
            }

            videoPlayer.src = videoSource;
            videoPlayer.load();
            videoContainer.style.display = 'block';
            thumbnail.style.display = 'none';

            videoPlayer.play();

            videoPlayer.addEventListener('ended', function () {
                if (document.fullscreenElement) {
                    if (document.exitFullscreen) {
                        document.exitFullscreen();
                    } else if (document.mozCancelFullScreen) {
                        document.mozCancelFullScreen();
                    } else if (document.webkitExitFullscreen) {
                        document.webkitExitFullscreen();
                    } else if (document.msExitFullscreen) {
                        document.msExitFullscreen();
                    }
                }

                videoPlayer.pause();
                videoPlayer.currentTime = 0;
                videoContainer.style.display = 'none';
                thumbnail.style.display = 'block';
            });
        }
    });

    const exitFullscreenHandler = () => {
        if (!document.fullscreenElement) {
            const videoContainer = thumbnail.nextElementSibling;
            const videoPlayer = videoContainer.querySelector('.video-player');
            videoPlayer.pause();
            videoPlayer.currentTime = 0;
            videoContainer.style.display = 'none';
            thumbnail.style.display = 'block';
        }
    };

    document.addEventListener('fullscreenchange', exitFullscreenHandler);
    document.addEventListener('mozfullscreenchange', exitFullscreenHandler);
    document.addEventListener('webkitfullscreenchange', exitFullscreenHandler);
    document.addEventListener('msfullscreenchange', exitFullscreenHandler);
});
*/