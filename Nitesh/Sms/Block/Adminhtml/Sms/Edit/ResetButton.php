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
 * Class ResetButton
 */
class ResetButton implements ButtonProviderInterface
{
    /**
     * @return array
     */
    public function getButtonData()
    {
        return [
            'label' => __('Reset'),
            'class' => 'reset',
            'on_click' => 'location.reload();',
            'sort_order' => 30
        ];
    }
}
