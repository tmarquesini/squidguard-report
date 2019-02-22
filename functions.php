<?php

function env($varname) {
    return getenv($varname);
}

function base_url() {
    return getenv('BASE_URL');
}