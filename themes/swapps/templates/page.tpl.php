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
        <?php if ($main_menu): ?>
          <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => 'nav navbar-nav navbar-right'))); ?>
        <?php endif; ?>
      </nav>
    </div>
  </div>
  <?php if ($breadcrumb): ?>
    <div id="breadcrumb"><?php // print $breadcrumb; ?></div>
  <?php endif; ?>
</header>

<aside class="sidebar1" role="complementary">
  <?php if ($page['sidebar_first']): ?>
    <?php print render($page['sidebar_first']); ?>
  <?php endif; ?>
</aside>

<?php
/**
 * the skip-links link works on the main-content id
 * (see modules/system/html.tpl.php)
 */
?>
<div id="main-content" class="main" role="main">
  <?php print render($title_prefix); ?>
  <?php if ($title): ?>
    <h1><?php print $title; ?></h1>
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

  <?php print render($page['content']); ?>
</div>

<aside class="sidebar2" role="complementary">
  <?php if ($page['sidebar_second']): ?>
    <?php print render($page['sidebar_second']); ?>
  <?php endif; ?>
</aside>

<footer role="contentinfo" id="footer">
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
      <?php print render($page['footer']); ?>
    <?php endif; ?>
    <?php 
      $facebook = theme_get_setting('facebook');
      $twitter = theme_get_setting('twitter');
      $linkedin = theme_get_setting('linkedin');
     ?>
    <div class="row">
      <div class="col-xs-12 text-center">
        <p class="text-center copy">
          Copyright © <?php print format_date(time(), 'custom', 'Y'); ?> - Todos los derechos reservados.
        </p>
      </div>
    </div>
  </div>
</footer>
