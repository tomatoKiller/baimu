<?php
function test_function(){
    add_theme_page( 'title标题', '菜单标题', 'administrator', 'ashu_slug','display_function');
}

function display_function(){
    echo '<h1>这是设置页面</h1>';
}
add_action('admin_menu', 'test_function');
?>
