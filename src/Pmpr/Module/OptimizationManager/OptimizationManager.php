<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             678d3d489cd97             |
    |_______________________________________|
*/
 namespace Pmpr\Module\OptimizationManager; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\OptimizationManager\Frontend\Request; use Pmpr\Module\OptimizationManager\Frontend\RequestMultistep; use Pmpr\Module\OptimizationManager\Frontend\WPSpeed; use Pmpr\Module\OptimizationManager\Subscription\Subscription; class OptimizationManager extends ComponentInitiator { const aksyiucmwcsqgese = "\157\160\x74\x69\155\x69\172\141\164\151\x6f\x6e\137\155\141\156\x61\x67\145\162\x5f"; public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __("\117\160\x74\x69\x6d\x69\x7a\141\x74\151\x6f\x6e\40\x4d\x61\x6e\x61\x67\145\162", PR__MDL__OPTIMIZATION_MANAGER); }, Constants::sguyaymiiiiewame => Setting::class]); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom("\x62\141\143\153\154\151\x6e\153\137\x6d\x61\x6e\x61\x67\145\x72\x5f\155\157\144\x75\x6c\x65\x73", [$this, "\x79\167\143\x75\x65\x79\147\x6f\163\x61\171\163\155\145\x71\161"]); } public function aqyikqugcomoqqqi() { $qgiimcueymgqcsai = $this->caokeucsksukesyo()->cqusmgskowmesgcg(); if ($qgiimcueymgqcsai->iqqgmieeqemiowuk("\163\165\142\163\143\x72\x69\160\x74\151\x6f\156", Constants::goqwwcuaqoyouoya)) { Subscription::symcgieuakksimmu(); } if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->ligksaggegsygqwo() && $qgiimcueymgqcsai->iqqgmieeqemiowuk("\x63\157\155\x70\x6f\x6e\145\x6e\x74\x2d\x6d\141\156\x61\147\145\162")) { Request::symcgieuakksimmu(); WPSpeed::symcgieuakksimmu(); RequestMultistep::symcgieuakksimmu(); } } public function ywcueygosaysmeqq($kuemsykessaoquoy) { $kuemsykessaoquoy[$this->cqusmgskowmesgcg()] = $this->kmuweyayaqoeqiyw()->cisyiemkeykgkomc(); return $kuemsykessaoquoy; } public function cqusmgskowmesgcg() { return $this->weysguygiseoukqw(Constants::ocwsuwyiiasigqaa, 0); } }
