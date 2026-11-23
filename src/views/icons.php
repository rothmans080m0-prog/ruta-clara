<?php
declare(strict_types=1);

if (!function_exists('icon')) {
    /** Iconos SVG propios (trazo, 24x24). Diseño original del proyecto. */
    function icon(string $name, int $size = 24): string
    {
        $p = [
            'shield' => '<path d="M12 3l7 3v5c0 4.5-3 8.2-7 10-4-1.8-7-5.5-7-10V6l7-3z"/><path d="M9 12l2 2 4-4"/>',
            'search' => '<circle cx="11" cy="11" r="6.5"/><path d="M16 16l4.5 4.5"/>',
            'tag' => '<path d="M3.5 12.5V4.5h8l9 9-8 8-9-9z"/><circle cx="8" cy="9" r="1.2"/>',
            'scale' => '<path d="M12 4v16M6 20h12M5 7h14"/><path d="M5 7l-2.5 6a3 3 0 005 0L5 7zM19 7l-2.5 6a3 3 0 005 0L19 7z"/>',
            'route' => '<circle cx="6" cy="18" r="2.2"/><circle cx="18" cy="6" r="2.2"/><path d="M8 18h6a3 3 0 000-6h-4a3 3 0 010-6h6"/>',
            'arrow' => '<path d="M5 12h14M13 6l6 6-6 6"/>',
            'clock' => '<circle cx="12" cy="12" r="8.5"/><path d="M12 7v5l3 2"/>',
            'check' => '<path d="M5 12.5l4.5 4.5L19 7.5"/>',
            'external' => '<path d="M14 4h6v6M20 4l-9 9M18 14v5a1 1 0 01-1 1H5a1 1 0 01-1-1V7a1 1 0 011-1h5"/>',
            'info' => '<circle cx="12" cy="12" r="8.5"/><path d="M12 11v5M12 8v.01"/>',
            'menu' => '<path d="M4 7h16M4 12h16M4 17h16"/>',
            'close' => '<path d="M6 6l12 12M18 6L6 18"/>',
        ][$name] ?? '';
        return '<svg class="icon" width="' . $size . '" height="' . $size . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false">' . $p . '</svg>';
    }
}
