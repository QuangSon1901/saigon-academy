<?php

function template_preprocess_views_custom_view_intro(&$variables)
{
    $variables['#attached']['library'][] = 'custom_view_intro/custom_view_intro';
    $view = $variables['view'];
    if (isset($view->style_plugin->options['idViewInfo'])) {
        $options['idViewInfo'] = $view->style_plugin->options['idViewInfo'];
        $variables['options'] = $options;
    }
}
