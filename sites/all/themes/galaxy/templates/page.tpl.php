<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/garland.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to main-menu administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 */
?>


<div class="top_header">

  <div class="container">

    <!-- Logo -->

    <?php if ($logo): ?>
        <div id="logo">
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
            <img src="<?php print $logo; ?>"/></a>
        </div>
    <?php endif; ?>

  <!-- main-menu -->

    <nav id="main-menu">
      <a class="nav-toggle" href="#">Navigation<i class="icon-reorder"></i></a>
      <div class="menu-navigation-container">
        <?php 
            $main_menu_tree = menu_tree(variable_get('menu_main_links_source', 'main-menu'));
            print drupal_render($main_menu_tree);
          ?>
        </div>
        <div class="clear"></div>
    </nav>

  <!-- end main-menu -->

  </div>

</div>


<!-- Banner -->

<?php if ($is_front): ?>

  <header id="main_header">
    <div class="container">
      <?php print render($page['slideshow']); ?> 
    </div>
  </header>

  <div id="clients-wrapper">
    <div class="container">
      <?php print render($page['clients']); ?>
    </div>
  </div>

<!-- end Banner -->


<div class="container">

    <?php if (theme_get_setting('social_links', 'galaxy')): ?>
    <?php 
    $facebook = check_plain(theme_get_setting('facebook', 'galaxy')); 
    $twitter = check_plain(theme_get_setting('twitter', 'galaxy')); 
    $linkedin = check_plain(theme_get_setting('linkedin', 'galaxy'));
    $googleplus = check_plain(theme_get_setting('googleplus', 'galaxy'));
    $dribbble = check_plain(theme_get_setting('dribbble', 'galaxy'));
    $pinterest = check_plain(theme_get_setting('pinterest', 'galaxy'));
    $tumblr = check_plain(theme_get_setting('tumblr', 'galaxy'));
    $vimeo = check_plain(theme_get_setting('vimeo', 'galaxy'));
    $youtube = check_plain(theme_get_setting('youtube', 'galaxy'));  
    $flicker = check_plain(theme_get_setting('flicker', 'galaxy'));

    ?>
    <div class="social-profile">
      <ul>

        <?php if ($facebook): ?>
          <li class="facebook">
            <a target="_blank" title="<?php print $site_name; ?> in Facebook" href="<?php print $facebook; ?>"><?php print $site_name; ?> Facebook </a>
          </li>
        <?php endif; ?>

        <?php if ($twitter): ?>
          <li class="twitter">
            <a target="_blank" title="<?php print $site_name; ?> in Twitter" href="<?php print $twitter; ?>"><?php print $site_name; ?> Twitter </a>
          </li>
        <?php endif; ?>

        <?php if ($linkedin): ?>
          <li class="linkedin">
            <a target="_blank" title="<?php print $site_name; ?> in Linkedin" href="<?php print $linkedin; ?>"><?php print $site_name; ?> Linkedin </a>
          </li>
        <?php endif; ?>

        <?php if ($googleplus): ?>
          <li class="google-plus">
            <a target="_blank" title="<?php print $site_name; ?> in Google+" href="<?php print $googleplus; ?>"><?php print $site_name; ?> Google+ </a>
          </li>
        <?php endif; ?>

        <?php if ($dribbble): ?>
          <li class="dribbble">
            <a target="_blank" title="<?php print $site_name; ?> in Dribbble" href="<?php print $dribbble; ?>"><?php print $site_name; ?> Dribbble </a>
          </li>
        <?php endif; ?>

        <?php if ($pinterest): ?>
          <li class="pinterest">
            <a target="_blank" title="<?php print $pinterest; ?> in Pinterest" href="<?php print $pinterest; ?>"><?php print $site_name; ?> Pinterest </a>
          </li>
        <?php endif; ?>

        <?php if ($tumblr): ?>
          <li class="tumblr">
            <a target="_blank" title="<?php print $tumblr; ?> in Tumblr" href="<?php print $tumblr; ?>"><?php print $site_name; ?> Tumblr </a>
          </li>
        <?php endif; ?>

        <?php if ($vimeo): ?>
          <li class="vimeo">
            <a target="_blank" title="<?php print $vimeo; ?> in Vimeo" href="<?php print $vimeo; ?>"><?php print $site_name; ?> Vimeo </a>
          </li>
        <?php endif; ?>

        <?php if ($youtube): ?>
          <li class="youtube">
            <a target="_blank" title="<?php print $youtube; ?> in Youtube" href="<?php print $youtube; ?>"><?php print $site_name; ?> Youtube </a>
          </li>
        <?php endif; ?>

        <?php if ($flicker): ?>
          <li class="flicker">
            <a target="_blank" title="<?php print $site_name; ?> in Flicker" href="<?php print $flicker; ?>"><?php print $site_name; ?> Flicker </a>
          </li>
        <?php endif; ?>

        <li class="rss">
          <a target="_blank" title="<?php print $site_name; ?> in RSS" href="<?php print $front_page; ?>rss.xml"><?php print $site_name; ?> RSS </a>
        </li>

      </ul>
    </div>

  <?php endif; ?>

</div>



<!-- Top Block -->

  <div class="container top_block">
    <div class="row clearfix">
      <div class="span3"><?php print render($page['top_first']); ?></div>
      <div class="span3"><?php print render($page['top_second']); ?></div>
      <div class="span3"><?php print render($page['top_third']); ?></div>
      <div class="span3"><?php print render($page['top_forth']); ?></div>
    </div>
  </div>


<div id="search-wrapper">
    <div class="container">
      <div class="search">
        <?php print render($page['search']); ?>
      </div>
    </div>
  </div>


<!-- Portfolio Block -->

<div id="portfolio-wrapper">
  <div class="container portfolio">
    <div class="row clearfix">
      <div class="span8 portfolio_description"><?php print render($page['portfolio_description']); ?></div>
      <div class="span4 portfolio_image"><?php print render($page['portfolio_image']); ?></div>
    </div>
  </div>
</div>

<?php endif; ?>

<!-- End Portfolio Block -->


<!-- Recent Work -->

<div class="container">
  <?php print render($page['recent_work']); ?>

</div>


<!-- End Recent Work -->

<div class="page_title_wrapper">
  <div class="container">
    <div class="row">

        <div class="span6">
          <?php if ($title): ?><h1 class="page-title"><?php print $title; ?></h1><?php endif; ?>
        </div>

        <div class="span6">
          <?php if (theme_get_setting('breadcrumbs', 'galaxy')): ?>
            <div id="breadcrumbs"><?php if ($breadcrumb): print $breadcrumb; endif;?>
            </div>
          <?php endif; ?>
        </div>
        
      </div>
  </div>
</div>




<div class="container main-wrapper">

      <?php if ($page['sidebar_first']): ?>
          <aside id="sidebar-first" role="complementary">
            <?php print render($page['sidebar_first']); ?>
          </aside>  <!-- /#sidebar-first -->
      <?php endif; ?>


      <div id="main_content">

        <?php if ($title): ?>
          <h2 class="page-title"><?php print $title; ?></h2>
        <?php endif; ?>


        <?php print $messages; ?>

        <?php print render($title_prefix); ?>

        <?php if (!empty($tabs['#primary'])): ?>
          <div class="tabs-wrapper"><?php print render($tabs); ?>
          </div>
        <?php endif; ?>

        <?php print render($page['help']); ?>

        <?php if ($action_links): ?>
          <ul class="action-links">
            <?php print render($action_links); ?>
          </ul>
        <?php endif; ?>

        <?php print render($page['content']); ?>

      </div>

      <?php print render($page['contact_map']); ?>

      <?php if ($page['sidebar_second']): ?>
        <aside id="sidebar-second" role="complementary">
          <?php print render($page['sidebar_second']); ?>
        </aside>  <!-- /#sidebar-first -->
      <?php endif; ?>

  </div>
</div>


<!-- Footer -->

<footer class="main">
  <div class="container">
    <div class="row">
      <div class="span9">
        <div class="row">
          <div class="span3"><?php print render($page['footer_first']); ?></div>
          <div class="span3"><?php print render($page['footer_second']); ?></div>
          <div class="span3"><?php print render($page['footer_third']); ?></div>
        </div>
      </div>

      <div class="span3">
        <?php print render($page['footer_firth']); ?>
      </div>
    </div>
  </div>
</footer>


<div id="copyright">
  <div class="container">
    <?php print render($page['copyright']); ?>
  </div>
</div>
