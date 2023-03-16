<?php

function template_preprocess_views_custom_view_news(&$variables)
{
    $variables['#attached']['library'][] = 'custom_view_news/custom_view_news';
    $view = $variables['view'];
    if (isset($view->style_plugin->options['idViewNews'])) {
        $options['idViewNews'] = $view->style_plugin->options['idViewNews'];
        $variables['options'] = $options;
    }
}
