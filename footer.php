<?php wp_footer() ?>

<div class="w-100 d-flex flex-column flex-xl-row align-items-center align-items-xl-start justify-content-between bg-dark">
    <div class="d-flex justify-content-center col-xl-4 col-12">
        <img class="stedelijk-logo mt-5" src="<?php echo get_template_directory_uri(); ?>/images/stedelijk-logo.png" />
    </div>

    <div class="d-flex align-items-center justify-content-center col-xl-4 col-12">
        <div class="d-flex flex-column align-items-start w-75">
            <h4 class="footer-title mb-1 mt-5">NEWSLETTER</h4>
            <h5 class="footer-text mb-4">Keep up to date with Stedelijk</h5>
            <button type="button" class="btn bg-dark text-light mb-4 sign-up-btn">Sign up</button>
            <h4 class="footer-title mb-4">FOLLOW US</h4>
            <div class="w-100 mb-4">
                <i class="fab fa-facebook-f fa-3x mr-3 social-links"></i>
                <i class="fab fa-instagram fa-3x mx-3 social-links"></i>
                <i class="fab fa-twitter fa-3x mx-3 social-links"></i>
                <i class="fab fa-youtube fa-3x ml-3 social-links"></i>
            </div>
            <h5 class="copyright my-4">
                Disclaimer colophon privacy <br>
                © 2022 Stedelijk Museum Amsterdam
            </h5>
        </div>
    </div>

    <div class="d-flex align-items-center justify-content-center col-xl-4 col-12">
        <div class="d-flex flex-column align-items-start w-75">
            <img class="gemeente-logo mt-5 mb-5" src="<?php echo get_template_directory_uri(); ?>/images/GA-logo.png" />
            <h4 class="footer-title mb-5">PARTNER</h4>
            <img class="loterij-logo mb-5" src="<?php echo get_template_directory_uri(); ?>/images/loterij-logo.png" />

        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>