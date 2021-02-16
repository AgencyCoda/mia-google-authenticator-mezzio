<?php

use Mia\Google\Authenticator\GAHelper;
use Mia\Google\Authenticator\GoogleQrUrl;

require '../vendor/autoload.php';

$service = new GAHelper();
$secret = $service->generateSecret();

echo 'Secret: ' . $secret . '<br/>';
echo '<a  href="<?php echo $link; ?>"><img style="border: 0; padding:10px" src="'.GoogleQrUrl::generate('Matias Camiletti', $secret, 'Project Title').'"/></a>';