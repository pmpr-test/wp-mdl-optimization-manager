<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d46c91cced             |
    |_______________________________________|
*/
 namespace Pmpr\Module\OptimizationManager; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\OptimizationManager\Frontend\Request; use Pmpr\Module\OptimizationManager\Frontend\RequestMultistep; use Pmpr\Module\OptimizationManager\Frontend\WPSpeed; use Pmpr\Module\OptimizationManager\Subscription\Subscription; class OptimizationManager extends ComponentInitiator { const aksyiucmwcsqgese = "\x6f\x70\x74\151\x6d\x69\x7a\141\164\x69\157\156\x5f\155\x61\156\141\x67\145\162\137"; public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __("\117\160\x74\x69\x6d\151\x7a\x61\164\x69\x6f\156\x20\x4d\141\x6e\141\147\145\x72", PR__MDL__OPTIMIZATION_MANAGER); }, Constants::sguyaymiiiiewame => Setting::class]); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom("\142\x61\143\153\154\x69\x6e\x6b\137\155\x61\156\x61\147\145\x72\x5f\155\x6f\x64\x75\154\x65\x73", [$this, "\171\167\x63\165\x65\x79\x67\x6f\163\141\171\x73\x6d\x65\x71\x71"]); } public function aqyikqugcomoqqqi() { $qgiimcueymgqcsai = $this->caokeucsksukesyo()->cqusmgskowmesgcg(); if ($qgiimcueymgqcsai->iqqgmieeqemiowuk("\x73\165\142\x73\x63\x72\151\x70\x74\x69\157\156", Constants::goqwwcuaqoyouoya)) { Subscription::symcgieuakksimmu(); } if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->ligksaggegsygqwo() && $qgiimcueymgqcsai->iqqgmieeqemiowuk("\143\157\x6d\x70\157\156\x65\x6e\164\55\x6d\141\156\x61\147\x65\x72")) { Request::symcgieuakksimmu(); WPSpeed::symcgieuakksimmu(); RequestMultistep::symcgieuakksimmu(); } } public function ywcueygosaysmeqq($kuemsykessaoquoy) { $kuemsykessaoquoy[$this->cqusmgskowmesgcg()] = $this->kmuweyayaqoeqiyw()->cisyiemkeykgkomc(); return $kuemsykessaoquoy; } public function cqusmgskowmesgcg() { return $this->weysguygiseoukqw(Constants::ocwsuwyiiasigqaa, 0); } }
