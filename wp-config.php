<?php

require_once(__DIR__ . '/vendor/autoload.php');
(new \Dotenv\Dotenv(__DIR__))->load();

// Show multisite settings in backend
define('WP_ALLOW_MULTISITE', true);

// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', getenv('DB_NAME') ?: 'boilerplatesamtnl');

/** MySQL database username */
define('DB_USER', getenv('DB_USER') ?: 'root');

/** MySQL database password */
define('DB_PASSWORD', getenv('DB_PASSWORD') ?: '');

/** MySQL hostname */
define('DB_HOST', getenv('DB_HOST') ?: 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', getenv('DB_CHARSET') ?: 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', getenv('DB_COLLATE') ?: 'utf8_swedish_ci');

define('AUTH_KEY',         'P(L%bV2Z@%l-2Jqk_Y^ZT#Gmv3ff.{uaRFxsx04,`|I?1?~%p~a3r`;A k<;PQ48');
define('SECURE_AUTH_KEY',  'Bb>2#N${5GPb@Z6q|_H8)S;*g<KZgMtFDB~A,+II|c;p,c.pbF*uHN5^J?h:N{rE');
define('LOGGED_IN_KEY',    'Vo~an>0@d1,RW1SD{q53B$O?x[*xhH(0-H+{N ~u?($1J.IW+&fxO5:OWn@t$=Tt');
define('NONCE_KEY',        'iE9tZe1A?U[|r+f+4#CN|G8BmEH=Gscl^NZd8L+Vx{#A8@7|8:E|I(rmU;C[a*RT');
define('AUTH_SALT',        'q]F_II}-zp)Z[k85*Wohvs_M a+i @`xzT:[^N-pL..`a2?F#qNy+,_&(LimeP<4');
define('SECURE_AUTH_SALT', 's,c%:6&]1]p)wj/Ru8A(X{Bvfn0J<(a>=x<qi%X8@UU4.PYWXUR`B0mdqCkW03$i');
define('LOGGED_IN_SALT',   'x9{cG2|h(z *5X:I.1np{^m>-+$O/d2Og#6S@c~aBE]Bk>$1qqZ1l<sn9(s!^uX-');
define('NONCE_SALT',       'FQA#nWmDR?*U]{YY.iE~nL96`#na_(UB#jNZ1PHxy ?H)#Mc?|Nlq7p`y;+{Beae');

$table_prefix = 'wp_';

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
  define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
