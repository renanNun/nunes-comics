<?php
$router->get('contact', 'PagesController@contact');
$router->post('contact/send', 'ContactController@sendEmail');
?>