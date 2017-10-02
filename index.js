'use strict';

var phpServer = require('node-php-server');

const PORT = process.env.PORT || 3000;

// Create a PHP Server
phpServer.createServer({
    port: PORT,
    hostname: '127.0.0.1',
    base: '.',
    keepalive: true,
    open: false,
    bin: 'php',
    router: __dirname + '/RClogo.php'
});
