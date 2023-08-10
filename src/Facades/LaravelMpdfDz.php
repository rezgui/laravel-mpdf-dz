<?php

namespace Rezgui\LaravelMpdfDz\Facades;

use Illuminate\Support\Facades\Facade as BaseFacade;
use Rezgui\LaravelMpdfDz\LaravelMpdfDz as Pdf;

/**
 * Class LaravelMpdfDz
 * @package Rezgui\LaravelMpdfDz\Facades
 *
 * @method static Pdf loadHTML(string $html, ?array $config = [])
 * @method static Pdf loadFile(string $file, ?array $config = [])
 * @method static Pdf loadView(string $view, ?array $data = [], ?array $mergeData = [], ?array $config = [])
 * @method static Pdf chunkLoadHTML(string $separator, string $html, ?array $config = [])
 * @method static Pdf chunkLoadFile(string $separator, string $file, ?array $config = [])
 * @method static Pdf chunkLoadView(string $separator, string $view, ?array $data = [], ?array $mergeData = [], ?array $config = [])
 */
class LaravelMpdfDz extends BaseFacade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-mpdf-dz';
    }
}
