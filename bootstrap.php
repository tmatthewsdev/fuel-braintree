<?php

Autoloader::add_classes(array(
	
	'Braintree'					=> __DIR__.'/classes/braintree.php',

	'Braintree_AddOn'					=> __DIR__.'/classes/braintree/addon.php',
	'Braintree_Address'					=> __DIR__.'/classes/braintree/address.php',
	'Braintree_Collection'				=> __DIR__.'/classes/braintree/collection.php',
	'Braintree_Configuration'			=> __DIR__.'/classes/braintree/configuration.php',
	'Braintree_CreditCard'				=> __DIR__.'/classes/braintree/creditcard.php',
	'Braintree_Customer'					=> __DIR__.'/classes/braintree/customer.php',
	'Braintree_CustomerSearch'			=> __DIR__.'/classes/braintree/customersearch.php',
	'Braintree_Descriptor'				=> __DIR__.'/classes/braintree/descriptor.php',
	'Braintree_Digest'					=> __DIR__.'/classes/braintree/digest.php',
	'Braintree_Discount'					=> __DIR__.'/classes/braintree/discount.php',
	'Braintree_EqualityNode'				=> __DIR__.'/classes/braintree/equalitynode.php',
	'Braintree_Exception'				=> __DIR__.'/classes/braintree/exception.php',
	'Braintree_Http'						=> __DIR__.'/classes/braintree/http.php',
	'Braintree_Instance'					=> __DIR__.'/classes/braintree/instance.php',
	'Braintree_IsNode'					=> __DIR__.'/classes/braintree/isnode.php',
	'Braintree_KeyValueNode'				=> __DIR__.'/classes/braintree/keyvaluenode.php',
	'Braintree_Modification'				=> __DIR__.'/classes/braintree/modification.php',
	'Braintree_MultipleValueNode'		=> __DIR__.'/classes/braintree/multiplevaluenode.php',
	'Braintree_MultipleValueOrTextNode'	=> __DIR__.'/classes/braintree/multiplevalueortextnode.php',
	'Braintree_PartialMatchNode'			=> __DIR__.'/classes/braintree/partialmatchnone.php',

	'Braintree_Plan'						=> __DIR__.'/classes/braintree/plan.php',
	'Braintree_RangeNode'				=> __DIR__.'/classes/braintree/rangenode.php',
	'Braintree_ResourceCollection'		=> __DIR__.'/classes/braintree/resourcecollection.php',
	'Braintree_SettlementBatchSummary'	=> __DIR__.'/classes/braintree/settlementbatchsummary.php',

	'Braintree_Subscription'				=> __DIR__.'/classes/braintree/subscription.php',
	'Braintree_SubscriptionSearch'		=> __DIR__.'/classes/braintree/subscriptionsearch.php',
	'Braintree_TextNode'					=> __DIR__.'/classes/braintree/textnode.php',

	'Braintree_Transaction'				=> __DIR__.'/classes/braintree/transaction.php',
	'Braintree_TransactionSearch'		=> __DIR__.'/classes/braintree/transactionsearch.php',
	'Braintree_TransparentRedirect'		=> __DIR__.'/classes/braintree/transparentredirect.php',
	'Braintree_Util'						=> __DIR__.'/classes/braintree/util.php',

	'Braintree_Version'					=> __DIR__.'/classes/braintree/version.php',
	'Braintree_Xml'						=> __DIR__.'/classes/braintree/xml.php',



	//
	'Braintree_Error_Codes'						=> __DIR__.'/classes/braintree/error/codes.php',
	'Braintree_Error_ErrorCollection'			=> __DIR__.'/classes/braintree/error/errorcollection.php',
	'Braintree_Error_Validation'					=> __DIR__.'/classes/braintree/error/validation.php',
	'Braintree_Error_ValidationErrorCollection'	=> __DIR__.'/classes/braintree/error/validationerrorcollection.php',
	


	// 
	'Braintree_Exception_Authentication'		=> __DIR__.'/classes/braintree/exception/authentication.php',
	'Braintree_Exception_Authorization'		=> __DIR__.'/classes/braintree/exception/authorization.php',
	'Braintree_Exception_Configuration'		=> __DIR__.'/classes/braintree/exception/configuration.php',
	'Braintree_Exception_DownForMaintenance'	=> __DIR__.'/classes/braintree/exception/downformaintenance.php',
	'Braintree_Exception_ForgedQueryString'	=> __DIR__.'/classes/braintree/exception/forgedquerystring.php',
	'Braintree_Exception_NotFound'			=> __DIR__.'/classes/braintree/exception/notfound.php',
	'Braintree_Exception_ServerError'		=> __DIR__.'/classes/braintree/exception/servererror.php',
	'Braintree_Exception_SSLCaFileNotFound'	=> __DIR__.'/classes/braintree/exception/sslcafilenotfound.php',
	'Braintree_Exception_SSLCertificate'		=> __DIR__.'/classes/braintree/exception/sslcertificate.php',
	'Braintree_Exception_Unexpected'			=> __DIR__.'/classes/braintree/exception/unexpected.php',
	'Braintree_Exception_UpgradeRequired'	=> __DIR__.'/classes/braintree/exception/upgraderequired.php',
	'Braintree_Exception_ValidationsFailed'	=> __DIR__.'/classes/braintree/exception/validationsfailed.php',



	//
	'Braintree_Result_CreditCardVerification'	=> __DIR__.'/classes/braintree/result/creditcardverification.php',
	'Braintree_Result_Error'						=> __DIR__.'/classes/braintree/result/error.php',
	'Braintree_Result_Successful'				=> __DIR__.'/classes/braintree/result/successful.php',
	


	//
	'Braintree_Test_CreditCardNumbers'	=> __DIR__.'/classes/braintree/test/creditcardnumbers.php',
	'Braintree_Test_TransactionAmounts'	=> __DIR__.'/classes/braintree/test/transactionamounts.php',
	


	//
	'Braintree_Transaction_AddressDetails'		=> __DIR__.'/classes/braintree/transaction/addressdetails.php',
	'Braintree_Transaction_CreditCardDetails'	=> __DIR__.'/classes/braintree/transaction/creditcarddetails.php',
	'Braintree_Transaction_CustomerDetails'		=> __DIR__.'/classes/braintree/transaction/customerdetails.php',
	'Braintree_Transaction_StatusDetails'		=> __DIR__.'/classes/braintree/transaction/statusdetails.php',
	'Braintree_Transaction_SubscriptionDetails'	=> __DIR__.'/classes/braintree/transaction/subscriptiondetails.php',
	
	


	//
	'Braintree_Xml_Generator'	=> __DIR__.'/classes/braintree/xml/generator.php',
	'Braintree_Xml_Parser'		=> __DIR__.'/classes/braintree/xml/parser.php',
	
));