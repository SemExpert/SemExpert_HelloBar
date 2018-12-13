<?php
/**
 * Created by PhpStorm.
 * User: Barbazul
 * Date: 10/12/2018
 * Time: 5:57 PM
 */

namespace SemExpert\HelloBar\Block;

use Magento\Cms\Block\Block;
use Magento\Cms\Model\BlockFactory;
use Magento\Cms\Model\Template\FilterProvider;
use Magento\Framework\View\Element\Context;
use Magento\Store\Model\StoreManagerInterface;

/**
 * Class CMS
 * @package SemExpert\HelloBar\Block
 * @api
 */
class CMS extends Block
{
    const ENABLED_FLAG_PATH = 'cms/hellobar/enabled';

    /**
     * Scope config
     *
     * @var \Magento\Framework\App\Config\ScopeConfigInterface
     */
    protected $scopeConfig;

    public function __construct(
        Context $context,
        FilterProvider $filterProvider,
        StoreManagerInterface $storeManager,
        BlockFactory $blockFactory,
        array $data = []
    ) {
        parent::__construct($context, $filterProvider, $storeManager, $blockFactory, $data);
        $this->scopeConfig = $context->getScopeConfig();
    }

    /**
     * @return bool
     */
    public function isEnabled()
    {
        return $this->scopeConfig->isSetFlag(self::ENABLED_FLAG_PATH);
    }
}
