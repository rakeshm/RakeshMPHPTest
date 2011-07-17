<?php
/*
 * Copyright 2010 Amazon.com, Inc. or its affiliates. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License").
 * You may not use this file except in compliance with the License.
 * A copy of the License is located at
 *
 *  http://aws.amazon.com/apache2.0
 *
 * or in the "license" file accompanying this file. This file is distributed
 * on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either
 * express or implied. See the License for the specific language governing
 * permissions and limitations under the License.
 */

/*
	PREREQUISITES:
	In order to run this sample, I'll assume a few things:

	* You already have a valid Amazon Web Services developer account, and are
	  signed up to use Amazon S3 <http://aws.amazon.com/s3>.

	* You already understand the fundamentals of object-oriented PHP.

	* You've verified that your PHP environment passes the SDK Compatibility Test.

	* You've already added your credentials to your config.inc.php file, as per the
	  instructions in the Getting Started Guide.

	TO RUN:
	* Run this file on your web server by loading it in your browser, OR...
	* Run this file from the command line with `php cli-s3_get_urls_for_uploads.php`.
*/


/*%******************************************************************************************%*/
// SETUP

	// Enable full-blown error reporting. http://twitter.com/rasmus/status/7448448829
	error_reporting(-1);
    error_reporting(E_ALL);  
    ini_set('display_errors','on');  


	// Set plain text headers
	header("Content-type: text/plain; charset=utf-8");

	// Include the SDK
	require_once '../sdk.class.php';

   // $ec2 = new AmazonEC2();
    //print_r ($ec2);
    //print_r ($ec2->describe_instances()); 

//    echo AWS_SECRET_KEY . "  AND  " . AWS_KEY;
    
    $s3 = new AmazonS3(); 
    
    //$response = $s3->get_bucket_list(); // Success?
    //print_r($response);
    //print_r ($s3->account_id);
    //print_r ($s3);
    //echo "GOT HERE!!"; 
    $response = $s3->get_bucket_list(); 
    print_r($response);
    //var_dump($response->isOK());
    
    
    
    