

        <!-- Jquery -->
        <script src="<?= base_url("assets/front/vendor/jquery-3.5.1/jquery.js") ?>"></script>
        <!-- Popper -->
        <script src="<?= base_url("assets/front/vendor/popper/js/popper.min.js") ?>"></script>
        <!-- Bootstrap -->
        <script src="<?= base_url("assets/front/vendor/bootstrap-4.3.1/js/bootstrap.min.js") ?>"></script>
        <!-- Owl Carousel -->
        <script src="<?= base_url("assets/front/vendor/OwlCarousel2-2.3.4/dist/owl.carousel.js") ?>"></script>
        <!-- Toaster -->
        <script src="<?= base_url("assets/front/vendor/toastr/toastr.min.js") ?>"></script>
        <!-- Select 2 -->
        <script src="<?= base_url("assets/front/vendor/select2/js/select2.full.min.js") ?>"></script>
        <!-- social-share-buttons-c -->
        <script src="<?= base_url("assets/front/vendor/social-share-buttons-c/dist/jquery.c-share.min.js") ?>"></script>
    <!-- Bar Rating -->
    <script src="<?= base_url("assets/front/vendor/bar-ratings/jquery.barrating.min.js") ?>"></script>
        <!-- Code Mirror -->
        <script src="<?= base_url("assets/front/vendor/codemirror-5.55.0/lib/codemirror.js") ?>"></script>
        <script src="<?= base_url("assets/front/vendor/codemirror-5.55.0/mode/javascript/javascript.js") ?>"></script>
        <script src="<?= base_url("assets/front/vendor/codemirror-5.55.0/addon/hint/show-hint.js") ?>"></script>
        <script src="<?= base_url("assets/front/vendor/codemirror-5.55.0/addon/hint/javascript-hint.js") ?>"></script>
        <script src="<?= base_url("assets/front/vendor/codemirror-5.55.0/addon/hint/css-hint.js") ?>"></script>
        <script src="<?= base_url("assets/front/vendor/codemirror-5.55.0/addon/hint/xml-hint.js") ?>"></script>
        <script src="<?= base_url("assets/front/vendor/codemirror-5.55.0/addon/hint/html-hint.js") ?>"></script>
        <script src="<?= base_url("assets/front/vendor/codemirror-5.55.0/mode/css/css.js") ?>"></script>
        <script src="<?= base_url("assets/front/vendor/codemirror-5.55.0/mode/xml/xml.js") ?>"></script>
        <script src="<?= base_url("assets/front/vendor/codemirror-5.55.0/mode/htmlmixed/htmlmixed.js") ?>"></script>
        <!-- Summer Note -->
        <script src="<?= base_url("assets/front/vendor/summernote/summernote-bs4.min.js") ?>"></script>
        <!-- Chart Js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw==" crossorigin="anonymous"></script>
        <!-- WOW -->
    <script src="<?= base_url("assets/front/vendor/wow/wow.min.js") ?>"></script>
    <script src="http://stickyjs.com/jquery.sticky.js"></script>
    <script>
      $(document).ready(function(){
        $(".sticky_div").sticky({topSpacing: 100});
      });
    </script>
    <!-- Moment JS -->
    <script src="<?= base_url("assets/front/vendor/moment/min/moment.min.js") ?>"></script>
    <!-- App Scripts -->
        <script src="<?= base_url("assets/front/js/fetch-service.js") ?>"></script>
        <script src="<?= base_url("assets/front/js/location-select.js") ?>"></script>
        <script src="<?= base_url("assets/front/js/auth-service.js") ?>"></script>
        <script src="<?= base_url("assets/front/js/home-search-service.js") ?>"></script>
        <script src="<?= base_url("assets/front/js/product-inquiry-service.js") ?>"></script>
        <script src="<?= base_url("assets/front/js/product-quote-service.js") ?>"></script>
        <script src="<?= base_url("assets/front/js/review-service.js") ?>"></script>
        <script src="<?= base_url("assets/front/js/bulk-editor-service.js") ?>"></script>
        <script src="<?= base_url("assets/front/js/app.js") ?>"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    

         <?php if($this->session->flashdata('msg') == 1):?>
      <script>toastr.success('<?php echo $this->session->flashdata('alert_data')?>');</script>
      <?php elseif($this->session->flashdata('msg') == 2):?>
        <script>toastr.error('<?php echo $this->session->flashdata('alert_data')?>');</script>
    <?php endif;?>
    </body>
</html>
