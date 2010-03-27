<?php
// $Id$

/**
 * Implementation of hook_panels_layouts().
 */
function drh_jensen_drh_frontpage_panels_layouts() {
  $items['drh_page'] = array(
    'title' => t('DRH: Frontpage'),
    'icon' => 'drh_frontpage.png',
    'theme' => 'drh_frontpage',
    'css' => 'drh_frontpage.css',
    'panels' => array(
      'top_left' => t('Top left'),
      'top_right' => t('Top right'),
      'teaser_1' => t('Teaser 1'),
      'teaser_2' => t('Teaser 2'),
      'teaser_3' => t('Teaser 3'),
      'teaser_4' => t('Teaser 4'),
      'bottom' => t('Bottom'),
    ),
  );

  return $items;
}
