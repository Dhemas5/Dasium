<?php

class Template
{
    private array $template_data = [];

    public function set(string $name, $value): void
    {
        $this->template_data[$name] = $value;
    }

    public function load(string $template = '', string $view = '', array $view_data = [], bool $return = false)
    {
        $CI = get_instance();
        $this->set('contents', $CI->load->view($view, $view_data, true));
        return $CI->load->view($template, $this->template_data, $return);
    }
}
