<?php

class Message
{
    public string $title;
    private string $content;

    public function render() : string
    {
        return $this->title = $this->filter('<h1> mensagem de teste');
    }

    public function filter(string $message) : string
    {
        return filter_var(strip_tags($message), FILTER_SANITIZE_SPECIAL_CHARS);
    }
}