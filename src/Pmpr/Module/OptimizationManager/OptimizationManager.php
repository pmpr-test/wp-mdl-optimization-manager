<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6720b73f2e429             |
    |_______________________________________|
*/
 namespace Pmpr\Module\OptimizationManager; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\OptimizationManager\Frontend\Request; use Pmpr\Module\OptimizationManager\Frontend\RequestMultistep; use Pmpr\Module\OptimizationManager\Frontend\WPSpeed; use Pmpr\Module\OptimizationManager\Subscription\Subscription; class OptimizationManager extends ComponentInitiator { const aksyiucmwcsqgese = "\x6f\x70\164\151\155\x69\x7a\141\x74\151\x6f\x6e\137\x6d\x61\x6e\141\147\x65\x72\x5f"; public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __("\117\160\164\151\155\151\172\141\x74\x69\x6f\156\40\115\x61\x6e\141\x67\x65\162", PR__MDL__OPTIMIZATION_MANAGER); }, Constants::sguyaymiiiiewame => Setting::class]); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom("\142\x61\143\x6b\154\151\156\153\137\x6d\141\x6e\141\x67\x65\x72\x5f\155\157\144\x75\154\145\x73", [$this, "\171\x77\143\165\x65\171\147\157\x73\141\171\163\155\x65\161\161"]); } public function aqyikqugcomoqqqi() { $qgiimcueymgqcsai = $this->caokeucsksukesyo()->cqusmgskowmesgcg(); if ($qgiimcueymgqcsai->iqqgmieeqemiowuk("\163\x75\142\x73\143\162\151\160\164\x69\x6f\156", Constants::goqwwcuaqoyouoya)) { Subscription::symcgieuakksimmu(); } if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->ligksaggegsygqwo() && $qgiimcueymgqcsai->iqqgmieeqemiowuk("\143\x6f\155\160\x6f\x6e\x65\x6e\164\x2d\x6d\141\x6e\x61\147\x65\x72")) { Request::symcgieuakksimmu(); WPSpeed::symcgieuakksimmu(); RequestMultistep::symcgieuakksimmu(); } } public function ywcueygosaysmeqq($kuemsykessaoquoy) { $kuemsykessaoquoy[$this->cqusmgskowmesgcg()] = $this->kmuweyayaqoeqiyw()->cisyiemkeykgkomc(); return $kuemsykessaoquoy; } public function cqusmgskowmesgcg() { return $this->weysguygiseoukqw(Constants::ocwsuwyiiasigqaa, 0); } }
