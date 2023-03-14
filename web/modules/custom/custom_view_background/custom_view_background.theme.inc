<?php

function template_preprocess_views_custom_view_background(&$variables)
{
    $variables['#attached']['library'][] = 'custom_view_background/custom_view_background';
    $view = $variables['view'];
    $options['idViewBG'] = $view->style_plugin->options['idViewBG'];
    $variables['options'] = $options;
}
