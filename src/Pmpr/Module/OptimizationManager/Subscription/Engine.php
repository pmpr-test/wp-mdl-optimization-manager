<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6801770cd111c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\OptimizationManager\Subscription; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Subscription\Engine as BaseClass; use Pmpr\Module\DomainManager\Model\Domain; use Pmpr\Module\OptimizationManager\Subscription\Frontend\Pricing; use Pmpr\Module\OptimizationManager\Subscription\Model\Extra; use Pmpr\Module\OptimizationManager\Subscription\Model\Plan; use Pmpr\Module\OptimizationManager\Subscription\Model\Usage; use Pmpr\Module\OptimizationManager\Subscription\Model\Subscription; class Engine extends BaseClass { public function aakmagwggmkoiiyu() : string { return 'optimization_manager'; } public function esqsaiqmmsyymoea() : Plan { return Plan::symcgieuakksimmu(); } public function oisakkmieamkammc() : Extra { return Extra::symcgieuakksimmu(); } public function uaikmqggwqeiigwe() : Usage { return Usage::symcgieuakksimmu(); } public function ucugmoqeawkymskk() : Subscription { return Subscription::symcgieuakksimmu(); } public function eyymssiiosygicem($cusggmuosggikeas = null) { return Domain::symcgieuakksimmu()->iekyeyicoyyawomk()->akkkoiiymmamsauc($cusggmuosggikeas); } public function ogkiouuqqmaagscs($cusggmuosggikeas = null) : ?string { return Domain::symcgieuakksimmu()->uikgwcuascgeissw($this->eyymssiiosygicem($cusggmuosggikeas)); } public function mcwgysaowamqkcsc($isweyuoisomqyaag, $oymcauiugwyscqgs) : array { $qsqwqsymmqeoqwcu = parent::mcwgysaowamqkcsc($isweyuoisomqyaag, $oymcauiugwyscqgs); if ($qsqwqsymmqeoqwcu) { $qsqwqsymmqeoqwcu[Constants::qscwcyiaqccoayqk] = [Constants::mykiyeswieqamagm => [Constants::qescuiwgsyuikume => __('Number of Coins', PR__MDL__OPTIMIZATION_MANAGER), Constants::ciyoccqkiamemcmm => $this->caokeucsksukesyo()->aqasygcsqysmmyke()->waecsyqmwascmqoa($isweyuoisomqyaag, $oymcauiugwyscqgs)], Constants::icymuyeowqaciyyu => [Constants::qescuiwgsyuikume => __('Expiration Date', PR__MDL__OPTIMIZATION_MANAGER), Constants::ciyoccqkiamemcmm => __('Have Not', PR__MDL__OPTIMIZATION_MANAGER)], 'transfer' => [Constants::qescuiwgsyuikume => __('The ability to transfer to a new plan', PR__MDL__OPTIMIZATION_MANAGER), Constants::ciyoccqkiamemcmm => __('Has It', PR__MDL__OPTIMIZATION_MANAGER)]]; } return $qsqwqsymmqeoqwcu; } public function kymquygyagwwqwkm($cusggmuosggikeas, $aiamqeawckcsuaou) : int { $smowyuyseuwiaiei = 0; $umwagewoweuckiso = $this->mkiwiwaquqeegaik($cusggmuosggikeas); if ($umwagewoweuckiso) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); switch ($aiamqeawckcsuaou) { case 'critical_css': $smowyuyseuwiaiei = (int) $gkyciwoiiisgywcs->get($umwagewoweuckiso, Plan::cgiaykosmmoyuagu, 0); break; case 'speed_test': $smowyuyseuwiaiei = (int) $gkyciwoiiisgywcs->get($umwagewoweuckiso, Plan::kceiayeyisgquuim, 0); break; } } return $smowyuyseuwiaiei; } public function ucqceiamukugecuu($cusggmuosggikeas, $smowyuyseuwiaiei) : array { $bsgyawiqyuquqmyy = $smowyuyseuwiaiei; $ccmoacwicocuoseg = []; $gcmkukicuycuoayg = $aomcqcgmkgcowmsc = 0; $gqaqqcmkaoqocsue = $this->uaikmqggwqeiigwe(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $umwagewoweuckiso = $this->mkiwiwaquqeegaik($cusggmuosggikeas); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); if ($umwagewoweuckiso) { $omcwcsgeyeyoiwyi = $this->ucugmoqeawkymskk(); $gcmkukicuycuoayg = $omcwcsgeyeyoiwyi->mwyqswsaeeewsosm($umwagewoweuckiso); $qsmaqqyoggcuyukq = $gqaqqcmkaoqocsue->iekyeyicoyyawomk()->qgiewwqykwugcuoo(Constants::ciyoccqkiamemcmm, [$eqwoegegiamegqsm->megqywqeuquawkim(Constants::ciywsqoeiymemsys, [Constants::sgoswgskyiiwkyuo, Constants::amcogigwsaqssuai]), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::igecewwoemccgwsq, Constants::eoigaocgcaekssuw), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::yocqkmeouaamomke, $gcmkukicuycuoayg)]); $keygqgeekqumqccy = (int) $gkyciwoiiisgywcs->get($umwagewoweuckiso, Constants::mykiyeswieqamagm, 0); if ($keygqgeekqumqccy > 0 && $qsmaqqyoggcuyukq < $keygqgeekqumqccy) { $ksokgmueuaceawue = $keygqgeekqumqccy - $qsmaqqyoggcuyukq; $aomcqcgmkgcowmsc = $ksokgmueuaceawue >= $bsgyawiqyuquqmyy ? $bsgyawiqyuquqmyy : $bsgyawiqyuquqmyy - $ksokgmueuaceawue; $bsgyawiqyuquqmyy -= $aomcqcgmkgcowmsc; } } if ($bsgyawiqyuquqmyy > 0) { $gkaemmicaykeooqe = $this->oisakkmieamkammc(); $wayuuiaskyoiociq = $gkaemmicaykeooqe->iekyeyicoyyawomk()->cieaqygkucwoqwke([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::kuqwimiimiqsimgo, $gcmkukicuycuoayg), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::ciywsqoeiymemsys, Constants::eqewsqmqmsiocaeg)]); foreach ($wayuuiaskyoiociq as $gyskaqycyaywiiyi) { $qguauucmeiywiaue = $gkaemmicaykeooqe->mwyqswsaeeewsosm($gyskaqycyaywiiyi); $qsmaqqyoggcuyukq = $gqaqqcmkaoqocsue->iekyeyicoyyawomk()->qgiewwqykwugcuoo(Constants::ciyoccqkiamemcmm, [$eqwoegegiamegqsm->megqywqeuquawkim(Constants::ciywsqoeiymemsys, [Constants::sgoswgskyiiwkyuo, Constants::amcogigwsaqssuai]), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::igecewwoemccgwsq, Constants::mayesweykoooyugy), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::yocqkmeouaamomke, $qguauucmeiywiaue)]); $keygqgeekqumqccy = (int) $gkaemmicaykeooqe->waecsyqmwascmqoa($gyskaqycyaywiiyi, Constants::ciyoccqkiamemcmm, 0); if ($keygqgeekqumqccy > 0 && $qsmaqqyoggcuyukq < $keygqgeekqumqccy) { $ksokgmueuaceawue = $keygqgeekqumqccy - $qsmaqqyoggcuyukq; $sissosgmaqeickya = $ksokgmueuaceawue >= $bsgyawiqyuquqmyy ? $bsgyawiqyuquqmyy : $bsgyawiqyuquqmyy - $ksokgmueuaceawue; $ccmoacwicocuoseg[$qguauucmeiywiaue] = $sissosgmaqeickya; $bsgyawiqyuquqmyy -= $sissosgmaqeickya; if ($bsgyawiqyuquqmyy <= 0) { break; } } else { $gkaemmicaykeooqe->gssiscqyqsacmeca()->wqikesawekycweoi($gyskaqycyaywiiyi, [Constants::ciywsqoeiymemsys => Constants::uyckmiswqmqggysk], true); } } } return [Constants::ciywsqoeiymemsys => $bsgyawiqyuquqmyy <= 0 ? Constants::gymusgeumuwomwuy : Constants::uasuowkaguiwoouw, Constants::mayesweykoooyugy => $ccmoacwicocuoseg, Constants::eoigaocgcaekssuw => [Constants::gouqcwikiiygyasc => $gcmkukicuycuoayg, Constants::ciyoccqkiamemcmm => $aomcqcgmkgcowmsc]]; } public function xowkiecqumsskiec($cusggmuosggikeas) : array { $ecwacmeyceocemai = $cikuayiemiugqiui = [Constants::ALL => 0, Constants::gikauwqcswqcsmqw => 0]; $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $gqaqqcmkaoqocsue = $this->uaikmqggwqeiigwe(); $umwagewoweuckiso = $this->mkiwiwaquqeegaik($cusggmuosggikeas); if ($umwagewoweuckiso) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $omcwcsgeyeyoiwyi = $this->ucugmoqeawkymskk(); $gcmkukicuycuoayg = $omcwcsgeyeyoiwyi->mwyqswsaeeewsosm($umwagewoweuckiso); $ecwacmeyceocemai = [Constants::ALL => (int) $gkyciwoiiisgywcs->get($umwagewoweuckiso, Constants::mykiyeswieqamagm, 0), Constants::gikauwqcswqcsmqw => $gqaqqcmkaoqocsue->iekyeyicoyyawomk()->qgiewwqykwugcuoo(Constants::ciyoccqkiamemcmm, [$eqwoegegiamegqsm->megqywqeuquawkim(Constants::ciywsqoeiymemsys, [Constants::sgoswgskyiiwkyuo, Constants::amcogigwsaqssuai]), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::igecewwoemccgwsq, Constants::eoigaocgcaekssuw), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::yocqkmeouaamomke, $gcmkukicuycuoayg)])]; } $gkaemmicaykeooqe = $this->oisakkmieamkammc(); $wayuuiaskyoiociq = $gkaemmicaykeooqe->iekyeyicoyyawomk()->cieaqygkucwoqwke([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::kuqwimiimiqsimgo, $cusggmuosggikeas), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::ciywsqoeiymemsys, Constants::eqewsqmqmsiocaeg)]); foreach ($wayuuiaskyoiociq as $gyskaqycyaywiiyi) { $cikuayiemiugqiui[Constants::ALL] += (int) $gkaemmicaykeooqe->waecsyqmwascmqoa($gyskaqycyaywiiyi, Constants::ciyoccqkiamemcmm, 0); $cikuayiemiugqiui[Constants::gikauwqcswqcsmqw] += $gqaqqcmkaoqocsue->iekyeyicoyyawomk()->qgiewwqykwugcuoo(Constants::ciyoccqkiamemcmm, [$eqwoegegiamegqsm->megqywqeuquawkim(Constants::ciywsqoeiymemsys, [Constants::sgoswgskyiiwkyuo, Constants::amcogigwsaqssuai]), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::igecewwoemccgwsq, Constants::mayesweykoooyugy), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::yocqkmeouaamomke, $gkaemmicaykeooqe->mwyqswsaeeewsosm($gyskaqycyaywiiyi))]); } return [Constants::mayesweykoooyugy => $cikuayiemiugqiui, Constants::eoigaocgcaekssuw => $ecwacmeyceocemai]; } public function skwookiukacyyaeo($sqeykgyoooqysmca, $ccamueccusigaaio, array $ekuqiqmikiicgoss = [], array $ywmkwiwkosakssii = []) : bool { $ockekyouswmoccck = false; switch ($sqeykgyoooqysmca) { case Constants::mykiyeswieqamagm: $ockekyouswmoccck = true; break; } return $ockekyouswmoccck; } public function gsmygqkksqsseoeq() : string { return Pricing::symcgieuakksimmu()->ycqquoiyyuesegsy(); } }
