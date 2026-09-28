@props([
    'type' => 'info',
    'message' => null,
    'title' => null,
    'icon' => null,
])

@php
    $icons = [
        'success' => 'bi bi-check-circle-fill',
        'info'    => 'bi bi-info-circle-fill',
        'warning' => 'bi bi-exclamation-triangle-fill',
        'danger'  => 'bi bi-x-circle-fill',
        'primary' => 'bi bi-bell-fill',
    ];

    $colors = [
        'success' => ['bg' => '#D4F4EE', 'border' => '#18B89A', 'text' => '#0A5044', 'icon' => '#18B89A'],
        'info'    => ['bg' => '#EBF3FE', 'border' => '#54B0E8', 'text' => '#184F7D', 'icon' => '#54B0E8'],
        'warning' => ['bg' => '#FDEFD4', 'border' => '#F07830', 'text' => '#7A3810', 'icon' => '#F07830'],
        'danger'  => ['bg' => '#FDE8E4', 'border' => '#E8543C', 'text' => '#7A1C0F', 'icon' => '#E8543C'],
        'primary' => ['bg' => '#EDF5C8', 'border' => '#A8C840', 'text' => '#3A5A08', 'icon' => '#6A8B08'],
    ];

    $theme = $colors[$type] ?? $colors['info'];
    $iconClass = $icon ?? ($icons[$type] ?? 'bi bi-bell-fill');
@endphp

<div {{ $attributes->merge(['class' => 'status-banner status-banner-' . $type]) }}
     style="background-color: {{ $theme['bg'] }}; border: 1.5px solid {{ $theme['border'] }}; color: {{ $theme['text'] }}; border-radius: var(--r-lg, 16px); padding: 14px 20px; display: flex; align-items: center; gap: 14px; box-shadow: var(--sh-sm, 0 2px 8px rgba(0,0,0,.08)); margin-bottom: 20px;">
    <div style="font-size: 1.35rem; color: {{ $theme['icon'] }}; display: flex; align-items: center; flex-shrink: 0;">
        <i class="{{ $iconClass }}"></i>
    </div>
    <div style="flex: 1;">
        @if($title)
            <div style="font-weight: 700; font-family: 'Space Grotesk', sans-serif; font-size: 0.95rem; line-height: 1.2; margin-bottom: 2px;">
                {{ $title }}
            </div>
        @endif
        <div style="font-size: 0.9rem; line-height: 1.4;">
            {{ $message ?? $slot }}
        </div>
    </div>
</div>
