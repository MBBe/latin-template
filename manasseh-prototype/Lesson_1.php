<!--/**
 * Created by PhpStorm.
 * User: a-mboyd
 * Date: 27/09/2017
 * Time: 11:35
 */-->
<!DOCTYPE html>
<head>
    <title>Lesson Template</title>
    <?php
    /*add includes for the document head and header php */
    include "./Template-Includes/d-document-header.php";
    include "./Template-Includes/d-page-header.php";
    include "./Template-Includes/d-breadcrumbs";
    ?>
</head>
<body>
<?php
/* add include for breadcrumbs here */
;
?>
<main id="primary" role="main" class="content-area">
    <div class="container">
        <?php
        /*add includes for banner and blurb here */
        include "./Template-Includes/Lesson-1-banner.php";
        include "./Content-Includes/Lesson-1-content.php";
        include "./Template-Includes/d-other-resources-banner.php";
        ?>
        <?php
        /*include resoucres banner here*/
        /*include "./Landingpage_Includes/d-beginners-latin-banner.php";*/
        ?>
    </div>
</main>
<?php
/*add include for the newsletter */
include "./Template-Includes/d-newsletter-signup.php";
?>
</body>
<footer id="footer" class="breather-top-bottom" role="contentinfo">
    <?php
    /* add include for footer here*/
    include "./Template-Includes/d-footer.php";
    ?>
</footer>