<!doctype html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>GameDB</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script defer src="theme.js"></script>
        <link rel="stylesheet" href="<?= URL ?>public/css/style.css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet" />
    </head>

    <body class="dark">
        <nav class="navigationbar">
            <ul class="navigationbar-nav">
                <li class="logo">
                    <a href="<?= URL ?>" class="navigation-link text-decoration-none">
                        <span class="link-text logo-text">gamedb</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <g class="fa-group">
                                <path fill="currentColor" d="M224 273L88.37 409a23.78 23.78 0 0 1-33.8 0L32 386.36a23.94 23.94 0 0 1 0-33.89l96.13-96.37L32 159.73a23.94 23.94 0 0 1 0-33.89l22.44-22.79a23.78 23.78 0 0 1 33.8 0L223.88 239a23.94 23.94 0 0 1 .1 34z" class="fa-secondary"></path>
                                <path fill="currentColor" d="M415.89 273L280.34 409a23.77 23.77 0 0 1-33.79 0L224 386.26a23.94 23.94 0 0 1 0-33.89L320.11 256l-96-96.47a23.94 23.94 0 0 1 0-33.89l22.52-22.59a23.77 23.77 0 0 1 33.79 0L416 239a24 24 0 0 1-.11 34z" class="fa-primary"></path>
                            </g>
                        </svg>
                    </a>
                </li>

                <li class="navigation-item">
                    <a href="<?= URL ?>games" class="navigation-link text-decoration-none">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 650 650">
                            <g class="fa-group">
                                <path fill="currentColor" d="M638.59 368.22l-33.37-211.59c-8.86-50.26-48.4-90.77-100.66-103.13h-.07a803.19 803.19 0 0 0-369 0C83.17 65.86 43.64 106.36 34.78 156.63L1.41 368.22C-8.9 426.73 38.8 480 101.51 480c49.67 0 93.77-30.07 109.48-74.64l7.52-21.36h203l7.49 21.36C444.72 449.93 488.82 480 538.49 480c62.71 0 110.41-53.27 100.1-111.78zM280 236a12 12 0 0 1-12 12h-52v52a12 12 0 0 1-12 12h-24a12 12 0 0 1-12-12v-52h-52a12 12 0 0 1-12-12v-24a12 12 0 0 1 12-12h52v-52a12 12 0 0 1 12-12h24a12 12 0 0 1 12 12v52h52a12 12 0 0 1 12 12zm152 76a40 40 0 1 1 40-40 40 40 0 0 1-40 40zm64-96a40 40 0 1 1 40-40 40 40 0 0 1-40 40z"	class="fa-secondary"></path>
                                <path fill="currentColor" d="M280 236a12 12 0 0 1-12 12h-52v52a12 12 0 0 1-12 12h-24a12 12 0 0 1-12-12v-52h-52a12 12 0 0 1-12-12v-24a12 12 0 0 1 12-12h52v-52a12 12 0 0 1 12-12h24a12 12 0 0 1 12 12v52h52a12 12 0 0 1 12 12z" class="fa-primary"></path>
                            </g>
                        </svg>
                        <span class="link-text">Games</span>
                    </a>
                </li>

                <li class="navigation-item">
                    <a href="<?= URL ?>genres" class="navigation-link text-decoration-none">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500">
                            <g class="fa-group">
                                <path fill="currentColor" d="M352 0H32A32 32 0 0 0 0 32v448a32 32 0 0 0 32 32h256a96 96 0 0 0 96-96V32a32 32 0 0 0-32-32zM160 344a8 8 0 0 1-8 8h-24v24a8 8 0 0 1-8 8h-16a8 8 0 0 1-8-8v-24H72a8 8 0 0 1-8-8v-16a8 8 0 0 1 8-8h24v-24a8 8 0 0 1 8-8h16a8 8 0 0 1 8 8v24h24a8 8 0 0 1 8 8zm72 40a24 24 0 1 1 24-24 24 24 0 0 1-24 24zM112 224a16 16 0 0 1-16-16V80a16 16 0 0 1 16-16h160a16 16 0 0 1 16 16v112a32 32 0 0 1-32 32zm184 112a24 24 0 1 1 24-24 24 24 0 0 1-24 24z" class="fa-secondary"></path></path>
                                <path fill="currentColor" d="M112 224a16 16 0 0 1-16-16V80a16 16 0 0 1 16-16h160a16 16 0 0 1 16 16v112a32 32 0 0 1-32 32z" class="fa-primary"></path>
                            </g>
                        </svg>
                        <span class="link-text">Genres</span>
                    </a>
                </li>

                <li class="navigation-item">
                    <a href="#" class="navigation-link text-decoration-none">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 650 550">
                            <g class="fa-group">
                                <path fill="currentColor" d="M8.86 96.5a16.11 16.11 0 0 0-7.2 21.5l57.23 114.5a16.11 16.11 0 0 0 21.5 7.2l17.32-8.48L26.09 88zm459-80.95a187.31 187.31 0 0 1-13.32 13.26C418.45 61.3 370.67 79.2 320 79.2s-98.41-17.9-134.51-50.39a187.31 187.31 0 0 1-13.32-13.26L54.76 73.75l71.69 143.4L137 212a16 16 0 0 1 23 14.4V480a32 32 0 0 0 32 32h256a32 32 0 0 0 32-32V226.3a16 16 0 0 1 23-14.4l10.57 5.18L585.19 73.7zm163.31 81l-17.32-8.59-71.6 143.19 17.24 8.45h.06a16 16 0 0 0 21.45-7.2L638.28 118a16 16 0 0 0-7.1-21.5z" class="fa-secondary"></path>
                                <path fill="currentColor" d="M320 47.2c-51.89 0-96.39-19.4-116.49-47.2l-31.34 15.55a187.31 187.31 0 0 0 13.32 13.26C221.59 61.3 269.37 79.2 320 79.2s98.43-17.9 134.53-50.39a187.31 187.31 0 0 0 13.32-13.26L436.51 0c-20.1 27.8-64.6 47.2-116.51 47.2zM26.09 88l71.62 143.22 28.74-14.07-71.69-143.4zm559.1-14.3l-71.68 143.38 28.74 14.07 71.61-143.24z" class="fa-primary"></path>
                            </g>
                        </svg>
                        <span class="link-text">Merchendise</span>
                    </a>
                </li>

                <li class="navigation-item">
                    <?php if($_SESSION['loggedIn'] < 0) { ?>
                        <a href="<?= URL ?>userPortal/login" class="navigation-link text-decoration-none">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 660 660">
                                <g class="fa-group">
                                    <path fill="currentColor" d="M608 288h-32v-80a80 80 0 0 0-160 0v80h-32a32 32 0 0 0-32 32v160a32 32 0 0 0 32 32h224a32 32 0 0 0 32-32V320a32 32 0 0 0-32-32zM496 432a32 32 0 1 1 32-32 32 32 0 0 1-32 32zm32-144h-64v-80a32 32 0 0 1 64 0z" class="fa-secondary"></path>
                                    <path fill="currentColor" d="M224 256A128 128 0 1 0 96 128a128 128 0 0 0 128 128zm96 64a63.08 63.08 0 0 1 8.1-30.5c-4.8-.5-9.5-1.5-14.5-1.5h-16.7a174.08 174.08 0 0 1-145.8 0h-16.7A134.43 134.43 0 0 0 0 422.4V464a48 48 0 0 0 48 48h280.9a63.54 63.54 0 0 1-8.9-32z" class="fa-primary"></path>
                                </g>
                            </svg>
                            <span class="link-text text-decoration-none">Login</span>
                        </a>

                    <?php } else { ?>
                        <a href="<?= URL ?>userPortal/logout" class="navigation-link text-decoration-none">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 660 660">
                                <g class="fa-group">
                                    <path fill="currentColor" d="M608 288h-32v-80a80 80 0 0 0-160 0v80h-32a32 32 0 0 0-32 32v160a32 32 0 0 0 32 32h224a32 32 0 0 0 32-32V320a32 32 0 0 0-32-32zM496 432a32 32 0 1 1 32-32 32 32 0 0 1-32 32zm32-144h-64v-80a32 32 0 0 1 64 0z" class="fa-secondary"></path>
                                    <path fill="currentColor" d="M224 256A128 128 0 1 0 96 128a128 128 0 0 0 128 128zm96 64a63.08 63.08 0 0 1 8.1-30.5c-4.8-.5-9.5-1.5-14.5-1.5h-16.7a174.08 174.08 0 0 1-145.8 0h-16.7A134.43 134.43 0 0 0 0 422.4V464a48 48 0 0 0 48 48h280.9a63.54 63.54 0 0 1-8.9-32z" class="fa-primary"></path>
                                </g>
                            </svg>
                            <p class="link-text">Logout: <?= $_SESSION['loggedInRName'] ?></p>
                        </a>
                    <?php } ?>
                </li>
            </ul>
            </a>
            </li>
            </ul>
        </nav>

        <main>