<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/social.php';
$s = windzon_social_hrefs();
?>
<span>Follow Us: </span>
<a href="<?php echo $s['facebook']; ?>" class="social-link-windzon" target="_blank" rel="noopener noreferrer" aria-label="Facebook"><i class="fab fa-facebook" aria-hidden="true"></i></a>
<a href="<?php echo $s['instagram']; ?>" class="social-link-windzon" target="_blank" rel="noopener noreferrer" aria-label="Instagram"><i class="fab fa-instagram" aria-hidden="true"></i></a>
<a href="<?php echo $s['whatsapp']; ?>" class="social-link-windzon" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp"><i class="fab fa-whatsapp" aria-hidden="true"></i></a>
