<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             680106308baab             |
    |_______________________________________|
*/
 namespace Pmpr\Module\OptimizationManager\Subscription\Frontend; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\ComponentManager\Frontend\PurchaseMultistep; use Pmpr\Module\OptimizationManager\Subscription\Traits\EngineTrait; class PricingMultistep extends PurchaseMultistep { use EngineTrait; const qqiyaykqumkcwgqo = self::oksogsuoasasycco . 'choice_order'; const swcaqkogoecouaki = self::oksogsuoasasycco . 'choice_order_type'; public function __construct() { $this->swqsasqieqqgusew(Pricing::symcgieuakksimmu()); $this->componentID = $this->weysguygiseoukqw(Constants::ocwsuwyiiasigqaa, 0); parent::__construct(); } public function rsysgcucogueguuk($qqscaoyqikuyeoaw) : array { $qookweymeqawmcwo = parent::rsysgcucogueguuk($qqscaoyqikuyeoaw); switch ($qqscaoyqikuyeoaw) { case self::swcaqkogoecouaki: $qookweymeqawmcwo['order_types'] = [Constants::uswkskaqiieoyacg => [Constants::qescuiwgsyuikume => __('Buy a subscription', PR__MDL__OPTIMIZATION_MANAGER), Constants::qgqyauaqwqmqseim => IconInterface::mmosseaieyykmacg], Constants::mayesweykoooyugy => [Constants::qescuiwgsyuikume => __('Buy extra coins', PR__MDL__OPTIMIZATION_MANAGER), Constants::qgqyauaqwqmqseim => IconInterface::mwayoguieimqyksk]]; break; case self::qqiyaykqumkcwgqo: $qookweymeqawmcwo = array_merge($qookweymeqawmcwo, ['plans' => $this->uykissogmuaaocsg()->aackauiyyagmeqso(true), 'extras' => $this->uykissogmuaaocsg()->ycmmosmyyiycyeug(true), 'coin_mask' => __('%s coin', PR__MDL__OPTIMIZATION_MANAGER), 'discount_mask' => __('%s OFF', PR__MDL__OPTIMIZATION_MANAGER), 'services_cost' => __('Services Cost', PR__MDL__OPTIMIZATION_MANAGER)]); break; } return $qookweymeqawmcwo; } public function oqcaaiewkewqgoww() : array { $asuggasaseaacmqu = parent::oqcaaiewkewqgoww(); $asuggasaseaacmqu[self::swcaqkogoecouaki] = ['class' => self::class, Constants::qgqyauaqwqmqseim => IconInterface::goqyyukkiquugaca, Constants::okuwysqsegmimaie => [Constants::qescuiwgsyuikume => __('Choice Order Type', PR__MDL__OPTIMIZATION_MANAGER), Constants::eqkeooqcsscoggia => __('User should determine what kind of product he/she needs.', PR__MDL__OPTIMIZATION_MANAGER)], Constants::kekcgssiyagioocg => 2]; $asuggasaseaacmqu[self::qqiyaykqumkcwgqo] = ['class' => self::class, Constants::qgqyauaqwqmqseim => IconInterface::imoykkmkkkaqgouo, Constants::okuwysqsegmimaie => [Constants::qescuiwgsyuikume => __('Choice Order', PR__MDL__OPTIMIZATION_MANAGER), Constants::eqkeooqcsscoggia => __('User should determine what product he/she needs.', PR__MDL__OPTIMIZATION_MANAGER)], Constants::kekcgssiyagioocg => 3]; $asuggasaseaacmqu[self::ycgyyciaayaaocwu][Constants::kekcgssiyagioocg] = 4; return $asuggasaseaacmqu; } }
