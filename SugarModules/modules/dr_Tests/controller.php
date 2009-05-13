<?php
/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Professional Subscription
 * Agreement ("License") which can be viewed at
 * http://www.sugarcrm.com/crm/products/sugar-professional-eula.html
 * By installing or using this file, You have unconditionally agreed to the
 * terms and conditions of the License, and You may not use this file except in
 * compliance with the License.  Under the terms of the license, You shall not,
 * among other things: 1) sublicense, resell, rent, lease, redistribute, assign
 * or otherwise transfer Your rights to the Software, and 2) use the Software
 * for timesharing or service bureau purposes such as hosting the Software for
 * commercial gain and/or for the benefit of a third party.  Use of the Software
 * may be subject to applicable fees and any use of the Software without first
 * paying applicable fees is strictly prohibited.  You do not have the right to
 * remove SugarCRM copyrights from the source code or user interface.
 *
 * All copies of the Covered Code must include on each user interface screen:
 *  (i) the "Powered by SugarCRM" logo and
 *  (ii) the SugarCRM copyright notice
 * in the same form as they appear in the distribution.  See full license for
 * requirements.
 *
 * Your Warranty, Limitations of liability and Indemnity are expressly stated
 * in the License.  Please refer to the License for the specific language
 * governing these rights and limitations under the License.  Portions created
 * by SugarCRM are Copyright (C) 2004-2009 SugarCRM, Inc.; All Rights Reserved.
 ********************************************************************************/

require_once('include/MVC/Controller/SugarController.php');
class dr_TestsController extends SugarController{

    function action_test(){
        $this->view = 'test';
    }

	function action_testsuite(){
		$query = $this->bean->create_new_list_query('','',array(),array(),0,'',false,'',false);
		$beans = $this->bean->process_full_list_query($query);
			?>
			<html>
			<head>
			<meta content="text/html; charset=ISO-8859-1"
			http-equiv="content-type">
			<title>Test Suite</title>
			<body>
				<table id="suiteTable" cellpadding="1" cellspacing="1" border="1" class="selenium">
			        <tbody>
					<tr><td><b>Test Suite</b></td></tr>
			<?php
				foreach($beans as $bean)
				{
					$url = "index.php?module=dr_Tests&action=test&to_pdf=true&record=".$bean->id;
					echo "<tr><td><a href='$url'>".$bean->name."</a></td></tr>";
				}
			?>
				    </tbody>
			    </table>
			</body>
			</html>
			<?php
	}
}
?>
