<!DOCTYPE html>
<html lang="en">
<!------------------------

    NOTES: 
    - Make portfolio images grayscale using CSS, then full color on hover: 
    .portfolio-img {
      /* filter: url(filters.svg#grayscale); Firefox 3.5+ */
      filter: gray; /* IE5+ */
      -webkit-filter: grayscale(1); /* Webkit Nightlies & Chrome Canary */
      -webkit-transition: all .5s ease-in-out;
    }

    .portfolio-img:hover {
      filter: none;
      -webkit-filter: grayscale(0);
      -webkit-transform: scale(1.01);
    }

    -- Add a "Portfolio" button at the top of the page.
        https://www.youtube.com/watch?v=1D4FzPcEiN4

        "Intelligence is knowing Frankenstein was the doctor, not the monster. Wisdom is knowing that Frankenstein was really the true monster."

------------------->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/scss/styles.css">
    <link rel="stylesheet" href="/assets/scss/magnific-popup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <title>Raymond Daugherty - Digital Designer</title>
</head>

<body class="is-preload">
    <!------------------------------------------------------------------------ -->
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!------------------------------------------------------------------------ -->

    <div id="wrapper">
        <!--- INTRO -->
        <div class="page__style intro">
            <div class="page__description">
                <div id="intro">
                    <div class="box"></div>

                    <header id="homepage-header">
                        <div class="logo">
                            <span class="icon"></span>
                        </div>
                        <div class="header-content">
                            <div class="inner">
                                <h1 id="full-name" class="dark-shadow">Raymond Lane Daugherty</h1>
                                <p>
                                    Digital Designer with experience in beautiful Web Design and Print
                                    Medias
                                </p>
                            </div>
                        </div>
                        <nav>
                            <ul>
                                <li><button class="btn_nav work_link">Work</button></li>
                                <li><button class="btn_nav about_link">About Me</button></li>
                                <li><button class="btn_nav contact_link">Contact</button></li>
                                <!-- li><a href="#elements">Elements</a></li -->
                            </ul>
                        </nav>
                    </header>

                </div>
            </div>
        </div>

        <!--- WORK -->
        <?php
        include("work.php");
        ?>
        <!--- /END WORK -->
        <footer id="footer">
            <p class="copyright">2020 Untitled. Design: <a href="mailto:ramymond.daugherty.jr@gmail.com">Raymond
                    Daugherty</a>.</p>
        </footer>
    </div>
    <!------------------------------------------------------------------------ -->
    <div class="bg"></div>
    <!------------------------------------------------------------------------ -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>
    <script src="/assets/js/jquery.magnific-popup.js"></script>
    <script>
    $(document).ready(function() {
        // Fakes the loading setting a timeout
        setTimeout(function() {
            $("body").addClass("loaded");
        }, 10);
        $('.intro').addClass('fadeIn');
    });
    // Pop-up script
    $('.open-popup-text').magnificPopup({
        type: 'inline',
        midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
    });

    // Mobile Nav
    document.querySelector(".menu-btn").addEventListener(
        "click", // Listens for the 'click'
        () => document.querySelector(".main-menu").classList.toggle(
            "show-menu") // Toggles the "show" class to the main-menu class
    );

    // Page Transition Javascript
    $('.btn_nav').click(function() {
        // $('.bg').addClass('hide');
        // animate content
        $('.page__style').addClass('animate_content');
        $('.page__description').fadeOut(100).delay(2800).fadeIn();
        $('.bg').fadeOut(100).delay(2800).fadeIn();

        setTimeout(function() {
            $('.page__style').removeClass('animate_content');
        }, 3200);

        //remove fadeIn class after 1500ms
        setTimeout(function() {
            $('.page__style').removeClass('fadeIn');
        }, 1500);

    });

    // on click show page after 1500ms
    $('.intro_link').click(function() {
        setTimeout(function() {
            $('.intro').addClass('fadeIn');
        }, 1500);
    });

    $('.work_link').click(function() {
        setTimeout(function() {
            $('.work').addClass('fadeIn');
        }, 1500);
    });

    $('.about_link').click(function() {
        setTimeout(function() {
            $('.about').addClass('fadeIn');
        }, 1500);
    });

    $('.contact_link').click(function() {
        setTimeout(function() {
            $('.contact').addClass('fadeIn');
        }, 1500);
    });
    </script>





    <script src="/assets/js/imagesloaded.pkgd.min.js"></script>
    <script>
    /**
     * Set appropriate spanning to any masonry item
     *
     * Get different properties we already set for the masonry, calculate 
     * height or spanning for any cell of the masonry grid based on its 
     * content-wrapper's height, the (row) gap of the grid, and the size 
     * of the implicit row tracks.
     *
     * @param item Object A brick/tile/cell inside the masonry
     * @link https://w3bits.com/css-grid-masonry/
     */
    function resizeMasonryItem(item) {
        /* Get the grid object, its row-gap, and the size of its implicit rows */
        var grid = document.getElementsByClassName('masonry')[0];
        if (grid) {
            var rowGap = parseInt(window.getComputedStyle(grid).getPropertyValue('grid-row-gap')),
                rowHeight = parseInt(window.getComputedStyle(grid).getPropertyValue('grid-auto-rows')),
                gridImagesAsContent = item.querySelector('img.masonry-content');

            /*
             * Spanning for any brick = S
             * Grid's row-gap = G
             * Size of grid's implicitly create row-track = R
             * Height of item content = H
             * Net height of the item = H1 = H + G
             * Net height of the implicit row-track = T = G + R
             * S = H1 / T
             */
            var rowSpan = Math.ceil((item.querySelector('.masonry-content').getBoundingClientRect().height + rowGap) / (
                rowHeight + rowGap));

            /* Set the spanning as calculated above (S) */
            item.style.gridRowEnd = 'span ' + rowSpan;
            if (gridImagesAsContent) {
                item.querySelector('img.masonry-content').style.height = item.getBoundingClientRect().height + "px";
            }
        }
    }

    /**
     * Apply spanning to all the masonry items
     *
     * Loop through all the items and apply the spanning to them using 
     * `resizeMasonryItem()` function.
     *
     * @uses resizeMasonryItem
     * @link https://w3bits.com/css-grid-masonry/
     */
    function resizeAllMasonryItems() {
        // Get all item class objects in one list
        var allItems = document.querySelectorAll('.masonry-item');

        /*
         * Loop through the above list and execute the spanning function to
         * each list-item (i.e. each masonry item)
         */
        if (allItems) {
            for (var i = 0; i > allItems.length; i++) {
                resizeMasonryItem(allItems[i]);
            }
        }
    }

    /**
     * Resize the items when all the images inside the masonry grid 
     * finish loading. This will ensure that all the content inside our
     * masonry items is visible.
     *
     * @uses ImagesLoaded
     * @uses resizeMasonryItem
     * @link https://w3bits.com/css-grid-masonry/
     */
    function waitForImages() {
        //var grid = document.getElementById("masonry");
        var allItems = document.querySelectorAll('.masonry-item');
        if (allItems) {
            for (var i = 0; i < allItems.length; i++) {
                imagesLoaded(allItems[i], function(instance) {
                    var item = instance.elements[0];
                    resizeMasonryItem(item);
                    console.log("Waiting for Images");
                });
            }
        }
    }

    /* Resize all the grid items on the load and resize events */
    var masonryEvents = ['load', 'resize'];
    masonryEvents.forEach(function(event) {
        window.addEventListener(event, resizeAllMasonryItems);
    });

    /* Do a resize once more when all the images finish loading */
    waitForImages();
    </script>
</body>

</html>