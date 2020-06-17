<?php

namespace src;

/*
 *
 * class Jwt
 * 
 * used to encode and decode jwt
 * pass the secret in global var
 * 
 */

class Jwt {

    // the secret to encode and decode the JWT
    private static $secret = JWT_SECRET;

    /*
     * Create a jwt token
     * 
     * @param array $data
     * @return string
     */
    public static function encode(array $data):string {

        // Header json
        $header = json_encode(["alg" => "HS256", "typ" => "JWT"]);
        
        // Payload json
        $payload = json_encode($data);

        // Convert then to base64
        $header = self::base64url_encode($header);
        $payload = self::base64url_encode($payload);

        // Creating and converting signature with key
        $signature = hash_hmac('sha256', $header.".".$payload, self::$secret, true);
        $signature = self::base64url_encode($signature);
       
        return $header.".".$payload.".".$signature;
    }

    /*
     * Validate a jwt token
     * 
     * @param string $token
     * @return bool|array
     */
    public static function decode(string $token) {
        if(!empty($token)) {
            $split = explode('.', $token);
            if (count($split) == 3) {

                $signature = hash_hmac('sha256', $split[0].".".$split[1], self::$secret, true);
                $bsig = self::base64url_encode($signature);

                if ($bsig == $split[2]) {
                    return json_decode(self::base64url_decode($split[1]));
                }
            }
        }
        return false;
    }

    /*
     * Private function to encode url base64
     */
    private static function base64url_encode(string $data):string{
        return rtrim( strtr( base64_encode( $data ), '+/', '-_'), '=');
    }
      
    /*
     * Private function to decode url base64
     */
    private static function base64url_decode(string $data):string{
        return base64_decode( strtr( $data, '-_', '+/') . str_repeat('=', 3 - ( 3 + strlen( $data )) % 4 ));
    }

}