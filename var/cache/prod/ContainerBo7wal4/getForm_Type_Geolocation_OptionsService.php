<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'form.type.geolocation.options' shared service.

return $this->services['form.type.geolocation.options'] = new \PrestaShopBundle\Form\Admin\Improve\International\Geolocation\GeolocationOptionsType(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.legacy.context']) ? $this->services['prestashop.adapter.legacy.context'] : ($this->services['prestashop.adapter.legacy.context'] = new \PrestaShop\PrestaShop\Adapter\LegacyContext())) && false ?: '_'}->getLanguages(), ${($_ = isset($this->services['prestashop.core.form.choice_provider.country_by_iso_code']) ? $this->services['prestashop.core.form.choice_provider.country_by_iso_code'] : $this->load('getPrestashop_Core_Form_ChoiceProvider_CountryByIsoCodeService.php')) && false ?: '_'}->getChoices(), ${($_ = isset($this->services['prestashop.adapter.legacy.configuration']) ? $this->services['prestashop.adapter.legacy.configuration'] : ($this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration())) && false ?: '_'});
