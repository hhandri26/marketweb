<section class="blog-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
              <div class="tt-sidebar-wrapper" role="complementary">
                  <?php $this->load->view($list_terbaru); ?>
                  <?php $this->load->view($catagori); ?>
                  <?php $this->load->view($iklan); ?>
              </div>
            </div>
  
            <div class="col-md-8">
              <div class="posts-content default-blog">
                <?php $this->load->view($content); ?>
                <?php $this->load->view($pagination); ?>
              </div>
            </div>

          </div>
    </div>
</section>
