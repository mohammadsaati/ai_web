<?php

namespace App\Enums;

enum SiteOrderEnum: string
{
    case BUSINESS = 'business';
    case PERSONAL = 'personal';
    case PORTFOLIO = 'portfolio';
    case ECOMMERCE = 'ecommerce';
    case CUSTOM = 'custom';
    case BLOG = 'blog';

    public function label(): string
    {
        return match ($this) {
            self::BUSINESS => 'Business',
            self::PERSONAL => 'Personal',
            self::PORTFOLIO => 'Portfolio',
            self::ECOMMERCE => 'Ecommerce',
            self::CUSTOM => 'Custom',
            self::BLOG => 'Blog',
        };
    }
}
