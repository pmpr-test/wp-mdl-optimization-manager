<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f6affe3ed94             |
    |_______________________________________|
*/
 namespace Pmpr\Module\OptimizationManager\Subscription\Frontend; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\ComponentManager\Frontend\PurchaseMultistep; use Pmpr\Module\OptimizationManager\Setting; use Pmpr\Module\OptimizationManager\Subscription\Traits\EngineTrait; class PricingMultistep extends PurchaseMultistep { use EngineTrait; const qqiyaykqumkcwgqo = self::oksogsuoasasycco . "\143\150\x6f\x69\143\x65\x5f\157\x72\x64\145\162"; const swcaqkogoecouaki = self::oksogsuoasasycco . "\143\150\157\x69\x63\145\137\157\162\x64\145\162\137\164\171\160\x65"; public function __construct() { $this->swqsasqieqqgusew(Pricing::symcgieuakksimmu()); $this->componentID = Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(Constants::ocwsuwyiiasigqaa, 0); parent::__construct(); } public function rsysgcucogueguuk($qqscaoyqikuyeoaw) : array { $qookweymeqawmcwo = parent::rsysgcucogueguuk($qqscaoyqikuyeoaw); switch ($qqscaoyqikuyeoaw) { case self::swcaqkogoecouaki: $qookweymeqawmcwo["\157\x72\x64\145\x72\x5f\x74\171\x70\145\x73"] = [Constants::uswkskaqiieoyacg => [Constants::qescuiwgsyuikume => __("\x42\165\x79\x20\x61\40\163\x75\142\163\x63\162\151\160\x74\x69\x6f\x6e", PR__MDL__OPTIMIZATION_MANAGER), Constants::qgqyauaqwqmqseim => IconInterface::mmosseaieyykmacg], Constants::mayesweykoooyugy => [Constants::qescuiwgsyuikume => __("\102\165\x79\x20\x65\x78\x74\x72\x61\40\143\157\151\x6e\x73", PR__MDL__OPTIMIZATION_MANAGER), Constants::qgqyauaqwqmqseim => IconInterface::mwayoguieimqyksk]]; goto iwekmyyccgiyuecc; case self::qqiyaykqumkcwgqo: $qookweymeqawmcwo = array_merge($qookweymeqawmcwo, ["\x70\x6c\x61\x6e\163" => $this->uykissogmuaaocsg()->aackauiyyagmeqso(true), "\x65\170\164\x72\141\163" => $this->uykissogmuaaocsg()->ycmmosmyyiycyeug(true), "\x63\x6f\x69\156\x5f\155\141\163\153" => __("\x25\163\x20\x63\x6f\151\156", PR__MDL__OPTIMIZATION_MANAGER), "\144\x69\x73\143\x6f\165\x6e\164\137\155\x61\163\153" => __("\45\x73\x20\117\x46\x46", PR__MDL__OPTIMIZATION_MANAGER), "\163\x65\162\166\151\x63\x65\x73\x5f\x63\x6f\163\x74" => __("\123\145\x72\166\151\x63\x65\163\x20\x43\157\163\x74", PR__MDL__OPTIMIZATION_MANAGER)]); goto iwekmyyccgiyuecc; } ikqqskkqqwmwssoo: iwekmyyccgiyuecc: return $qookweymeqawmcwo; } public function oqcaaiewkewqgoww() : array { $asuggasaseaacmqu = parent::oqcaaiewkewqgoww(); $asuggasaseaacmqu[self::swcaqkogoecouaki] = ["\x63\154\141\163\163" => self::class, Constants::qgqyauaqwqmqseim => IconInterface::goqyyukkiquugaca, Constants::okuwysqsegmimaie => [Constants::qescuiwgsyuikume => __("\x43\x68\x6f\x69\143\x65\x20\x4f\x72\x64\145\x72\x20\124\171\x70\x65", PR__MDL__OPTIMIZATION_MANAGER), Constants::eqkeooqcsscoggia => __("\125\x73\145\x72\40\x73\150\157\165\154\144\x20\144\x65\164\x65\162\155\151\156\145\x20\x77\150\x61\x74\x20\153\x69\x6e\x64\x20\157\x66\40\160\x72\157\x64\x75\143\x74\x20\x68\145\57\163\150\x65\x20\156\145\x65\x64\163\x2e", PR__MDL__OPTIMIZATION_MANAGER)], Constants::kekcgssiyagioocg => 2]; $asuggasaseaacmqu[self::qqiyaykqumkcwgqo] = ["\x63\x6c\x61\163\163" => self::class, Constants::qgqyauaqwqmqseim => IconInterface::imoykkmkkkaqgouo, Constants::okuwysqsegmimaie => [Constants::qescuiwgsyuikume => __("\x43\150\157\151\x63\x65\x20\x4f\162\144\145\162", PR__MDL__OPTIMIZATION_MANAGER), Constants::eqkeooqcsscoggia => __("\x55\x73\x65\x72\40\x73\150\x6f\165\x6c\144\x20\144\x65\164\x65\162\155\x69\x6e\145\x20\x77\x68\141\x74\40\x70\162\157\x64\x75\x63\164\x20\150\145\x2f\x73\150\x65\40\x6e\x65\145\x64\x73\x2e", PR__MDL__OPTIMIZATION_MANAGER)], Constants::kekcgssiyagioocg => 3]; $asuggasaseaacmqu[self::ycgyyciaayaaocwu][Constants::kekcgssiyagioocg] = 4; return $asuggasaseaacmqu; } }
