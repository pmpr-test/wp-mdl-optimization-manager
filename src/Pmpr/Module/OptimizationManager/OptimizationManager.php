<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67705d82ad66b             |
    |_______________________________________|
*/
 namespace Pmpr\Module\OptimizationManager; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\OptimizationManager\Frontend\Request; use Pmpr\Module\OptimizationManager\Frontend\RequestMultistep; use Pmpr\Module\OptimizationManager\Frontend\WPSpeed; use Pmpr\Module\OptimizationManager\Subscription\Subscription; class OptimizationManager extends ComponentInitiator { const aksyiucmwcsqgese = "\x6f\160\x74\151\155\151\172\x61\x74\x69\157\156\137\155\141\x6e\x61\147\x65\x72\137"; public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __("\x4f\160\x74\151\x6d\151\x7a\x61\x74\151\x6f\x6e\40\x4d\x61\x6e\141\x67\x65\x72", PR__MDL__OPTIMIZATION_MANAGER); }, Constants::sguyaymiiiiewame => Setting::class]); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom("\142\x61\143\x6b\x6c\x69\x6e\x6b\x5f\155\141\x6e\141\147\x65\162\137\155\x6f\144\x75\x6c\145\163", [$this, "\x79\167\143\x75\145\171\x67\x6f\x73\141\x79\x73\x6d\x65\x71\x71"]); } public function aqyikqugcomoqqqi() { $qgiimcueymgqcsai = $this->caokeucsksukesyo()->cqusmgskowmesgcg(); if ($qgiimcueymgqcsai->iqqgmieeqemiowuk("\x73\165\142\x73\143\162\x69\x70\164\151\x6f\156", Constants::goqwwcuaqoyouoya)) { Subscription::symcgieuakksimmu(); } if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->ligksaggegsygqwo() && $qgiimcueymgqcsai->iqqgmieeqemiowuk("\x63\x6f\155\160\x6f\x6e\145\x6e\x74\55\x6d\141\156\141\147\145\x72")) { Request::symcgieuakksimmu(); WPSpeed::symcgieuakksimmu(); RequestMultistep::symcgieuakksimmu(); } } public function ywcueygosaysmeqq($kuemsykessaoquoy) { $kuemsykessaoquoy[$this->cqusmgskowmesgcg()] = $this->kmuweyayaqoeqiyw()->cisyiemkeykgkomc(); return $kuemsykessaoquoy; } public function cqusmgskowmesgcg() { return $this->weysguygiseoukqw(Constants::ocwsuwyiiasigqaa, 0); } }
