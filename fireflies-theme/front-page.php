<!-- Template for the home page -->

<?php get_header();?>

<section class="hv-center" id="home">
    <div class="container" id="home-content">
        <h1 class="large-heading">Alone a Speck, together a <b>revolution</b>.</h1> <br>
        <h3 class="">Welcome to <b>fireflies</b>, a safe community for people to explore, perform, and share various
            acts of advocacy.</h3>
        <div class="mt-5">
            <p class="mb-2">Sign up on our waiting list to hear about our launch!</p>
            <?php echo do_shortcode('[contact-form-7 id="6" title="Contact form 1"]'); ?>
        </div>
    </div>
</section>

<section id="fireflies-banner">
</section>

<section id="why-fireflies">
    <h1 class="d-block text-center medium-heading">Why Fireflies?</h1>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-md-6">
                <img class="w-100 rounded-img"
                    src="<?php echo get_template_directory_uri() ?>/assets/images/explore.png"
                    alt="Explore our 16 causes">
            </div>
            <div class="col-md-1"></div>
            <div class="col-12 col-md-5 wireframe-description">
                <h3 class="small-heading">Discover How to Help</h3>
                <p class="mt-3">Google is great, but it's not always the best place to find out about ways to advocate
                    for global issues. By providing an extensive database of vetted projects across 16 categories, we
                    want to help you discover reliable and relevant projects in any issue you care about.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <img class="w-100 rounded-img" src="<?php echo get_template_directory_uri() ?>/assets/images/act.png"
                    alt="Act Now">
            </div>
            <div class="col-md-1"></div>
            <div class="col-12 col-md-5 wireframe-description">
                <h3 class="small-heading">Make an Impact</h3>
                <p class="mt-3">Make an impact by donating to charities, volunteering (virtual options available),
                    signing petitions, learning about various global issues, and spreading awareness to others.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <img class="w-100 rounded-img" src="<?php echo get_template_directory_uri() ?>/assets/images/track.png"
                    alt="Track Your Progress">
            </div>
            <div class="col-md-1"></div>
            <div class="col-12 col-md-5 wireframe-description">
                <h3 class="small-heading">Maintain Your Portfolio</h3>
                <p class="mt-3">Keep track of the impact that you’ve made as an advocate on your impact portfolio. This
                    is an opportunity to show a unique, altruistic side of yourself that you haven’t been able to show
                    elsewhere</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <img class="w-100 rounded-img"
                    src="<?php echo get_template_directory_uri() ?>/assets/images/community.png" alt="Our community">
            </div>
            <div class="col-md-1"></div>
            <div class="col-12 col-md-5 wireframe-description">
                <h3 class="small-heading">Engage with the Community</h3>
                <p class="mt-3">Fireflies is home to the most supportive and encouraging community of advocates. Show
                    others what you are doing to change the world and inspire others to do the same.</p>
            </div>
        </div>
    </div>
</section>

<section id="ways-to-spread-love">
    <h1 class="d-block text-center medium-heading"><span class="regular-heading">ways to</span> Spread Love</h1>
    <p class="d-block text-center">supported by <strong>fireflies</strong></p>
    <div class="container mt-5">
        <div class="row hv-center">
            <div class="col-12 col-md-4 hv-center my-5">
                <div class="circle hv-center">
                    <div>
                        <h4 class="d-block text-center small-heading ">Donate</h4>
                        <p class="mt-3 w-75 mx-auto text-center">Donate to a charity of your choice</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 hv-center">
                <div class="circle hv-center">
                    <div>
                        <h4 class="d-block text-center small-heading ">Petition</h4>
                        <p class="mt-3 w-75 mx-auto text-center">Petition Sign petitions to demonstrate public support
                            and create change.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 hv-center">
                <div class="circle hv-center">
                    <div>
                        <h4 class="d-block text-center small-heading ">Volunteer</h4>
                        <p class="mt-3 w-75 mx-auto text-center">Volunteer Volunteer virtually or at a site near you.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 hv-center">
                <div class="circle hv-center">
                    <div>
                        <h4 class="d-block text-center small-heading ">Learn</h4>
                        <p class="mt-3 w-75 mx-auto text-center">Learn Educate yourself so that you can educate others.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 hv-center">
                <div class="circle hv-center">
                    <div>
                        <h4 class="d-block text-center small-heading ">Share</h4>
                        <p class="mt-3 w-75 mx-auto text-center">Share Share resources on social media to raise
                            awareness and inspire others.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer();?>