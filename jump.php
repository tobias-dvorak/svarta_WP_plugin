<?php
	/*
	Plugin Name: Svarta jump
	Plugin URI: http://wordpress.org/plugins/
	Description: Připomeňme si hrdinský čin jedné z nejvýznamějších tváří českých dějin. Svarta to jumpoval z vejšky jako prase. Nezapomeneme!
	Author: Tobiáš Dvořák
	Version: 0.1.1
	Author URI: http://wordpress.org
	*/

	////////////////////////////////////////////
	// Tento plugin nic moc nedělá, pouze při //
	// načtení administrační stránky zobrazí  //
	// v pravém horním rohu náhodnou hlášku   //
	// z legendárního videa 'Svarta jump'     //
	////////////////////////////////////////////

	// Funkce vypíše náhodnou hlášku z virálního videa
	function vypis() {
		// Definuje seznam všech hlášek
		$hlasky = array(
			1  => "Teď, dělej, dělej, dělej!",
			2  => "To je debil, no tak to jsem neviděl",
			3  => "Svarta, je ti něco?",
			4  => "No to mu je teda, zastav to a dělej, dolu!",
			5  => "Hovno, neni mu nic vole",
			6  => "Je mu hodně!",
			7  => "Hochu to je vejška jako prase vole",
			8  => "To jumpoval vole",
			9  => "Ty čuráku, ten má dost",
			10 => "Nemuže pobrat dech ty kriple",
			11 => "Ty debile, ten má dost jak svině",
			12 => "Hej ten bude rozlámanej jako svině",
			13 => "Tak počkej, tak jdem tam vole"
		);

		// Vybere náhodnou hlášku ze seznamu
		$hlaska = $hlasky[ rand(1, count($hlasky)) ];

		// Zobrazí vybranou hlášku
		echo '<p id="text-box"><a href="https://www.youtube.com/watch?v=5hUc-hXXZwU" target="_blank" rel="noopener noreferrer" title="Svarta"><span>'.$hlaska.'</span></a></p>';

		// Napozicuje hlášku tak, aby byla vidět
		echo "
		<style type='text/css'>
			#text-box {
				float: right;
				padding: 5px 10px;
				margin: 0;
				font-size: 12px;
				line-height: 1.6;
			}
			#text-box a {
				color: #3c434a;
				text-decoration: none;
			}
		</style>";
	}

	// Při zavolání funkce 'admin_notices' se provede i funkce 'vypis'
	add_action( 'admin_notices', 'vypis' );
?>