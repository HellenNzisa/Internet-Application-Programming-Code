<?php


class Layout {
    public function header($config) {
        return "<header><h1>Welcome to " . $config['site_title'] . "</h1></header>";
    }

    public function footer($config) {
        return "<footer><p>&copy; 2024 " . $config['site_title'] . "</p></footer>";
    }
}
?>