<?php namespace Craft;

class SimpleSitemapPlugin extends BasePlugin
{
	public function getName()
	{
		return 'SimpleSitemap';
	}

	public function getVersion()
	{
		return '0.0.1';
	}

	public function getDeveloper()
	{
		return 'XO Digital';
	}

	public function getDeveloperUrl()
	{
		return 'http://xodigital.com.au';
	}

	public function registerSiteRoutes()
	{
		return array(
			'sitemap.xml' => array('action' => 'simpleSitemap/index'),
		);
	}
}