<?php

return [

    /*
   * $httpHost HTTP hostname clients intend to connect to.
   * MUST match JS `new WebSocket('ws://$httpHost')
   */

    'httpHost' => '193.111.141.198',


    /*
     * Port to listen on. If 80, assuming production,
     * Flash on 843 otherwise expecting Flash to be proxied through 8843
     */

    'port' => '8991',


    /*
     *IP address to bind to. Default is localhost/proxy only.
     *'0.0.0.0' for any machine.
     */
    'address' => '0.0.0.0'

];
