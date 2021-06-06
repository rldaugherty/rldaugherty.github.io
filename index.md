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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <title>Raymond Daugherty - Digital Designer</title>
</head>


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
                                    Media
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

        <footer id="footer">
            <p class="copyright">2020 Untitled. Design: <a href="mailto:ramymond.daugherty.jr@gmail.com">Raymond
                    Daugherty</a>.</p>
        </footer>
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="/assets/js/jquery.magnific-popup.js"></script>

</body>

</html>
