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
    <div id="breadcrumb"><?php print $breadcrumb; ?></div>
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
  <?php if ($page['footer']): ?>
    <?php print render($page['footer']); ?>
  <?php endif; ?>
</footer>
