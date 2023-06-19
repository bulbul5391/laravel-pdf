<?php

namespace bulbul5391\LaravelPdf\Test;

use bulbul5391\LaravelPdf\Facades\Pdf;
use bulbul5391\LaravelPdf\PdfServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

class TestCase extends OrchestraTestCase {
	/**
	 * Load package service provider
	 * @param  \Illuminate\Foundation\Application $app
	 * @return lasselehtinen\MyPackage\MyPackageServiceProvider
	 */
	protected function getPackageProviders($app)
	{
		return [PdfServiceProvider::class];
	}

	/**
	 * Load package alias
	 * @param  \Illuminate\Foundation\Application $app
	 * @return array
	 */
	protected function getPackageAliases($app)
	{
		return [
			'PDF' => Pdf::class,
		];
	}
}
