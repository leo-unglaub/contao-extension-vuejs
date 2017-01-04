<?php


/**
 * Hooks
 */
$GLOBALS['TL_HOOKS']['replaceInsertTags'][] = ['VueJsInsertTags', 'replaceInsertTagsVueOpen'];
$GLOBALS['TL_HOOKS']['replaceInsertTags'][] = ['VueJsInsertTags', 'replaceInsertTagsVueClose'];
