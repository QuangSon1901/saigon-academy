<?php

function template_preprocess_views_custom_view_contact(&$variables)
{
    $variables['#attached']['library'][] = 'custom_view_contact/custom_view_contact';
    $view = $variables['view'];
    if (isset($view->style_plugin->options['idViewContact'])) {
        $options['idViewContact'] = $view->style_plugin->options['idViewContact'];
        $variables['options'] = $options;
    }
}
