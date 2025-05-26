<?php

namespace sistema\Nucleo;

class Message
{
    public $title;
    private $content;
    private $styleCss;

    public function __toString()
    {
        return $this->render();
    }

    public function success(string $message) : Message
    {
        $this->styleCss = 'alert alert-success';
        $this->title = $this->filter($message);
        return $this;
    }

    public function warning(string $message) : Message
    {
        $this->styleCss = 'alert alert-warning';
        $this->title = $this->filter($message);
        return $this;
    }

    public function error(string $message) : Message
    {
        $this->styleCss = 'alert alert-danger';
        $this->title = $this->filter($message);
        return $this;
    }

    public function render() : string
    {
        return "<div class='{$this->styleCss}'>{$this->title}</div>";
    }

    public function filter(string $message) : string
    {
        return filter_var($message, FILTER_SANITIZE_SPECIAL_CHARS);
    }
}