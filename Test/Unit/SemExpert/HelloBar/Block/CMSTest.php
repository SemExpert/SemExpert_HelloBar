<?php
/**
 * Created by PhpStorm.
 * User: Barbazul
 * Date: 10/12/2018
 * Time: 5:59 PM
 */

namespace SemExpert\HelloBar\Block;

use Magento\Cms\Model\BlockFactory;
use Magento\Cms\Model\Template\FilterProvider;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\View\Element\Context;
use Magento\Store\Model\StoreManagerInterface;
use PHPUnit\Framework\TestCase;

class CMSTest extends TestCase
{
    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|Context
     */
    private $contextMock;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|FilterProvider
     */
    private $filterProviderMock;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|StoreManagerInterface
     */
    private $storeManagerMock;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|BlockFactory
     */
    private $blockFactoryMock;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|ScopeConfigInterface
     */
    private $scopeConfigMock;

    /**
     * @var CMS
     */
    private $block;

    public function setUp()
    {
        parent::setUp();
        $this->contextMock = $this->createMock(Context::class);
        $this->scopeConfigMock = $this->createMock(ScopeConfigInterface::class);
        $this->contextMock->method('getScopeConfig')->willReturn($this->scopeConfigMock);

        $this->filterProviderMock = $this->createMock(FilterProvider::class);
        $this->storeManagerMock = $this->createMock(StoreManagerInterface::class);
        $this->blockFactoryMock = $this->createMock(BlockFactory::class);
        $this->block = new CMS(
            $this->contextMock,
            $this->filterProviderMock,
            $this->storeManagerMock,
            $this->blockFactoryMock
        );
    }

    public function testIsDisabledByConfiguration()
    {
        $this->scopeConfigMock->expects($this->once())
            ->method('isSetFlag')
            ->with(CMS::ENABLED_FLAG_PATH)
            ->willReturn(false);
        $this->assertFalse($this->block->isEnabled());
    }
}
