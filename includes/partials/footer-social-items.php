<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/social.php';
$s = windzon_social_hrefs();
?>
<li><a href="<?php echo $s['facebook']; ?>" target="_blank" rel="noopener noreferrer" aria-label="Facebook"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
<li><a href="<?php echo $s['instagram']; ?>" target="_blank" rel="noopener noreferrer" aria-label="Instagram"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
<li><a href="<?php echo $s['whatsapp']; ?>" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
