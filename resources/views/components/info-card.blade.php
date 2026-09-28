@props([
    'label' => null,
    'title' => null,
    'value' => null,
    'icon' => null,
    'badge' => null,
])

@php
    $displayLabel = $label ?? $title ?? '';
@endphp

<div {{ $attributes->merge(['class' => 'info-block info-card-component']) }} style="background: var(--cream-2, #E8E2D8); border-radius: var(--r-md, 12px); padding: 14px 18px; border: 1px solid var(--color-border, rgba(26,26,18,0.12));">
    @if($displayLabel)
        <div class="info-label" style="font-size: 0.72rem; text-transform: uppercase; letter-spacing: 0.06em; font-weight: 700; color: var(--ink-soft, #6B6B54); margin-bottom: 4px; display: flex; align-items: center; gap: 6px;">
            @if($icon)
                <i class="{{ $icon }}" style="color: var(--ink-soft); font-size: 13px;"></i>
            @endif
            <span>{{ $displayLabel }}</span>
            @if($badge)
                <span class="chip lime" style="margin-left: auto; font-size: 0.68rem; padding: 2px 8px;">{{ $badge }}</span>
            @endif
        </div>
    @endif
    @if($value)
        <div class="info-value" style="font-family: 'Space Grotesk', sans-serif; font-size: 0.95rem; font-weight: 600; color: var(--ink, #1A1A12); word-break: break-word;">
            {{ $value }}
        </div>
    @endif
    {{ $slot }}
</div>
