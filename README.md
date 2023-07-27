# Kirby Buildhook Plugin

Whenever any content is changed, the plugin will trigger a buildhook to a given URL.

## Config

```php
// site/config.php
return [
    'moritzebeling.kirby-buildhook' => [
        'url' => 'https://api.netlify.com/build_hooks/...'
    ]
];
```

## Development

Roadmap
- [ ] When editing a lot in the Kirby panel, the hook will be triggered all the time, leading to a lot of builds. Maybe this should be throtteled
- [ ] Trigger a build manually from panel

## Warranty

This plugin is work in progress and comes without any warranty. Use at your own risk.