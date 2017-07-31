<!DOCTYPE html>
    <head>
    <title>Learn Latin</title>
        <?php
            include "./includes/DocumentHead.php";
            include "./includes/header.php";
        ?>
    </head>

    <body>
        <!-- breadcrumbs start -->

        <div id="breadcrumb-holder" class="tna-breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumbs"><a href="http://www.nationalarchives.gov.uk/">Home</a>
                            <span class="sep">&gt;</span> <span><a href="http://www.nationalarchives.gov.uk/help-with-your-research/">Help with your research</a></span>
                            <span class="sep">&gt;</span> <span><a href="http://www.nationalarchives.gov.uk/help-with-your-research/reading-old-documents/">Reading old documents</a></span>
                            <span class="sep">&gt;</span> <span><a href="./LandingPage">Learn Latin 1086 - 1733</a></span>
                            <span class="sep">&gt;</span> <span>Beginners' Lesson 2</span>
                        </div>
                        <!-- .breadcrumbs -->
                    </div>
                </div>
            </div>
        </div>

        <!-- breadcrumbs end -->

        <!-- main content start -->

        <main id="primary" role="main" class="content-area">
            <div class="container">
                <!-- Banner -->
                <div class="row">
                    <div class="col-md-12 banner">
                        <article>
                            <div class="entry-header">
                                <h1>Beginners' Latin Lesson 2</h1>
                            </div>
                            <div class="entry-content clearfix breather-top">
                                <p>BLURB.</p>
                                <div class="text-right">
                                    <a class="button" href="">Previous Lesson</a>
                                    <a class="button" href="">Next Lesson</a>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>

                <!-- Tutorials -->
                <div class="row">
                    <?php
                        include './includes/sidebar.php';
                    ?>
                    <div class="col-md-9">
                        <div id="lesson-content-buttons" class="btn-group">
                            <button class="btn-lg" data-target="content-1">Intro to Nouns</button>
                            <button class="btn-lg" data-target="content-2">Word Order in Latin</button>
                            <button class="btn-lg" data-target="content-3">Six cases of Nouns</button>
                            <button class="btn-lg" data-target="content-4">First Declension Nouns</button>
                            <button class="btn-lg" data-target="content-5">ACTIVITY</button>
                        </div>
                        <div class="lesson-content">
                            <div id="content-1">
                                <?php
                                    include './lesson-content/content-1-intro-to-nouns.php';
                                ?>
                            </div>
                            <div id="content-2">
                                <?php
                                    include './lesson-content/content-2-word-order-in-latin.php';
                                ?>
                            </div>
                            <div id="content-3">
                                <?php
                                    include './lesson-content/content-3-six-cases-of-nouns.php';
                                ?>
                            </div>
                            <div id="content-4">
                                <?php
                                    include './lesson-content/content-4-first-declension-nouns.php';
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <article>
                            <div class="entry-header">
                                <h2>
                                    Other Resources:
                                </h2>
                            </div>
                            <div class="entry-content clearfix">
                                <ul class="child">
                                    <li><a href="">Glossary</a></li>
                                    <li><a href="">Word List</a></li>
                                    <li><a href="">Grammar Table</a></li>
                                    <li><a href="">Dating Latin Documents</a></li>
                                    <li><a href="">How to Decline Personal Names</a></li>
                                    <li><a href="">Problems with Latin and the Documents</a></li>
                                </ul>
                            </div>
                        </article>
                    </div>
                </div>

            </div>
        </main>
        <!-- main content end -->
        <?php

                include "./includes/NewsletterSignup.php";

        ?>

    </body>

    <footer id="footer" class="breather-top-bottom" role="contentinfo">
        
        <?php
        include "./includes/footer.php";
        ?>
        <script src="./content-switch.js"></script>
    </footer>
