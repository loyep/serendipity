<?php

if ( !function_exists('gravatar') ) {

    /**
     * Generate Gravatar avatar URL for the given email address.
     *
     * @param $email
     * @param int $size
     * @param string $rating
     * @param string $default
     * @return string
     */
    function gravatar($email, $size = 120, $rating = 'X', $default = null)
    {
        $config = [
            's' => $size,
            'r' => $rating,
            'd' => $default,
        ];
        $query = http_build_query($config, null, '&', PHP_QUERY_RFC3986);
        $url = 'https://secure.gravatar.com/avatar/';
        if ( !empty($email) ) {
            $url .= md5(strtolower(trim($email)));
        }
        return $url . ($query ? '?' . $query : '');
    }
}

if ( !function_exists('admin_asset') ) {

    /**
     * @param $path
     *
     * @return string
     */
    function admin_asset($path)
    {
        return asset($path, config('admin.secure'));
    }
}


if ( !function_exists('admin_url') ) {
    /**
     * Get admin url.
     *
     * @param string $path
     *
     * @return string
     */
    function admin_url($path = '')
    {
        return url(admin_base_path($path));
    }
}


if ( !function_exists('admin_base_path') ) {
    /**
     * Get admin url.
     *
     * @param string $path
     *
     * @return string
     */
    function admin_base_path($path = '')
    {
        $prefix = '/' . trim(config('serendipity.route.prefix'), '/');

        return $prefix . '/' . trim($path, '/');
    }
}