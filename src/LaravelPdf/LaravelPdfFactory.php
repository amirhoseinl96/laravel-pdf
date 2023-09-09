<?php

namespace amirhoseinl96\LaravelPdf;

use Config;
use amirhoseinl96\LaravelPdf\Wrapper\PdfWrapper;
use amirhoseinl96\LaravelPdf\Wrapper\PdfWrapperInterface;

class LaravelPdfFactory
{
    /**
     * @var string
     */
    protected const PDF_WRAPPER_CONFIG_KEY = 'pdfWrapper';

    /**
     * @return \amirhoseinl96\LaravelPdf\Wrapper\PdfWrapperInterface
     */
    public function createPdfWrapper(): PdfWrapperInterface
    {
        $class = $this->getConfigKey(static::PDF_WRAPPER_CONFIG_KEY);
        if ($class !== null) {
            return new $class;
        }

        return new PdfWrapper();
    }

    /**
     * @param string $key
     *
     * @return mixed
     */
    protected function getConfigKey(string $key)
    {
        return Config::get('pdf.' . $key);
    }
}