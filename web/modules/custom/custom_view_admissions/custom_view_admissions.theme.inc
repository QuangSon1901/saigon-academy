<?php

function template_preprocess_views_custom_view_admissions(&$variables)
{
    $variables['#attached']['library'][] = 'custom_view_admissions/custom_view_admissions';
    $view = $variables['view'];
    if (isset($view->style_plugin->options['idViewAdmissions'])) {
        $options['idViewAdmissions'] = $view->style_plugin->options['idViewAdmissions'];
        $variables['options'] = $options;
    }
}
