<?php

namespace Kaster\Cms\View;

use Illuminate\View\Component;
use Illuminate\View\View;
use Kaster\Cms\Enums\CustomComponent;

class ComponentsRenderer extends Component
{
    public function __construct(
        public array $block
    ) {}

    public function render(): View|string
    {
        $type = $this->block['type'] ?? null;

        $componentEnum = CustomComponent::tryFrom($type);

        if (! $componentEnum) {
            return '';
        }

        $componentClass = $componentEnum->getComponent();

        $viewName = $componentClass::getView();

        $payload = $componentClass::setupRenderPayload($this->block['data'] ?? []);

        return view($viewName, $payload);
    }
}
