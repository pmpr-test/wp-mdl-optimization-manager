<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66fa77020c770             |
    |_______________________________________|
*/
 namespace Pmpr\Module\OptimizationManager\Subscription\Model; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Collection; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Radio; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Common\Subscription\Model\Plan as BaseClass; use Pmpr\Module\OptimizationManager\Subscription\Traits\EngineTrait; class Plan extends BaseClass { use EngineTrait; const oquukmukaoqegcuk = "\165\x73\x61\147\145\137\x69\144\163"; const kceiayeyisgquuim = "\x73\x70\145\x65\144\137\x74\x65\163\x74\x5f\x75\163\x61\147\145"; const cgiaykosmmoyuagu = "\x63\x72\151\x74\x69\x63\141\x6c\137\x63\163\163\137\x75\x73\x61\x67\x65"; public function ewaqwooqoqmcoomi() { $this->cquokmemekqqywgi($this->eoaomaokwkwqyqiq(Constants::qymgycqkoqecugsi)->gswweykyogmsyawy(__("\123\165\142\163\143\x72\x69\x70\164\x69\x6f\x6e\163", PR__MDL__OPTIMIZATION_MANAGER))->ckgquisaimmgwuyu(Subscription::class)->acokiqqgsmoqaeyu()); parent::ewaqwooqoqmcoomi(); } public function asgweuiucesqyocq() : Collection { $aiowsaccomcoikus = parent::asgweuiucesqyocq(); $aiowsaccomcoikus->cuomeiwckekemywm(__("\x4f\156\x6c\171\x20\x74\x68\x65\40\x66\x69\162\163\x74\40\143\157\151\156\x20\x74\x79\160\145\x20\x72\165\154\x65\40\151\x73\x20\x69\156\x63\154\165\144\x65\x64\x20\x69\156\x20\x74\150\145\x20\x73\x75\142\163\x63\162\x69\x70\164\151\157\156\40\160\x72\x6f\x63\145\163\163\56", PR__MDL__OPTIMIZATION_MANAGER), Constants::smkwuwawwaqyimcq); $couuyeucwooyseic = $aiowsaccomcoikus->ygwimyogyaqgumam(Constants::cwuyiqcqccegmmis); if (!$couuyeucwooyseic instanceof Radio) { goto owmuceyswmgueasi; } $couuyeucwooyseic->kesomeowemmyygey(Constants::mykiyeswieqamagm, __("\x43\x6f\151\x6e", PR__MDL__OPTIMIZATION_MANAGER))->qyucewwiggkyeaso(Constants::kqesaikwiwcgimuk, [Constants::wuawcaggsyeaaswe, Constants::ecygggyugmmoeaky])->qyucewwiggkyeaso(Constants::mykiyeswieqamagm, [Constants::mykiyeswieqamagm, self::cgiaykosmmoyuagu, self::kceiayeyisgquuim]); owmuceyswmgueasi: $aiowsaccomcoikus->mkksewyosgeumwsa($this->ymuegqgyuagyucws(Constants::mykiyeswieqamagm)->gswweykyogmsyawy(__("\x43\x6f\x69\x6e", PR__MDL__OPTIMIZATION_MANAGER))->eumecwmqmukqgyea()->escqqisecooswqgo()->mkmssscwmeekwgqo())->mkksewyosgeumwsa($this->ymuegqgyuagyucws(self::cgiaykosmmoyuagu)->eumecwmqmukqgyea()->escqqisecooswqgo()->mkmssscwmeekwgqo()->gswweykyogmsyawy(__("\x43\x72\x69\x74\151\143\x61\154\x20\103\123\123\40\125\x73\x61\147\x65", PR__MDL__OPTIMIZATION_MANAGER))->gucwmccyimoagwcm(__("\106\157\162\x20\x61\x6c\154\x20\144\x65\x76\x69\143\145\163\50\104\x65\163\153\x74\157\x70\x20\x26\40\x4d\x6f\142\x69\154\145\x29", PR__MDL__OPTIMIZATION_MANAGER)))->mkksewyosgeumwsa($this->ymuegqgyuagyucws(self::kceiayeyisgquuim)->eumecwmqmukqgyea()->escqqisecooswqgo()->mkmssscwmeekwgqo()->gswweykyogmsyawy(__("\x53\x70\x65\x65\x64\x20\x54\145\163\x74\x20\125\x73\141\147\145", PR__MDL__OPTIMIZATION_MANAGER))->gucwmccyimoagwcm(__("\x46\157\x72\x20\x65\x61\x63\150\x20\160\x61\x67\x65", PR__MDL__OPTIMIZATION_MANAGER))); return $aiowsaccomcoikus; } public function asosocqswygacyyk($gesuaewsacmmwoeo) : array { $gmcgeogogyqsgawk = parent::asosocqswygacyyk($gesuaewsacmmwoeo); $acqqmqmcquukaqsc = $gmcgeogogyqsgawk[Constants::eeeoygaqqmoukaeg] ?? []; if (!is_array($acqqmqmcquukaqsc)) { goto msemumccgceyugmg; } foreach ($acqqmqmcquukaqsc as $ekuqiqmikiicgoss) { $cosmgoaiwuamyesi = $ekuqiqmikiicgoss[Constants::mykiyeswieqamagm] ?? ''; $caokcyqaukiegscs = $ekuqiqmikiicgoss[self::cgiaykosmmoyuagu] ?? ''; $wmycqosmaeakkyac = $ekuqiqmikiicgoss[self::kceiayeyisgquuim] ?? ''; if (!($cosmgoaiwuamyesi !== '' && $caokcyqaukiegscs !== '' && $wmycqosmaeakkyac !== '')) { goto eogwckcymuugikuy; } $gmcgeogogyqsgawk[Constants::mykiyeswieqamagm] = $cosmgoaiwuamyesi; $gmcgeogogyqsgawk[self::kceiayeyisgquuim] = $wmycqosmaeakkyac; $gmcgeogogyqsgawk[self::cgiaykosmmoyuagu] = $caokcyqaukiegscs; goto mwsmsguqqkcwiiuk; eogwckcymuugikuy: eeauyscekuckoues: } mwsmsguqqkcwiiuk: $momcqeuuwwsaagyc = __("\45\163\x20\143\157\151\156", PR__MDL__OPTIMIZATION_MANAGER); $gmcgeogogyqsgawk[Constants::quywusioaoakumaw] = [Constants::mykiyeswieqamagm => [Constants::qescuiwgsyuikume => __("\x49\156\x69\164\x69\x61\x6c\x20\x43\157\151\156", PR__MDL__OPTIMIZATION_MANAGER), Constants::qgqyauaqwqmqseim => IconInterface::mwayoguieimqyksk, Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($gmcgeogogyqsgawk[Constants::mykiyeswieqamagm] ?? 0))], Constants::eeeyoywyquqywwoo => [Constants::qescuiwgsyuikume => __("\x53\165\x62\x73\143\162\151\160\x74\151\157\156\40\x50\145\162\151\x6f\144", PR__MDL__OPTIMIZATION_MANAGER), Constants::qgqyauaqwqmqseim => IconInterface::uaukqiccmgkacyms, Constants::ciyoccqkiamemcmm => $gmcgeogogyqsgawk[Constants::eeeyoywyquqywwoo] ?? '']]; $gmcgeogogyqsgawk[Constants::owimkwkiwawmeicq] = [self::cgiaykosmmoyuagu => [Constants::qescuiwgsyuikume => __("\x43\162\151\x74\151\143\141\154\x20\103\123\123", PR__MDL__OPTIMIZATION_MANAGER), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($gmcgeogogyqsgawk[self::cgiaykosmmoyuagu] ?? 0))], self::kceiayeyisgquuim => [Constants::qescuiwgsyuikume => __("\x53\x70\x65\x65\144\40\x54\x65\x73\164", PR__MDL__OPTIMIZATION_MANAGER), Constants::ciyoccqkiamemcmm => sprintf($momcqeuuwwsaagyc, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($gmcgeogogyqsgawk[self::kceiayeyisgquuim] ?? 0))]]; msemumccgceyugmg: return $gmcgeogogyqsgawk; } }
