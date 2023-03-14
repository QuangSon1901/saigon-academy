<?php

namespace Drupal\custom_view_intro\Plugin\views\style;

use Drupal\views\Plugin\views\style\StylePluginBase;

/**
 * Style plugin to render each item in a slideshow.
 *
 * @ingroup views_style_plugins
 *
 * @ViewsStyle(
 *   id = "idViewInfo",
 *   title = @Translation("CustomViewInfo"),
 *   help = @Translation("Display the results as a CustomViewInfo."),
 *   theme = "views_custom_view_intro",
 *   display_types = {"normal"}
 * )
 */
class ViewsCustomViewInfo extends StylePluginBase
{

    /**
     * Does the style plugin allows to use style plugins.
     *
     * @var bool
     */
    protected $usesRowPlugin = TRUE;

    /**
     * Does the style plugin support custom css class for the rows.
     *
     * @var bool
     */
    protected $usesRowClass = TRUE;

    /**
     * Does the style plugin support grouping of rows.
     *
     * @var bool
     */
    protected $usesGrouping = FALSE;

    /**
     * Does the style plugin for itself support to add fields to it's output.
     *
     * This option only makes sense on style plugins without row plugins, like
     * for example table.
     *
     * @var bool
     */
    protected $usesFields = TRUE;
    
}
