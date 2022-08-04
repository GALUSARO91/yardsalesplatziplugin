<?php

function plz_add_register_form_script(){
    wp_register_script('plz-registro',plugins_url("../assets/js/registro.js",__FILE__));
    wp_localize_script('plz-registro','plz',[
        'rest_url' => rest_url('plz'),
        'home_url' => home_url()
    ]);
}

add_action('wp_enqueue_scripts','plz_add_register_form_script');

function plz_add_register_form(){
    wp_enqueue_script('plz-registro');
    $response = '<dv class="signin">
    <div class="signin__container">
        <h1 class="sigin__titulo">Registro</h1>
        <form class="signin__form" id="registro">
            <div class="signin__name name--campo">
                <label for="Name">Nombre</label>
                <input name="name" type="text" id="Name">
            </div>
            <div class="signin__email name--campo">
                <label for="email">Email</label>
                <input name="email" type="email" id="email">
            </div>
            <div class="signin__pass name--campo">
                <label for="password">Password</label>
                <input name="password" type="password" id="password">
            </div>
            <div class="signin__submit">
                <input type="submit" value="Crear">
            </div>
        </form>
        <div class="msg"></div>
    </div>
</dv>';
    return $response;

}

add_shortcode('plz_registro','plz_add_register_form');