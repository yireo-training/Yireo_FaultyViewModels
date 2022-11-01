<?php declare(strict_types=1);

namespace Yireo\FaultyViewModels\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;

class Example2 implements ArgumentInterface
{
    public function getGreeting(): bool
    {
        return 'Hello World';
    }
}

