<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'form.type.order.customer_service_message' shared service.

$this->services['form.type.order.customer_service_message'] = $instance = new \PrestaShopBundle\Form\Admin\Sell\Order\OrderMessageType(${($_ = isset($this->services['prestashop.core.form.choice_provider.customer_service_order_messages_name']) ? $this->services['prestashop.core.form.choice_provider.customer_service_order_messages_name'] : $this->load('getPrestashop_Core_Form_ChoiceProvider_CustomerServiceOrderMessagesNameService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.core.form.choice_provider.customer_service_order_messages']) ? $this->services['prestashop.core.form.choice_provider.customer_service_order_messages'] : $this->load('getPrestashop_Core_Form_ChoiceProvider_CustomerServiceOrderMessagesService.php')) && false ?: '_'});

$instance->setTranslator(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'});

return $instance;
