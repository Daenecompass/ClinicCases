<?php
// SETS SYSTEM-WIDE CONFIG PREFERNENCES

//Information to access your mysql database
$CC_dbhost = "localhost";
$CC_dbusername = "cc7";
$CC_dbpasswd = "cc7";
$CC_database_name = "cc_dev_live_copy";

//Email address for the adminstrator who will deal with student questions
$CC_admin_email = "jmitchel@loyno.edu";

//Url where your Cliniccases installation will be run, e.g. http://www.yourservername.com/yourdirectory/ .  Don't forget trailing slash!
$CC_base_url = "http://localhost/cc7/";

//Your domain , e.g. http://www.yourserver.com
$CC_domain = "http://localhost";

//Default email for ClinicCases notifications, e.g. no-reply@yourserver.co
$CC_default_email = "";

//Your Program Name, e.g. "Loyola Law Clinic"
$CC_program_name = "ClinicCases 7 Development";

//Optional: Your School Color (used for program name); rgb or hex value.
$CC_school_color = "#A52A2A";

//An array of all columns in your main case management table (cm).  Set value to 1(true) if these columns should be displayed to users

//Key to the array:  array(NAME OF COLUMN IN DB, NAME AS DISPLAYED TO USER, SHOULD COLUMN BE AVAILABLE TO USER BY DEFAULT, TYPE OF INPUT FOR SEARCH, SHOULD COLUMN BE DISPLAYED TO USER BY DEFAULT)

$CC_columns = array( 
	array("id", "Id", "true", "input",false), 
	array("clinic_id", "Case Number", "true", "input",false), 
	array("first_name", "First Name", "true", "input",true), 
	array("m_initial", "Middle Initial", "true", "input",false),
	array("last_name", "Last Name", "true", "input",true),
	array("organization", "Organization", "true", "input",false),
	array("date_open", "Date Open", "true", "input",true),
	array("date_close", "Date Close", "true", "input",true),
	array("case_type", "Case Type", "true", "select",true),
	array("professor", "Professor", "false", "input","false"),//consider deleting this column
	array("address1", "Address 1", "false", "input",false),
	array("address2", "Address 2", "false", "input",false),
	array("city", "City", "false", "input",false),
	array("state", "State", "false", "input",false),
	array("zip", "Zip", "false", "input",false),
	array("phone1", "Phone 1", "false", "input",false),
	array("phone2", "Phone 2", "false", "input",false),
	array("email", "Email", "true", "input",false),
	array("ssn", "SSN", "true", "input",false),
	array("dob", "DOB", "true", "input",false),
	array("age", "Age", "true", "input",false),
	array("gender", "Gender", "true", "select",false),
	array("race", "Race", "true", "select",false),
	array("income", "Income", "false", "input",false),
	array("per", "Per", "false", "input",false),
	array("judge", "Judge", "false", "input",false),
	array("pl_or_def", "Plaintiff/Defendant", "false", "input",false),
	array("court", "Court", "false", "input",false),
	array("section", "Section", "false", "input",false),
	array("ct_case_no", "Court Case Number", "false", "input",false),
	array("case_name", "Case Name", "false", "input",false),
	array("notes", "Notes", "false", "input",false),
	array("type1", "Type 1", "false", "input",false),
	array("type2", "Type 2", "false", "input",false),
	array("dispo", "Disposition", "true", "select",true),
	array("close_code", "Closing Code", "false", "input",false),
	array("close_notes", "Closing Notes", "false", "input",false),
	array("referral", "Referred By", "true", "input",false),
	array("opened_by", "Opened By", "true", "input",true),
	array("dingo", "Dingo", "true", "input",true),
	array("dingo", "Fringo", "true", "input",true)


	
	);

//Magic Quotes:  CC expects magic quotes to be turned off.  This fixes that if they are not.

if ( in_array( strtolower( ini_get( 'magic_quotes_gpc' ) ), array( '1', 'on' ) ) )
{
    $_POST = array_map( 'stripslashes', $_POST );
    $_GET = array_map( 'stripslashes', $_GET );
    $_COOKIE = array_map( 'stripslashes', $_COOKIE );
}

//Error reporting.

ini_set("error_reporting", "true");
error_reporting(E_ALL|E_STRCT);

?>
