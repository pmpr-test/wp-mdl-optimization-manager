<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5ec7a7b695             |
    |_______________________________________|
*/
 namespace Pmpr\Module\OptimizationManager\Subscription\Frontend; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\ComponentManager\Frontend\PurchaseMultistep; use Pmpr\Module\OptimizationManager\Setting; use Pmpr\Module\OptimizationManager\Subscription\Traits\EngineTrait; class PricingMultistep extends PurchaseMultistep { use EngineTrait; const qqiyaykqumkcwgqo = self::oksogsuoasasycco . "\143\x68\157\x69\143\145\x5f\157\x72\x64\x65\162"; const swcaqkogoecouaki = self::oksogsuoasasycco . "\x63\150\157\x69\x63\145\x5f\157\x72\144\145\162\x5f\x74\171\160\x65"; public function __construct() { $this->swqsasqieqqgusew(Pricing::symcgieuakksimmu()); $this->componentID = Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(Constants::ocwsuwyiiasigqaa, 0); parent::__construct(); } public function rsysgcucogueguuk($qqscaoyqikuyeoaw) : array { $qookweymeqawmcwo = parent::rsysgcucogueguuk($qqscaoyqikuyeoaw); switch ($qqscaoyqikuyeoaw) { case self::swcaqkogoecouaki: $qookweymeqawmcwo["\x6f\162\x64\145\162\137\x74\x79\160\145\163"] = [Constants::uswkskaqiieoyacg => [Constants::qescuiwgsyuikume => __("\x42\165\x79\40\x61\x20\x73\165\142\163\143\162\151\160\164\151\x6f\x6e", PR__MDL__OPTIMIZATION_MANAGER), Constants::qgqyauaqwqmqseim => IconInterface::mmosseaieyykmacg], Constants::mayesweykoooyugy => [Constants::qescuiwgsyuikume => __("\x42\165\x79\40\x65\170\x74\162\x61\40\143\x6f\x69\x6e\163", PR__MDL__OPTIMIZATION_MANAGER), Constants::qgqyauaqwqmqseim => IconInterface::mwayoguieimqyksk]]; goto omqiayeucoioqoao; case self::qqiyaykqumkcwgqo: $qookweymeqawmcwo = array_merge($qookweymeqawmcwo, ["\x70\154\x61\x6e\163" => $this->uykissogmuaaocsg()->aackauiyyagmeqso(true), "\x65\170\x74\x72\141\163" => $this->uykissogmuaaocsg()->ycmmosmyyiycyeug(true), "\143\157\151\x6e\137\x6d\x61\163\x6b" => __("\x25\163\x20\x63\x6f\x69\x6e", PR__MDL__OPTIMIZATION_MANAGER), "\144\x69\x73\x63\157\165\156\x74\137\x6d\x61\163\153" => __("\x25\163\x20\x4f\106\x46", PR__MDL__OPTIMIZATION_MANAGER), "\x73\x65\162\166\151\143\145\163\x5f\143\x6f\163\x74" => __("\x53\x65\x72\166\151\143\145\x73\40\103\157\163\x74", PR__MDL__OPTIMIZATION_MANAGER)]); goto omqiayeucoioqoao; } ugqaaewwmkocwwgy: omqiayeucoioqoao: return $qookweymeqawmcwo; } public function oqcaaiewkewqgoww() : array { $asuggasaseaacmqu = parent::oqcaaiewkewqgoww(); $asuggasaseaacmqu[self::swcaqkogoecouaki] = ["\143\x6c\141\163\163" => self::class, Constants::qgqyauaqwqmqseim => IconInterface::goqyyukkiquugaca, Constants::okuwysqsegmimaie => [Constants::qescuiwgsyuikume => __("\x43\x68\x6f\x69\x63\x65\x20\x4f\162\144\145\162\40\124\x79\x70\145", PR__MDL__OPTIMIZATION_MANAGER), Constants::eqkeooqcsscoggia => __("\x55\163\x65\x72\x20\x73\x68\x6f\165\154\x64\x20\144\x65\164\x65\x72\155\x69\156\x65\x20\x77\150\x61\164\x20\x6b\x69\156\x64\40\x6f\146\x20\x70\x72\157\x64\165\x63\x74\x20\150\x65\57\163\x68\145\40\x6e\145\x65\144\x73\56", PR__MDL__OPTIMIZATION_MANAGER)], Constants::kekcgssiyagioocg => 2]; $asuggasaseaacmqu[self::qqiyaykqumkcwgqo] = ["\143\x6c\x61\x73\x73" => self::class, Constants::qgqyauaqwqmqseim => IconInterface::imoykkmkkkaqgouo, Constants::okuwysqsegmimaie => [Constants::qescuiwgsyuikume => __("\103\150\x6f\x69\x63\145\40\x4f\162\144\x65\162", PR__MDL__OPTIMIZATION_MANAGER), Constants::eqkeooqcsscoggia => __("\125\x73\145\162\40\x73\150\x6f\165\154\x64\40\x64\145\164\145\x72\x6d\151\156\145\40\167\x68\141\164\x20\160\x72\157\144\165\x63\164\x20\x68\x65\57\x73\150\x65\x20\156\x65\x65\144\x73\56", PR__MDL__OPTIMIZATION_MANAGER)], Constants::kekcgssiyagioocg => 3]; $asuggasaseaacmqu[self::ycgyyciaayaaocwu][Constants::kekcgssiyagioocg] = 4; return $asuggasaseaacmqu; } }
