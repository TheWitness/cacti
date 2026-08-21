<?php
/*
  +-------------------------------------------------------------------------+
  | Copyright (C) 2004-2026 The Cacti Group                                 |
  |                                                                         |
  | This program is free software; you can redistribute it and/or           |
  | modify it under the terms of the GNU General Public License             |
  | as published by the Free Software Foundation; either version 2          |
  | of the License, or (at your option) any later version.                  |
  |                                                                         |
  | This program is distributed in the hope that it will be useful,         |
  | but WITHOUT ANY WARRANTY; without even the implied warranty of          |
  | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the           |
  | GNU General Public License for more details.                            |
  +-------------------------------------------------------------------------+
  | Cacti: The Complete RRDTool-based Graphing Solution                     |
  +-------------------------------------------------------------------------+
  | This code is designed, written, and maintained by the Cacti Group. See  |
  | about.php and/or the AUTHORS file for specific developer information.   |
  +-------------------------------------------------------------------------+
  | http://www.cacti.net/                                                   |
  +-------------------------------------------------------------------------+
*/

// CIQ palette. Keep these in step with the :root block at the bottom of
// main.css so graphs sit flush against the surrounding page.
$rrdcolors['back']   = '171C1A';   // --ciq-bg-2, graph card surface
$rrdcolors['canvas'] = '0A0C0B';   // --ciq-bg-0, plot area
$rrdcolors['shadea'] = '262C2A';   // --ciq-border, top/left bevel
$rrdcolors['shadeb'] = '262C2A';   // --ciq-border, bottom/right bevel
$rrdcolors['grid']   = '242B28';   // minor grid, just above the canvas
$rrdcolors['mgrid']  = '39423E';   // major grid
$rrdcolors['font']   = 'E4E9E7';   // --ciq-text
$rrdcolors['axis']   = '11A66E';   // CIQ Mountain Meadow
$rrdcolors['arrow']  = '11A66E';
$rrdcolors['frame']  = '171C1A';

# RRDtool graph fonts in RRDtool 1.2+
$rrdfonts['title']['font']     = 'DejaVu Sans';
$rrdfonts['title']['size']     = '11';
$rrdfonts['axis']['font']      = 'DejaVu Sans';
$rrdfonts['axis']['size']      = '8';
$rrdfonts['legend']['font']    = 'DejaVu Sans Mono';
$rrdfonts['legend']['size']    = '8';
$rrdfonts['unit']['font']      = 'DejaVu Sans';
$rrdfonts['unit']['size']      = '8';
$rrdfonts['watermark']['font'] = 'DejaVu Sans';
$rrdfonts['watermark']['size'] = '6';

# Only supported in RRDtool 1.4+
$rrdborder = 1;
