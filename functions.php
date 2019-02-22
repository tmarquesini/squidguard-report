<?php

function env($varname) {
    return getenv($varname);
}

function base_url() {
    return env('BASE_URL');
}