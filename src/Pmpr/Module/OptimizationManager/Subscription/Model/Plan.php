<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eae90cf005b             |
    |_______________________________________|
*/
 namespace Pmpr\Module\OptimizationManager\Subscription\Model; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Collection; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Radio; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Common\Subscription\Model\Plan as BaseClass; use Pmpr\Module\OptimizationManager\Subscription\Traits\EngineTrait; class Plan extends BaseClass { use EngineTrait; const oquukmukaoqegcuk = "\165\163\141\147\145\x5f\151\144\x73"; const kceiayeyisgquuim = "\163\160\145\x65\144\x5f\164\145\x73\x74\x5f\165\x73\141\x67\145"; const cgiaykosmmoyuagu = "\143\162\151\x74\151\x63\x61\x6c\137\x63\163\x73\x5f\x75\163\x61\147\145"; public function ewaqwooqoqmcoomi() { $this->cquokmemekqqywgi($this->eoaomaokwkwqyqiq(Constants::qymgycqkoqecugsi)->gswweykyogmsyawy(__("\123\165\x62\x73\143\x72\151\160\164\x69\157\x6e\x73", PR__MDL__OPTIMIZATION_MANAGER))->ckgquisaimmgwuyu(Subscription::class)->acokiqqgsmoqaeyu()); parent::ewaqwooqoqmcoomi(); } public function asgweuiucesqyocq() : Collection { $aiowsaccomcoikus = parent::asgweuiucesqyocq(); $aiowsaccomcoikus->cuomeiwckekemywm(__("\x4f\x6e\154\x79\x20\164\150\x65\40\146\151\162\163\x74\x20\143\157\x69\156\x20\164\171\x70\x65\40\x72\x75\x6c\145\x20\x69\x73\x20\151\156\x63\x6c\x75\144\145\144\40\x69\x6e\x20\164\150\145\40\x73\165\x62\163\x63\162\x69\x70\x74\x69\x6f\156\x20\160\x72\x6f\143\x65\163\x73\56", PR__MDL__OPTIMIZATION_MANAGER), Constants::smkwuwawwaqyimcq); $couuyeucwooyseic = $aiowsaccomcoikus->ygwimyogyaqgumam(Constants::cwuyiqcqccegmmis); if (!$couuyeucwooyseic instanceof Radio) { goto owmuceyswmgueasi; } $couuyeucwooyseic->kesomeowemmyygey(Constants::mykiyeswieqamagm, __("\103\157\151\x6e", PR__MDL__OPTIMIZATION_MANAGER))->qyucewwiggkyeaso(Constants::kqesaikwiwcgimuk, [Constants::wuawcaggsyeaaswe, Constants::ecygggyugmmoeaky])->qyucewwiggkyeaso(Constants::mykiyeswieqamagm, [Constants::mykiyeswieqamagm, self::cgiaykosmmoyuagu, self::kceiayeyisgquuim]); owmuceyswmgueasi: $aiowsaccomcoikus->mkksewyosgeumwsa($this->ymuegqgyuagyucws(Constants::mykiyeswieqamagm)->gswweykyogmsyawy(__("\103\157\151\156", PR__MDL__OPTIMIZATION_MANAGER))->eumecwmqmukqgyea()->escqqisecooswqgo()->mkmssscwmeekwgqo())->mkksewyosgeumwsa($this->ymuegqgyuagyucws(self::cgiaykosmmoyuagu)->eumecwmqmukqgyea()->escqqisecooswqgo()->mkmssscwmeekwgqo()->gswweykyogmsyawy(__("\103\x72\151\x74\151\x63\x61\x6c\40\x43\x53\123\40\x55\x73\x61\x67\145", PR__MDL__OPTIMIZATION_MANAGER))->gucwmccyimoagwcm(__("\106\157\162\x20\141\x6c\x6c\40\x64\145\x76\151\x63\x65\x73\50\104\x65\163\153\164\x6f\x70\40\46\40\x4d\x6f\x62\151\x6c\x65\x29", PR__MDL__OPTIMIZATION_MANAGER)))->mkksewyosgeumwsa($this->ymuegqgyuagyucws(self::kceiayeyisgquuim)->eumecwmqmukqgyea()->escqqisecooswqgo()->mkmssscwmeekwgqo()->gswweykyogmsyawy(__("\x53\x70\x65\x65\x64\40\124\x65\x73\164\x20\x55\x73\141\x67\x65", PR__MDL__OPTIMIZATION_MANAGER))->gucwmccyimoagwcm(__("\106\x6f\x72\x20\x65\141\x63\150\40\x70\141\147\x65", PR__MDL__OPTIMIZATION_MANAGER))); return $aiowsaccomcoikus; } public function asosocqswygacyyk($gesuaewsacmmwoeo) : array { $gmcgeogogyqsgawk = parent::asosocqswygacyyk($gesuaewsacmmwoeo); $acqqmqmcquukaqsc = $gmcgeogogyqsgawk[Constants::eeeoygaqqmoukaeg] ?? []; if (!is_array($acqqmqmcquukaqsc)) { goto msemumccgceyugmg; } foreach ($acqqmqmcquukaqsc as $ekuqiqmikiicgoss) { $cosmgoaiwuamyesi = $ekuqiqmikiicgoss[Constants::mykiyeswieqamagm] ?? ''; $caokcyqaukiegscs = $ekuqiqmikiicgoss[self::cgiaykosmmoyuagu] ?? ''; $wmycqosmaeakkyac = $ekuqiqmikiicgoss[self::kceiayeyisgquuim] ?? ''; if (!($cosmgoaiwuamyesi !== '' && $caokcyqaukiegscs !== '' && $wmycqosmaeakkyac !== '')) { goto eogwckcymuugikuy; } $gmcgeogogyqsgawk[Constants::mykiyeswieqamagm] = $cosmgoaiwuamyesi; $gmcgeogogyqsgawk[self::kceiayeyisgquuim] = $wmycqosmaeakkyac; $gmcgeogogyqsgawk[self::cgiaykosmmoyuagu] = $caokcyqaukiegscs; goto mwsmsguqqkcwiiuk; eogwckcymuugikuy: eeauyscekuckoues: } mwsmsguqqkcwiiuk: $momcqeuuwwsaagyc = __("\x25\163\x20\143\157\x69\156", PR__MDL__OPTIMIZATION_MANAGER); $gmcgeogogyqsgawk[Constants::quywusioaoakumaw] = [Constants::mykiyeswieqamagm => [Constants::qescuiwgsyuikume => __("\111\156\151\x74\151\x61\x6c\40\103\x6f\151\x6e", PR__MDL__OPTIMIZATION_MANAGER), Constants::qgqyauaqwqmqseim => IconInterface::mwayoguieimqyksk, Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($gmcgeogogyqsgawk[Constants::mykiyeswieqamagm] ?? 0))], Constants::eeeyoywyquqywwoo => [Constants::qescuiwgsyuikume => __("\x53\x75\142\163\x63\162\151\160\164\x69\157\156\x20\x50\145\162\151\x6f\x64", PR__MDL__OPTIMIZATION_MANAGER), Constants::qgqyauaqwqmqseim => IconInterface::uaukqiccmgkacyms, Constants::ciyoccqkiamemcmm => $gmcgeogogyqsgawk[Constants::eeeyoywyquqywwoo] ?? '']]; $gmcgeogogyqsgawk[Constants::owimkwkiwawmeicq] = [self::cgiaykosmmoyuagu => [Constants::qescuiwgsyuikume => __("\x43\162\151\x74\151\143\141\154\40\x43\123\x53", PR__MDL__OPTIMIZATION_MANAGER), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($gmcgeogogyqsgawk[self::cgiaykosmmoyuagu] ?? 0))], self::kceiayeyisgquuim => [Constants::qescuiwgsyuikume => __("\x53\x70\x65\145\x64\x20\124\x65\163\164", PR__MDL__OPTIMIZATION_MANAGER), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($gmcgeogogyqsgawk[self::kceiayeyisgquuim] ?? 0))]]; msemumccgceyugmg: return $gmcgeogogyqsgawk; } }
