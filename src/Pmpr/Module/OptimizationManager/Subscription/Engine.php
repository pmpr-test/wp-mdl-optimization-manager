<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67705d82ad66b             |
    |_______________________________________|
*/
 namespace Pmpr\Module\OptimizationManager\Subscription; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Subscription\Engine as BaseClass; use Pmpr\Module\DomainManager\Model\Domain; use Pmpr\Module\OptimizationManager\Subscription\Frontend\Pricing; use Pmpr\Module\OptimizationManager\Subscription\Model\Extra; use Pmpr\Module\OptimizationManager\Subscription\Model\Plan; use Pmpr\Module\OptimizationManager\Subscription\Model\Usage; use Pmpr\Module\OptimizationManager\Subscription\Model\Subscription; class Engine extends BaseClass { public function aakmagwggmkoiiyu() : string { return "\x6f\160\x74\x69\x6d\151\x7a\141\164\x69\x6f\x6e\x5f\x6d\x61\156\x61\147\x65\x72"; } public function esqsaiqmmsyymoea() : Plan { return Plan::symcgieuakksimmu(); } public function oisakkmieamkammc() : Extra { return Extra::symcgieuakksimmu(); } public function uaikmqggwqeiigwe() : Usage { return Usage::symcgieuakksimmu(); } public function ucugmoqeawkymskk() : Subscription { return Subscription::symcgieuakksimmu(); } public function eyymssiiosygicem($cusggmuosggikeas = null) { return Domain::symcgieuakksimmu()->iekyeyicoyyawomk()->akkkoiiymmamsauc($cusggmuosggikeas); } public function ogkiouuqqmaagscs($cusggmuosggikeas = null) : ?string { return Domain::symcgieuakksimmu()->uikgwcuascgeissw($this->eyymssiiosygicem($cusggmuosggikeas)); } public function mcwgysaowamqkcsc($isweyuoisomqyaag, $oymcauiugwyscqgs) : array { $qsqwqsymmqeoqwcu = parent::mcwgysaowamqkcsc($isweyuoisomqyaag, $oymcauiugwyscqgs); if ($qsqwqsymmqeoqwcu) { $qsqwqsymmqeoqwcu[Constants::qscwcyiaqccoayqk] = [Constants::mykiyeswieqamagm => [Constants::qescuiwgsyuikume => __("\116\165\x6d\142\145\x72\x20\157\146\40\x43\157\x69\156\163", PR__MDL__OPTIMIZATION_MANAGER), Constants::ciyoccqkiamemcmm => $this->caokeucsksukesyo()->aqasygcsqysmmyke()->waecsyqmwascmqoa($isweyuoisomqyaag, $oymcauiugwyscqgs)], Constants::icymuyeowqaciyyu => [Constants::qescuiwgsyuikume => __("\x45\x78\x70\x69\x72\x61\x74\x69\x6f\156\40\x44\141\164\145", PR__MDL__OPTIMIZATION_MANAGER), Constants::ciyoccqkiamemcmm => __("\x48\141\x76\145\x20\x4e\157\164", PR__MDL__OPTIMIZATION_MANAGER)], "\x74\x72\141\156\163\x66\x65\x72" => [Constants::qescuiwgsyuikume => __("\x54\150\145\40\141\x62\x69\154\151\164\x79\x20\164\157\40\x74\x72\x61\x6e\x73\x66\x65\x72\40\164\x6f\x20\x61\40\156\145\167\x20\x70\154\x61\x6e", PR__MDL__OPTIMIZATION_MANAGER), Constants::ciyoccqkiamemcmm => __("\x48\x61\163\40\111\x74", PR__MDL__OPTIMIZATION_MANAGER)]]; } return $qsqwqsymmqeoqwcu; } public function kymquygyagwwqwkm($cusggmuosggikeas, $aiamqeawckcsuaou) : int { $smowyuyseuwiaiei = 0; $umwagewoweuckiso = $this->mkiwiwaquqeegaik($cusggmuosggikeas); if ($umwagewoweuckiso) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); switch ($aiamqeawckcsuaou) { case "\143\x72\x69\164\x69\x63\141\154\137\x63\x73\163": $smowyuyseuwiaiei = (int) $gkyciwoiiisgywcs->get($umwagewoweuckiso, Plan::cgiaykosmmoyuagu, 0); break; case "\163\160\x65\x65\144\x5f\x74\x65\163\164": $smowyuyseuwiaiei = (int) $gkyciwoiiisgywcs->get($umwagewoweuckiso, Plan::kceiayeyisgquuim, 0); break; } } return $smowyuyseuwiaiei; } public function ucqceiamukugecuu($cusggmuosggikeas, $smowyuyseuwiaiei) : array { $bsgyawiqyuquqmyy = $smowyuyseuwiaiei; $ccmoacwicocuoseg = []; $gcmkukicuycuoayg = $aomcqcgmkgcowmsc = 0; $gqaqqcmkaoqocsue = $this->uaikmqggwqeiigwe(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $umwagewoweuckiso = $this->mkiwiwaquqeegaik($cusggmuosggikeas); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); if ($umwagewoweuckiso) { $omcwcsgeyeyoiwyi = $this->ucugmoqeawkymskk(); $gcmkukicuycuoayg = $omcwcsgeyeyoiwyi->mwyqswsaeeewsosm($umwagewoweuckiso); $qsmaqqyoggcuyukq = $gqaqqcmkaoqocsue->iekyeyicoyyawomk()->qgiewwqykwugcuoo(Constants::ciyoccqkiamemcmm, [$eqwoegegiamegqsm->megqywqeuquawkim(Constants::ciywsqoeiymemsys, [Constants::sgoswgskyiiwkyuo, Constants::amcogigwsaqssuai]), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::igecewwoemccgwsq, Constants::eoigaocgcaekssuw), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::yocqkmeouaamomke, $gcmkukicuycuoayg)]); $keygqgeekqumqccy = (int) $gkyciwoiiisgywcs->get($umwagewoweuckiso, Constants::mykiyeswieqamagm, 0); if ($keygqgeekqumqccy > 0 && $qsmaqqyoggcuyukq < $keygqgeekqumqccy) { $ksokgmueuaceawue = $keygqgeekqumqccy - $qsmaqqyoggcuyukq; $aomcqcgmkgcowmsc = $ksokgmueuaceawue >= $bsgyawiqyuquqmyy ? $bsgyawiqyuquqmyy : $bsgyawiqyuquqmyy - $ksokgmueuaceawue; $bsgyawiqyuquqmyy -= $aomcqcgmkgcowmsc; } } if ($bsgyawiqyuquqmyy > 0) { $gkaemmicaykeooqe = $this->oisakkmieamkammc(); $wayuuiaskyoiociq = $gkaemmicaykeooqe->iekyeyicoyyawomk()->cieaqygkucwoqwke([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::kuqwimiimiqsimgo, $gcmkukicuycuoayg), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::ciywsqoeiymemsys, Constants::eqewsqmqmsiocaeg)]); foreach ($wayuuiaskyoiociq as $gyskaqycyaywiiyi) { $qguauucmeiywiaue = $gkaemmicaykeooqe->mwyqswsaeeewsosm($gyskaqycyaywiiyi); $qsmaqqyoggcuyukq = $gqaqqcmkaoqocsue->iekyeyicoyyawomk()->qgiewwqykwugcuoo(Constants::ciyoccqkiamemcmm, [$eqwoegegiamegqsm->megqywqeuquawkim(Constants::ciywsqoeiymemsys, [Constants::sgoswgskyiiwkyuo, Constants::amcogigwsaqssuai]), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::igecewwoemccgwsq, Constants::mayesweykoooyugy), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::yocqkmeouaamomke, $qguauucmeiywiaue)]); $keygqgeekqumqccy = (int) $gkaemmicaykeooqe->waecsyqmwascmqoa($gyskaqycyaywiiyi, Constants::ciyoccqkiamemcmm, 0); if ($keygqgeekqumqccy > 0 && $qsmaqqyoggcuyukq < $keygqgeekqumqccy) { $ksokgmueuaceawue = $keygqgeekqumqccy - $qsmaqqyoggcuyukq; $sissosgmaqeickya = $ksokgmueuaceawue >= $bsgyawiqyuquqmyy ? $bsgyawiqyuquqmyy : $bsgyawiqyuquqmyy - $ksokgmueuaceawue; $ccmoacwicocuoseg[$qguauucmeiywiaue] = $sissosgmaqeickya; $bsgyawiqyuquqmyy -= $sissosgmaqeickya; if ($bsgyawiqyuquqmyy <= 0) { break; } } else { $gkaemmicaykeooqe->gssiscqyqsacmeca()->wqikesawekycweoi($gyskaqycyaywiiyi, [Constants::ciywsqoeiymemsys => Constants::uyckmiswqmqggysk], true); } } } return [Constants::ciywsqoeiymemsys => $bsgyawiqyuquqmyy <= 0 ? Constants::gymusgeumuwomwuy : Constants::uasuowkaguiwoouw, Constants::mayesweykoooyugy => $ccmoacwicocuoseg, Constants::eoigaocgcaekssuw => [Constants::gouqcwikiiygyasc => $gcmkukicuycuoayg, Constants::ciyoccqkiamemcmm => $aomcqcgmkgcowmsc]]; } public function xowkiecqumsskiec($cusggmuosggikeas) : array { $ecwacmeyceocemai = $cikuayiemiugqiui = [Constants::ALL => 0, Constants::gikauwqcswqcsmqw => 0]; $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $gqaqqcmkaoqocsue = $this->uaikmqggwqeiigwe(); $umwagewoweuckiso = $this->mkiwiwaquqeegaik($cusggmuosggikeas); if ($umwagewoweuckiso) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $omcwcsgeyeyoiwyi = $this->ucugmoqeawkymskk(); $gcmkukicuycuoayg = $omcwcsgeyeyoiwyi->mwyqswsaeeewsosm($umwagewoweuckiso); $ecwacmeyceocemai = [Constants::ALL => (int) $gkyciwoiiisgywcs->get($umwagewoweuckiso, Constants::mykiyeswieqamagm, 0), Constants::gikauwqcswqcsmqw => $gqaqqcmkaoqocsue->iekyeyicoyyawomk()->qgiewwqykwugcuoo(Constants::ciyoccqkiamemcmm, [$eqwoegegiamegqsm->megqywqeuquawkim(Constants::ciywsqoeiymemsys, [Constants::sgoswgskyiiwkyuo, Constants::amcogigwsaqssuai]), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::igecewwoemccgwsq, Constants::eoigaocgcaekssuw), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::yocqkmeouaamomke, $gcmkukicuycuoayg)])]; } $gkaemmicaykeooqe = $this->oisakkmieamkammc(); $wayuuiaskyoiociq = $gkaemmicaykeooqe->iekyeyicoyyawomk()->cieaqygkucwoqwke([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::kuqwimiimiqsimgo, $cusggmuosggikeas), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::ciywsqoeiymemsys, Constants::eqewsqmqmsiocaeg)]); foreach ($wayuuiaskyoiociq as $gyskaqycyaywiiyi) { $cikuayiemiugqiui[Constants::ALL] += (int) $gkaemmicaykeooqe->waecsyqmwascmqoa($gyskaqycyaywiiyi, Constants::ciyoccqkiamemcmm, 0); $cikuayiemiugqiui[Constants::gikauwqcswqcsmqw] += $gqaqqcmkaoqocsue->iekyeyicoyyawomk()->qgiewwqykwugcuoo(Constants::ciyoccqkiamemcmm, [$eqwoegegiamegqsm->megqywqeuquawkim(Constants::ciywsqoeiymemsys, [Constants::sgoswgskyiiwkyuo, Constants::amcogigwsaqssuai]), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::igecewwoemccgwsq, Constants::mayesweykoooyugy), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::yocqkmeouaamomke, $gkaemmicaykeooqe->mwyqswsaeeewsosm($gyskaqycyaywiiyi))]); } return [Constants::mayesweykoooyugy => $cikuayiemiugqiui, Constants::eoigaocgcaekssuw => $ecwacmeyceocemai]; } public function skwookiukacyyaeo($sqeykgyoooqysmca, $ccamueccusigaaio, array $ekuqiqmikiicgoss = [], array $ywmkwiwkosakssii = []) : bool { $ockekyouswmoccck = false; switch ($sqeykgyoooqysmca) { case Constants::mykiyeswieqamagm: $ockekyouswmoccck = true; break; } return $ockekyouswmoccck; } public function gsmygqkksqsseoeq() : string { return Pricing::symcgieuakksimmu()->ycqquoiyyuesegsy(); } }
