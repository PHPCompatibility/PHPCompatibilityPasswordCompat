<?php
/*
 * Test file to run PHP_CodeSniffer against to make sure the polyfills are correctly excluded.
 */
$a = password_get_info( $hash );
$a = password_hash( $password, PASSWORD_BCRYPT, $options );
$a = password_needs_rehash( $hash, PASSWORD_DEFAULT, $options );
$a = password_verify( $password, $hash );

echo PASSWORD_BCRYPT_DEFAULT_COST;
