<?php
/**
 * Page Template
 *
 * Loaded automatically by index.php?main_page=club_list.<br />
 * Displays Club List page.
 */
?>
<div class="centerColumn" id="club_list">
<h1 id="clubListHeading"><?php echo HEADING_TITLE; ?></h1>

<div id="clubListMainContent" class="content">
<?php
/**
 * require the html_define for the club list page
 */
  require($define_page);
?>
</div>


<div class="buttonRow back"><?php echo zen_back_link() . zen_image_button(BUTTON_IMAGE_BACK, BUTTON_BACK_ALT) . '</a>'; ?></div>
</div>