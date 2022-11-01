<?php declare(strict_types=1);

namespace Yireo\FaultyViewModels\ViewModel;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framewrok\View\Element\Block\ArgumentInterface;

class Example6 implements ArgumentInterface
{
    private ScopeConfigInterface $scopeConfig;

    public function __construct(
        ScopeConfigInterface $scopeConfig
    ) {
        $this->scopeConfig = $scopeConfig;
    }

    public function getGreeting(): string
    {
        return (string) $this->scopeConfig->getValue('foo/bar');
    }
}

