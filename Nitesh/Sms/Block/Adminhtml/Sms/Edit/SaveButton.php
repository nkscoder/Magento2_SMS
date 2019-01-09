<?php
/**
 * Created by PhpStorm.
 * User: nitesh
 * nkscoder@gmail.com
 * Date: 01/01/19
 * Time: 4:59 PM
 */
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
            'label' => __('Save'),
            'class' => 'save primary',
            'data_attribute' => [
                'mage-init' => ['button' => ['sms' => 'save']],
                'form-role' => 'save',
            ],
            'sort_order' => 90,
        ];
    }
}
