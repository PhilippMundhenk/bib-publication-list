<?php

kirbytext::$tags['bibtex'] = array(
  'html' => function($tag) {

    $html = '<link rel=stylesheet href=assets/bibtex/bib-publication-list.css>';
	$html .= '<div class=publications>';
    $html .= '<table id=pubTable class=display></table>';
	$html .= '</div>';
	$html .= '<script type=text/javascript src=assets/bibtex/jquery.min.js></script>';
	$html .= '<script type=text/javascript src=assets/bibtex/jquery.dataTables.min.js></script>';
	$html .= '<script type=text/javascript src=assets/bibtex/BibTex-0.1.2.js></script>';
	$html .= '<script type=text/javascript src=assets/bibtex/bib-publication-list.js></script>';
	$html .= '<script type=text/javascript>';
   	$html .= '$(document).ready(function() {';
    $html .= 'bibtexify(\'content/'.$tag->attr('bibtex').'\', \'pubTable\');';
   	$html .= '});';
   	$html .= '$(window).resize(function() {';
    $html .= 'location.reload();';
   	$html .= '});';
	$html .= '</script>';
	
    return $html;

  }
);

?>