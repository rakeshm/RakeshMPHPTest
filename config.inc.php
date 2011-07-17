<?php if (!class_exists('CFRuntime')) die('No direct access allowed.');
/**
 * Stores your AWS account information. Add your account information, and then rename this file
 * to 'config.inc.php'.
 *
 * @version 2011.06.02
 * @license See the included NOTICE.md file for more information.
 * @copyright See the included NOTICE.md file for more information.
 * @link http://aws.amazon.com/php/ PHP Developer Center
 * @link http://aws.amazon.com/security-credentials AWS Security Credentials
 */


/**
 * Amazon Web Services Key. Found in the AWS Security Credentials. You can also pass this value as the first
 * parameter to a service constructor.
 */
define('AWS_KEY', '117642027GHNEJ3V0302');

/**
 * Amazon Web Services Secret Key. Found in the AWS Security Credentials. You can also pass this value as
 * the second parameter to a service constructor.
 */
define('AWS_SECRET_KEY', 'BWDwSCY1ITv5wnWsz/9859gW3PHANN/o2ruYJ+pE');

/**
 * Amazon Account ID without dashes. Used for identification with Amazon EC2. Found in the AWS Security
 * Credentials.
 */
define('AWS_ACCOUNT_ID', '903113764170');

/**
 * Your CanonicalUser ID. Used for setting access control settings in AmazonS3. Found in the AWS Security
 * Credentials.
 */
define('AWS_CANONICAL_ID', '4f52acfb449f088f1abd602344f9b0fd01b85df4fc83f58c2d0299cfa35df08d');

/**
 * Your CanonicalUser DisplayName. Used for setting access control settings in AmazonS3. Found in the AWS
 * Security Credentials (i.e. "Welcome, AWS_CANONICAL_NAME").
 */
define('AWS_CANONICAL_NAME', 'Rakesh Malhotra');

/**
 * Determines which Cerificate Authority file to use.
 *
 * A value of boolean `false` will use the Certificate Authority file available on the system. A value of
 * boolean `true` will use the Certificate Authority provided by the SDK. Passing a file system path to a
 * Certificate Authority file (chmodded to `0755`) will use that.
 *
 * Leave this set to `false` if you're not sure.
 */
define('AWS_CERTIFICATE_AUTHORITY', true);

/**
 * This option allows you to configure a preferred storage type to use for caching by default. This can
 * be changed later using the set_cache_config() method.
 *
 * Valid values are: `apc`, `xcache`, a DSN-style string such as `pdo.sqlite:/sqlite/cache.db`, a file
 * system path such as `./cache` or `/tmp/cache/`, or a serialized array for memcached configuration.
 *
 * serialize(array(
 * 	array(
 * 		'host' => '127.0.0.1',
 * 		'port' => '11211'
 * 	),
 * 	array(
 * 		'host' => '127.0.0.2',
 * 		'port' => '11211'
 * 	)
 * ));
 */
define('AWS_DEFAULT_CACHE_CONFIG', './cache');

/**
 * 12-digit serial number taken from the Gemalto device used for Multi-Factor Authentication. Ignore this
 * if you're not using MFA.
 */
define('AWS_MFA_SERIAL', '');

/**
 * Amazon CloudFront key-pair to use for signing private URLs. Found in the AWS Security Credentials. This
 * can be set programmatically with <AmazonCloudFront::set_keypair_id()>.
 */
define('AWS_CLOUDFRONT_KEYPAIR_ID', 'APKAJPVLTKGQHZLMYGAQ');

/**
 * The contents of the *.pem private key that matches with the CloudFront key-pair ID. Found in the AWS
 * Security Credentials. This can be set programmatically with <AmazonCloudFront::set_private_key()>.
 */
define('AWS_CLOUDFRONT_PRIVATE_KEY_PEM', 'MIICXQIBAAKBgQDBPXZ+J+9ALZf/yOuvqRNdTg3ETeCRZ5rBSLE4kznaDwqYt1YJ
54PBOLEyimkaK0tn8PihC3GGYF2mB1Bz0h9nljDAKxNPTdjtVb1fqvsjXKWQjWDh
KDw+/JsZpkNpnEJmvKD5eBiAx64JoLsOW7nhT6aueMdCOdDnqjB4l5VS9QIDAQAB
AoGBAKbuF3xntxAz0siNorv+TNIfaVkZBVPWsiMiTqXW2PT8ZWUDi3nG21SBSuGk
G6MVn3BNBBrqrcktWfjg/Kjw7VqoZy0qmIEW0ZdVF0mxRgKggzl1rcFA5s2VNuvx
mtfpzbtIF5IXzV3HlhnDNbtE/9wVziM9PCZgWz/ITQgzf8QJAkEA3qpAE8VmLW14
ReF1VUUkVS2rW8/NfoKb8dJ8xE5CRppbFTjYSEggVAOJsuccuerY7F+LwrXrHWGu
Q89U/QKjawJBAN4rfIwDx+c0y+V+3HfhHfTNhWqwtRuvPlTXGHixx7+yBl05+pKw
8Vh9gE/dKECxPzilFfsCt+dLnlkEqjwl2x8CQQCEgtljasSmIFHFdKl5N46pymYC
W6a1tVDNFzD9On2iutWdyZidW58xoHFgML4dvq+d7Damh9EGSU2GOWsgr2NFAkBc
DGZo2HQtjglgh2Qu4v13XOOHJbmTw9KucgP4laft+4N5grkXp+oGwNC1xiqUSxun
i3aE7kZltUXhGfayPvj/AkAZKYpQAUoXlQzvWlZ6SlSycB9lrA3UIYi2LeCM/4Ff
KiwvgPL88lyir+EJxwioZPjiTvUlQ5w5HF91hKIeCxkR');

/**
 * Set the value to true to enable autoloading for classes not prefixed with "Amazon" or "CF". If enabled,
 * load `sdk.class.php` last to avoid clobbering any other autoloaders.
 */
define('AWS_ENABLE_EXTENSIONS', 'false');
