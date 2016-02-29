<?php

kirbytext::$tags['bibtex'] = array(
  'html' => function($tag) {

    $html = '<div>';
    $html .= '<link rel=stylesheet href=assets/bibtex/bib-publication-list.css>';
    $html .= '<div class=publications>';
    $html .= '<table id=pubTable class=display>';
    $html .= '</table>';
    $html .= '</div>';
    $html .= '<script type=text/javascript src=https://code.jquery.com/jquery-2.1.4.min.js></script>';
    // $html .= '<script type=text/javascript src=https://code.jquery.com/jquery-1.6.4.min.js></script>';
    $html .= '<script type=text/javascript src=https://cdn.datatables.net/1.6.2/js/jquery.dataTables.min.js></script>';
    $html .= '<script type=text/javascript src=assets/bibtex/BibTex-0.1.2.js></script>';
    $html .= '<script type=text/javascript src=assets/bibtex/bib-publication-list.js></script>';
    $html .= '<script type=text/javascript>';
    $html .= '$(document).ready(function() {';
    if (0 === strpos($tag->attr('bibtex'), 'http')) {
      // starts with http
      $lib = $tag->attr('bibtex');
    }
    else
    {
      $lib = url($path = '/'.$tag->attr('bibtex'));
    }
    $html .= 'bibtexify(\''.$lib.'\', \'pubTable\');';
    $html .= '});';
    $html .= '</script>';

    $html .= '</div>';

    return $html;

  }
);

?>