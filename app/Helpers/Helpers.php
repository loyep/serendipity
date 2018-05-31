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