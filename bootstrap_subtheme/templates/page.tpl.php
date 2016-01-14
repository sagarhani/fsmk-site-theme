<?php
/**
* @file
* Default theme implementation to display a single Drupal page.
*
* The doctype, html, head and body tags are not in this template. Instead they
* can be found in the html.tpl.php template in this directory.
*
* Available variables:
*
* General utility variables:
* - $base_path: The base URL path of the Drupal installation. At the very
*   least, this will always default to /.
* - $directory: The directory the template is located in, e.g. modules/system
*   or themes/bartik.
* - $is_front: TRUE if the current page is the front page.
* - $logged_in: TRUE if the user is registered and signed in.
* - $is_admin: TRUE if the user has permission to access administration pages.
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
* - $page['highlighted']: Items for the highlighted content region.
* - $page['content']: The main content of the current page.
* - $page['sidebar_first']: Items for the first sidebar.
* - $page['sidebar_second']: Items for the second sidebar.
* - $page['header']: Items for the header region.
* - $page['footer']: Items for the footer region.
*
* @see bootstrap_preprocess_page()
* @see template_preprocess()
* @see template_preprocess_page()
* @see bootstrap_process_page()
* @see template_process()
* @see html.tpl.php
*
* @ingroup themeable
*/
?>
<header>
  <div class='navbar-fixed-top'>
    <nav class='navbar navbar-default' role='navigation'>
      <div class='container-fluid'>
        <div class='navbar-header'>
          <button class='navbar-toggle collapsed' data-target='#bs-fsmk-navbar-collapse' data-toggle='collapse' type='button'>
            <span class='sr-only'>Toggle navigation</span>
          </button>
          <div class='navbar-brand' href='#'>
            <a class='fa fa-users' href='https://discuss.fsmk.org' target="_blank" title="discourse"></a>
            <a class='fa fa-github' href='https://github.com/fsmk' target="_blank"></a>
            <a class='fa fa-facebook' href='https://www.facebook.com/groups/freesoftwaremovementkarnataka/' target="_blank"></a>
            <a class='fa fa-google-plus' href='https://plus.google.com/communities/103065973027935344938' target="_blank"></a>
            <a class='fa fa-twitter' href='https://twitter.com/fsmk_org' target="_blank"></a>
            <a class='fa fa-youtube' href='https://www.youtube.com/channel/UCYw5fxyuozJqDjyhxlWWyVg' target="_blank"></a>

          </div>
        </div>
        <div class='collapse navbar-collapse' id='bs-fsmk-navbar-collapse'>
          <ul class='nav navbar-nav navbar-right'>
            <li class='active'>
              <a href='http://beta.fsmk.org'>Home</a>
            </li>
            <li class="v-f-t">
              <a href="/academician">Academician Chapter</a>
            </li>
            <li class="v-f-t">
              <a href="/communitycenters">Community Centers</a>
            </li>
            <li class="v-f-t">
              <a href="/camps">Camps</a>
            </li>
            <li class="v-f-t">
              <a href="/pressstatements">Press Statements</a>
            </li>
            <li class="v-f-t">
              <a href="/campaigns">Campaigns</a>
            </li>

            <li class="v-f-t">
              <a role='menuitem' tabindex='-1' href="/newsletters">News Letters</a>
            </li>
            <li class="v-f-t">
              <a role='menuitem' tabindex='-1'  href="/blog">Blogs & News</a>
            </li>
            <li>
              <a href='https://discuss.fsmk.org/' target="_blank" >Discuss</a>
            </li>
            <li>
              <a href='http://fsmk.org/planet/' target="_blank" >Planet</a>
            </li>

            <!--<li>
            <a href='http://wiki.fsmk.org' target="_blank" >Wiki</a>
          </li>
          <li>
          <a href='http://camp.fsmk.org/' target="_blank" >Summer Camp 2015</a>
        </li>
        <li>
        <a href='http://wethegoondas.in/' target="_blank" >#Wethegoondas</a>
      </li>-->
      <li>
        <a href='/about'  >About Us</a>
      </li>


    </ul>
  </div>
</div>
</nav>
<div class='second-nav'>
  <div class='container-fluid'>
    <div class='row'>
      <div class='col-sm-1 col-sm-offset-1'>
        <!--<a class='nav-logo' href='/'>
        <img alt="Fsmk icon small" src="<?php print drupal_get_path('theme','bootstrap_subtheme');?>/assets/fsmklogo.jpg" />
      </a>-->
    </div>
    <div class='col-sm-10'>
      <ul class='nav navbar-nav special-nav pull-right'>

        <li>
          <a href="/glugs">GLUGs</a>
        </li>
        <li >
          <a href="/academician">Academician Chapter</a>
        </li>
        <li>
          <a href="/communitycenters">Community Centers</a>
        </li>
        <li>
          <a href="/camps">Camps</a>
        </li>
        <li>
          <a href="/pressstatements">Press Statements</a>
        </li>
        <li>
          <a href="/campaigns">Campaigns</a>
        </li>

        <li>
          <a href="/newsletters">News Letters</a>
        </li>

        <li>
          <a href="/blog">Blog</a>
        </li>
        <li>
          <a href="/organization">Organization</a>
        </li>
      </ul>
    </div>
  </div>
</div>
</div>
</div>
</header>
<div class="container">
  <div class="navbar-header">
    <?php if ($logo): ?>
      <a class="logo navbar-btn pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
      </a>
    <?php endif; ?>

    <?php if (!empty($site_name)): ?>
      <a class="name navbar-brand" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a>
    <?php endif; ?>

    <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
  </div>

  <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
    <div class="navbar-collapse collapse">
      <nav role="navigation">
        <?php if (!empty($primary_nav)): ?>
          <?php print render($primary_nav); ?>
        <?php endif; ?>
        <?php if (!empty($secondary_nav)): ?>
          <?php print render($secondary_nav); ?>
        <?php endif; ?>
        <?php if (!empty($page['navigation'])): ?>
          <?php print render($page['navigation']); ?>
        <?php endif; ?>
      </nav>
    </div>
  <?php endif; ?>
</div>
</header>

<div class="main-container container">

  <header role="banner" id="page-header">
    <?php if (!empty($site_slogan)): ?>
      <p class="lead"><?php print $site_slogan; ?></p>
    <?php endif; ?>

    <?php print render($page['header']); ?>
  </header> <!-- /#page-header -->

  <div class="row">

    <?php if (!empty($page['sidebar_first'])): ?>
      <aside class="col-sm-3" role="complementary">
        <?php print render($page['sidebar_first']); ?>
      </aside>  <!-- /#sidebar-first -->
    <?php endif; ?>

    <section<?php //print $content_column_class; ?>>
    <?php if (!empty($page['highlighted'])): ?>
      <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
    <?php endif; ?>
    <?php //if (!empty($breadcrumb)): print $breadcrumb; endif;?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if (!empty($title)): ?>
        <h1 class="page-header"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
      <?php endif; ?>
      <?php if (!empty($page['help'])): ?>
        <?php print render($page['help']); ?>
      <?php endif; ?>
      <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
    </section>

    <?php if (!empty($page['sidebar_second'])): ?>
      <aside class="col-sm-3" role="complementary">
        <?php print render($page['sidebar_second']); ?>
      </aside>  <!-- /#sidebar-second -->
    <?php endif; ?>

  </div>
</div>
<footer>
  <div class='footer-container'>
    <div class='row text-left'>

  <div class='container'>
    <div class='subfooter-row'>
      <div class='col-md-12'>
        <ul class='list-inline'>
          <li>
        <a href="/glugs">GLUGs</a>
      </li>
      <li>
        <a href="/academician">Academician Chapter</a>
      </li>
      <li>
        <a href="/communitycenters">Community Centers</a>
      </li>
      <li>
        <a href="/newsletters">News Letters</a>
      </li>
      <li>
        <a href="/camps">Camps</a>
      </li>
      <li>
        <a href="/blog">Blogs & News</a>
      </li>
      <li>
        <a href="/pressstatements">Press Statements</a>
      </li>
      <li>
        <a href="/campaigns">Campaigns</a>
      </li>
      <li>
        <a href="/organization">Organization</a>
      </li>
        </ul>
      </div>
    </div>
  </div>
  <div class='copy-right-container'>
    <div class='row text-center'>
      This work is licensed under a Creative Commons Attribution 4.0 International License
      <a href='http://creativecommons.org/licenses/by/4.0/' rel='license'>
        <img alt='Creative Commons License' src='https://licensebuttons.net/l/by/4.0/88x31.png' style='border-width:0' />
      </a>
    </div>
  </div>
</footer>
<script src="<?php print drupal_get_path('theme','bootstrap_subtheme');?>/assets/application-7ea68606d7300a971e560d9f0544e7ad.js"></script>
