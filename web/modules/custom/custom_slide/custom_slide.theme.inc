<?php

function template_preprocess_views_custom_slide(&$variables)
{
    $variables['#attached']['library'][] = 'custom_slide/custom_slide';
    $view = $variables['view'];
    $options['idSlider'] = $view->style_plugin->options['idSlider'];
    $variables['options'] = $options;
}
