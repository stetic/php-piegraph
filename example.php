<? 
// +----------------------------------------------------------------------+ 
// | PIE Graph Class                                                      | 
// | Creating Pie Graphs on the fly                                       | 
// | Requirements: GD Library >= 2.0                                      | 
// | This file explains how to use and call the class                     | 
// +----------------------------------------------------------------------+ 
// | Author: Nico Puhlmann <nico.puhlmann@gmail.com>                      |
// +----------------------------------------------------------------------+ 
// $Id: example.php,v 1.0 2005/05/02 17:41:12 npuhlmann Exp $ 

require("piegraph.class.php"); 

// class call with the width, height & data 
$pie = new PieGraph(200, 100, array(231,122,32,54)); 

// colors for the data 
$pie->setColors(array("#ff0000","#ff8800","#0022ff","#33ff33")); 

// legends for the data 
$pie->setLegends(array("Internet Explorer","Mozilla Firefox","Opera","Netscape")); 

// Display creation time of the graph 
$pie->DisplayCreationTime(); 

// Height of the pie 3d effect 
$pie->set3dHeight(15); 

// Display the graph 
$pie->display(); 
?>