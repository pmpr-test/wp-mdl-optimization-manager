<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d46c91cced             |
    |_______________________________________|
*/
 namespace Pmpr\Module\OptimizationManager\Subscription; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Subscription\Engine as BaseClass; use Pmpr\Module\DomainManager\Model\Domain; use Pmpr\Module\OptimizationManager\Subscription\Frontend\Pricing; use Pmpr\Module\OptimizationManager\Subscription\Model\Extra; use Pmpr\Module\OptimizationManager\Subscription\Model\Plan; use Pmpr\Module\OptimizationManager\Subscription\Model\Usage; use Pmpr\Module\OptimizationManager\Subscription\Model\Subscription; class Engine extends BaseClass { public function aakmagwggmkoiiyu() : string { return "\x6f\x70\164\151\155\151\172\141\x74\151\157\x6e\137\155\141\156\x61\x67\145\162"; } public function esqsaiqmmsyymoea() : Plan { return Plan::symcgieuakksimmu(); } public function oisakkmieamkammc() : Extra { return Extra::symcgieuakksimmu(); } public function uaikmqggwqeiigwe() : Usage { return Usage::symcgieuakksimmu(); } public function ucugmoqeawkymskk() : Subscription { return Subscription::symcgieuakksimmu(); } public function eyymssiiosygicem($cusggmuosggikeas = null) { return Domain::symcgieuakksimmu()->akkkoiiymmamsauc($cusggmuosggikeas); } public function ogkiouuqqmaagscs($cusggmuosggikeas = null) : ?string { return Domain::symcgieuakksimmu()->uikgwcuascgeissw($this->eyymssiiosygicem($cusggmuosggikeas)); } public function mcwgysaowamqkcsc($isweyuoisomqyaag, $oymcauiugwyscqgs) : array { $qsqwqsymmqeoqwcu = parent::mcwgysaowamqkcsc($isweyuoisomqyaag, $oymcauiugwyscqgs); if ($qsqwqsymmqeoqwcu) { $qsqwqsymmqeoqwcu[Constants::qscwcyiaqccoayqk] = [Constants::mykiyeswieqamagm => [Constants::qescuiwgsyuikume => __("\x4e\x75\155\142\145\162\40\157\x66\40\103\x6f\151\x6e\163", PR__MDL__OPTIMIZATION_MANAGER), Constants::ciyoccqkiamemcmm => $this->caokeucsksukesyo()->aqasygcsqysmmyke()->waecsyqmwascmqoa($isweyuoisomqyaag, $oymcauiugwyscqgs)], Constants::icymuyeowqaciyyu => [Constants::qescuiwgsyuikume => __("\x45\x78\160\x69\162\x61\164\x69\157\x6e\x20\104\141\x74\145", PR__MDL__OPTIMIZATION_MANAGER), Constants::ciyoccqkiamemcmm => __("\x48\141\166\x65\x20\x4e\157\x74", PR__MDL__OPTIMIZATION_MANAGER)], "\x74\x72\x61\x6e\x73\146\x65\x72" => [Constants::qescuiwgsyuikume => __("\124\x68\x65\x20\141\x62\151\x6c\x69\x74\x79\40\164\x6f\40\x74\x72\x61\156\x73\146\145\x72\x20\x74\157\x20\141\x20\156\x65\x77\x20\160\x6c\141\x6e", PR__MDL__OPTIMIZATION_MANAGER), Constants::ciyoccqkiamemcmm => __("\x48\141\x73\x20\x49\x74", PR__MDL__OPTIMIZATION_MANAGER)]]; } return $qsqwqsymmqeoqwcu; } public function kymquygyagwwqwkm($cusggmuosggikeas, $aiamqeawckcsuaou) : int { $smowyuyseuwiaiei = 0; $umwagewoweuckiso = $this->mkiwiwaquqeegaik($cusggmuosggikeas); if ($umwagewoweuckiso) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); switch ($aiamqeawckcsuaou) { case "\143\x72\151\164\x69\143\x61\x6c\137\143\163\x73": $smowyuyseuwiaiei = (int) $gkyciwoiiisgywcs->get($umwagewoweuckiso, Plan::cgiaykosmmoyuagu, 0); break; case "\x73\160\145\145\x64\x5f\164\x65\163\164": $smowyuyseuwiaiei = (int) $gkyciwoiiisgywcs->get($umwagewoweuckiso, Plan::kceiayeyisgquuim, 0); break; } } return $smowyuyseuwiaiei; } public function ucqceiamukugecuu($cusggmuosggikeas, $smowyuyseuwiaiei) : array { $bsgyawiqyuquqmyy = $smowyuyseuwiaiei; $ccmoacwicocuoseg = []; $gcmkukicuycuoayg = $aomcqcgmkgcowmsc = 0; $gqaqqcmkaoqocsue = $this->uaikmqggwqeiigwe(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $umwagewoweuckiso = $this->mkiwiwaquqeegaik($cusggmuosggikeas); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); if ($umwagewoweuckiso) { $omcwcsgeyeyoiwyi = $this->ucugmoqeawkymskk(); $gcmkukicuycuoayg = $omcwcsgeyeyoiwyi->mwyqswsaeeewsosm($umwagewoweuckiso); $qsmaqqyoggcuyukq = $gqaqqcmkaoqocsue->iekyeyicoyyawomk()->qgiewwqykwugcuoo(Constants::ciyoccqkiamemcmm, [$eqwoegegiamegqsm->megqywqeuquawkim(Constants::ciywsqoeiymemsys, [Constants::sgoswgskyiiwkyuo, Constants::amcogigwsaqssuai]), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::igecewwoemccgwsq, Constants::eoigaocgcaekssuw), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::yocqkmeouaamomke, $gcmkukicuycuoayg)]); $keygqgeekqumqccy = (int) $gkyciwoiiisgywcs->get($umwagewoweuckiso, Constants::mykiyeswieqamagm, 0); if ($keygqgeekqumqccy > 0 && $qsmaqqyoggcuyukq < $keygqgeekqumqccy) { $ksokgmueuaceawue = $keygqgeekqumqccy - $qsmaqqyoggcuyukq; $aomcqcgmkgcowmsc = $ksokgmueuaceawue >= $bsgyawiqyuquqmyy ? $bsgyawiqyuquqmyy : $bsgyawiqyuquqmyy - $ksokgmueuaceawue; $bsgyawiqyuquqmyy -= $aomcqcgmkgcowmsc; } } if ($bsgyawiqyuquqmyy > 0) { $gkaemmicaykeooqe = $this->oisakkmieamkammc(); $wayuuiaskyoiociq = $gkaemmicaykeooqe->iekyeyicoyyawomk()->cieaqygkucwoqwke([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::kuqwimiimiqsimgo, $gcmkukicuycuoayg), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::ciywsqoeiymemsys, Constants::eqewsqmqmsiocaeg)]); foreach ($wayuuiaskyoiociq as $gyskaqycyaywiiyi) { $qguauucmeiywiaue = $gkaemmicaykeooqe->mwyqswsaeeewsosm($gyskaqycyaywiiyi); $qsmaqqyoggcuyukq = $gqaqqcmkaoqocsue->iekyeyicoyyawomk()->qgiewwqykwugcuoo(Constants::ciyoccqkiamemcmm, [$eqwoegegiamegqsm->megqywqeuquawkim(Constants::ciywsqoeiymemsys, [Constants::sgoswgskyiiwkyuo, Constants::amcogigwsaqssuai]), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::igecewwoemccgwsq, Constants::mayesweykoooyugy), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::yocqkmeouaamomke, $qguauucmeiywiaue)]); $keygqgeekqumqccy = (int) $gkaemmicaykeooqe->waecsyqmwascmqoa($gyskaqycyaywiiyi, Constants::ciyoccqkiamemcmm, 0); if ($keygqgeekqumqccy > 0 && $qsmaqqyoggcuyukq < $keygqgeekqumqccy) { $ksokgmueuaceawue = $keygqgeekqumqccy - $qsmaqqyoggcuyukq; $sissosgmaqeickya = $ksokgmueuaceawue >= $bsgyawiqyuquqmyy ? $bsgyawiqyuquqmyy : $bsgyawiqyuquqmyy - $ksokgmueuaceawue; $ccmoacwicocuoseg[$qguauucmeiywiaue] = $sissosgmaqeickya; $bsgyawiqyuquqmyy -= $sissosgmaqeickya; if ($bsgyawiqyuquqmyy <= 0) { break; } } else { $gkaemmicaykeooqe->gssiscqyqsacmeca()->wqikesawekycweoi($gyskaqycyaywiiyi, [Constants::ciywsqoeiymemsys => Constants::uyckmiswqmqggysk], true); } } } return [Constants::ciywsqoeiymemsys => $bsgyawiqyuquqmyy <= 0 ? Constants::gymusgeumuwomwuy : Constants::uasuowkaguiwoouw, Constants::mayesweykoooyugy => $ccmoacwicocuoseg, Constants::eoigaocgcaekssuw => [Constants::gouqcwikiiygyasc => $gcmkukicuycuoayg, Constants::ciyoccqkiamemcmm => $aomcqcgmkgcowmsc]]; } public function xowkiecqumsskiec($cusggmuosggikeas) : array { $ecwacmeyceocemai = $cikuayiemiugqiui = [Constants::ALL => 0, Constants::gikauwqcswqcsmqw => 0]; $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $gqaqqcmkaoqocsue = $this->uaikmqggwqeiigwe(); $umwagewoweuckiso = $this->mkiwiwaquqeegaik($cusggmuosggikeas); if ($umwagewoweuckiso) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $omcwcsgeyeyoiwyi = $this->ucugmoqeawkymskk(); $gcmkukicuycuoayg = $omcwcsgeyeyoiwyi->mwyqswsaeeewsosm($umwagewoweuckiso); $ecwacmeyceocemai = [Constants::ALL => (int) $gkyciwoiiisgywcs->get($umwagewoweuckiso, Constants::mykiyeswieqamagm, 0), Constants::gikauwqcswqcsmqw => $gqaqqcmkaoqocsue->iekyeyicoyyawomk()->qgiewwqykwugcuoo(Constants::ciyoccqkiamemcmm, [$eqwoegegiamegqsm->megqywqeuquawkim(Constants::ciywsqoeiymemsys, [Constants::sgoswgskyiiwkyuo, Constants::amcogigwsaqssuai]), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::igecewwoemccgwsq, Constants::eoigaocgcaekssuw), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::yocqkmeouaamomke, $gcmkukicuycuoayg)])]; } $gkaemmicaykeooqe = $this->oisakkmieamkammc(); $wayuuiaskyoiociq = $gkaemmicaykeooqe->iekyeyicoyyawomk()->cieaqygkucwoqwke([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::kuqwimiimiqsimgo, $cusggmuosggikeas), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::ciywsqoeiymemsys, Constants::eqewsqmqmsiocaeg)]); foreach ($wayuuiaskyoiociq as $gyskaqycyaywiiyi) { $cikuayiemiugqiui[Constants::ALL] += (int) $gkaemmicaykeooqe->waecsyqmwascmqoa($gyskaqycyaywiiyi, Constants::ciyoccqkiamemcmm, 0); $cikuayiemiugqiui[Constants::gikauwqcswqcsmqw] += $gqaqqcmkaoqocsue->iekyeyicoyyawomk()->qgiewwqykwugcuoo(Constants::ciyoccqkiamemcmm, [$eqwoegegiamegqsm->megqywqeuquawkim(Constants::ciywsqoeiymemsys, [Constants::sgoswgskyiiwkyuo, Constants::amcogigwsaqssuai]), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::igecewwoemccgwsq, Constants::mayesweykoooyugy), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::yocqkmeouaamomke, $gkaemmicaykeooqe->mwyqswsaeeewsosm($gyskaqycyaywiiyi))]); } return [Constants::mayesweykoooyugy => $cikuayiemiugqiui, Constants::eoigaocgcaekssuw => $ecwacmeyceocemai]; } public function skwookiukacyyaeo($sqeykgyoooqysmca, $ccamueccusigaaio, array $ekuqiqmikiicgoss = [], array $ywmkwiwkosakssii = []) : bool { $ockekyouswmoccck = false; switch ($sqeykgyoooqysmca) { case Constants::mykiyeswieqamagm: $ockekyouswmoccck = true; break; } return $ockekyouswmoccck; } public function gsmygqkksqsseoeq() : string { return Pricing::symcgieuakksimmu()->ycqquoiyyuesegsy(); } }
