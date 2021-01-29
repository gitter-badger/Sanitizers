# Notes

If you Don't understand our code...
See the examples in this file to understand our code

## PHP Sanitize Flags

1. FILTER_FLAG_STRIP_LOW **example:** "\0aä\x80" will become "aä\x80".
2. FILTER_FLAG_STRIP_HIGH **example:** "\0aä\x80" will become "\0a".
3. FILTER_FLAG_ALLOW_FRACTION **It allows a dot. Example:** 100.25 will become 10025 without this flag.

See PHP flags official documentation in [php.net](http://php.net/manual/en/filter.filters.flags.php).
