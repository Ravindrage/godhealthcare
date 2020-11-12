<?php
/**
 * The template part for top header
 *
 * @package VW Medical Care 
 * @subpackage vw_medical_care
 * @since VW Medical Care 1.0
 */
?>
<?php if( get_theme_mod('vw_medical_care_topbar_hide_show',true) != ''){ ?>
  <div id="topbar">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6">
          <?php if( get_theme_mod( 'vw_medical_care_header_text') != '') { ?>
            <p><?php echo esc_html(get_theme_mod('vw_medical_care_header_text',''));?></p>
          <?php }?>
        </div>      
        <div class="col-lg-5 col-md-5">
          <?php dynamic_sidebar('social-links'); ?>
        </div>
        <div class="col-lg-1 col-md-1">
          <?php if( get_theme_mod( 'vw_medical_care_header_search',true) != '') { ?>
            <div class="search-box">
              <button type="button" data-toggle="modal" data-target="#myModal"><i class="fas fa-search"></i></button>
            </div>
          <?php }?>
        </div>
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-body">
              <div class="serach_inner">
                <?php get_search_form(); ?>
              </div>
            </div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php }?>