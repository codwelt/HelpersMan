<?

if(!function_exists('helperman_random_string')){
    /**
     * Genera un string aleatorio de con los caracteres de keyspace y de un tamaño indocado con el lenght
     * @param $length tamaño
     * @param string $keyspace con que string se va a generar
     * @return string
     * @throws Exception
     */
    function helperman_random_string($length, $keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'): string
    {
        $str = '';
        $max = mb_strlen($keyspace, '8bit') - 1;
        for ($i = 0; $i < $length; ++$i) {
            $str .= $keyspace[random_int(0, $max)];
        }
        return $str;
    }

}
