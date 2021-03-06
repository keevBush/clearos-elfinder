<link rel="stylesheet" href=" <?php echo base_url('webfile_manager'); ?>/assets/css/style.css"/>
<?php

/**
 * CLEAROS Web File Manager controller.
 *
 * @category   Apps
 * @package    CLEAROS_Web_File_Manager
 * @subpackage Controllers
 * @author     Your name <your@e-mail>
 * @copyright  2013 Your name / Company
 * @license    Your license
 */

///////////////////////////////////////////////////////////////////////////////
// Load dependencies
///////////////////////////////////////////////////////////////////////////////

$this->lang->load('webfile_manager');

///////////////////////////////////////////////////////////////////////////////
// Form
///////////////////////////////////////////////////////////////////////////////
echo row_open();
echo '<div id="top-nav">';
foreach ($actions as $action)
{
    echo '<a title="'.$action['title'].'"><img src="'.base_url("webfile_manager").'/assets/img/icons/'.$action['icon'].'" width="25px"/> </a>';
}

echo '</div>';
echo row_close();
echo "<div class='col-sm-2 col-md-2 col-lg-2 col-xs-2' id='left-menu' role='menu'>
             <a class='col-md-12 col-lg-12 col-sm-12 col-xs-12'><i class='fa fa-file'   ></i>folder name</a>
          </div>";
echo "<div class='col-sm-10 col-md-10 col-lg-10 col-xs-10' id='main-content'>
        <a class='col-md-1 col-lg-1 col-sm-2 col-xs-2'><img src='".base_url('webfile_manager')."/assets/img/ext/aspx.png' width='40px'/>test.aspx</a>
        <a class='col-md-1 col-lg-1 col-sm-2 col-xs-2'><img src='".base_url('webfile_manager')."/assets/img/ext/png.png' width='40px'/>pic001.png</a>
        <a class='col-md-1 col-lg-1 col-sm-2 col-xs-2'><img src='".base_url('webfile_manager')."/assets/img/ext/avi.png' width='40px'/>avengers</a>
        <a class='col-md-1 col-lg-1 col-sm-2 col-xs-2'><img src='".base_url('webfile_manager')."/assets/img/ext/aspx.png' width='40px'/>file name</a>
      </div>";

