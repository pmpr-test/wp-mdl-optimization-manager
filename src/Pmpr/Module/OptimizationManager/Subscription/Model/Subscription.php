<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             680176cbc468e             |
    |_______________________________________|
*/
 namespace Pmpr\Module\OptimizationManager\Subscription\Model; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Subscription\Model\Subscription as BaseClass; use Pmpr\Module\DomainManager\Model\Domain; use Pmpr\Module\OptimizationManager\Subscription\Traits\AbstractSubTrait; use Pmpr\Module\OptimizationManager\Subscription\Traits\EngineTrait; class Subscription extends BaseClass { use AbstractSubTrait, EngineTrait; public function register() { parent::register(); $this->swsaakqseuaacagq(Constants::emsskyeoaqokwsoa, [$this, 'yeuyyckseoiokmmm']); } public function uwmqacgewuauagai() { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $this->cquokmemekqqywgi($eqwoegegiamegqsm->qoemykoeuecmsmwe(Constants::mykiyeswieqamagm)->acceqyqygswoecwe(8)->eyygsasuqmommkua(0)->acokiqqgsmoqaeyu()->gswweykyogmsyawy(__('Coins', PR__MDL__OPTIMIZATION_MANAGER)))->cquokmemekqqywgi($eqwoegegiamegqsm->usqseiuaeauwuwus(Constants::eeeyoywyquqywwoo)->acokiqqgsmoqaeyu()->acceqyqygswoecwe(100)->gswweykyogmsyawy(__('Period', PR__MDL__OPTIMIZATION_MANAGER)))->cquokmemekqqywgi($eqwoegegiamegqsm->qoemykoeuecmsmwe(Plan::cgiaykosmmoyuagu)->acceqyqygswoecwe(8)->eyygsasuqmommkua(0)->acokiqqgsmoqaeyu()->gswweykyogmsyawy(__('Critical CSS Usage', PR__MDL__OPTIMIZATION_MANAGER)))->cquokmemekqqywgi($eqwoegegiamegqsm->qoemykoeuecmsmwe(Plan::kceiayeyisgquuim)->acceqyqygswoecwe(8)->eyygsasuqmommkua(0)->acokiqqgsmoqaeyu()->gswweykyogmsyawy(__('Speed Test Usage', PR__MDL__OPTIMIZATION_MANAGER)))->cquokmemekqqywgi($eqwoegegiamegqsm->eoaomaokwkwqyqiq(Constants::kiwgokskimawckie)->gswweykyogmsyawy(__('Plan', PR__MDL__OPTIMIZATION_MANAGER))->wuuqgaekqeymecag(Plan::class)); parent::uwmqacgewuauagai(); } public function aoqwywcqmoqaukkq() { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $this->yyoqecggyacaseko()->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(Constants::kuqwimiimiqsimgo)->ugquamoakekwyiqg(Domain::class)->mkmssscwmeekwgqo()); parent::aoqwywcqmoqaukkq(); $this->yyoqecggyacaseko()->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(Constants::mykiyeswieqamagm)->escqqisecooswqgo())->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(Plan::cgiaykosmmoyuagu)->escqqisecooswqgo())->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(Plan::kceiayeyisgquuim)->escqqisecooswqgo())->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(Constants::eeeyoywyquqywwoo)); } public function yeuyyckseoiokmmm($icwicymcioeyeyek) { if (empty($icwicymcioeyeyek[Constants::kiwgokskimawckie])) { $this->gssiscqyqsacmeca()->msqsseeaasqysese(__('Plan can not be empty, please select a plan first.', PR__MDL__OPTIMIZATION_MANAGER), 'empty_plan'); } $omouioamescuegke = Plan::symcgieuakksimmu(); if ($gesuaewsacmmwoeo = $omouioamescuegke->iekyeyicoyyawomk()->akkkoiiymmamsauc($icwicymcioeyeyek[Constants::kiwgokskimawckie])) { $qoqiyusggqcsqemw = $omouioamescuegke->asosocqswygacyyk($gesuaewsacmmwoeo); $yygmoeguaqyumuui = [Constants::mykiyeswieqamagm, Plan::kceiayeyisgquuim, Plan::cgiaykosmmoyuagu]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { $icwicymcioeyeyek[$uusmaiomayssaecw] = $qoqiyusggqcsqemw[$uusmaiomayssaecw] ?? 0; } $icwicymcioeyeyek[Constants::eeeyoywyquqywwoo] = $omouioamescuegke->cskqgsqgkquceimo($gesuaewsacmmwoeo); } else { $this->gssiscqyqsacmeca()->msqsseeaasqysese(__('Selected plan not found.', PR__MDL__OPTIMIZATION_MANAGER), 'plan_not_found'); } return $icwicymcioeyeyek; } }
