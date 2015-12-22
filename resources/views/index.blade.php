<!DOCTYPE html>
<!-- Kolo - Premium Startup Landing Page Template design by DSA79 (http://www.dsathemes.com) -->
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en"> <!--<![endif]-->

    <head>
        @include('includes.head')
    </head>

    <body>

        <!-- PRELOADER
        ============================================= -->
        <div class="animationload">
            <div class="loader"></div>
        </div>

        <!-- HEADER
        ============================================= -->
        <header id="header">
            @include('includes.header')     <!-- End navbar fixed top  -->
        </header>   <!-- END HEADER -->

        <!-- PAGE CONTENT WRAPPER
        ============================================= -->
        <div id="content_wrapper">

            <!-- INTRO
            ============================================= -->
            <section id="intro">
                @include('includes.intro')    <!-- End container -->
            </section>  <!-- END INTRO -->

            <!-- PRICING
            ============================================= -->
            <section id="details">
                @include('includes.details')  <!-- End container -->
            </section>   <!-- END PRICING -->

            <!-- STATISTIC BANNER
            ============================================= -->
            <div id="statistic_banner">
                @include('includes.stats')   <!-- End container -->
            </div>   <!-- END STATISTIC BANNER -->

            <!-- PORTFOLIO
            ============================================= -->
            <section id="images">
                @include('includes.portfolio')     <!-- End container -->
            </section>  <!-- END PORTFOLIO -->

            <!-- CLIENTS
            ============================================= -->
            <div id="clients">
                @include('includes.clients')     <!-- End container -->
            </div>  <!-- END CLIENTS -->

            <!-- BOTTOM PROMO LINE
            ============================================= -->
            <div id="inquire">
                @include('includes.bottomLine')     <!-- End container -->
            </div>      <!-- END BOTTOM PROMO LINE -->

            <!-- FOOTER
            ============================================= -->
            <footer id="footer">
                @include('includes.footer')     <!-- End container -->
            </footer>   <!-- END FOOTER -->

        </div> <!-- PAGE CONTENT WRAPPER -->

        <!-- EXTERNAL SCRIPTS
        ============================================= -->
        @include('includes.scripts')

    </body>

</html>
