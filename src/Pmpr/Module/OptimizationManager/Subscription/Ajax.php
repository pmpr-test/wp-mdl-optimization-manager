<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6800fbbb5f996             |
    |_______________________________________|
*/
 namespace Pmpr\Module\OptimizationManager\Subscription; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\OptimizationManager\OptimizationManager; use Pmpr\Module\OptimizationManager\Subscription\Frontend\PricingMultistep; use Pmpr\Module\OptimizationManager\Subscription\Traits\EngineTrait; class Ajax extends Common { use EngineTrait; const wiysygukkaksueso = OptimizationManager::aksyiucmwcsqgese . 'subscription_'; const yqmwwmeyssagguom = self::wiysygukkaksueso . 'add_to_cart'; public function wigskegsqequoeks() { $this->iqkqummseggmikgo(self::yqmwwmeyssagguom, [$this, 'keiagmgguggweyoo']); } public function keiagmgguggweyoo() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $eiicaiwgqkgsekce->aoyemeikggcigigu(true); $occymigcemkqucuw = false; $wksoawcgagcgoask = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::ocwsuwyiiasigqaa); $kiywimggieuowqai = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::wwcycgyaiaksckuk); $ccamueccusigaaio = $eiicaiwgqkgsekce->yyqgamuwwakgciey($kiywimggieuowqai); $keccaugmemegoimu = ''; $iqauecoycmqkimak = $this->ocksiywmkyaqseou('optimization_manager_subscription_add_to_cart_validation', true, $eiicaiwgqkgsekce->yyqgamuwwakgciey()); if (is_wp_error($iqauecoycmqkimak)) { $keccaugmemegoimu = $iqauecoycmqkimak; } else { if ($ccamueccusigaaio && $kiywimggieuowqai && $wksoawcgagcgoask) { $goqqimcssiyagkwy = $this->uykissogmuaaocsg(); if (in_array($kiywimggieuowqai, [Constants::uswkskaqiieoyacg, Constants::mayesweykoooyugy], true)) { $wqykqusigegasqeg = PricingMultistep::symcgieuakksimmu()->ieicgucoqmygemig($eiicaiwgqkgsekce->yyqgamuwwakgciey()); if ($wqykqusigegasqeg && !is_wp_error($wqykqusigegasqeg)) { $ekymkycgewkiouqe = $this->caokeucsksukesyo()->wikusamwomuogoau(); $cgceoyqmmwumqyqa = $this->uwkmaywceaaaigwo()->wikusamwomuogoau(); $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); switch ($kiywimggieuowqai) { case Constants::uswkskaqiieoyacg: if ($ogaeiucyqmowuqms = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::uswkskaqiieoyacg)) { $omouioamescuegke = $goqqimcssiyagkwy->esqsaiqmmsyymoea(); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $aaosycakukwgwysy = $omouioamescuegke->iekyeyicoyyawomk()->oqomcmyuuakigusk([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::ciywsqoeiymemsys, Constants::eqewsqmqmsiocaeg), $eqwoegegiamegqsm->megqywqeuquawkim($omouioamescuegke->kumuygiiqswoyasy(), $ogaeiucyqmowuqms)]); if ($aaosycakukwgwysy) { if ((int) $ogaeiucyqmowuqms === $goqqimcssiyagkwy->imicysmecoiycoqc()) { if (!$goqqimcssiyagkwy->aiiaaeioukuaiuok($wqykqusigegasqeg)) { $sogksuscggsicmac = $goqqimcssiyagkwy->subscribe($wqykqusigegasqeg, $ogaeiucyqmowuqms); if ($sogksuscggsicmac && !is_wp_error($sogksuscggsicmac)) { $keccaugmemegoimu = [Constants::eoskkkieowogacws => sprintf(__('%s has successfully subscribed to %s.', PR__MDL__OPTIMIZATION_MANAGER), $goqqimcssiyagkwy->ogkiouuqqmaagscs($wqykqusigegasqeg), $omouioamescuegke->uikgwcuascgeissw($aaosycakukwgwysy)) . $this->kqwomkwisamggaww($wksoawcgagcgoask)]; $occymigcemkqucuw = true; } else { $keccaugmemegoimu = $sogksuscggsicmac; } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__('Your domain already subscribed and can not subscribe to %s', PR__MDL__OPTIMIZATION_MANAGER), $omouioamescuegke->uikgwcuascgeissw($aaosycakukwgwysy)) . $this->kqwomkwisamggaww($wksoawcgagcgoask)); } } else { $umkkkaqkwugkemce = $goqqimcssiyagkwy->wmsewmwmcaiioeyo($aaosycakukwgwysy, $wqykqusigegasqeg, false); if (is_numeric($umkkkaqkwugkemce)) { if (!$goqqimcssiyagkwy->eueeumkwymsyoacq($wqykqusigegasqeg, $ogaeiucyqmowuqms)) { $keccaugmemegoimu = Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(Setting::uckosuiscwyyimgc, ''); } else { $occymigcemkqucuw = $ekymkycgewkiouqe->mggqcqmaoaewoqke($umkkkaqkwugkemce, [Constants::uswkskaqiieoyacg => $ogaeiucyqmowuqms, Constants::kuqwimiimiqsimgo => $wqykqusigegasqeg]); if ($occymigcemkqucuw) { $keccaugmemegoimu = [Constants::auqoykcmsiauccao => $cgceoyqmmwumqyqa->aoqkwiysueqqwigk()]; } else { $keccaugmemegoimu = $yyauwyaeewsickwk->wkyacaaqicyakocs($cgceoyqmmwumqyqa->gmkeeackegqamuga(Constants::imkacwmiuiykyuim), Constants::mgowaqweusymwoqu); if (!$keccaugmemegoimu) { $keccaugmemegoimu = sprintf(__('Something wrong on adding %s to cart, please try again.', PR__MDL__OPTIMIZATION_MANAGER), __('subscription', PR__MDL__OPTIMIZATION_MANAGER)); } } } } else { $keccaugmemegoimu = $umkkkaqkwugkemce; } } } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(__('Plan', PR__MDL__OPTIMIZATION_MANAGER)); } break; case Constants::mayesweykoooyugy: if ($ckkqcoeeekoowmok = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::mayesweykoooyugy)) { $sogksuscggsicmac = $goqqimcssiyagkwy->kcaaccuueqiwameg($wqykqusigegasqeg); if ($sogksuscggsicmac && !is_wp_error($sogksuscggsicmac)) { $occymigcemkqucuw = $ekymkycgewkiouqe->eyqowkegeuiqawos($goqqimcssiyagkwy->giweasosqeiqeeqg(), 1, $ckkqcoeeekoowmok, [], [Constants::kuqwimiimiqsimgo => $wqykqusigegasqeg]); if ($occymigcemkqucuw) { $keccaugmemegoimu = [Constants::auqoykcmsiauccao => $cgceoyqmmwumqyqa->aoqkwiysueqqwigk()]; } else { $keccaugmemegoimu = $yyauwyaeewsickwk->wkyacaaqicyakocs($cgceoyqmmwumqyqa->gmkeeackegqamuga(Constants::imkacwmiuiykyuim), Constants::mgowaqweusymwoqu); if (!$keccaugmemegoimu) { $keccaugmemegoimu = sprintf(__('Something wrong on adding %s to cart, please try again.', PR__MDL__OPTIMIZATION_MANAGER), __('coins', PR__MDL__OPTIMIZATION_MANAGER)); } } } else { $keccaugmemegoimu = $sogksuscggsicmac; } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(__('Extra Variation', PR__MDL__OPTIMIZATION_MANAGER)); } break; } } else { $keccaugmemegoimu = $wqykqusigegasqeg; } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__('Invalid order type', PR__MDL__COMPONENT_MANAGER)); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(); } } $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } public function kqwomkwisamggaww($wksoawcgagcgoask) : string { if ($iwamiguusayooguq = (string) $this->ocksiywmkyaqseou('get_component_installation_guide', '', $wksoawcgagcgoask)) { $iwamiguusayooguq = '<br>' . $iwamiguusayooguq; } return $iwamiguusayooguq; } }
