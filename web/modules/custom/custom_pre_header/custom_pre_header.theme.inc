<?php

function template_preprocess_views_custom_pre_header(&$variables)
{
    $variables['#attached']['library'][] = 'custom_pre_header/custom_pre_header';
    $view = $variables['view'];
    $options['idPreHeader'] = $view->style_plugin->options['idPreHeader'];
    $variables['options'] = $options;
}
