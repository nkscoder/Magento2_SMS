<?php
namespace Nitesh\Sms\Block\Adminhtml\Sms\Edit;

use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;

/**
 * Class SaveButton
 */
class SaveButton extends GenericButton implements ButtonProviderInterface
{
    /**
     * @return array
     */
    public function getButtonData()
    {
        return [
            'label' => __('Save Recipe'),
            'class' => 'save primary',
            'data_attribute' => [
                'mage-init' => ['button' => ['sms' => 'save']],
                'form-role' => 'save',
            ],
            'sort_order' => 90,
        ];
    }
}
