<!-- Template for the home page -->

<?php get_header();?>

<section class="hv-center" id="home">
    <div class="container" id="home-content">
        <h1 class="large-heading position-relative" data-aos="fade-up">Alone a <span id="speck"></span> speck, together a
            <b id="movement">movement</b>.</h1> <br>
        <h3 class="mt-2" data-aos="fade-up">Welcome to <b>Fireflies</b>, a social media platform for changemakers. Make an impact by advocating for the causes that you care about.</h3>
        <div class="mt-5" data-aos="fade-up" data-aos-duration="750">
            <p class="mb-2">Sign up on our waiting list to hear about our launch.</p> <br>
            <?php echo do_shortcode('[contact-form-7 id="6" title="Contact form 1"]'); ?>
        </div>
    </div>
</section>

<section id="fireflies-banner" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="-300">
    <img id="banner-firefly" src="<?php echo get_template_directory_uri() ?>/assets/images/logos/logo-white.png"
        alt="Logo White" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="-300" data-aos-easing="ease-out-cubic">
</section>

<section id="why-fireflies">
    <h1 class="d-block text-center medium-heading" id="how-it-works-heading" data-aos="zoom-in-down">How It Works</h1>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-md-6">
                <img class="w-100 my-3 wireframe" data-aos="fade-right" data-aos-offset="300"
                    src="<?php echo get_template_directory_uri() ?>/assets/images/wireframes/1.png"
                    data-toggle="modal" data-target="#modal-step-1" alt="Explore our 16 causes">
            </div>
            <div class="col-md-1"></div>
            <div class="col-12 col-md-5 wireframe-description hv-center">
                <div class="my-3" data-aos="fade-left" data-aos-offset="300">
                    <h1 class="medium-heading">1</h1> <br>
                    <h3 class="small-heading">Discover How to Help</h3>
                    <p class="mt-3">Google is great, but it's not always the best place to find out about ways to
                        advocate
                        for global issues. By providing an extensive <b>database</b> of vetted projects across 16
                        categories,
                        we
                        want to help you discover reliable and relevant projects in any issue you care about.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <img class="w-100 my-3 wireframe" data-aos="fade-right" data-aos-offset="300"
                    src="<?php echo get_template_directory_uri() ?>/assets/images/wireframes/2.png"
                    data-toggle="modal" data-target="#modal-step-2" alt="Advocate for a Cause">
            </div>
            <div class="col-md-1"></div>
            <div class="col-12 col-md-5 wireframe-description hv-center">
                <div class="my-3" data-aos="fade-left" data-aos-offset="300">
                    <h1 class="medium-heading">2</h1> <br>
                    <h3 class="small-heading">Make an Impact</h3>
                    <p class="mt-3">Make an impact by <b>donating</b> to charities, <b>volunteering</b> (virtual options
                        available),
                        <b>signing</b> petitions, <b>learning</b> about various global issues, and spreading awareness
                        to others.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <img class="w-100 my-3 wireframe" data-aos="fade-right" data-aos-offset="300"
                    src="<?php echo get_template_directory_uri() ?>/assets/images/wireframes/3.png"
                    data-toggle="modal" data-target="#modal-step-3" alt="Match">
            </div>
            <div class="col-md-1"></div>
            <div class="col-12 col-md-5 wireframe-description hv-center">
                <div class="my-3" data-aos="fade-left" data-aos-offset="300">
                    <h1 class="medium-heading">3</h1> <br>
                    <h3 class="small-heading">Match & Get Matched</h3>
                    <p class="mt-3">Amplify your impact by creating <b>"matchraisers"</b> that allow you to securely and
                        swiftly
                        match others' donations. No more tedious verification and manual donations — matching has never
                        been
                        easier. Share your matchraiser with friends and family, and watch your impact grow.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <img class="w-100 my-3 wireframe" data-aos="fade-right" data-aos-offset="300"
                    src="<?php echo get_template_directory_uri() ?>/assets/images/wireframes/4.png"
                    data-toggle="modal" data-target="#modal-step-4" alt="Track Your Progress">
            </div>
            <div class="col-md-1"></div>
            <div class="col-12 col-md-5 wireframe-description hv-center">
                <div class="my-3" data-aos="fade-left" data-aos-offset="300">
                    <h1 class="medium-heading">4</h1> <br>
                    <h3 class="small-heading">Maintain Your Portfolio</h3>
                    <p class="mt-3">Keep track of the impact that you’ve made as an advocate on your <b>shareable impact
                            portfolio</b>. This is an opportunity to show a unique, altruistic side of yourself that you
                        haven’t been able to show elsewhere.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <img class="w-100 my-3 wireframe" data-aos="fade-right" data-aos-offset="300"
                    src="<?php echo get_template_directory_uri() ?>/assets/images/wireframes/5.png"
                    data-toggle="modal" data-target="#modal-step-5" alt="Our community">
            </div>
            <div class="col-md-1"></div>
            <div class="col-12 col-md-5 wireframe-description hv-center">
                <div class="my-3" data-aos="fade-left" data-aos-offset="300">
                    <h1 class="medium-heading">5</h1> <br>
                    <h3 class="small-heading">Join the Community</h3>
                    <p class="mt-3">Fireflies is home to the most supportive and encouraging <b>community of advocates</b>.
                        Show
                        others what you are doing to change the world and inspire others to do the same.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="splitter">
    <div id="wavy-splitter"></div>
</section>

<section id="ways-to-spark-change">
    <h1 class="d-block text-center medium-heading" data-aos="zoom-in-down" data-aos-offset="500">Ways to <b id="spark">Spark</b> Change</h1>
    <p class="d-block text-center" data-aos="zoom-in-down" data-aos-offset="500">supported by <strong>Fireflies</strong>
    </p>
    <div class="container-xl mt-5">
        <div class="row">
            <div class="col-12 col-md-3 d-flex flex-column text-center my-3">
                <img class="change-icon mx-auto" src="<?php echo get_template_directory_uri() ?>/assets/images/icons/donate.png" alt="Donate" data-aos="flip-left" data-aos-duration="1000">
                <div class="text-center" data-aos="zoom-in-up" data-aos-duration="500" data-aos-offset="300">
                    <h3 class="d-block text-center small-heading">Donate</h4>
                    <p class="mt-3 change-descriptions mx-auto text-center">Donate to a charity of your choice. Every dollar counts.</p>
                </div>
            </div>
            <div class="col-12 col-md-3 d-flex flex-column text-center my-3">
                <img class="change-icon mx-auto" src="<?php echo get_template_directory_uri() ?>/assets/images/icons/volunteer.png" alt="Volunteer" data-aos="flip-left" data-aos-duration="1000">
                <div class="text-center" data-aos="zoom-in-up" data-aos-duration="500" data-aos-offset="300">
                    <h3 class="d-block text-center small-heading">Volunteer</h4>
                    <p class="mt-3 change-descriptions mx-auto text-center">Volunteer virtually or at a site near you.</p>
                </div>
            </div>
            <div class="col-12 col-md-3 d-flex flex-column text-center my-3">
                <img class="change-icon mx-auto" src="<?php echo get_template_directory_uri() ?>/assets/images/icons/fireflies-text.png" alt="Petition" data-aos="flip-left" data-aos-duration="1000">
                <div class="mt-auto" data-aos="zoom-in-up" data-aos-duration="500" data-aos-offset="300">
                    <h3 class="d-block text-center small-heading">Petition</h4>
                    <p class="mt-3 change-descriptions mx-auto text-center">Sign petitions to demonstrate public support.</p>
                </div>
            </div>
            <div class="col-12 col-md-3 d-flex flex-column text-center my-3">
                <img class="change-icon mx-auto" src="<?php echo get_template_directory_uri() ?>/assets/images/icons/learn.png" alt="Learn" data-aos="flip-left" data-aos-duration="1000">
                <div class="mt-auto" data-aos="zoom-in-up" data-aos-duration="500" data-aos-offset="300">
                    <h3 class="d-block text-center small-heading">Learn</h4>
                    <p class="mt-3 change-descriptions mx-auto text-center">Educate yourself so that you can educate others.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Step 1 -->
<div class="modal fade" id="modal-step-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <a href="" class="close-modal disabled">1. Discover How to Help</a>
                <a href="" class="close-modal active ml-auto" data-toggle="modal" data-target="#modal-step-2">
                    2. Make an Impact
                </a>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal Body -->
            <div class="modal-body text-center">
                <img class="wireframe-preview"
                    src="<?php echo get_template_directory_uri() ?>/assets/images/wireframes/explore.png"
                    alt="Explore our 16 causes">
            </div>
        </div>
    </div>
</div>

<!-- Step 2 -->
<div class="modal fade" id="modal-step-2">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <a href="" class="close-modal mr-auto active" data-toggle="modal" data-target="#modal-step-1">1. Discover How to
                    Help</a>
                    <a href="" class="close-modal disabled mx-auto">2. Make an Impact</a>
                <a href="" class="close-modal active ml-auto" data-toggle="modal" data-target="#modal-step-3">3. Match &
                    Get Matched</a>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal Body -->
            <div class="modal-body text-center">
                <img class="wireframe-preview"
                    src="<?php echo get_template_directory_uri() ?>/assets/images/wireframes/advocate.png"
                    alt="Advocate for a Cause">
            </div>
        </div>
    </div>
</div>

<!-- Step 3 -->
<div class="modal fade" id="modal-step-3">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <a href="" class="close-modal mr-auto active" data-toggle="modal" data-target="#modal-step-2">2. Make an
                    Impact</a>
                    <a href="" class="close-modal disabled mx-auto">3. Match & Get Matched</a>
                <a href="" class="close-modal active ml-auto" data-toggle="modal" data-target="#modal-step-4">4.
                    Maintain Your Portfolio</a>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal Body -->
            <div class="modal-body text-center">
                <img class="wireframe-preview"
                    src="<?php echo get_template_directory_uri() ?>/assets/images/wireframes/match.png" alt="Match">
            </div>
        </div>
    </div>
</div>

<!-- Step 4 -->
<div class="modal fade" id="modal-step-4">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <a href="" class="close-modal mr-auto active" data-toggle="modal" data-target="#modal-step-3">3. Match & Get Matched</a>
                <a href="" class="close-modal disabled mx-auto">4. Maintain Your Portfolio</a>
                <a href="" class="close-modal active ml-auto" data-toggle="modal" data-target="#modal-step-5">5. Join the Community</a>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal Body -->
            <div class="modal-body text-center">
                <img class="wireframe-preview"
                    src="<?php echo get_template_directory_uri() ?>/assets/images/wireframes/portfolio.png"
                    alt="Track Your Progress">
            </div>
        </div>
    </div>
</div>

<!-- Step 5 -->
<div class="modal fade" id="modal-step-5">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
             <!-- Modal Header -->
             <div class="modal-header">
                <a href="" class="close-modal mr-auto active" data-toggle="modal" data-target="#modal-step-4">4. Maintain Your Portfolio</a>
                <a href="" class="close-modal disabled ml-auto">5. Join
                    the Community</a>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal Body -->
            <div class="modal-body text-center">
                <img class="wireframe-preview"
                    src="<?php echo get_template_directory_uri() ?>/assets/images/wireframes/community.png"
                    alt="Our community">
            </div>
        </div>
    </div>
</div>

<?php get_footer();?>