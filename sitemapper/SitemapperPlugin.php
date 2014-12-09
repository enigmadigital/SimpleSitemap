<?php namespace Craft;


class SitemapperPlugin extends BasePlugin
{

	public function getName()
	{
		return 'Sitemapper';
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
			'sitemap.xml' => array('action' => 'sitemapper/map/index'),
			'v1/sitemap.xml' => array('action' => 'sitemapper/map/index')
		);
	}

}