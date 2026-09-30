document.addEventListener('DOMContentLoaded', () => {


    /* ==================================================
       COLLABORATION VIDEOS
       Lazy-load YouTube iframe on click
       ================================================== */

    const videoFacades = document.querySelectorAll('.video-facade');

    videoFacades.forEach((button) => {

        button.addEventListener('click', () => {

            const wrapper = button.closest('.collaboration-video');
            const media = button.closest('.collaboration-video-media');

            if (!wrapper || !media) {
                return;
            }

            const videoId = wrapper.dataset.youtubeId;

            /*
             * Do nothing if the video ID has not been added yet.
             * This prevents broken iframes while the page is
             * still using placeholder IDs.
             */
            if (!videoId || videoId.startsWith('YOUR_')) {
                return;
            }

            /*
             * Prevent loading the same video twice.
             */
            if (media.querySelector('iframe')) {
                return;
            }

            const iframe = document.createElement('iframe');

            iframe.src =
                `https://www.youtube-nocookie.com/embed/${videoId}?autoplay=1&rel=0`;

            iframe.title = 'YouTube video';

            iframe.loading = 'lazy';

            iframe.allow =
                'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share';

            iframe.referrerPolicy =
                'strict-origin-when-cross-origin';

            iframe.allowFullscreen = true;

            media.replaceChildren(iframe);

        });

    });


    /* ==================================================
       FILM SCORING VIDEOS
       Lazy-load YouTube iframe on click
       ================================================== */

    const youtubeFacades = document.querySelectorAll('.youtube-play');

    youtubeFacades.forEach((button) => {

        button.addEventListener('click', () => {

            const facade = button.closest('.youtube-facade');

            if (!facade) {
                return;
            }

            const videoId = facade.dataset.youtubeId;
            const videoTitle =
                facade.dataset.youtubeTitle || 'YouTube video';

            /*
             * Do nothing if the video ID has not been added.
             */
            if (!videoId || videoId.startsWith('YOUR_')) {
                return;
            }

            /*
             * Prevent loading the same video twice.
             */
            if (facade.querySelector('iframe')) {
                return;
            }

            const iframe = document.createElement('iframe');

            iframe.src =
                `https://www.youtube-nocookie.com/embed/${videoId}?autoplay=1&rel=0`;

            iframe.title = videoTitle;

            iframe.loading = 'lazy';

            iframe.allow =
                'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share';

            iframe.referrerPolicy =
                'strict-origin-when-cross-origin';

            iframe.allowFullscreen = true;

            facade.replaceChildren(iframe);

        });

    });

});