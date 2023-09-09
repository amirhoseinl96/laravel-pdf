<?php

namespace amirhoseinl96\LaravelPdf\Test;

use amirhoseinl96\LaravelPdf\Facades\Pdf;
use amirhoseinl96\LaravelPdf\Providers\PdfServiceProvider;
use Orchestra\Testbench\TestCase;

class PdfTestCase extends TestCase
{
	/**
	 * Load package service provider
	 * @param  \Illuminate\Foundation\Application $app
	 * @return lasselehtinen\MyPackage\MyPackageServiceProvider
	 */
	protected function getPackageProviders($app): array
	{
		return [
            PdfServiceProvider::class,
        ];
	}

	/**
	 * Load package alias
	 * @param  \Illuminate\Foundation\Application $app
	 * @return array
	 */
	protected function getPackageAliases($app): array
	{
		return [
			'PDF' => Pdf::class,
		];
	}
}
