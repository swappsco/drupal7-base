<header role="banner" id="header">
  <div class="container-fluid">
    <?php if ($logo): ?>
      <div class="logo col-xs-12 col-sm-6 col-md-4">
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="navbar-brand">
          <img src="<?php print $logo; ?>" alt="logo Resource Flows" />
        </a>
        <?php if ($main_menu): ?>
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
            <span class="sr-only"><?php print t('Toggle navigation'); ?></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        <?php endif; ?>
      </div>
    <?php endif; ?>
    <?php if ($page['header']): ?>
      <?php print render($page['header']); ?>
    <?php endif; ?>
    <div class="col-xs-12 col-sm-6 col-md-8">
      <nav role="navigation" class="navbar-collapse collapse" id="navbar-collapse">
        <div class="navbar-right">
          <?php 
            $facebook = theme_get_setting('facebook');
            $twitter = theme_get_setting('twitter');
            $linkedin = theme_get_setting('linkedin');
           ?>
          <?php if ($main_menu): ?>
            <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => 'nav navbar-nav'))); ?>
          <?php endif; ?>
          <div class="header-social-networks">
            <?php if ($facebook):?>
              <a href="<?php echo $facebook ?>" target="_blank" class="btn-social">
                <img src="<?php echo base_path().path_to_theme() ?>/dist/images/facebook-black.svg" alt="facebook">
              </a>
            <?php endif ?>
            <?php if ($twitter):?>
              <a href="<?php echo $twitter ?>" target="_blank" class="btn-social">
                <img src="<?php echo base_path().path_to_theme() ?>/dist/images/twitter-black.svg" alt="twitter">
              </a>
            <?php endif ?>
            <?php if ($linkedin):?>
              <a href="<?php echo $linkedin ?>" target="_blank" class="btn-social">
                <img src="<?php echo base_path().path_to_theme() ?>/dist/images/linkedin-black.svg" alt="linkedin">
              </a>
            <?php endif ?>
          </div>
        </div>
      </nav>
    </div>
  </div>
  <?php if ($breadcrumb): ?>
    <div id="breadcrumb"><?php // print $breadcrumb; ?></div>
  <?php endif; ?>
</header>
<div class="body-content project-detail">
  <?php
  /**
   * the skip-links link works on the main-content id
   * (see modules/system/html.tpl.php)
   */
  ?>
  <div id="main-content" class="main" role="main">
    <div class="container-fluid">
      <?php if ($title): ?>
        <h1 class="title-page"><?php print $title; ?></h1>
      <?php else: ?>
        <h1><?php print $site_name; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>

      <?php if ($page['help']): ?>
        <div class="help">
          <?php print render($page['help']); ?>
        </div>
      <?php endif; ?>
      
      <?php if ($messages): ?>
        <?php print $messages; ?>
      <?php endif; ?>

      <?php if ($tabs): ?>
        <?php print render($tabs); ?>
      <?php endif; ?>

      <?php if ($action_links): ?>
        <ul class="action-links">
        <?php print render($action_links); ?>
        </ul>
      <?php endif; ?>

      <?php if ($page['highlighted']): ?>
        <div class="highlighted">
          <?php print render($page['highlighted']); ?>
        </div>
      <?php endif; ?>
      <div class="detail">
        <div class="col-sm-7">
          <img src="<?php echo file_create_url($node->swappsproject_image['und'][0]['uri']); ?>" alt="<?php print ($node->swappsproject_image['und'][0]['uri']); ?>" class="img-responsive">
        </div>
        <div class="col-sm-5">
          <p class="description col-sm-12">
            <?php echo ($node->body['und'][0]['value']); ?>
          </p>
          <p class="client-name col-xs-12">
            <span class="text-center">
              <i class="fa fa-user"></i>
            </span>
            <b>Client:</b> <span><?php echo ($node->swappsproject_client_name['und'][0]['value']); ?></span>
          </p>
          <p class="client col-xs-12">
            <span class="text-center">
              <i class="fa fa-wrench"></i>
            </span>
            <b>Tools:</b> <span><?php echo ($node->swappsproject_client['und'][0]['value']); ?></span>
          </p>
          <p class="country col-xs-12">
            <span class="text-center">
              <i class="fa fa-globe"></i>
            </span>
            <b>Country:</b> <span><?php echo ($node->swappsproject_country['und'][0]['value']); ?></span>
          </p>
          <p class="url col-xs-12">
            <span class="text-center">
              <i class="fa fa-link"></i>
            </span>
            <b>Web:</b> <a href="<?php echo ($node->swappsproject_url['und'][0]['value']); ?>" target="_blank" title="<?php print $title; ?>"><?php echo ($node->swappsproject_url['und'][0]['value']); ?></a>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

<footer role="contentinfo" id="footer" class="footer-project-detail">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024.45 100" style="position: relative;bottom: -10px;">
    <polygon points="0 100 0 78.11 512.22 0 1024.44 78.11 1024.44 100 0 100" style="fill:#202020"></polygon>
  </svg>
  <div class="container-fluid bg-footer">
    <div class="row">
      <div class="col-xs-12">
        <img src="<?php echo base_path().path_to_theme() ?>/footer-logo.png" alt="Footer Logo" class="footer_logo"/>
      </div>
    </div>
    <?php if ($page['footer']): ?>
      <?php //print render($page['footer']); ?>
    <?php endif; ?>
    <?php 
      $facebook = theme_get_setting('facebook');
      $twitter = theme_get_setting('twitter');
      $linkedin = theme_get_setting('linkedin');
     ?>
    <div class="row">
      <?php if ($facebook || $twitter || $linkedin):?>
        <div class="col-sm-12 text-center social-networks">
          <?php if ($facebook):?>
            <a href="<?php echo $facebook ?>" target="_blank" class="btn-social">
              <img src="<?php echo base_path().path_to_theme() ?>/dist/images/facebook-white.svg" alt="facebook">
            </a>
          <?php endif ?>
          <?php if ($twitter):?>
            <a href="<?php echo $twitter ?>" target="_blank" class="btn-social">
              <img src="<?php echo base_path().path_to_theme() ?>/dist/images/twitter-white.svg" alt="twitter">
            </a>
          <?php endif ?>
          <?php if ($linkedin):?>
            <a href="<?php echo $linkedin ?>" target="_blank" class="btn-social">
              <img src="<?php echo base_path().path_to_theme() ?>/dist/images/linkedin-white.svg" alt="linkedin">
            </a>
          <?php endif ?>
        </div>
      <?php endif ?>
      <div class="col-xs-12 text-center">
        <p class="text-center copy">
          Copyright © <?php print format_date(time(), 'custom', 'Y'); ?> - All rights reserved.
        </p>
      </div>
    </div>
  </div>
</footer>
