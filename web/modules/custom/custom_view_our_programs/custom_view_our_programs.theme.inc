<?php

function template_preprocess_views_custom_view_our_programs(&$variables)
{
    $variables['#attached']['library'][] = 'custom_view_our_programs/custom_view_our_programs';
    $view = $variables['view'];
    if (isset($view->style_plugin->options['idViewOurPrograms'])) {
        $options['idViewOurPrograms'] = $view->style_plugin->options['idViewOurPrograms'];
        $variables['options'] = $options;
    }
}
