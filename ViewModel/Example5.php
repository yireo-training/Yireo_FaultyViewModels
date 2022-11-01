<?php declare(strict_types=1);

namespace Yireo\FaultyViewModels\ViewModel;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class Example5 implements ArgumentInterface
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

