<?php

/**
 * Returns path to a Spire folder.
 *
 * @param  string  $section
 * @param  string  $path
 * @return string
 */
function path(string $section, string $path = ''): string
{
    // Normalize the path.
    $path = '/' . trim($path, '/') . '/';

    // Return path to correct section.
    switch (strtolower($section))
    {
        case 'modules':
            return ROOTDIR.FOLDERS['modules'].$path;
        case 'config':
            return ROOTDIR.FOLDERS['config'].$path;
        case 'templates':
            return ROOTDIR.FOLDERS['templates'].$path;
        case 'layouts':
            return path('templates', FOLDERS['layouts']).$path;
        case 'components':
            return path('templates', FOLDERS['components']).$path;
        default:
            return ROOTDIR.$path;
    }
}
