<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d8616a1eda             |
    |_______________________________________|
*/
 namespace Pmpr\Module\OptimizationManager; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\OptimizationManager\Frontend\Request; use Pmpr\Module\OptimizationManager\Frontend\RequestMultistep; use Pmpr\Module\OptimizationManager\Frontend\WPSpeed; use Pmpr\Module\OptimizationManager\Subscription\Subscription; class OptimizationManager extends ComponentInitiator { const aksyiucmwcsqgese = "\157\160\164\x69\x6d\151\x7a\141\x74\x69\x6f\156\x5f\155\141\x6e\141\x67\145\x72\137"; public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __("\x4f\160\164\x69\x6d\151\172\141\x74\151\157\x6e\40\115\x61\156\141\147\x65\x72", PR__MDL__OPTIMIZATION_MANAGER); }, Constants::sguyaymiiiiewame => Setting::class]); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom("\142\x61\143\153\x6c\x69\x6e\x6b\137\x6d\x61\x6e\141\147\x65\162\x5f\155\157\144\x75\x6c\x65\x73", [$this, "\171\167\143\x75\145\x79\147\x6f\163\x61\x79\x73\155\x65\161\161"]); } public function aqyikqugcomoqqqi() { $qgiimcueymgqcsai = $this->caokeucsksukesyo()->cqusmgskowmesgcg(); if ($qgiimcueymgqcsai->iqqgmieeqemiowuk("\x73\165\x62\x73\x63\162\x69\x70\x74\x69\157\156", Constants::goqwwcuaqoyouoya)) { Subscription::symcgieuakksimmu(); } if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->ligksaggegsygqwo() && $qgiimcueymgqcsai->iqqgmieeqemiowuk("\x63\x6f\155\x70\157\x6e\145\156\x74\x2d\155\x61\x6e\141\147\x65\162")) { Request::symcgieuakksimmu(); WPSpeed::symcgieuakksimmu(); RequestMultistep::symcgieuakksimmu(); } } public function ywcueygosaysmeqq($kuemsykessaoquoy) { $kuemsykessaoquoy[$this->cqusmgskowmesgcg()] = $this->kmuweyayaqoeqiyw()->cisyiemkeykgkomc(); return $kuemsykessaoquoy; } public function cqusmgskowmesgcg() { return $this->weysguygiseoukqw(Constants::ocwsuwyiiasigqaa, 0); } }
