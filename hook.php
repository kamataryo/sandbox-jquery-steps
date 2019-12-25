<?php
  do_action( 'tiger-scroll_configure', function () {
    return [
      theme_slug => 'my-awesome-wordpress-theme',
      priority => 10, // define order to display when multiple wizards are required.
      target => 'https://example.com',
      mods => [
        [ 'type' => 'file', 'slug' => 'header_image', 'label' => 'Header Image', 'is_required' => true ],
        [ 'type' => 'number', 'slug' => 'some_number', 'label' => 'Something', 'is_required' => false, 'default' => 10  ],
      ]
    ]
  })

# - Theme / plugin developers can use `tiger-scroll_configure` hook like above to define the products option value.
# - Tiger Scroll generates Wizard-like HTML form and injects it via JavaScript anywhere they want.
# - If possible, Tiger Scroll provides Customizer for the theme / plugin, which is equivalent to the form.
# - Tiger Scroll provides Web API which receive POST requests from the form.
