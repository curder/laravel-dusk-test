<?php

use Laravel\Dusk\Browser;

test('basic example', function () {
    $this->browse(function (Browser $browser) {
        $browser->visit('/')
            ->assertSee('Documentation')
            ->assertSee('Laracasts')
            ->assertSee('Laravel News')
            ->assertSee('Vibrant Ecosystem');
    });
});
