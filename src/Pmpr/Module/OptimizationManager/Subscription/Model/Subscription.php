<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d893887a06             |
    |_______________________________________|
*/
 namespace Pmpr\Module\OptimizationManager\Subscription\Model; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Subscription\Model\Subscription as BaseClass; use Pmpr\Module\DomainManager\Model\Domain; use Pmpr\Module\OptimizationManager\Subscription\Traits\AbstractSubTrait; use Pmpr\Module\OptimizationManager\Subscription\Traits\EngineTrait; class Subscription extends BaseClass { use AbstractSubTrait, EngineTrait; public function register() { parent::register(); $this->swsaakqseuaacagq(Constants::emsskyeoaqokwsoa, [$this, "\x79\145\165\171\x79\x63\x6b\x73\145\x6f\x69\x6f\153\155\155\x6d"]); } public function uwmqacgewuauagai() { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $this->cquokmemekqqywgi($eqwoegegiamegqsm->qoemykoeuecmsmwe(Constants::mykiyeswieqamagm)->acceqyqygswoecwe(8)->eyygsasuqmommkua(0)->acokiqqgsmoqaeyu()->gswweykyogmsyawy(__("\x43\x6f\151\156\x73", PR__MDL__OPTIMIZATION_MANAGER)))->cquokmemekqqywgi($eqwoegegiamegqsm->usqseiuaeauwuwus(Constants::eeeyoywyquqywwoo)->acokiqqgsmoqaeyu()->acceqyqygswoecwe(100)->gswweykyogmsyawy(__("\120\x65\x72\x69\157\144", PR__MDL__OPTIMIZATION_MANAGER)))->cquokmemekqqywgi($eqwoegegiamegqsm->qoemykoeuecmsmwe(Plan::cgiaykosmmoyuagu)->acceqyqygswoecwe(8)->eyygsasuqmommkua(0)->acokiqqgsmoqaeyu()->gswweykyogmsyawy(__("\103\x72\151\164\x69\x63\141\x6c\40\103\x53\123\x20\125\x73\x61\x67\145", PR__MDL__OPTIMIZATION_MANAGER)))->cquokmemekqqywgi($eqwoegegiamegqsm->qoemykoeuecmsmwe(Plan::kceiayeyisgquuim)->acceqyqygswoecwe(8)->eyygsasuqmommkua(0)->acokiqqgsmoqaeyu()->gswweykyogmsyawy(__("\x53\x70\145\145\144\40\x54\x65\163\164\40\x55\x73\141\x67\x65", PR__MDL__OPTIMIZATION_MANAGER)))->cquokmemekqqywgi($eqwoegegiamegqsm->eoaomaokwkwqyqiq(Constants::kiwgokskimawckie)->gswweykyogmsyawy(__("\x50\154\x61\156", PR__MDL__OPTIMIZATION_MANAGER))->wuuqgaekqeymecag(Plan::class)); parent::uwmqacgewuauagai(); } public function aoqwywcqmoqaukkq() { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $this->yyoqecggyacaseko()->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(Constants::kuqwimiimiqsimgo)->ugquamoakekwyiqg(Domain::class)->mkmssscwmeekwgqo()); parent::aoqwywcqmoqaukkq(); $this->yyoqecggyacaseko()->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(Constants::mykiyeswieqamagm)->escqqisecooswqgo())->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(Plan::cgiaykosmmoyuagu)->escqqisecooswqgo())->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(Plan::kceiayeyisgquuim)->escqqisecooswqgo())->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(Constants::eeeyoywyquqywwoo)); } public function yeuyyckseoiokmmm($icwicymcioeyeyek) { if (empty($icwicymcioeyeyek[Constants::kiwgokskimawckie])) { $this->gssiscqyqsacmeca()->msqsseeaasqysese(__("\120\x6c\x61\x6e\40\x63\x61\156\40\156\157\x74\40\142\145\40\x65\x6d\x70\x74\x79\54\x20\x70\x6c\145\x61\163\x65\40\x73\x65\154\x65\143\x74\40\141\40\x70\x6c\x61\156\40\146\151\162\163\x74\x2e", PR__MDL__OPTIMIZATION_MANAGER), "\x65\x6d\x70\164\171\137\x70\x6c\141\156"); } $omouioamescuegke = Plan::symcgieuakksimmu(); if ($gesuaewsacmmwoeo = $omouioamescuegke->iekyeyicoyyawomk()->akkkoiiymmamsauc($icwicymcioeyeyek[Constants::kiwgokskimawckie])) { $qoqiyusggqcsqemw = $omouioamescuegke->asosocqswygacyyk($gesuaewsacmmwoeo); $yygmoeguaqyumuui = [Constants::mykiyeswieqamagm, Plan::kceiayeyisgquuim, Plan::cgiaykosmmoyuagu]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { $icwicymcioeyeyek[$uusmaiomayssaecw] = $qoqiyusggqcsqemw[$uusmaiomayssaecw] ?? 0; } $icwicymcioeyeyek[Constants::eeeyoywyquqywwoo] = $omouioamescuegke->cskqgsqgkquceimo($gesuaewsacmmwoeo); } else { $this->gssiscqyqsacmeca()->msqsseeaasqysese(__("\123\x65\x6c\145\x63\164\x65\x64\40\160\154\x61\x6e\40\156\x6f\164\40\x66\x6f\x75\156\x64\56", PR__MDL__OPTIMIZATION_MANAGER), "\x70\154\x61\x6e\x5f\x6e\x6f\x74\137\x66\x6f\165\x6e\144"); } return $icwicymcioeyeyek; } }
