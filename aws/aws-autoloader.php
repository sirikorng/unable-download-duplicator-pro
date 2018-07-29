<?php

if (!class_exists('dup_pro_aws_autoload'))
{
	$GLOBALS['dup_pro_aws_mapping'] = array(
		'Aws\AutoScaling\AutoScalingClient' => __DIR__ . '/Aws/AutoScaling/AutoScalingClient.php',
		'Aws\AutoScaling\Enum\LifecycleState' => __DIR__ . '/Aws/AutoScaling/Enum/LifecycleState.php',
		'Aws\AutoScaling\Enum\ScalingActivityStatusCode' => __DIR__ . '/Aws/AutoScaling/Enum/ScalingActivityStatusCode.php',
		'Aws\AutoScaling\Exception\AlreadyExistsException' => __DIR__ . '/Aws/AutoScaling/Exception/AlreadyExistsException.php',
		'Aws\AutoScaling\Exception\AutoScalingException' => __DIR__ . '/Aws/AutoScaling/Exception/AutoScalingException.php',
		'Aws\AutoScaling\Exception\InvalidNextTokenException' => __DIR__ . '/Aws/AutoScaling/Exception/InvalidNextTokenException.php',
		'Aws\AutoScaling\Exception\LimitExceededException' => __DIR__ . '/Aws/AutoScaling/Exception/LimitExceededException.php',
		'Aws\AutoScaling\Exception\ResourceInUseException' => __DIR__ . '/Aws/AutoScaling/Exception/ResourceInUseException.php',
		'Aws\AutoScaling\Exception\ScalingActivityInProgressException' => __DIR__ . '/Aws/AutoScaling/Exception/ScalingActivityInProgressException.php',
		'Aws\AutoScaling\Resources\autoscaling-2011-01-01' => __DIR__ . '/Aws/AutoScaling/Resources/autoscaling-2011-01-01.php',
		'Aws\CloudFormation\CloudFormationClient' => __DIR__ . '/Aws/CloudFormation/CloudFormationClient.php',
		'Aws\CloudFormation\Enum\Capability' => __DIR__ . '/Aws/CloudFormation/Enum/Capability.php',
		'Aws\CloudFormation\Enum\OnFailure' => __DIR__ . '/Aws/CloudFormation/Enum/OnFailure.php',
		'Aws\CloudFormation\Enum\ResourceStatus' => __DIR__ . '/Aws/CloudFormation/Enum/ResourceStatus.php',
		'Aws\CloudFormation\Enum\StackStatus' => __DIR__ . '/Aws/CloudFormation/Enum/StackStatus.php',
		'Aws\CloudFormation\Exception\AlreadyExistsException' => __DIR__ . '/Aws/CloudFormation/Exception/AlreadyExistsException.php',
		'Aws\CloudFormation\Exception\CloudFormationException' => __DIR__ . '/Aws/CloudFormation/Exception/CloudFormationException.php',
		'Aws\CloudFormation\Exception\InsufficientCapabilitiesException' => __DIR__ . '/Aws/CloudFormation/Exception/InsufficientCapabilitiesException.php',
		'Aws\CloudFormation\Exception\LimitExceededException' => __DIR__ . '/Aws/CloudFormation/Exception/LimitExceededException.php',
		'Aws\CloudFormation\Resources\cloudformation-2010-05-15' => __DIR__ . '/Aws/CloudFormation/Resources/cloudformation-2010-05-15.php',
		'Aws\CloudFront\CloudFrontClient' => __DIR__ . '/Aws/CloudFront/CloudFrontClient.php',
		'Aws\CloudFront\CloudFrontSignature' => __DIR__ . '/Aws/CloudFront/CloudFrontSignature.php',
		'Aws\CloudFront\Enum\GeoRestrictionType' => __DIR__ . '/Aws/CloudFront/Enum/GeoRestrictionType.php',
		'Aws\CloudFront\Enum\ItemSelection' => __DIR__ . '/Aws/CloudFront/Enum/ItemSelection.php',
		'Aws\CloudFront\Enum\Method' => __DIR__ . '/Aws/CloudFront/Enum/Method.php',
		'Aws\CloudFront\Enum\OriginProtocolPolicy' => __DIR__ . '/Aws/CloudFront/Enum/OriginProtocolPolicy.php',
		'Aws\CloudFront\Enum\PriceClass' => __DIR__ . '/Aws/CloudFront/Enum/PriceClass.php',
		'Aws\CloudFront\Enum\SSLSupportMethod' => __DIR__ . '/Aws/CloudFront/Enum/SSLSupportMethod.php',
		'Aws\CloudFront\Enum\ViewerProtocolPolicy' => __DIR__ . '/Aws/CloudFront/Enum/ViewerProtocolPolicy.php',
		'Aws\CloudFront\Exception\AccessDeniedException' => __DIR__ . '/Aws/CloudFront/Exception/AccessDeniedException.php',
		'Aws\CloudFront\Exception\BatchTooLargeException' => __DIR__ . '/Aws/CloudFront/Exception/BatchTooLargeException.php',
		'Aws\CloudFront\Exception\CloudFrontException' => __DIR__ . '/Aws/CloudFront/Exception/CloudFrontException.php',
		'Aws\CloudFront\Exception\CloudFrontOriginAccessIdentityAlreadyExistsException' => __DIR__ . '/Aws/CloudFront/Exception/CloudFrontOriginAccessIdentityAlreadyExistsException.php',
		'Aws\CloudFront\Exception\CloudFrontOriginAccessIdentityInUseException' => __DIR__ . '/Aws/CloudFront/Exception/CloudFrontOriginAccessIdentityInUseException.php',
		'Aws\CloudFront\Exception\CNAMEAlreadyExistsException' => __DIR__ . '/Aws/CloudFront/Exception/CNAMEAlreadyExistsException.php',
		'Aws\CloudFront\Exception\DistributionAlreadyExistsException' => __DIR__ . '/Aws/CloudFront/Exception/DistributionAlreadyExistsException.php',
		'Aws\CloudFront\Exception\DistributionNotDisabledException' => __DIR__ . '/Aws/CloudFront/Exception/DistributionNotDisabledException.php',
		'Aws\CloudFront\Exception\Exception' => __DIR__ . '/Aws/CloudFront/Exception/Exception.php',
		'Aws\CloudFront\Exception\IllegalUpdateException' => __DIR__ . '/Aws/CloudFront/Exception/IllegalUpdateException.php',
		'Aws\CloudFront\Exception\InconsistentQuantitiesException' => __DIR__ . '/Aws/CloudFront/Exception/InconsistentQuantitiesException.php',
		'Aws\CloudFront\Exception\InvalidArgumentException' => __DIR__ . '/Aws/CloudFront/Exception/InvalidArgumentException.php',
		'Aws\CloudFront\Exception\InvalidDefaultRootObjectException' => __DIR__ . '/Aws/CloudFront/Exception/InvalidDefaultRootObjectException.php',
		'Aws\CloudFront\Exception\InvalidErrorCodeException' => __DIR__ . '/Aws/CloudFront/Exception/InvalidErrorCodeException.php',
		'Aws\CloudFront\Exception\InvalidForwardCookiesException' => __DIR__ . '/Aws/CloudFront/Exception/InvalidForwardCookiesException.php',
		'Aws\CloudFront\Exception\InvalidGeoRestrictionParameterException' => __DIR__ . '/Aws/CloudFront/Exception/InvalidGeoRestrictionParameterException.php',
		'Aws\CloudFront\Exception\InvalidIfMatchVersionException' => __DIR__ . '/Aws/CloudFront/Exception/InvalidIfMatchVersionException.php',
		'Aws\CloudFront\Exception\InvalidLocationCodeException' => __DIR__ . '/Aws/CloudFront/Exception/InvalidLocationCodeException.php',
		'Aws\CloudFront\Exception\InvalidOriginAccessIdentityException' => __DIR__ . '/Aws/CloudFront/Exception/InvalidOriginAccessIdentityException.php',
		'Aws\CloudFront\Exception\InvalidOriginException' => __DIR__ . '/Aws/CloudFront/Exception/InvalidOriginException.php',
		'Aws\CloudFront\Exception\InvalidRelativePathException' => __DIR__ . '/Aws/CloudFront/Exception/InvalidRelativePathException.php',
		'Aws\CloudFront\Exception\InvalidRequiredProtocolException' => __DIR__ . '/Aws/CloudFront/Exception/InvalidRequiredProtocolException.php',
		'Aws\CloudFront\Exception\InvalidResponseCodeException' => __DIR__ . '/Aws/CloudFront/Exception/InvalidResponseCodeException.php',
		'Aws\CloudFront\Exception\InvalidViewerCertificateException' => __DIR__ . '/Aws/CloudFront/Exception/InvalidViewerCertificateException.php',
		'Aws\CloudFront\Exception\MissingBodyException' => __DIR__ . '/Aws/CloudFront/Exception/MissingBodyException.php',
		'Aws\CloudFront\Exception\NoSuchCloudFrontOriginAccessIdentityException' => __DIR__ . '/Aws/CloudFront/Exception/NoSuchCloudFrontOriginAccessIdentityException.php',
		'Aws\CloudFront\Exception\NoSuchDistributionException' => __DIR__ . '/Aws/CloudFront/Exception/NoSuchDistributionException.php',
		'Aws\CloudFront\Exception\NoSuchInvalidationException' => __DIR__ . '/Aws/CloudFront/Exception/NoSuchInvalidationException.php',
		'Aws\CloudFront\Exception\NoSuchOriginException' => __DIR__ . '/Aws/CloudFront/Exception/NoSuchOriginException.php',
		'Aws\CloudFront\Exception\NoSuchStreamingDistributionException' => __DIR__ . '/Aws/CloudFront/Exception/NoSuchStreamingDistributionException.php',
		'Aws\CloudFront\Exception\PreconditionFailedException' => __DIR__ . '/Aws/CloudFront/Exception/PreconditionFailedException.php',
		'Aws\CloudFront\Exception\StreamingDistributionAlreadyExistsException' => __DIR__ . '/Aws/CloudFront/Exception/StreamingDistributionAlreadyExistsException.php',
		'Aws\CloudFront\Exception\StreamingDistributionNotDisabledException' => __DIR__ . '/Aws/CloudFront/Exception/StreamingDistributionNotDisabledException.php',
		'Aws\CloudFront\Exception\TooManyCacheBehaviorsException' => __DIR__ . '/Aws/CloudFront/Exception/TooManyCacheBehaviorsException.php',
		'Aws\CloudFront\Exception\TooManyCertificatesException' => __DIR__ . '/Aws/CloudFront/Exception/TooManyCertificatesException.php',
		'Aws\CloudFront\Exception\TooManyCloudFrontOriginAccessIdentitiesException' => __DIR__ . '/Aws/CloudFront/Exception/TooManyCloudFrontOriginAccessIdentitiesException.php',
		'Aws\CloudFront\Exception\TooManyCookieNamesInWhiteListException' => __DIR__ . '/Aws/CloudFront/Exception/TooManyCookieNamesInWhiteListException.php',
		'Aws\CloudFront\Exception\TooManyDistributionCNAMEsException' => __DIR__ . '/Aws/CloudFront/Exception/TooManyDistributionCNAMEsException.php',
		'Aws\CloudFront\Exception\TooManyDistributionsException' => __DIR__ . '/Aws/CloudFront/Exception/TooManyDistributionsException.php',
		'Aws\CloudFront\Exception\TooManyInvalidationsInProgressException' => __DIR__ . '/Aws/CloudFront/Exception/TooManyInvalidationsInProgressException.php',
		'Aws\CloudFront\Exception\TooManyOriginsException' => __DIR__ . '/Aws/CloudFront/Exception/TooManyOriginsException.php',
		'Aws\CloudFront\Exception\TooManyStreamingDistributionCNAMEsException' => __DIR__ . '/Aws/CloudFront/Exception/TooManyStreamingDistributionCNAMEsException.php',
		'Aws\CloudFront\Exception\TooManyStreamingDistributionsException' => __DIR__ . '/Aws/CloudFront/Exception/TooManyStreamingDistributionsException.php',
		'Aws\CloudFront\Exception\TooManyTrustedSignersException' => __DIR__ . '/Aws/CloudFront/Exception/TooManyTrustedSignersException.php',
		'Aws\CloudFront\Exception\TrustedSignerDoesNotExistException' => __DIR__ . '/Aws/CloudFront/Exception/TrustedSignerDoesNotExistException.php',
		'Aws\CloudFront\Resources\cloudfront-2012-05-05' => __DIR__ . '/Aws/CloudFront/Resources/cloudfront-2012-05-05.php',
		'Aws\CloudFront\Resources\cloudfront-2015-04-17' => __DIR__ . '/Aws/CloudFront/Resources/cloudfront-2015-04-17.php',
		'Aws\CloudFront\Resources\cloudfront-2015-07-27' => __DIR__ . '/Aws/CloudFront/Resources/cloudfront-2015-07-27.php',
		'Aws\CloudHsm\CloudHsmClient' => __DIR__ . '/Aws/CloudHsm/CloudHsmClient.php',
		'Aws\CloudHsm\Exception\CloudHsmException' => __DIR__ . '/Aws/CloudHsm/Exception/CloudHsmException.php',
		'Aws\CloudHsm\Resources\cloudhsm-2014-05-30' => __DIR__ . '/Aws/CloudHsm/Resources/cloudhsm-2014-05-30.php',
		'Aws\CloudSearch\CloudSearchClient' => __DIR__ . '/Aws/CloudSearch/CloudSearchClient.php',
		'Aws\CloudSearch\Enum\IndexFieldType' => __DIR__ . '/Aws/CloudSearch/Enum/IndexFieldType.php',
		'Aws\CloudSearch\Enum\OptionState' => __DIR__ . '/Aws/CloudSearch/Enum/OptionState.php',
		'Aws\CloudSearch\Enum\SearchInstanceType' => __DIR__ . '/Aws/CloudSearch/Enum/SearchInstanceType.php',
		'Aws\CloudSearch\Enum\SourceDataFunction' => __DIR__ . '/Aws/CloudSearch/Enum/SourceDataFunction.php',
		'Aws\CloudSearch\Exception\BaseException' => __DIR__ . '/Aws/CloudSearch/Exception/BaseException.php',
		'Aws\CloudSearch\Exception\CloudSearchException' => __DIR__ . '/Aws/CloudSearch/Exception/CloudSearchException.php',
		'Aws\CloudSearch\Exception\InternalException' => __DIR__ . '/Aws/CloudSearch/Exception/InternalException.php',
		'Aws\CloudSearch\Exception\InvalidTypeException' => __DIR__ . '/Aws/CloudSearch/Exception/InvalidTypeException.php',
		'Aws\CloudSearch\Exception\LimitExceededException' => __DIR__ . '/Aws/CloudSearch/Exception/LimitExceededException.php',
		'Aws\CloudSearch\Exception\ResourceNotFoundException' => __DIR__ . '/Aws/CloudSearch/Exception/ResourceNotFoundException.php',
		'Aws\CloudSearch\Resources\cloudsearch-2011-02-01' => __DIR__ . '/Aws/CloudSearch/Resources/cloudsearch-2011-02-01.php',
		'Aws\CloudSearch\Resources\cloudsearch-2013-01-01' => __DIR__ . '/Aws/CloudSearch/Resources/cloudsearch-2013-01-01.php',
		'Aws\CloudSearchDomain\CloudSearchDomainClient' => __DIR__ . '/Aws/CloudSearchDomain/CloudSearchDomainClient.php',
		'Aws\CloudSearchDomain\CloudSearchDomainClientBuilder' => __DIR__ . '/Aws/CloudSearchDomain/CloudSearchDomainClientBuilder.php',
		'Aws\CloudSearchDomain\Exception\CloudSearchDomainException' => __DIR__ . '/Aws/CloudSearchDomain/Exception/CloudSearchDomainException.php',
		'Aws\CloudSearchDomain\Resources\cloudsearchdomain-2013-01-01' => __DIR__ . '/Aws/CloudSearchDomain/Resources/cloudsearchdomain-2013-01-01.php',
		'Aws\CloudTrail\CloudTrailClient' => __DIR__ . '/Aws/CloudTrail/CloudTrailClient.php',
		'Aws\CloudTrail\Exception\CloudTrailException' => __DIR__ . '/Aws/CloudTrail/Exception/CloudTrailException.php',
		'Aws\CloudTrail\Exception\InsufficientS3BucketPolicyException' => __DIR__ . '/Aws/CloudTrail/Exception/InsufficientS3BucketPolicyException.php',
		'Aws\CloudTrail\Exception\InsufficientSnsTopicPolicyException' => __DIR__ . '/Aws/CloudTrail/Exception/InsufficientSnsTopicPolicyException.php',
		'Aws\CloudTrail\Exception\InternalErrorException' => __DIR__ . '/Aws/CloudTrail/Exception/InternalErrorException.php',
		'Aws\CloudTrail\Exception\InvalidS3BucketNameException' => __DIR__ . '/Aws/CloudTrail/Exception/InvalidS3BucketNameException.php',
		'Aws\CloudTrail\Exception\InvalidS3PrefixException' => __DIR__ . '/Aws/CloudTrail/Exception/InvalidS3PrefixException.php',
		'Aws\CloudTrail\Exception\InvalidSnsTopicNameException' => __DIR__ . '/Aws/CloudTrail/Exception/InvalidSnsTopicNameException.php',
		'Aws\CloudTrail\Exception\InvalidTrailNameException' => __DIR__ . '/Aws/CloudTrail/Exception/InvalidTrailNameException.php',
		'Aws\CloudTrail\Exception\MaximumNumberOfTrailsExceededException' => __DIR__ . '/Aws/CloudTrail/Exception/MaximumNumberOfTrailsExceededException.php',
		'Aws\CloudTrail\Exception\S3BucketDoesNotExistException' => __DIR__ . '/Aws/CloudTrail/Exception/S3BucketDoesNotExistException.php',
		'Aws\CloudTrail\Exception\TrailAlreadyExistsException' => __DIR__ . '/Aws/CloudTrail/Exception/TrailAlreadyExistsException.php',
		'Aws\CloudTrail\Exception\TrailNotFoundException' => __DIR__ . '/Aws/CloudTrail/Exception/TrailNotFoundException.php',
		'Aws\CloudTrail\Exception\TrailNotProvidedException' => __DIR__ . '/Aws/CloudTrail/Exception/TrailNotProvidedException.php',
		'Aws\CloudTrail\LogFileIterator' => __DIR__ . '/Aws/CloudTrail/LogFileIterator.php',
		'Aws\CloudTrail\LogFileReader' => __DIR__ . '/Aws/CloudTrail/LogFileReader.php',
		'Aws\CloudTrail\LogRecordIterator' => __DIR__ . '/Aws/CloudTrail/LogRecordIterator.php',
		'Aws\CloudTrail\Resources\cloudtrail-2013-11-01' => __DIR__ . '/Aws/CloudTrail/Resources/cloudtrail-2013-11-01.php',
		'Aws\CloudWatch\CloudWatchClient' => __DIR__ . '/Aws/CloudWatch/CloudWatchClient.php',
		'Aws\CloudWatch\Enum\ComparisonOperator' => __DIR__ . '/Aws/CloudWatch/Enum/ComparisonOperator.php',
		'Aws\CloudWatch\Enum\HistoryItemType' => __DIR__ . '/Aws/CloudWatch/Enum/HistoryItemType.php',
		'Aws\CloudWatch\Enum\StateValue' => __DIR__ . '/Aws/CloudWatch/Enum/StateValue.php',
		'Aws\CloudWatch\Enum\Statistic' => __DIR__ . '/Aws/CloudWatch/Enum/Statistic.php',
		'Aws\CloudWatch\Enum\Unit' => __DIR__ . '/Aws/CloudWatch/Enum/Unit.php',
		'Aws\CloudWatch\Exception\CloudWatchException' => __DIR__ . '/Aws/CloudWatch/Exception/CloudWatchException.php',
		'Aws\CloudWatch\Exception\InternalServiceException' => __DIR__ . '/Aws/CloudWatch/Exception/InternalServiceException.php',
		'Aws\CloudWatch\Exception\InvalidFormatException' => __DIR__ . '/Aws/CloudWatch/Exception/InvalidFormatException.php',
		'Aws\CloudWatch\Exception\InvalidNextTokenException' => __DIR__ . '/Aws/CloudWatch/Exception/InvalidNextTokenException.php',
		'Aws\CloudWatch\Exception\InvalidParameterCombinationException' => __DIR__ . '/Aws/CloudWatch/Exception/InvalidParameterCombinationException.php',
		'Aws\CloudWatch\Exception\InvalidParameterValueException' => __DIR__ . '/Aws/CloudWatch/Exception/InvalidParameterValueException.php',
		'Aws\CloudWatch\Exception\LimitExceededException' => __DIR__ . '/Aws/CloudWatch/Exception/LimitExceededException.php',
		'Aws\CloudWatch\Exception\MissingRequiredParameterException' => __DIR__ . '/Aws/CloudWatch/Exception/MissingRequiredParameterException.php',
		'Aws\CloudWatch\Exception\ResourceNotFoundException' => __DIR__ . '/Aws/CloudWatch/Exception/ResourceNotFoundException.php',
		'Aws\CloudWatch\Resources\cloudwatch-2010-08-01' => __DIR__ . '/Aws/CloudWatch/Resources/cloudwatch-2010-08-01.php',
		'Aws\CloudWatchLogs\CloudWatchLogsClient' => __DIR__ . '/Aws/CloudWatchLogs/CloudWatchLogsClient.php',
		'Aws\CloudWatchLogs\Exception\CloudWatchLogsException' => __DIR__ . '/Aws/CloudWatchLogs/Exception/CloudWatchLogsException.php',
		'Aws\CloudWatchLogs\Resources\cloudwatchlogs-2014-03-28' => __DIR__ . '/Aws/CloudWatchLogs/Resources/cloudwatchlogs-2014-03-28.php',
		'Aws\CodeCommit\CodeCommitClient' => __DIR__ . '/Aws/CodeCommit/CodeCommitClient.php',
		'Aws\CodeCommit\Exception\CodeCommitException' => __DIR__ . '/Aws/CodeCommit/Exception/CodeCommitException.php',
		'Aws\CodeCommit\Resources\codecommit-2015-04-13' => __DIR__ . '/Aws/CodeCommit/Resources/codecommit-2015-04-13.php',
		'Aws\CodeDeploy\CodeDeployClient' => __DIR__ . '/Aws/CodeDeploy/CodeDeployClient.php',
		'Aws\CodeDeploy\Exception\CodeDeployException' => __DIR__ . '/Aws/CodeDeploy/Exception/CodeDeployException.php',
		'Aws\CodeDeploy\Resources\codedeploy-2014-10-06' => __DIR__ . '/Aws/CodeDeploy/Resources/codedeploy-2014-10-06.php',
		'Aws\CodePipeline\CodePipelineClient' => __DIR__ . '/Aws/CodePipeline/CodePipelineClient.php',
		'Aws\CodePipeline\Exception\CodePipelineException' => __DIR__ . '/Aws/CodePipeline/Exception/CodePipelineException.php',
		'Aws\CodePipeline\Resources\codepipeline-2015-07-09' => __DIR__ . '/Aws/CodePipeline/Resources/codepipeline-2015-07-09.php',
		'Aws\CognitoIdentity\CognitoIdentityClient' => __DIR__ . '/Aws/CognitoIdentity/CognitoIdentityClient.php',
		'Aws\CognitoIdentity\Exception\CognitoIdentityException' => __DIR__ . '/Aws/CognitoIdentity/Exception/CognitoIdentityException.php',
		'Aws\CognitoIdentity\Resources\cognitoidentity-2014-06-30' => __DIR__ . '/Aws/CognitoIdentity/Resources/cognitoidentity-2014-06-30.php',
		'Aws\CognitoSync\CognitoSyncClient' => __DIR__ . '/Aws/CognitoSync/CognitoSyncClient.php',
		'Aws\CognitoSync\Exception\CognitoSyncException' => __DIR__ . '/Aws/CognitoSync/Exception/CognitoSyncException.php',
		'Aws\CognitoSync\Resources\cognitosync-2014-06-30' => __DIR__ . '/Aws/CognitoSync/Resources/cognitosync-2014-06-30.php',
		'Aws\Common\Aws' => __DIR__ . '/Aws/Common/Aws.php',
		'Aws\Common\Client\AbstractClient' => __DIR__ . '/Aws/Common/Client/AbstractClient.php',
		'Aws\Common\Client\AwsClientInterface' => __DIR__ . '/Aws/Common/Client/AwsClientInterface.php',
		'Aws\Common\Client\ClientBuilder' => __DIR__ . '/Aws/Common/Client/ClientBuilder.php',
		'Aws\Common\Client\DefaultClient' => __DIR__ . '/Aws/Common/Client/DefaultClient.php',
		'Aws\Common\Client\ExpiredCredentialsChecker' => __DIR__ . '/Aws/Common/Client/ExpiredCredentialsChecker.php',
		'Aws\Common\Client\ThrottlingErrorChecker' => __DIR__ . '/Aws/Common/Client/ThrottlingErrorChecker.php',
		'Aws\Common\Client\UploadBodyListener' => __DIR__ . '/Aws/Common/Client/UploadBodyListener.php',
		'Aws\Common\Client\UserAgentListener' => __DIR__ . '/Aws/Common/Client/UserAgentListener.php',
		'Aws\Common\Command\AwsQueryVisitor' => __DIR__ . '/Aws/Common/Command/AwsQueryVisitor.php',
		'Aws\Common\Command\JsonCommand' => __DIR__ . '/Aws/Common/Command/JsonCommand.php',
		'Aws\Common\Command\QueryCommand' => __DIR__ . '/Aws/Common/Command/QueryCommand.php',
		'Aws\Common\Command\XmlResponseLocationVisitor' => __DIR__ . '/Aws/Common/Command/XmlResponseLocationVisitor.php',
		'Aws\Common\Credentials\AbstractCredentialsDecorator' => __DIR__ . '/Aws/Common/Credentials/AbstractCredentialsDecorator.php',
		'Aws\Common\Credentials\AbstractRefreshableCredentials' => __DIR__ . '/Aws/Common/Credentials/AbstractRefreshableCredentials.php',
		'Aws\Common\Credentials\CacheableCredentials' => __DIR__ . '/Aws/Common/Credentials/CacheableCredentials.php',
		'Aws\Common\Credentials\Credentials' => __DIR__ . '/Aws/Common/Credentials/Credentials.php',
		'Aws\Common\Credentials\CredentialsInterface' => __DIR__ . '/Aws/Common/Credentials/CredentialsInterface.php',
		'Aws\Common\Credentials\NullCredentials' => __DIR__ . '/Aws/Common/Credentials/NullCredentials.php',
		'Aws\Common\Credentials\RefreshableInstanceProfileCredentials' => __DIR__ . '/Aws/Common/Credentials/RefreshableInstanceProfileCredentials.php',
		'Aws\Common\Enum\ClientOptions' => __DIR__ . '/Aws/Common/Enum/ClientOptions.php',
		'Aws\Common\Enum\DateFormat' => __DIR__ . '/Aws/Common/Enum/DateFormat.php',
		'Aws\Common\Enum\Region' => __DIR__ . '/Aws/Common/Enum/Region.php',
		'Aws\Common\Enum\Size' => __DIR__ . '/Aws/Common/Enum/Size.php',
		'Aws\Common\Enum\Time' => __DIR__ . '/Aws/Common/Enum/Time.php',
		'Aws\Common\Enum\UaString' => __DIR__ . '/Aws/Common/Enum/UaString.php',
		'Aws\Common\Enum' => __DIR__ . '/Aws/Common/Enum.php',
		'Aws\Common\Exception\AwsExceptionInterface' => __DIR__ . '/Aws/Common/Exception/AwsExceptionInterface.php',
		'Aws\Common\Exception\BadMethodCallException' => __DIR__ . '/Aws/Common/Exception/BadMethodCallException.php',
		'Aws\Common\Exception\DomainException' => __DIR__ . '/Aws/Common/Exception/DomainException.php',
		'Aws\Common\Exception\ExceptionFactoryInterface' => __DIR__ . '/Aws/Common/Exception/ExceptionFactoryInterface.php',
		'Aws\Common\Exception\ExceptionListener' => __DIR__ . '/Aws/Common/Exception/ExceptionListener.php',
		'Aws\Common\Exception\InstanceProfileCredentialsException' => __DIR__ . '/Aws/Common/Exception/InstanceProfileCredentialsException.php',
		'Aws\Common\Exception\InvalidArgumentException' => __DIR__ . '/Aws/Common/Exception/InvalidArgumentException.php',
		'Aws\Common\Exception\LogicException' => __DIR__ . '/Aws/Common/Exception/LogicException.php',
		'Aws\Common\Exception\MultipartUploadException' => __DIR__ . '/Aws/Common/Exception/MultipartUploadException.php',
		'Aws\Common\Exception\NamespaceExceptionFactory' => __DIR__ . '/Aws/Common/Exception/NamespaceExceptionFactory.php',
		'Aws\Common\Exception\OutOfBoundsException' => __DIR__ . '/Aws/Common/Exception/OutOfBoundsException.php',
		'Aws\Common\Exception\OverflowException' => __DIR__ . '/Aws/Common/Exception/OverflowException.php',
		'Aws\Common\Exception\Parser\AbstractJsonExceptionParser' => __DIR__ . '/Aws/Common/Exception/Parser/AbstractJsonExceptionParser.php',
		'Aws\Common\Exception\Parser\DefaultXmlExceptionParser' => __DIR__ . '/Aws/Common/Exception/Parser/DefaultXmlExceptionParser.php',
		'Aws\Common\Exception\Parser\ExceptionParserInterface' => __DIR__ . '/Aws/Common/Exception/Parser/ExceptionParserInterface.php',
		'Aws\Common\Exception\Parser\JsonQueryExceptionParser' => __DIR__ . '/Aws/Common/Exception/Parser/JsonQueryExceptionParser.php',
		'Aws\Common\Exception\Parser\JsonRestExceptionParser' => __DIR__ . '/Aws/Common/Exception/Parser/JsonRestExceptionParser.php',
		'Aws\Common\Exception\RequiredExtensionNotLoadedException' => __DIR__ . '/Aws/Common/Exception/RequiredExtensionNotLoadedException.php',
		'Aws\Common\Exception\RuntimeException' => __DIR__ . '/Aws/Common/Exception/RuntimeException.php',
		'Aws\Common\Exception\ServiceResponseException' => __DIR__ . '/Aws/Common/Exception/ServiceResponseException.php',
		'Aws\Common\Exception\TransferException' => __DIR__ . '/Aws/Common/Exception/TransferException.php',
		'Aws\Common\Exception\UnexpectedValueException' => __DIR__ . '/Aws/Common/Exception/UnexpectedValueException.php',
		'Aws\Common\Facade\facade-classes' => __DIR__ . '/Aws/Common/Facade/facade-classes.php',
		'Aws\Common\Facade\Facade' => __DIR__ . '/Aws/Common/Facade/Facade.php',
		'Aws\Common\Facade\FacadeInterface' => __DIR__ . '/Aws/Common/Facade/FacadeInterface.php',
		'Aws\Common\Hash\ChunkHash' => __DIR__ . '/Aws/Common/Hash/ChunkHash.php',
		'Aws\Common\Hash\ChunkHashInterface' => __DIR__ . '/Aws/Common/Hash/ChunkHashInterface.php',
		'Aws\Common\Hash\HashUtils' => __DIR__ . '/Aws/Common/Hash/HashUtils.php',
		'Aws\Common\Hash\TreeHash' => __DIR__ . '/Aws/Common/Hash/TreeHash.php',
		'Aws\Common\HostNameUtils' => __DIR__ . '/Aws/Common/HostNameUtils.php',
		'Aws\Common\InstanceMetadata\InstanceMetadataClient' => __DIR__ . '/Aws/Common/InstanceMetadata/InstanceMetadataClient.php',
		'Aws\Common\InstanceMetadata\Waiter\ServiceAvailable' => __DIR__ . '/Aws/Common/InstanceMetadata/Waiter/ServiceAvailable.php',
		'Aws\Common\Iterator\AwsResourceIterator' => __DIR__ . '/Aws/Common/Iterator/AwsResourceIterator.php',
		'Aws\Common\Iterator\AwsResourceIteratorFactory' => __DIR__ . '/Aws/Common/Iterator/AwsResourceIteratorFactory.php',
		'Aws\Common\Model\MultipartUpload\AbstractTransfer' => __DIR__ . '/Aws/Common/Model/MultipartUpload/AbstractTransfer.php',
		'Aws\Common\Model\MultipartUpload\AbstractTransferState' => __DIR__ . '/Aws/Common/Model/MultipartUpload/AbstractTransferState.php',
		'Aws\Common\Model\MultipartUpload\AbstractUploadBuilder' => __DIR__ . '/Aws/Common/Model/MultipartUpload/AbstractUploadBuilder.php',
		'Aws\Common\Model\MultipartUpload\AbstractUploadId' => __DIR__ . '/Aws/Common/Model/MultipartUpload/AbstractUploadId.php',
		'Aws\Common\Model\MultipartUpload\AbstractUploadPart' => __DIR__ . '/Aws/Common/Model/MultipartUpload/AbstractUploadPart.php',
		'Aws\Common\Model\MultipartUpload\TransferInterface' => __DIR__ . '/Aws/Common/Model/MultipartUpload/TransferInterface.php',
		'Aws\Common\Model\MultipartUpload\TransferStateInterface' => __DIR__ . '/Aws/Common/Model/MultipartUpload/TransferStateInterface.php',
		'Aws\Common\Model\MultipartUpload\UploadIdInterface' => __DIR__ . '/Aws/Common/Model/MultipartUpload/UploadIdInterface.php',
		'Aws\Common\Model\MultipartUpload\UploadPartInterface' => __DIR__ . '/Aws/Common/Model/MultipartUpload/UploadPartInterface.php',
		'Aws\Common\Resources\aws-config' => __DIR__ . '/Aws/Common/Resources/aws-config.php',
		'Aws\Common\Resources\public-endpoints' => __DIR__ . '/Aws/Common/Resources/public-endpoints.php',
		'Aws\Common\Resources\sdk1-config' => __DIR__ . '/Aws/Common/Resources/sdk1-config.php',
		'Aws\Common\RulesEndpointProvider' => __DIR__ . '/Aws/Common/RulesEndpointProvider.php',
		'Aws\Common\Signature\AbstractSignature' => __DIR__ . '/Aws/Common/Signature/AbstractSignature.php',
		'Aws\Common\Signature\EndpointSignatureInterface' => __DIR__ . '/Aws/Common/Signature/EndpointSignatureInterface.php',
		'Aws\Common\Signature\SignatureInterface' => __DIR__ . '/Aws/Common/Signature/SignatureInterface.php',
		'Aws\Common\Signature\SignatureListener' => __DIR__ . '/Aws/Common/Signature/SignatureListener.php',
		'Aws\Common\Signature\SignatureV2' => __DIR__ . '/Aws/Common/Signature/SignatureV2.php',
		'Aws\Common\Signature\SignatureV3Https' => __DIR__ . '/Aws/Common/Signature/SignatureV3Https.php',
		'Aws\Common\Signature\SignatureV4' => __DIR__ . '/Aws/Common/Signature/SignatureV4.php',
		'Aws\Common\Waiter\AbstractResourceWaiter' => __DIR__ . '/Aws/Common/Waiter/AbstractResourceWaiter.php',
		'Aws\Common\Waiter\AbstractWaiter' => __DIR__ . '/Aws/Common/Waiter/AbstractWaiter.php',
		'Aws\Common\Waiter\CallableWaiter' => __DIR__ . '/Aws/Common/Waiter/CallableWaiter.php',
		'Aws\Common\Waiter\CompositeWaiterFactory' => __DIR__ . '/Aws/Common/Waiter/CompositeWaiterFactory.php',
		'Aws\Common\Waiter\ConfigResourceWaiter' => __DIR__ . '/Aws/Common/Waiter/ConfigResourceWaiter.php',
		'Aws\Common\Waiter\ResourceWaiterInterface' => __DIR__ . '/Aws/Common/Waiter/ResourceWaiterInterface.php',
		'Aws\Common\Waiter\WaiterClassFactory' => __DIR__ . '/Aws/Common/Waiter/WaiterClassFactory.php',
		'Aws\Common\Waiter\WaiterConfig' => __DIR__ . '/Aws/Common/Waiter/WaiterConfig.php',
		'Aws\Common\Waiter\WaiterConfigFactory' => __DIR__ . '/Aws/Common/Waiter/WaiterConfigFactory.php',
		'Aws\Common\Waiter\WaiterFactoryInterface' => __DIR__ . '/Aws/Common/Waiter/WaiterFactoryInterface.php',
		'Aws\Common\Waiter\WaiterInterface' => __DIR__ . '/Aws/Common/Waiter/WaiterInterface.php',
		'Aws\ConfigService\ConfigServiceClient' => __DIR__ . '/Aws/ConfigService/ConfigServiceClient.php',
		'Aws\ConfigService\Exception\ConfigServiceException' => __DIR__ . '/Aws/ConfigService/Exception/ConfigServiceException.php',
		'Aws\ConfigService\Resources\configservice-2014-11-12' => __DIR__ . '/Aws/ConfigService/Resources/configservice-2014-11-12.php',
		'Aws\DataPipeline\DataPipelineClient' => __DIR__ . '/Aws/DataPipeline/DataPipelineClient.php',
		'Aws\DataPipeline\Enum\WorkStatus' => __DIR__ . '/Aws/DataPipeline/Enum/WorkStatus.php',
		'Aws\DataPipeline\Exception\DataPipelineException' => __DIR__ . '/Aws/DataPipeline/Exception/DataPipelineException.php',
		'Aws\DataPipeline\Exception\InternalServiceErrorException' => __DIR__ . '/Aws/DataPipeline/Exception/InternalServiceErrorException.php',
		'Aws\DataPipeline\Exception\InvalidRequestException' => __DIR__ . '/Aws/DataPipeline/Exception/InvalidRequestException.php',
		'Aws\DataPipeline\Exception\PipelineDeletedException' => __DIR__ . '/Aws/DataPipeline/Exception/PipelineDeletedException.php',
		'Aws\DataPipeline\Exception\PipelineNotFoundException' => __DIR__ . '/Aws/DataPipeline/Exception/PipelineNotFoundException.php',
		'Aws\DataPipeline\Exception\TaskNotFoundException' => __DIR__ . '/Aws/DataPipeline/Exception/TaskNotFoundException.php',
		'Aws\DataPipeline\Resources\datapipeline-2012-10-29' => __DIR__ . '/Aws/DataPipeline/Resources/datapipeline-2012-10-29.php',
		'Aws\DeviceFarm\DeviceFarmClient' => __DIR__ . '/Aws/DeviceFarm/DeviceFarmClient.php',
		'Aws\DeviceFarm\Exception\DeviceFarmException' => __DIR__ . '/Aws/DeviceFarm/Exception/DeviceFarmException.php',
		'Aws\DeviceFarm\Resources\devicefarm-2015-06-23' => __DIR__ . '/Aws/DeviceFarm/Resources/devicefarm-2015-06-23.php',
		'Aws\DirectConnect\DirectConnectClient' => __DIR__ . '/Aws/DirectConnect/DirectConnectClient.php',
		'Aws\DirectConnect\Enum\ConnectionState' => __DIR__ . '/Aws/DirectConnect/Enum/ConnectionState.php',
		'Aws\DirectConnect\Enum\InterconnectState' => __DIR__ . '/Aws/DirectConnect/Enum/InterconnectState.php',
		'Aws\DirectConnect\Enum\StepState' => __DIR__ . '/Aws/DirectConnect/Enum/StepState.php',
		'Aws\DirectConnect\Enum\VirtualInterfaceState' => __DIR__ . '/Aws/DirectConnect/Enum/VirtualInterfaceState.php',
		'Aws\DirectConnect\Exception\DirectConnectClientException' => __DIR__ . '/Aws/DirectConnect/Exception/DirectConnectClientException.php',
		'Aws\DirectConnect\Exception\DirectConnectException' => __DIR__ . '/Aws/DirectConnect/Exception/DirectConnectException.php',
		'Aws\DirectConnect\Exception\DirectConnectServerException' => __DIR__ . '/Aws/DirectConnect/Exception/DirectConnectServerException.php',
		'Aws\DirectConnect\Resources\directconnect-2012-10-25' => __DIR__ . '/Aws/DirectConnect/Resources/directconnect-2012-10-25.php',
		'Aws\DirectoryService\DirectoryServiceClient' => __DIR__ . '/Aws/DirectoryService/DirectoryServiceClient.php',
		'Aws\DirectoryService\Exception\DirectoryServiceException' => __DIR__ . '/Aws/DirectoryService/Exception/DirectoryServiceException.php',
		'Aws\DirectoryService\Resources\directoryservice-2015-04-16' => __DIR__ . '/Aws/DirectoryService/Resources/directoryservice-2015-04-16.php',
		'Aws\DynamoDb\Crc32ErrorChecker' => __DIR__ . '/Aws/DynamoDb/Crc32ErrorChecker.php',
		'Aws\DynamoDb\DynamoDbClient' => __DIR__ . '/Aws/DynamoDb/DynamoDbClient.php',
		'Aws\DynamoDb\DynamoDbCommand' => __DIR__ . '/Aws/DynamoDb/DynamoDbCommand.php',
		'Aws\DynamoDb\Enum\AttributeAction' => __DIR__ . '/Aws/DynamoDb/Enum/AttributeAction.php',
		'Aws\DynamoDb\Enum\AttributeType' => __DIR__ . '/Aws/DynamoDb/Enum/AttributeType.php',
		'Aws\DynamoDb\Enum\ComparisonOperator' => __DIR__ . '/Aws/DynamoDb/Enum/ComparisonOperator.php',
		'Aws\DynamoDb\Enum\IndexStatus' => __DIR__ . '/Aws/DynamoDb/Enum/IndexStatus.php',
		'Aws\DynamoDb\Enum\KeyType' => __DIR__ . '/Aws/DynamoDb/Enum/KeyType.php',
		'Aws\DynamoDb\Enum\ProjectionType' => __DIR__ . '/Aws/DynamoDb/Enum/ProjectionType.php',
		'Aws\DynamoDb\Enum\ReturnConsumedCapacity' => __DIR__ . '/Aws/DynamoDb/Enum/ReturnConsumedCapacity.php',
		'Aws\DynamoDb\Enum\ReturnItemCollectionMetrics' => __DIR__ . '/Aws/DynamoDb/Enum/ReturnItemCollectionMetrics.php',
		'Aws\DynamoDb\Enum\ReturnValue' => __DIR__ . '/Aws/DynamoDb/Enum/ReturnValue.php',
		'Aws\DynamoDb\Enum\ScalarAttributeType' => __DIR__ . '/Aws/DynamoDb/Enum/ScalarAttributeType.php',
		'Aws\DynamoDb\Enum\Select' => __DIR__ . '/Aws/DynamoDb/Enum/Select.php',
		'Aws\DynamoDb\Enum\TableStatus' => __DIR__ . '/Aws/DynamoDb/Enum/TableStatus.php',
		'Aws\DynamoDb\Enum\Type' => __DIR__ . '/Aws/DynamoDb/Enum/Type.php',
		'Aws\DynamoDb\Exception\AccessDeniedException' => __DIR__ . '/Aws/DynamoDb/Exception/AccessDeniedException.php',
		'Aws\DynamoDb\Exception\ConditionalCheckFailedException' => __DIR__ . '/Aws/DynamoDb/Exception/ConditionalCheckFailedException.php',
		'Aws\DynamoDb\Exception\DynamoDbException' => __DIR__ . '/Aws/DynamoDb/Exception/DynamoDbException.php',
		'Aws\DynamoDb\Exception\IncompleteSignatureException' => __DIR__ . '/Aws/DynamoDb/Exception/IncompleteSignatureException.php',
		'Aws\DynamoDb\Exception\InternalFailureException' => __DIR__ . '/Aws/DynamoDb/Exception/InternalFailureException.php',
		'Aws\DynamoDb\Exception\InternalServerErrorException' => __DIR__ . '/Aws/DynamoDb/Exception/InternalServerErrorException.php',
		'Aws\DynamoDb\Exception\ItemCollectionSizeLimitExceededException' => __DIR__ . '/Aws/DynamoDb/Exception/ItemCollectionSizeLimitExceededException.php',
		'Aws\DynamoDb\Exception\LimitExceededException' => __DIR__ . '/Aws/DynamoDb/Exception/LimitExceededException.php',
		'Aws\DynamoDb\Exception\MissingAuthenticationTokenException' => __DIR__ . '/Aws/DynamoDb/Exception/MissingAuthenticationTokenException.php',
		'Aws\DynamoDb\Exception\ProvisionedThroughputExceededException' => __DIR__ . '/Aws/DynamoDb/Exception/ProvisionedThroughputExceededException.php',
		'Aws\DynamoDb\Exception\ResourceInUseException' => __DIR__ . '/Aws/DynamoDb/Exception/ResourceInUseException.php',
		'Aws\DynamoDb\Exception\ResourceNotFoundException' => __DIR__ . '/Aws/DynamoDb/Exception/ResourceNotFoundException.php',
		'Aws\DynamoDb\Exception\ServiceUnavailableException' => __DIR__ . '/Aws/DynamoDb/Exception/ServiceUnavailableException.php',
		'Aws\DynamoDb\Exception\ThrottlingException' => __DIR__ . '/Aws/DynamoDb/Exception/ThrottlingException.php',
		'Aws\DynamoDb\Exception\UnprocessedWriteRequestsException' => __DIR__ . '/Aws/DynamoDb/Exception/UnprocessedWriteRequestsException.php',
		'Aws\DynamoDb\Exception\UnrecognizedClientException' => __DIR__ . '/Aws/DynamoDb/Exception/UnrecognizedClientException.php',
		'Aws\DynamoDb\Exception\ValidationException' => __DIR__ . '/Aws/DynamoDb/Exception/ValidationException.php',
		'Aws\DynamoDb\Iterator\ItemIterator' => __DIR__ . '/Aws/DynamoDb/Iterator/ItemIterator.php',
		'Aws\DynamoDb\Iterator\ScanIterator' => __DIR__ . '/Aws/DynamoDb/Iterator/ScanIterator.php',
		'Aws\DynamoDb\Marshaler' => __DIR__ . '/Aws/DynamoDb/Marshaler.php',
		'Aws\DynamoDb\Model\Attribute' => __DIR__ . '/Aws/DynamoDb/Model/Attribute.php',
		'Aws\DynamoDb\Model\BatchRequest\AbstractWriteRequest' => __DIR__ . '/Aws/DynamoDb/Model/BatchRequest/AbstractWriteRequest.php',
		'Aws\DynamoDb\Model\BatchRequest\DeleteRequest' => __DIR__ . '/Aws/DynamoDb/Model/BatchRequest/DeleteRequest.php',
		'Aws\DynamoDb\Model\BatchRequest\PutRequest' => __DIR__ . '/Aws/DynamoDb/Model/BatchRequest/PutRequest.php',
		'Aws\DynamoDb\Model\BatchRequest\UnprocessedRequest' => __DIR__ . '/Aws/DynamoDb/Model/BatchRequest/UnprocessedRequest.php',
		'Aws\DynamoDb\Model\BatchRequest\WriteRequestBatch' => __DIR__ . '/Aws/DynamoDb/Model/BatchRequest/WriteRequestBatch.php',
		'Aws\DynamoDb\Model\BatchRequest\WriteRequestBatchTransfer' => __DIR__ . '/Aws/DynamoDb/Model/BatchRequest/WriteRequestBatchTransfer.php',
		'Aws\DynamoDb\Model\BatchRequest\WriteRequestInterface' => __DIR__ . '/Aws/DynamoDb/Model/BatchRequest/WriteRequestInterface.php',
		'Aws\DynamoDb\Model\Item' => __DIR__ . '/Aws/DynamoDb/Model/Item.php',
		'Aws\DynamoDb\Resources\dynamodb-2011-12-05' => __DIR__ . '/Aws/DynamoDb/Resources/dynamodb-2011-12-05.php',
		'Aws\DynamoDb\Resources\dynamodb-2012-08-10' => __DIR__ . '/Aws/DynamoDb/Resources/dynamodb-2012-08-10.php',
		'Aws\DynamoDb\Session\LockingStrategy\AbstractLockingStrategy' => __DIR__ . '/Aws/DynamoDb/Session/LockingStrategy/AbstractLockingStrategy.php',
		'Aws\DynamoDb\Session\LockingStrategy\LockingStrategyFactory' => __DIR__ . '/Aws/DynamoDb/Session/LockingStrategy/LockingStrategyFactory.php',
		'Aws\DynamoDb\Session\LockingStrategy\LockingStrategyFactoryInterface' => __DIR__ . '/Aws/DynamoDb/Session/LockingStrategy/LockingStrategyFactoryInterface.php',
		'Aws\DynamoDb\Session\LockingStrategy\LockingStrategyInterface' => __DIR__ . '/Aws/DynamoDb/Session/LockingStrategy/LockingStrategyInterface.php',
		'Aws\DynamoDb\Session\LockingStrategy\NullLockingStrategy' => __DIR__ . '/Aws/DynamoDb/Session/LockingStrategy/NullLockingStrategy.php',
		'Aws\DynamoDb\Session\LockingStrategy\PessimisticLockingStrategy' => __DIR__ . '/Aws/DynamoDb/Session/LockingStrategy/PessimisticLockingStrategy.php',
		'Aws\DynamoDb\Session\SessionHandler' => __DIR__ . '/Aws/DynamoDb/Session/SessionHandler.php',
		'Aws\DynamoDb\Session\SessionHandlerConfig' => __DIR__ . '/Aws/DynamoDb/Session/SessionHandlerConfig.php',
		'Aws\DynamoDb\Session\SessionHandlerInterface' => __DIR__ . '/Aws/DynamoDb/Session/SessionHandlerInterface.php',
		'Aws\DynamoDbStreams\DynamoDbStreamsClient' => __DIR__ . '/Aws/DynamoDbStreams/DynamoDbStreamsClient.php',
		'Aws\DynamoDbStreams\Exception\DynamoDbStreamsException' => __DIR__ . '/Aws/DynamoDbStreams/Exception/DynamoDbStreamsException.php',
		'Aws\DynamoDbStreams\Resources\dynamodbstreams-2012-08-10' => __DIR__ . '/Aws/DynamoDbStreams/Resources/dynamodbstreams-2012-08-10.php',
		'Aws\Ec2\CopySnapshotListener' => __DIR__ . '/Aws/Ec2/CopySnapshotListener.php',
		'Aws\Ec2\Ec2Client' => __DIR__ . '/Aws/Ec2/Ec2Client.php',
		'Aws\Ec2\Enum\ContainerFormat' => __DIR__ . '/Aws/Ec2/Enum/ContainerFormat.php',
		'Aws\Ec2\Enum\DiskImageFormat' => __DIR__ . '/Aws/Ec2/Enum/DiskImageFormat.php',
		'Aws\Ec2\Enum\DomainType' => __DIR__ . '/Aws/Ec2/Enum/DomainType.php',
		'Aws\Ec2\Enum\ExportEnvironment' => __DIR__ . '/Aws/Ec2/Enum/ExportEnvironment.php',
		'Aws\Ec2\Enum\HypervisorType' => __DIR__ . '/Aws/Ec2/Enum/HypervisorType.php',
		'Aws\Ec2\Enum\ImageState' => __DIR__ . '/Aws/Ec2/Enum/ImageState.php',
		'Aws\Ec2\Enum\InstanceAttributeName' => __DIR__ . '/Aws/Ec2/Enum/InstanceAttributeName.php',
		'Aws\Ec2\Enum\InstanceStateName' => __DIR__ . '/Aws/Ec2/Enum/InstanceStateName.php',
		'Aws\Ec2\Enum\InstanceType' => __DIR__ . '/Aws/Ec2/Enum/InstanceType.php',
		'Aws\Ec2\Enum\PlacementGroupState' => __DIR__ . '/Aws/Ec2/Enum/PlacementGroupState.php',
		'Aws\Ec2\Enum\PlacementStrategy' => __DIR__ . '/Aws/Ec2/Enum/PlacementStrategy.php',
		'Aws\Ec2\Enum\ResourceType' => __DIR__ . '/Aws/Ec2/Enum/ResourceType.php',
		'Aws\Ec2\Enum\RouteOrigin' => __DIR__ . '/Aws/Ec2/Enum/RouteOrigin.php',
		'Aws\Ec2\Enum\RuleAction' => __DIR__ . '/Aws/Ec2/Enum/RuleAction.php',
		'Aws\Ec2\Enum\SnapshotAttributeName' => __DIR__ . '/Aws/Ec2/Enum/SnapshotAttributeName.php',
		'Aws\Ec2\Enum\SnapshotState' => __DIR__ . '/Aws/Ec2/Enum/SnapshotState.php',
		'Aws\Ec2\Enum\SpotInstanceType' => __DIR__ . '/Aws/Ec2/Enum/SpotInstanceType.php',
		'Aws\Ec2\Enum\VirtualizationType' => __DIR__ . '/Aws/Ec2/Enum/VirtualizationType.php',
		'Aws\Ec2\Enum\VolumeAttachmentState' => __DIR__ . '/Aws/Ec2/Enum/VolumeAttachmentState.php',
		'Aws\Ec2\Enum\VolumeAttributeName' => __DIR__ . '/Aws/Ec2/Enum/VolumeAttributeName.php',
		'Aws\Ec2\Enum\VolumeState' => __DIR__ . '/Aws/Ec2/Enum/VolumeState.php',
		'Aws\Ec2\Enum\VolumeType' => __DIR__ . '/Aws/Ec2/Enum/VolumeType.php',
		'Aws\Ec2\Enum\VpcAttributeName' => __DIR__ . '/Aws/Ec2/Enum/VpcAttributeName.php',
		'Aws\Ec2\Exception\Ec2Exception' => __DIR__ . '/Aws/Ec2/Exception/Ec2Exception.php',
		'Aws\Ec2\Iterator\DescribeInstancesIterator' => __DIR__ . '/Aws/Ec2/Iterator/DescribeInstancesIterator.php',
		'Aws\Ec2\Resources\ec2-2015-04-15' => __DIR__ . '/Aws/Ec2/Resources/ec2-2015-04-15.php',
		'Aws\Ec2\Resources\ec2-2015-10-01' => __DIR__ . '/Aws/Ec2/Resources/ec2-2015-10-01.php',
		'Aws\Ecs\EcsClient' => __DIR__ . '/Aws/Ecs/EcsClient.php',
		'Aws\Ecs\Exception\EcsException' => __DIR__ . '/Aws/Ecs/Exception/EcsException.php',
		'Aws\Ecs\Resources\ecs-2014-11-13' => __DIR__ . '/Aws/Ecs/Resources/ecs-2014-11-13.php',
		'Aws\Efs\EfsClient' => __DIR__ . '/Aws/Efs/EfsClient.php',
		'Aws\Efs\Exception\EfsException' => __DIR__ . '/Aws/Efs/Exception/EfsException.php',
		'Aws\Efs\Resources\elasticfilesystem-2015-02-01' => __DIR__ . '/Aws/Efs/Resources/elasticfilesystem-2015-02-01.php',
		'Aws\ElastiCache\ElastiCacheClient' => __DIR__ . '/Aws/ElastiCache/ElastiCacheClient.php',
		'Aws\ElastiCache\Enum\SourceType' => __DIR__ . '/Aws/ElastiCache/Enum/SourceType.php',
		'Aws\ElastiCache\Exception\AuthorizationAlreadyExistsException' => __DIR__ . '/Aws/ElastiCache/Exception/AuthorizationAlreadyExistsException.php',
		'Aws\ElastiCache\Exception\AuthorizationNotFoundException' => __DIR__ . '/Aws/ElastiCache/Exception/AuthorizationNotFoundException.php',
		'Aws\ElastiCache\Exception\CacheClusterAlreadyExistsException' => __DIR__ . '/Aws/ElastiCache/Exception/CacheClusterAlreadyExistsException.php',
		'Aws\ElastiCache\Exception\CacheClusterNotFoundException' => __DIR__ . '/Aws/ElastiCache/Exception/CacheClusterNotFoundException.php',
		'Aws\ElastiCache\Exception\CacheParameterGroupAlreadyExistsException' => __DIR__ . '/Aws/ElastiCache/Exception/CacheParameterGroupAlreadyExistsException.php',
		'Aws\ElastiCache\Exception\CacheParameterGroupNotFoundException' => __DIR__ . '/Aws/ElastiCache/Exception/CacheParameterGroupNotFoundException.php',
		'Aws\ElastiCache\Exception\CacheParameterGroupQuotaExceededException' => __DIR__ . '/Aws/ElastiCache/Exception/CacheParameterGroupQuotaExceededException.php',
		'Aws\ElastiCache\Exception\CacheSecurityGroupAlreadyExistsException' => __DIR__ . '/Aws/ElastiCache/Exception/CacheSecurityGroupAlreadyExistsException.php',
		'Aws\ElastiCache\Exception\CacheSecurityGroupNotFoundException' => __DIR__ . '/Aws/ElastiCache/Exception/CacheSecurityGroupNotFoundException.php',
		'Aws\ElastiCache\Exception\CacheSecurityGroupQuotaExceededException' => __DIR__ . '/Aws/ElastiCache/Exception/CacheSecurityGroupQuotaExceededException.php',
		'Aws\ElastiCache\Exception\CacheSubnetGroupAlreadyExistsException' => __DIR__ . '/Aws/ElastiCache/Exception/CacheSubnetGroupAlreadyExistsException.php',
		'Aws\ElastiCache\Exception\CacheSubnetGroupInUseException' => __DIR__ . '/Aws/ElastiCache/Exception/CacheSubnetGroupInUseException.php',
		'Aws\ElastiCache\Exception\CacheSubnetGroupNotFoundException' => __DIR__ . '/Aws/ElastiCache/Exception/CacheSubnetGroupNotFoundException.php',
		'Aws\ElastiCache\Exception\CacheSubnetGroupQuotaExceededException' => __DIR__ . '/Aws/ElastiCache/Exception/CacheSubnetGroupQuotaExceededException.php',
		'Aws\ElastiCache\Exception\CacheSubnetQuotaExceededException' => __DIR__ . '/Aws/ElastiCache/Exception/CacheSubnetQuotaExceededException.php',
		'Aws\ElastiCache\Exception\ClusterQuotaForCustomerExceededException' => __DIR__ . '/Aws/ElastiCache/Exception/ClusterQuotaForCustomerExceededException.php',
		'Aws\ElastiCache\Exception\ElastiCacheException' => __DIR__ . '/Aws/ElastiCache/Exception/ElastiCacheException.php',
		'Aws\ElastiCache\Exception\InsufficientCacheClusterCapacityException' => __DIR__ . '/Aws/ElastiCache/Exception/InsufficientCacheClusterCapacityException.php',
		'Aws\ElastiCache\Exception\InvalidCacheClusterStateException' => __DIR__ . '/Aws/ElastiCache/Exception/InvalidCacheClusterStateException.php',
		'Aws\ElastiCache\Exception\InvalidCacheParameterGroupStateException' => __DIR__ . '/Aws/ElastiCache/Exception/InvalidCacheParameterGroupStateException.php',
		'Aws\ElastiCache\Exception\InvalidCacheSecurityGroupStateException' => __DIR__ . '/Aws/ElastiCache/Exception/InvalidCacheSecurityGroupStateException.php',
		'Aws\ElastiCache\Exception\InvalidParameterCombinationException' => __DIR__ . '/Aws/ElastiCache/Exception/InvalidParameterCombinationException.php',
		'Aws\ElastiCache\Exception\InvalidParameterValueException' => __DIR__ . '/Aws/ElastiCache/Exception/InvalidParameterValueException.php',
		'Aws\ElastiCache\Exception\InvalidReplicationGroupStateException' => __DIR__ . '/Aws/ElastiCache/Exception/InvalidReplicationGroupStateException.php',
		'Aws\ElastiCache\Exception\InvalidSubnetException' => __DIR__ . '/Aws/ElastiCache/Exception/InvalidSubnetException.php',
		'Aws\ElastiCache\Exception\InvalidVPCNetworkStateException' => __DIR__ . '/Aws/ElastiCache/Exception/InvalidVPCNetworkStateException.php',
		'Aws\ElastiCache\Exception\NodeQuotaForClusterExceededException' => __DIR__ . '/Aws/ElastiCache/Exception/NodeQuotaForClusterExceededException.php',
		'Aws\ElastiCache\Exception\NodeQuotaForCustomerExceededException' => __DIR__ . '/Aws/ElastiCache/Exception/NodeQuotaForCustomerExceededException.php',
		'Aws\ElastiCache\Exception\ReplicationGroupAlreadyExistsException' => __DIR__ . '/Aws/ElastiCache/Exception/ReplicationGroupAlreadyExistsException.php',
		'Aws\ElastiCache\Exception\ReplicationGroupNotFoundException' => __DIR__ . '/Aws/ElastiCache/Exception/ReplicationGroupNotFoundException.php',
		'Aws\ElastiCache\Exception\ReservedCacheNodeAlreadyExistsException' => __DIR__ . '/Aws/ElastiCache/Exception/ReservedCacheNodeAlreadyExistsException.php',
		'Aws\ElastiCache\Exception\ReservedCacheNodeNotFoundException' => __DIR__ . '/Aws/ElastiCache/Exception/ReservedCacheNodeNotFoundException.php',
		'Aws\ElastiCache\Exception\ReservedCacheNodeQuotaExceededException' => __DIR__ . '/Aws/ElastiCache/Exception/ReservedCacheNodeQuotaExceededException.php',
		'Aws\ElastiCache\Exception\ReservedCacheNodesOfferingNotFoundException' => __DIR__ . '/Aws/ElastiCache/Exception/ReservedCacheNodesOfferingNotFoundException.php',
		'Aws\ElastiCache\Exception\SubnetInUseException' => __DIR__ . '/Aws/ElastiCache/Exception/SubnetInUseException.php',
		'Aws\ElastiCache\Resources\elasticache-2015-02-02' => __DIR__ . '/Aws/ElastiCache/Resources/elasticache-2015-02-02.php',
		'Aws\ElasticBeanstalk\ElasticBeanstalkClient' => __DIR__ . '/Aws/ElasticBeanstalk/ElasticBeanstalkClient.php',
		'Aws\ElasticBeanstalk\Enum\ConfigurationDeploymentStatus' => __DIR__ . '/Aws/ElasticBeanstalk/Enum/ConfigurationDeploymentStatus.php',
		'Aws\ElasticBeanstalk\Enum\ConfigurationOptionValueType' => __DIR__ . '/Aws/ElasticBeanstalk/Enum/ConfigurationOptionValueType.php',
		'Aws\ElasticBeanstalk\Enum\EnvironmentHealth' => __DIR__ . '/Aws/ElasticBeanstalk/Enum/EnvironmentHealth.php',
		'Aws\ElasticBeanstalk\Enum\EnvironmentInfoType' => __DIR__ . '/Aws/ElasticBeanstalk/Enum/EnvironmentInfoType.php',
		'Aws\ElasticBeanstalk\Enum\EnvironmentStatus' => __DIR__ . '/Aws/ElasticBeanstalk/Enum/EnvironmentStatus.php',
		'Aws\ElasticBeanstalk\Enum\EventSeverity' => __DIR__ . '/Aws/ElasticBeanstalk/Enum/EventSeverity.php',
		'Aws\ElasticBeanstalk\Enum\ValidationSeverity' => __DIR__ . '/Aws/ElasticBeanstalk/Enum/ValidationSeverity.php',
		'Aws\ElasticBeanstalk\Exception\ElasticBeanstalkException' => __DIR__ . '/Aws/ElasticBeanstalk/Exception/ElasticBeanstalkException.php',
		'Aws\ElasticBeanstalk\Exception\InsufficientPrivilegesException' => __DIR__ . '/Aws/ElasticBeanstalk/Exception/InsufficientPrivilegesException.php',
		'Aws\ElasticBeanstalk\Exception\OperationInProgressException' => __DIR__ . '/Aws/ElasticBeanstalk/Exception/OperationInProgressException.php',
		'Aws\ElasticBeanstalk\Exception\S3LocationNotInServiceRegionException' => __DIR__ . '/Aws/ElasticBeanstalk/Exception/S3LocationNotInServiceRegionException.php',
		'Aws\ElasticBeanstalk\Exception\S3SubscriptionRequiredException' => __DIR__ . '/Aws/ElasticBeanstalk/Exception/S3SubscriptionRequiredException.php',
		'Aws\ElasticBeanstalk\Exception\SourceBundleDeletionException' => __DIR__ . '/Aws/ElasticBeanstalk/Exception/SourceBundleDeletionException.php',
		'Aws\ElasticBeanstalk\Exception\TooManyApplicationsException' => __DIR__ . '/Aws/ElasticBeanstalk/Exception/TooManyApplicationsException.php',
		'Aws\ElasticBeanstalk\Exception\TooManyApplicationVersionsException' => __DIR__ . '/Aws/ElasticBeanstalk/Exception/TooManyApplicationVersionsException.php',
		'Aws\ElasticBeanstalk\Exception\TooManyBucketsException' => __DIR__ . '/Aws/ElasticBeanstalk/Exception/TooManyBucketsException.php',
		'Aws\ElasticBeanstalk\Exception\TooManyConfigurationTemplatesException' => __DIR__ . '/Aws/ElasticBeanstalk/Exception/TooManyConfigurationTemplatesException.php',
		'Aws\ElasticBeanstalk\Exception\TooManyEnvironmentsException' => __DIR__ . '/Aws/ElasticBeanstalk/Exception/TooManyEnvironmentsException.php',
		'Aws\ElasticBeanstalk\Resources\elasticbeanstalk-2010-12-01' => __DIR__ . '/Aws/ElasticBeanstalk/Resources/elasticbeanstalk-2010-12-01.php',
		'Aws\ElasticLoadBalancing\ElasticLoadBalancingClient' => __DIR__ . '/Aws/ElasticLoadBalancing/ElasticLoadBalancingClient.php',
		'Aws\ElasticLoadBalancing\Exception\AccessPointNotFoundException' => __DIR__ . '/Aws/ElasticLoadBalancing/Exception/AccessPointNotFoundException.php',
		'Aws\ElasticLoadBalancing\Exception\CertificateNotFoundException' => __DIR__ . '/Aws/ElasticLoadBalancing/Exception/CertificateNotFoundException.php',
		'Aws\ElasticLoadBalancing\Exception\DuplicateAccessPointNameException' => __DIR__ . '/Aws/ElasticLoadBalancing/Exception/DuplicateAccessPointNameException.php',
		'Aws\ElasticLoadBalancing\Exception\DuplicateListenerException' => __DIR__ . '/Aws/ElasticLoadBalancing/Exception/DuplicateListenerException.php',
		'Aws\ElasticLoadBalancing\Exception\DuplicatePolicyNameException' => __DIR__ . '/Aws/ElasticLoadBalancing/Exception/DuplicatePolicyNameException.php',
		'Aws\ElasticLoadBalancing\Exception\ElasticLoadBalancingException' => __DIR__ . '/Aws/ElasticLoadBalancing/Exception/ElasticLoadBalancingException.php',
		'Aws\ElasticLoadBalancing\Exception\InvalidConfigurationRequestException' => __DIR__ . '/Aws/ElasticLoadBalancing/Exception/InvalidConfigurationRequestException.php',
		'Aws\ElasticLoadBalancing\Exception\InvalidEndPointException' => __DIR__ . '/Aws/ElasticLoadBalancing/Exception/InvalidEndPointException.php',
		'Aws\ElasticLoadBalancing\Exception\InvalidSchemeException' => __DIR__ . '/Aws/ElasticLoadBalancing/Exception/InvalidSchemeException.php',
		'Aws\ElasticLoadBalancing\Exception\InvalidSecurityGroupException' => __DIR__ . '/Aws/ElasticLoadBalancing/Exception/InvalidSecurityGroupException.php',
		'Aws\ElasticLoadBalancing\Exception\InvalidSubnetException' => __DIR__ . '/Aws/ElasticLoadBalancing/Exception/InvalidSubnetException.php',
		'Aws\ElasticLoadBalancing\Exception\ListenerNotFoundException' => __DIR__ . '/Aws/ElasticLoadBalancing/Exception/ListenerNotFoundException.php',
		'Aws\ElasticLoadBalancing\Exception\LoadBalancerAttributeNotFoundException' => __DIR__ . '/Aws/ElasticLoadBalancing/Exception/LoadBalancerAttributeNotFoundException.php',
		'Aws\ElasticLoadBalancing\Exception\PolicyNotFoundException' => __DIR__ . '/Aws/ElasticLoadBalancing/Exception/PolicyNotFoundException.php',
		'Aws\ElasticLoadBalancing\Exception\PolicyTypeNotFoundException' => __DIR__ . '/Aws/ElasticLoadBalancing/Exception/PolicyTypeNotFoundException.php',
		'Aws\ElasticLoadBalancing\Exception\SubnetNotFoundException' => __DIR__ . '/Aws/ElasticLoadBalancing/Exception/SubnetNotFoundException.php',
		'Aws\ElasticLoadBalancing\Exception\TooManyAccessPointsException' => __DIR__ . '/Aws/ElasticLoadBalancing/Exception/TooManyAccessPointsException.php',
		'Aws\ElasticLoadBalancing\Exception\TooManyPoliciesException' => __DIR__ . '/Aws/ElasticLoadBalancing/Exception/TooManyPoliciesException.php',
		'Aws\ElasticLoadBalancing\Resources\elasticloadbalancing-2012-06-01' => __DIR__ . '/Aws/ElasticLoadBalancing/Resources/elasticloadbalancing-2012-06-01.php',
		'Aws\ElasticTranscoder\ElasticTranscoderClient' => __DIR__ . '/Aws/ElasticTranscoder/ElasticTranscoderClient.php',
		'Aws\ElasticTranscoder\Exception\AccessDeniedException' => __DIR__ . '/Aws/ElasticTranscoder/Exception/AccessDeniedException.php',
		'Aws\ElasticTranscoder\Exception\ElasticTranscoderException' => __DIR__ . '/Aws/ElasticTranscoder/Exception/ElasticTranscoderException.php',
		'Aws\ElasticTranscoder\Exception\IncompatibleVersionException' => __DIR__ . '/Aws/ElasticTranscoder/Exception/IncompatibleVersionException.php',
		'Aws\ElasticTranscoder\Exception\InternalServiceException' => __DIR__ . '/Aws/ElasticTranscoder/Exception/InternalServiceException.php',
		'Aws\ElasticTranscoder\Exception\LimitExceededException' => __DIR__ . '/Aws/ElasticTranscoder/Exception/LimitExceededException.php',
		'Aws\ElasticTranscoder\Exception\ResourceInUseException' => __DIR__ . '/Aws/ElasticTranscoder/Exception/ResourceInUseException.php',
		'Aws\ElasticTranscoder\Exception\ResourceNotFoundException' => __DIR__ . '/Aws/ElasticTranscoder/Exception/ResourceNotFoundException.php',
		'Aws\ElasticTranscoder\Exception\ValidationException' => __DIR__ . '/Aws/ElasticTranscoder/Exception/ValidationException.php',
		'Aws\ElasticTranscoder\Resources\elastictranscoder-2012-09-25' => __DIR__ . '/Aws/ElasticTranscoder/Resources/elastictranscoder-2012-09-25.php',
		'Aws\Emr\EmrClient' => __DIR__ . '/Aws/Emr/EmrClient.php',
		'Aws\Emr\Enum\ActionOnFailure' => __DIR__ . '/Aws/Emr/Enum/ActionOnFailure.php',
		'Aws\Emr\Enum\ClusterState' => __DIR__ . '/Aws/Emr/Enum/ClusterState.php',
		'Aws\Emr\Enum\ClusterStateChangeReasonCode' => __DIR__ . '/Aws/Emr/Enum/ClusterStateChangeReasonCode.php',
		'Aws\Emr\Enum\InstanceGroupState' => __DIR__ . '/Aws/Emr/Enum/InstanceGroupState.php',
		'Aws\Emr\Enum\InstanceGroupStateChangeReasonCode' => __DIR__ . '/Aws/Emr/Enum/InstanceGroupStateChangeReasonCode.php',
		'Aws\Emr\Enum\InstanceGroupType' => __DIR__ . '/Aws/Emr/Enum/InstanceGroupType.php',
		'Aws\Emr\Enum\InstanceRoleType' => __DIR__ . '/Aws/Emr/Enum/InstanceRoleType.php',
		'Aws\Emr\Enum\InstanceState' => __DIR__ . '/Aws/Emr/Enum/InstanceState.php',
		'Aws\Emr\Enum\InstanceStateChangeReasonCode' => __DIR__ . '/Aws/Emr/Enum/InstanceStateChangeReasonCode.php',
		'Aws\Emr\Enum\JobFlowExecutionState' => __DIR__ . '/Aws/Emr/Enum/JobFlowExecutionState.php',
		'Aws\Emr\Enum\MarketType' => __DIR__ . '/Aws/Emr/Enum/MarketType.php',
		'Aws\Emr\Enum\StepExecutionState' => __DIR__ . '/Aws/Emr/Enum/StepExecutionState.php',
		'Aws\Emr\Enum\StepState' => __DIR__ . '/Aws/Emr/Enum/StepState.php',
		'Aws\Emr\Enum\StepStateChangeReasonCode' => __DIR__ . '/Aws/Emr/Enum/StepStateChangeReasonCode.php',
		'Aws\Emr\Exception\EmrException' => __DIR__ . '/Aws/Emr/Exception/EmrException.php',
		'Aws\Emr\Exception\InternalServerErrorException' => __DIR__ . '/Aws/Emr/Exception/InternalServerErrorException.php',
		'Aws\Emr\Exception\InternalServerException' => __DIR__ . '/Aws/Emr/Exception/InternalServerException.php',
		'Aws\Emr\Exception\InvalidRequestException' => __DIR__ . '/Aws/Emr/Exception/InvalidRequestException.php',
		'Aws\Emr\Resources\emr-2009-03-31' => __DIR__ . '/Aws/Emr/Resources/emr-2009-03-31.php',
		'Aws\Glacier\Enum\Action' => __DIR__ . '/Aws/Glacier/Enum/Action.php',
		'Aws\Glacier\Enum\ActionCode' => __DIR__ . '/Aws/Glacier/Enum/ActionCode.php',
		'Aws\Glacier\Enum\StatusCode' => __DIR__ . '/Aws/Glacier/Enum/StatusCode.php',
		'Aws\Glacier\Exception\GlacierException' => __DIR__ . '/Aws/Glacier/Exception/GlacierException.php',
		'Aws\Glacier\Exception\InvalidParameterValueException' => __DIR__ . '/Aws/Glacier/Exception/InvalidParameterValueException.php',
		'Aws\Glacier\Exception\LimitExceededException' => __DIR__ . '/Aws/Glacier/Exception/LimitExceededException.php',
		'Aws\Glacier\Exception\MissingParameterValueException' => __DIR__ . '/Aws/Glacier/Exception/MissingParameterValueException.php',
		'Aws\Glacier\Exception\RequestTimeoutException' => __DIR__ . '/Aws/Glacier/Exception/RequestTimeoutException.php',
		'Aws\Glacier\Exception\ResourceNotFoundException' => __DIR__ . '/Aws/Glacier/Exception/ResourceNotFoundException.php',
		'Aws\Glacier\Exception\ServiceUnavailableException' => __DIR__ . '/Aws/Glacier/Exception/ServiceUnavailableException.php',
		'Aws\Glacier\GlacierClient' => __DIR__ . '/Aws/Glacier/GlacierClient.php',
		'Aws\Glacier\GlacierUploadListener' => __DIR__ . '/Aws/Glacier/GlacierUploadListener.php',
		'Aws\Glacier\Model\MultipartUpload\AbstractTransfer' => __DIR__ . '/Aws/Glacier/Model/MultipartUpload/AbstractTransfer.php',
		'Aws\Glacier\Model\MultipartUpload\ParallelTransfer' => __DIR__ . '/Aws/Glacier/Model/MultipartUpload/ParallelTransfer.php',
		'Aws\Glacier\Model\MultipartUpload\SerialTransfer' => __DIR__ . '/Aws/Glacier/Model/MultipartUpload/SerialTransfer.php',
		'Aws\Glacier\Model\MultipartUpload\TransferState' => __DIR__ . '/Aws/Glacier/Model/MultipartUpload/TransferState.php',
		'Aws\Glacier\Model\MultipartUpload\UploadBuilder' => __DIR__ . '/Aws/Glacier/Model/MultipartUpload/UploadBuilder.php',
		'Aws\Glacier\Model\MultipartUpload\UploadId' => __DIR__ . '/Aws/Glacier/Model/MultipartUpload/UploadId.php',
		'Aws\Glacier\Model\MultipartUpload\UploadPart' => __DIR__ . '/Aws/Glacier/Model/MultipartUpload/UploadPart.php',
		'Aws\Glacier\Model\MultipartUpload\UploadPartContext' => __DIR__ . '/Aws/Glacier/Model/MultipartUpload/UploadPartContext.php',
		'Aws\Glacier\Model\MultipartUpload\UploadPartGenerator' => __DIR__ . '/Aws/Glacier/Model/MultipartUpload/UploadPartGenerator.php',
		'Aws\Glacier\Resources\glacier-2012-06-01' => __DIR__ . '/Aws/Glacier/Resources/glacier-2012-06-01.php',
		'Aws\Iam\Enum\AssignmentStatusType' => __DIR__ . '/Aws/Iam/Enum/AssignmentStatusType.php',
		'Aws\Iam\Enum\StatusType' => __DIR__ . '/Aws/Iam/Enum/StatusType.php',
		'Aws\Iam\Exception\DeleteConflictException' => __DIR__ . '/Aws/Iam/Exception/DeleteConflictException.php',
		'Aws\Iam\Exception\DuplicateCertificateException' => __DIR__ . '/Aws/Iam/Exception/DuplicateCertificateException.php',
		'Aws\Iam\Exception\EntityAlreadyExistsException' => __DIR__ . '/Aws/Iam/Exception/EntityAlreadyExistsException.php',
		'Aws\Iam\Exception\EntityTemporarilyUnmodifiableException' => __DIR__ . '/Aws/Iam/Exception/EntityTemporarilyUnmodifiableException.php',
		'Aws\Iam\Exception\IamException' => __DIR__ . '/Aws/Iam/Exception/IamException.php',
		'Aws\Iam\Exception\InvalidAuthenticationCodeException' => __DIR__ . '/Aws/Iam/Exception/InvalidAuthenticationCodeException.php',
		'Aws\Iam\Exception\InvalidCertificateException' => __DIR__ . '/Aws/Iam/Exception/InvalidCertificateException.php',
		'Aws\Iam\Exception\InvalidInputException' => __DIR__ . '/Aws/Iam/Exception/InvalidInputException.php',
		'Aws\Iam\Exception\InvalidUserTypeException' => __DIR__ . '/Aws/Iam/Exception/InvalidUserTypeException.php',
		'Aws\Iam\Exception\KeyPairMismatchException' => __DIR__ . '/Aws/Iam/Exception/KeyPairMismatchException.php',
		'Aws\Iam\Exception\LimitExceededException' => __DIR__ . '/Aws/Iam/Exception/LimitExceededException.php',
		'Aws\Iam\Exception\MalformedCertificateException' => __DIR__ . '/Aws/Iam/Exception/MalformedCertificateException.php',
		'Aws\Iam\Exception\MalformedPolicyDocumentException' => __DIR__ . '/Aws/Iam/Exception/MalformedPolicyDocumentException.php',
		'Aws\Iam\Exception\NoSuchEntityException' => __DIR__ . '/Aws/Iam/Exception/NoSuchEntityException.php',
		'Aws\Iam\Exception\PasswordPolicyViolationException' => __DIR__ . '/Aws/Iam/Exception/PasswordPolicyViolationException.php',
		'Aws\Iam\IamClient' => __DIR__ . '/Aws/Iam/IamClient.php',
		'Aws\Iam\Resources\iam-2010-05-08' => __DIR__ . '/Aws/Iam/Resources/iam-2010-05-08.php',
		'Aws\ImportExport\Enum\JobType' => __DIR__ . '/Aws/ImportExport/Enum/JobType.php',
		'Aws\ImportExport\Exception\BucketPermissionException' => __DIR__ . '/Aws/ImportExport/Exception/BucketPermissionException.php',
		'Aws\ImportExport\Exception\CanceledJobIdException' => __DIR__ . '/Aws/ImportExport/Exception/CanceledJobIdException.php',
		'Aws\ImportExport\Exception\ExpiredJobIdException' => __DIR__ . '/Aws/ImportExport/Exception/ExpiredJobIdException.php',
		'Aws\ImportExport\Exception\ImportExportException' => __DIR__ . '/Aws/ImportExport/Exception/ImportExportException.php',
		'Aws\ImportExport\Exception\InvalidAccessKeyIdException' => __DIR__ . '/Aws/ImportExport/Exception/InvalidAccessKeyIdException.php',
		'Aws\ImportExport\Exception\InvalidAddressException' => __DIR__ . '/Aws/ImportExport/Exception/InvalidAddressException.php',
		'Aws\ImportExport\Exception\InvalidCustomsException' => __DIR__ . '/Aws/ImportExport/Exception/InvalidCustomsException.php',
		'Aws\ImportExport\Exception\InvalidFileSystemException' => __DIR__ . '/Aws/ImportExport/Exception/InvalidFileSystemException.php',
		'Aws\ImportExport\Exception\InvalidJobIdException' => __DIR__ . '/Aws/ImportExport/Exception/InvalidJobIdException.php',
		'Aws\ImportExport\Exception\InvalidManifestFieldException' => __DIR__ . '/Aws/ImportExport/Exception/InvalidManifestFieldException.php',
		'Aws\ImportExport\Exception\InvalidParameterException' => __DIR__ . '/Aws/ImportExport/Exception/InvalidParameterException.php',
		'Aws\ImportExport\Exception\MalformedManifestException' => __DIR__ . '/Aws/ImportExport/Exception/MalformedManifestException.php',
		'Aws\ImportExport\Exception\MissingCustomsException' => __DIR__ . '/Aws/ImportExport/Exception/MissingCustomsException.php',
		'Aws\ImportExport\Exception\MissingManifestFieldException' => __DIR__ . '/Aws/ImportExport/Exception/MissingManifestFieldException.php',
		'Aws\ImportExport\Exception\MissingParameterException' => __DIR__ . '/Aws/ImportExport/Exception/MissingParameterException.php',
		'Aws\ImportExport\Exception\MultipleRegionsException' => __DIR__ . '/Aws/ImportExport/Exception/MultipleRegionsException.php',
		'Aws\ImportExport\Exception\NoSuchBucketException' => __DIR__ . '/Aws/ImportExport/Exception/NoSuchBucketException.php',
		'Aws\ImportExport\Exception\UnableToCancelJobIdException' => __DIR__ . '/Aws/ImportExport/Exception/UnableToCancelJobIdException.php',
		'Aws\ImportExport\ImportExportClient' => __DIR__ . '/Aws/ImportExport/ImportExportClient.php',
		'Aws\ImportExport\JobManifestListener' => __DIR__ . '/Aws/ImportExport/JobManifestListener.php',
		'Aws\ImportExport\Resources\importexport-2010-06-01' => __DIR__ . '/Aws/ImportExport/Resources/importexport-2010-06-01.php',
		'Aws\Kinesis\Enum\ShardIteratorType' => __DIR__ . '/Aws/Kinesis/Enum/ShardIteratorType.php',
		'Aws\Kinesis\Enum\StreamStatus' => __DIR__ . '/Aws/Kinesis/Enum/StreamStatus.php',
		'Aws\Kinesis\Exception\ExpiredIteratorException' => __DIR__ . '/Aws/Kinesis/Exception/ExpiredIteratorException.php',
		'Aws\Kinesis\Exception\InvalidArgumentException' => __DIR__ . '/Aws/Kinesis/Exception/InvalidArgumentException.php',
		'Aws\Kinesis\Exception\KinesisException' => __DIR__ . '/Aws/Kinesis/Exception/KinesisException.php',
		'Aws\Kinesis\Exception\LimitExceededException' => __DIR__ . '/Aws/Kinesis/Exception/LimitExceededException.php',
		'Aws\Kinesis\Exception\ProvisionedThroughputExceededException' => __DIR__ . '/Aws/Kinesis/Exception/ProvisionedThroughputExceededException.php',
		'Aws\Kinesis\Exception\ResourceInUseException' => __DIR__ . '/Aws/Kinesis/Exception/ResourceInUseException.php',
		'Aws\Kinesis\Exception\ResourceNotFoundException' => __DIR__ . '/Aws/Kinesis/Exception/ResourceNotFoundException.php',
		'Aws\Kinesis\KinesisClient' => __DIR__ . '/Aws/Kinesis/KinesisClient.php',
		'Aws\Kinesis\Resources\kinesis-2013-12-02' => __DIR__ . '/Aws/Kinesis/Resources/kinesis-2013-12-02.php',
		'Aws\Kms\Exception\KmsException' => __DIR__ . '/Aws/Kms/Exception/KmsException.php',
		'Aws\Kms\KmsClient' => __DIR__ . '/Aws/Kms/KmsClient.php',
		'Aws\Kms\Resources\kms-2014-11-01' => __DIR__ . '/Aws/Kms/Resources/kms-2014-11-01.php',
		'Aws\Lambda\Exception\LambdaException' => __DIR__ . '/Aws/Lambda/Exception/LambdaException.php',
		'Aws\Lambda\LambdaClient' => __DIR__ . '/Aws/Lambda/LambdaClient.php',
		'Aws\Lambda\Resources\lambda-2014-11-11' => __DIR__ . '/Aws/Lambda/Resources/lambda-2014-11-11.php',
		'Aws\Lambda\Resources\lambda-2015-03-31' => __DIR__ . '/Aws/Lambda/Resources/lambda-2015-03-31.php',
		'Aws\MachineLearning\Exception\MachineLearningException' => __DIR__ . '/Aws/MachineLearning/Exception/MachineLearningException.php',
		'Aws\MachineLearning\MachineLearningClient' => __DIR__ . '/Aws/MachineLearning/MachineLearningClient.php',
		'Aws\MachineLearning\PredictEndpointListener' => __DIR__ . '/Aws/MachineLearning/PredictEndpointListener.php',
		'Aws\MachineLearning\Resources\machinelearning-2014-12-12' => __DIR__ . '/Aws/MachineLearning/Resources/machinelearning-2014-12-12.php',
		'Aws\OpsWorks\Enum\AppType' => __DIR__ . '/Aws/OpsWorks/Enum/AppType.php',
		'Aws\OpsWorks\Enum\Architecture' => __DIR__ . '/Aws/OpsWorks/Enum/Architecture.php',
		'Aws\OpsWorks\Enum\AutoScalingType' => __DIR__ . '/Aws/OpsWorks/Enum/AutoScalingType.php',
		'Aws\OpsWorks\Enum\DeploymentCommandName' => __DIR__ . '/Aws/OpsWorks/Enum/DeploymentCommandName.php',
		'Aws\OpsWorks\Enum\LayerType' => __DIR__ . '/Aws/OpsWorks/Enum/LayerType.php',
		'Aws\OpsWorks\Enum\PermissionLevel' => __DIR__ . '/Aws/OpsWorks/Enum/PermissionLevel.php',
		'Aws\OpsWorks\Enum\RootDeviceType' => __DIR__ . '/Aws/OpsWorks/Enum/RootDeviceType.php',
		'Aws\OpsWorks\Enum\SourceType' => __DIR__ . '/Aws/OpsWorks/Enum/SourceType.php',
		'Aws\OpsWorks\Exception\OpsWorksException' => __DIR__ . '/Aws/OpsWorks/Exception/OpsWorksException.php',
		'Aws\OpsWorks\Exception\ResourceNotFoundException' => __DIR__ . '/Aws/OpsWorks/Exception/ResourceNotFoundException.php',
		'Aws\OpsWorks\Exception\ValidationException' => __DIR__ . '/Aws/OpsWorks/Exception/ValidationException.php',
		'Aws\OpsWorks\OpsWorksClient' => __DIR__ . '/Aws/OpsWorks/OpsWorksClient.php',
		'Aws\OpsWorks\Resources\opsworks-2013-02-18' => __DIR__ . '/Aws/OpsWorks/Resources/opsworks-2013-02-18.php',
		'Aws\Rds\Enum\ApplyMethod' => __DIR__ . '/Aws/Rds/Enum/ApplyMethod.php',
		'Aws\Rds\Enum\SourceType' => __DIR__ . '/Aws/Rds/Enum/SourceType.php',
		'Aws\Rds\Exception\AuthorizationAlreadyExistsException' => __DIR__ . '/Aws/Rds/Exception/AuthorizationAlreadyExistsException.php',
		'Aws\Rds\Exception\AuthorizationNotFoundException' => __DIR__ . '/Aws/Rds/Exception/AuthorizationNotFoundException.php',
		'Aws\Rds\Exception\AuthorizationQuotaExceededException' => __DIR__ . '/Aws/Rds/Exception/AuthorizationQuotaExceededException.php',
		'Aws\Rds\Exception\DBInstanceAlreadyExistsException' => __DIR__ . '/Aws/Rds/Exception/DBInstanceAlreadyExistsException.php',
		'Aws\Rds\Exception\DBInstanceNotFoundException' => __DIR__ . '/Aws/Rds/Exception/DBInstanceNotFoundException.php',
		'Aws\Rds\Exception\DBParameterGroupAlreadyExistsException' => __DIR__ . '/Aws/Rds/Exception/DBParameterGroupAlreadyExistsException.php',
		'Aws\Rds\Exception\DBParameterGroupNotFoundException' => __DIR__ . '/Aws/Rds/Exception/DBParameterGroupNotFoundException.php',
		'Aws\Rds\Exception\DBParameterGroupQuotaExceededException' => __DIR__ . '/Aws/Rds/Exception/DBParameterGroupQuotaExceededException.php',
		'Aws\Rds\Exception\DBSecurityGroupAlreadyExistsException' => __DIR__ . '/Aws/Rds/Exception/DBSecurityGroupAlreadyExistsException.php',
		'Aws\Rds\Exception\DBSecurityGroupNotFoundException' => __DIR__ . '/Aws/Rds/Exception/DBSecurityGroupNotFoundException.php',
		'Aws\Rds\Exception\DBSecurityGroupNotSupportedException' => __DIR__ . '/Aws/Rds/Exception/DBSecurityGroupNotSupportedException.php',
		'Aws\Rds\Exception\DBSecurityGroupQuotaExceededException' => __DIR__ . '/Aws/Rds/Exception/DBSecurityGroupQuotaExceededException.php',
		'Aws\Rds\Exception\DBSnapshotAlreadyExistsException' => __DIR__ . '/Aws/Rds/Exception/DBSnapshotAlreadyExistsException.php',
		'Aws\Rds\Exception\DBSnapshotNotFoundException' => __DIR__ . '/Aws/Rds/Exception/DBSnapshotNotFoundException.php',
		'Aws\Rds\Exception\DBSubnetGroupAlreadyExistsException' => __DIR__ . '/Aws/Rds/Exception/DBSubnetGroupAlreadyExistsException.php',
		'Aws\Rds\Exception\DBSubnetGroupDoesNotCoverEnoughAZsException' => __DIR__ . '/Aws/Rds/Exception/DBSubnetGroupDoesNotCoverEnoughAZsException.php',
		'Aws\Rds\Exception\DBSubnetGroupNotAllowedException' => __DIR__ . '/Aws/Rds/Exception/DBSubnetGroupNotAllowedException.php',
		'Aws\Rds\Exception\DBSubnetGroupNotFoundException' => __DIR__ . '/Aws/Rds/Exception/DBSubnetGroupNotFoundException.php',
		'Aws\Rds\Exception\DBSubnetGroupQuotaExceededException' => __DIR__ . '/Aws/Rds/Exception/DBSubnetGroupQuotaExceededException.php',
		'Aws\Rds\Exception\DBSubnetQuotaExceededException' => __DIR__ . '/Aws/Rds/Exception/DBSubnetQuotaExceededException.php',
		'Aws\Rds\Exception\DBUpgradeDependencyFailureException' => __DIR__ . '/Aws/Rds/Exception/DBUpgradeDependencyFailureException.php',
		'Aws\Rds\Exception\EventSubscriptionQuotaExceededException' => __DIR__ . '/Aws/Rds/Exception/EventSubscriptionQuotaExceededException.php',
		'Aws\Rds\Exception\InstanceQuotaExceededException' => __DIR__ . '/Aws/Rds/Exception/InstanceQuotaExceededException.php',
		'Aws\Rds\Exception\InsufficientDBInstanceCapacityException' => __DIR__ . '/Aws/Rds/Exception/InsufficientDBInstanceCapacityException.php',
		'Aws\Rds\Exception\InvalidDBInstanceStateException' => __DIR__ . '/Aws/Rds/Exception/InvalidDBInstanceStateException.php',
		'Aws\Rds\Exception\InvalidDBParameterGroupStateException' => __DIR__ . '/Aws/Rds/Exception/InvalidDBParameterGroupStateException.php',
		'Aws\Rds\Exception\InvalidDBSecurityGroupStateException' => __DIR__ . '/Aws/Rds/Exception/InvalidDBSecurityGroupStateException.php',
		'Aws\Rds\Exception\InvalidDBSnapshotStateException' => __DIR__ . '/Aws/Rds/Exception/InvalidDBSnapshotStateException.php',
		'Aws\Rds\Exception\InvalidDBSubnetGroupException' => __DIR__ . '/Aws/Rds/Exception/InvalidDBSubnetGroupException.php',
		'Aws\Rds\Exception\InvalidDBSubnetGroupStateException' => __DIR__ . '/Aws/Rds/Exception/InvalidDBSubnetGroupStateException.php',
		'Aws\Rds\Exception\InvalidDBSubnetStateException' => __DIR__ . '/Aws/Rds/Exception/InvalidDBSubnetStateException.php',
		'Aws\Rds\Exception\InvalidEventSubscriptionStateException' => __DIR__ . '/Aws/Rds/Exception/InvalidEventSubscriptionStateException.php',
		'Aws\Rds\Exception\InvalidOptionGroupStateException' => __DIR__ . '/Aws/Rds/Exception/InvalidOptionGroupStateException.php',
		'Aws\Rds\Exception\InvalidRestoreException' => __DIR__ . '/Aws/Rds/Exception/InvalidRestoreException.php',
		'Aws\Rds\Exception\InvalidSubnetException' => __DIR__ . '/Aws/Rds/Exception/InvalidSubnetException.php',
		'Aws\Rds\Exception\InvalidVPCNetworkStateException' => __DIR__ . '/Aws/Rds/Exception/InvalidVPCNetworkStateException.php',
		'Aws\Rds\Exception\OptionGroupAlreadyExistsException' => __DIR__ . '/Aws/Rds/Exception/OptionGroupAlreadyExistsException.php',
		'Aws\Rds\Exception\OptionGroupNotFoundException' => __DIR__ . '/Aws/Rds/Exception/OptionGroupNotFoundException.php',
		'Aws\Rds\Exception\OptionGroupQuotaExceededException' => __DIR__ . '/Aws/Rds/Exception/OptionGroupQuotaExceededException.php',
		'Aws\Rds\Exception\PointInTimeRestoreNotEnabledException' => __DIR__ . '/Aws/Rds/Exception/PointInTimeRestoreNotEnabledException.php',
		'Aws\Rds\Exception\ProvisionedIopsNotAvailableInAZException' => __DIR__ . '/Aws/Rds/Exception/ProvisionedIopsNotAvailableInAZException.php',
		'Aws\Rds\Exception\RdsException' => __DIR__ . '/Aws/Rds/Exception/RdsException.php',
		'Aws\Rds\Exception\ReservedDBInstanceAlreadyExistsException' => __DIR__ . '/Aws/Rds/Exception/ReservedDBInstanceAlreadyExistsException.php',
		'Aws\Rds\Exception\ReservedDBInstanceNotFoundException' => __DIR__ . '/Aws/Rds/Exception/ReservedDBInstanceNotFoundException.php',
		'Aws\Rds\Exception\ReservedDBInstanceQuotaExceededException' => __DIR__ . '/Aws/Rds/Exception/ReservedDBInstanceQuotaExceededException.php',
		'Aws\Rds\Exception\ReservedDBInstancesOfferingNotFoundException' => __DIR__ . '/Aws/Rds/Exception/ReservedDBInstancesOfferingNotFoundException.php',
		'Aws\Rds\Exception\SnapshotQuotaExceededException' => __DIR__ . '/Aws/Rds/Exception/SnapshotQuotaExceededException.php',
		'Aws\Rds\Exception\SNSInvalidTopicException' => __DIR__ . '/Aws/Rds/Exception/SNSInvalidTopicException.php',
		'Aws\Rds\Exception\SNSNoAuthorizationException' => __DIR__ . '/Aws/Rds/Exception/SNSNoAuthorizationException.php',
		'Aws\Rds\Exception\SNSTopicArnNotFoundException' => __DIR__ . '/Aws/Rds/Exception/SNSTopicArnNotFoundException.php',
		'Aws\Rds\Exception\SourceNotFoundException' => __DIR__ . '/Aws/Rds/Exception/SourceNotFoundException.php',
		'Aws\Rds\Exception\StorageQuotaExceededException' => __DIR__ . '/Aws/Rds/Exception/StorageQuotaExceededException.php',
		'Aws\Rds\Exception\SubnetAlreadyInUseException' => __DIR__ . '/Aws/Rds/Exception/SubnetAlreadyInUseException.php',
		'Aws\Rds\Exception\SubscriptionAlreadyExistException' => __DIR__ . '/Aws/Rds/Exception/SubscriptionAlreadyExistException.php',
		'Aws\Rds\Exception\SubscriptionCategoryNotFoundException' => __DIR__ . '/Aws/Rds/Exception/SubscriptionCategoryNotFoundException.php',
		'Aws\Rds\Exception\SubscriptionNotFoundException' => __DIR__ . '/Aws/Rds/Exception/SubscriptionNotFoundException.php',
		'Aws\Rds\RdsClient' => __DIR__ . '/Aws/Rds/RdsClient.php',
		'Aws\Rds\Resources\rds-2014-10-31' => __DIR__ . '/Aws/Rds/Resources/rds-2014-10-31.php',
		'Aws\Redshift\Enum\SourceType' => __DIR__ . '/Aws/Redshift/Enum/SourceType.php',
		'Aws\Redshift\Exception\AccessToSnapshotDeniedException' => __DIR__ . '/Aws/Redshift/Exception/AccessToSnapshotDeniedException.php',
		'Aws\Redshift\Exception\AuthorizationAlreadyExistsException' => __DIR__ . '/Aws/Redshift/Exception/AuthorizationAlreadyExistsException.php',
		'Aws\Redshift\Exception\AuthorizationNotFoundException' => __DIR__ . '/Aws/Redshift/Exception/AuthorizationNotFoundException.php',
		'Aws\Redshift\Exception\AuthorizationQuotaExceededException' => __DIR__ . '/Aws/Redshift/Exception/AuthorizationQuotaExceededException.php',
		'Aws\Redshift\Exception\BucketNotFoundException' => __DIR__ . '/Aws/Redshift/Exception/BucketNotFoundException.php',
		'Aws\Redshift\Exception\ClusterAlreadyExistsException' => __DIR__ . '/Aws/Redshift/Exception/ClusterAlreadyExistsException.php',
		'Aws\Redshift\Exception\ClusterNotFoundException' => __DIR__ . '/Aws/Redshift/Exception/ClusterNotFoundException.php',
		'Aws\Redshift\Exception\ClusterParameterGroupAlreadyExistsException' => __DIR__ . '/Aws/Redshift/Exception/ClusterParameterGroupAlreadyExistsException.php',
		'Aws\Redshift\Exception\ClusterParameterGroupNotFoundException' => __DIR__ . '/Aws/Redshift/Exception/ClusterParameterGroupNotFoundException.php',
		'Aws\Redshift\Exception\ClusterParameterGroupQuotaExceededException' => __DIR__ . '/Aws/Redshift/Exception/ClusterParameterGroupQuotaExceededException.php',
		'Aws\Redshift\Exception\ClusterQuotaExceededException' => __DIR__ . '/Aws/Redshift/Exception/ClusterQuotaExceededException.php',
		'Aws\Redshift\Exception\ClusterSecurityGroupAlreadyExistsException' => __DIR__ . '/Aws/Redshift/Exception/ClusterSecurityGroupAlreadyExistsException.php',
		'Aws\Redshift\Exception\ClusterSecurityGroupNotFoundException' => __DIR__ . '/Aws/Redshift/Exception/ClusterSecurityGroupNotFoundException.php',
		'Aws\Redshift\Exception\ClusterSecurityGroupQuotaExceededException' => __DIR__ . '/Aws/Redshift/Exception/ClusterSecurityGroupQuotaExceededException.php',
		'Aws\Redshift\Exception\ClusterSnapshotAlreadyExistsException' => __DIR__ . '/Aws/Redshift/Exception/ClusterSnapshotAlreadyExistsException.php',
		'Aws\Redshift\Exception\ClusterSnapshotNotFoundException' => __DIR__ . '/Aws/Redshift/Exception/ClusterSnapshotNotFoundException.php',
		'Aws\Redshift\Exception\ClusterSnapshotQuotaExceededException' => __DIR__ . '/Aws/Redshift/Exception/ClusterSnapshotQuotaExceededException.php',
		'Aws\Redshift\Exception\ClusterSubnetGroupAlreadyExistsException' => __DIR__ . '/Aws/Redshift/Exception/ClusterSubnetGroupAlreadyExistsException.php',
		'Aws\Redshift\Exception\ClusterSubnetGroupNotFoundException' => __DIR__ . '/Aws/Redshift/Exception/ClusterSubnetGroupNotFoundException.php',
		'Aws\Redshift\Exception\ClusterSubnetGroupQuotaExceededException' => __DIR__ . '/Aws/Redshift/Exception/ClusterSubnetGroupQuotaExceededException.php',
		'Aws\Redshift\Exception\ClusterSubnetQuotaExceededException' => __DIR__ . '/Aws/Redshift/Exception/ClusterSubnetQuotaExceededException.php',
		'Aws\Redshift\Exception\CopyToRegionDisabledException' => __DIR__ . '/Aws/Redshift/Exception/CopyToRegionDisabledException.php',
		'Aws\Redshift\Exception\EventSubscriptionQuotaExceededException' => __DIR__ . '/Aws/Redshift/Exception/EventSubscriptionQuotaExceededException.php',
		'Aws\Redshift\Exception\HsmClientCertificateAlreadyExistsException' => __DIR__ . '/Aws/Redshift/Exception/HsmClientCertificateAlreadyExistsException.php',
		'Aws\Redshift\Exception\HsmClientCertificateNotFoundException' => __DIR__ . '/Aws/Redshift/Exception/HsmClientCertificateNotFoundException.php',
		'Aws\Redshift\Exception\HsmClientCertificateQuotaExceededException' => __DIR__ . '/Aws/Redshift/Exception/HsmClientCertificateQuotaExceededException.php',
		'Aws\Redshift\Exception\HsmConfigurationAlreadyExistsException' => __DIR__ . '/Aws/Redshift/Exception/HsmConfigurationAlreadyExistsException.php',
		'Aws\Redshift\Exception\HsmConfigurationNotFoundException' => __DIR__ . '/Aws/Redshift/Exception/HsmConfigurationNotFoundException.php',
		'Aws\Redshift\Exception\HsmConfigurationQuotaExceededException' => __DIR__ . '/Aws/Redshift/Exception/HsmConfigurationQuotaExceededException.php',
		'Aws\Redshift\Exception\IncompatibleOrderableOptionsException' => __DIR__ . '/Aws/Redshift/Exception/IncompatibleOrderableOptionsException.php',
		'Aws\Redshift\Exception\InsufficientClusterCapacityException' => __DIR__ . '/Aws/Redshift/Exception/InsufficientClusterCapacityException.php',
		'Aws\Redshift\Exception\InsufficientS3BucketPolicyFaultException' => __DIR__ . '/Aws/Redshift/Exception/InsufficientS3BucketPolicyFaultException.php',
		'Aws\Redshift\Exception\InvalidClusterParameterGroupStateException' => __DIR__ . '/Aws/Redshift/Exception/InvalidClusterParameterGroupStateException.php',
		'Aws\Redshift\Exception\InvalidClusterSecurityGroupStateException' => __DIR__ . '/Aws/Redshift/Exception/InvalidClusterSecurityGroupStateException.php',
		'Aws\Redshift\Exception\InvalidClusterSnapshotStateException' => __DIR__ . '/Aws/Redshift/Exception/InvalidClusterSnapshotStateException.php',
		'Aws\Redshift\Exception\InvalidClusterStateException' => __DIR__ . '/Aws/Redshift/Exception/InvalidClusterStateException.php',
		'Aws\Redshift\Exception\InvalidClusterSubnetGroupStateException' => __DIR__ . '/Aws/Redshift/Exception/InvalidClusterSubnetGroupStateException.php',
		'Aws\Redshift\Exception\InvalidClusterSubnetStateException' => __DIR__ . '/Aws/Redshift/Exception/InvalidClusterSubnetStateException.php',
		'Aws\Redshift\Exception\InvalidElasticIpException' => __DIR__ . '/Aws/Redshift/Exception/InvalidElasticIpException.php',
		'Aws\Redshift\Exception\InvalidHsmClientCertificateStateException' => __DIR__ . '/Aws/Redshift/Exception/InvalidHsmClientCertificateStateException.php',
		'Aws\Redshift\Exception\InvalidHsmConfigurationStateException' => __DIR__ . '/Aws/Redshift/Exception/InvalidHsmConfigurationStateException.php',
		'Aws\Redshift\Exception\InvalidRestoreException' => __DIR__ . '/Aws/Redshift/Exception/InvalidRestoreException.php',
		'Aws\Redshift\Exception\InvalidS3BucketNameFaultException' => __DIR__ . '/Aws/Redshift/Exception/InvalidS3BucketNameFaultException.php',
		'Aws\Redshift\Exception\InvalidS3KeyPrefixFaultException' => __DIR__ . '/Aws/Redshift/Exception/InvalidS3KeyPrefixFaultException.php',
		'Aws\Redshift\Exception\InvalidSubnetException' => __DIR__ . '/Aws/Redshift/Exception/InvalidSubnetException.php',
		'Aws\Redshift\Exception\InvalidVPCNetworkStateException' => __DIR__ . '/Aws/Redshift/Exception/InvalidVPCNetworkStateException.php',
		'Aws\Redshift\Exception\NumberOfNodesPerClusterLimitExceededException' => __DIR__ . '/Aws/Redshift/Exception/NumberOfNodesPerClusterLimitExceededException.php',
		'Aws\Redshift\Exception\NumberOfNodesQuotaExceededException' => __DIR__ . '/Aws/Redshift/Exception/NumberOfNodesQuotaExceededException.php',
		'Aws\Redshift\Exception\RedshiftException' => __DIR__ . '/Aws/Redshift/Exception/RedshiftException.php',
		'Aws\Redshift\Exception\ReservedNodeAlreadyExistsException' => __DIR__ . '/Aws/Redshift/Exception/ReservedNodeAlreadyExistsException.php',
		'Aws\Redshift\Exception\ReservedNodeNotFoundException' => __DIR__ . '/Aws/Redshift/Exception/ReservedNodeNotFoundException.php',
		'Aws\Redshift\Exception\ReservedNodeOfferingNotFoundException' => __DIR__ . '/Aws/Redshift/Exception/ReservedNodeOfferingNotFoundException.php',
		'Aws\Redshift\Exception\ReservedNodeQuotaExceededException' => __DIR__ . '/Aws/Redshift/Exception/ReservedNodeQuotaExceededException.php',
		'Aws\Redshift\Exception\ResizeNotFoundException' => __DIR__ . '/Aws/Redshift/Exception/ResizeNotFoundException.php',
		'Aws\Redshift\Exception\SnapshotCopyAlreadyDisabledException' => __DIR__ . '/Aws/Redshift/Exception/SnapshotCopyAlreadyDisabledException.php',
		'Aws\Redshift\Exception\SnapshotCopyAlreadyEnabledException' => __DIR__ . '/Aws/Redshift/Exception/SnapshotCopyAlreadyEnabledException.php',
		'Aws\Redshift\Exception\SnapshotCopyDisabledException' => __DIR__ . '/Aws/Redshift/Exception/SnapshotCopyDisabledException.php',
		'Aws\Redshift\Exception\SNSInvalidTopicException' => __DIR__ . '/Aws/Redshift/Exception/SNSInvalidTopicException.php',
		'Aws\Redshift\Exception\SNSNoAuthorizationException' => __DIR__ . '/Aws/Redshift/Exception/SNSNoAuthorizationException.php',
		'Aws\Redshift\Exception\SNSTopicArnNotFoundException' => __DIR__ . '/Aws/Redshift/Exception/SNSTopicArnNotFoundException.php',
		'Aws\Redshift\Exception\SourceNotFoundException' => __DIR__ . '/Aws/Redshift/Exception/SourceNotFoundException.php',
		'Aws\Redshift\Exception\SubnetAlreadyInUseException' => __DIR__ . '/Aws/Redshift/Exception/SubnetAlreadyInUseException.php',
		'Aws\Redshift\Exception\SubscriptionAlreadyExistException' => __DIR__ . '/Aws/Redshift/Exception/SubscriptionAlreadyExistException.php',
		'Aws\Redshift\Exception\SubscriptionCategoryNotFoundException' => __DIR__ . '/Aws/Redshift/Exception/SubscriptionCategoryNotFoundException.php',
		'Aws\Redshift\Exception\SubscriptionEventIdNotFoundException' => __DIR__ . '/Aws/Redshift/Exception/SubscriptionEventIdNotFoundException.php',
		'Aws\Redshift\Exception\SubscriptionNotFoundException' => __DIR__ . '/Aws/Redshift/Exception/SubscriptionNotFoundException.php',
		'Aws\Redshift\Exception\SubscriptionSeverityNotFoundException' => __DIR__ . '/Aws/Redshift/Exception/SubscriptionSeverityNotFoundException.php',
		'Aws\Redshift\Exception\UnauthorizedOperationException' => __DIR__ . '/Aws/Redshift/Exception/UnauthorizedOperationException.php',
		'Aws\Redshift\Exception\UnknownSnapshotCopyRegionException' => __DIR__ . '/Aws/Redshift/Exception/UnknownSnapshotCopyRegionException.php',
		'Aws\Redshift\Exception\UnsupportedOptionException' => __DIR__ . '/Aws/Redshift/Exception/UnsupportedOptionException.php',
		'Aws\Redshift\RedshiftClient' => __DIR__ . '/Aws/Redshift/RedshiftClient.php',
		'Aws\Redshift\Resources\redshift-2012-12-01' => __DIR__ . '/Aws/Redshift/Resources/redshift-2012-12-01.php',
		'Aws\Route53\Enum\Action' => __DIR__ . '/Aws/Route53/Enum/Action.php',
		'Aws\Route53\Enum\HealthCheckType' => __DIR__ . '/Aws/Route53/Enum/HealthCheckType.php',
		'Aws\Route53\Enum\RecordType' => __DIR__ . '/Aws/Route53/Enum/RecordType.php',
		'Aws\Route53\Enum\ResourceRecordSetFailover' => __DIR__ . '/Aws/Route53/Enum/ResourceRecordSetFailover.php',
		'Aws\Route53\Enum\Status' => __DIR__ . '/Aws/Route53/Enum/Status.php',
		'Aws\Route53\Exception\DelegationSetNotAvailableException' => __DIR__ . '/Aws/Route53/Exception/DelegationSetNotAvailableException.php',
		'Aws\Route53\Exception\HealthCheckAlreadyExistsException' => __DIR__ . '/Aws/Route53/Exception/HealthCheckAlreadyExistsException.php',
		'Aws\Route53\Exception\HealthCheckInUseException' => __DIR__ . '/Aws/Route53/Exception/HealthCheckInUseException.php',
		'Aws\Route53\Exception\HostedZoneAlreadyExistsException' => __DIR__ . '/Aws/Route53/Exception/HostedZoneAlreadyExistsException.php',
		'Aws\Route53\Exception\HostedZoneNotEmptyException' => __DIR__ . '/Aws/Route53/Exception/HostedZoneNotEmptyException.php',
		'Aws\Route53\Exception\IncompatibleVersionException' => __DIR__ . '/Aws/Route53/Exception/IncompatibleVersionException.php',
		'Aws\Route53\Exception\InvalidChangeBatchException' => __DIR__ . '/Aws/Route53/Exception/InvalidChangeBatchException.php',
		'Aws\Route53\Exception\InvalidDomainNameException' => __DIR__ . '/Aws/Route53/Exception/InvalidDomainNameException.php',
		'Aws\Route53\Exception\InvalidInputException' => __DIR__ . '/Aws/Route53/Exception/InvalidInputException.php',
		'Aws\Route53\Exception\NoSuchChangeException' => __DIR__ . '/Aws/Route53/Exception/NoSuchChangeException.php',
		'Aws\Route53\Exception\NoSuchHealthCheckException' => __DIR__ . '/Aws/Route53/Exception/NoSuchHealthCheckException.php',
		'Aws\Route53\Exception\NoSuchHostedZoneException' => __DIR__ . '/Aws/Route53/Exception/NoSuchHostedZoneException.php',
		'Aws\Route53\Exception\PriorRequestNotCompleteException' => __DIR__ . '/Aws/Route53/Exception/PriorRequestNotCompleteException.php',
		'Aws\Route53\Exception\Route53Exception' => __DIR__ . '/Aws/Route53/Exception/Route53Exception.php',
		'Aws\Route53\Exception\TooManyHealthChecksException' => __DIR__ . '/Aws/Route53/Exception/TooManyHealthChecksException.php',
		'Aws\Route53\Exception\TooManyHostedZonesException' => __DIR__ . '/Aws/Route53/Exception/TooManyHostedZonesException.php',
		'Aws\Route53\Resources\route53-2013-04-01' => __DIR__ . '/Aws/Route53/Resources/route53-2013-04-01.php',
		'Aws\Route53\Route53Client' => __DIR__ . '/Aws/Route53/Route53Client.php',
		'Aws\Route53Domains\Exception\Route53DomainsException' => __DIR__ . '/Aws/Route53Domains/Exception/Route53DomainsException.php',
		'Aws\Route53Domains\Resources\route53domains-2014-05-15' => __DIR__ . '/Aws/Route53Domains/Resources/route53domains-2014-05-15.php',
		'Aws\Route53Domains\Route53DomainsClient' => __DIR__ . '/Aws/Route53Domains/Route53DomainsClient.php',
		'Aws\S3\AcpListener' => __DIR__ . '/Aws/S3/AcpListener.php',
		'Aws\S3\BucketStyleListener' => __DIR__ . '/Aws/S3/BucketStyleListener.php',
		'Aws\S3\Command\S3Command' => __DIR__ . '/Aws/S3/Command/S3Command.php',
		'Aws\S3\Enum\CannedAcl' => __DIR__ . '/Aws/S3/Enum/CannedAcl.php',
		'Aws\S3\Enum\EncodingType' => __DIR__ . '/Aws/S3/Enum/EncodingType.php',
		'Aws\S3\Enum\Event' => __DIR__ . '/Aws/S3/Enum/Event.php',
		'Aws\S3\Enum\GranteeType' => __DIR__ . '/Aws/S3/Enum/GranteeType.php',
		'Aws\S3\Enum\Group' => __DIR__ . '/Aws/S3/Enum/Group.php',
		'Aws\S3\Enum\MetadataDirective' => __DIR__ . '/Aws/S3/Enum/MetadataDirective.php',
		'Aws\S3\Enum\MFADelete' => __DIR__ . '/Aws/S3/Enum/MFADelete.php',
		'Aws\S3\Enum\Payer' => __DIR__ . '/Aws/S3/Enum/Payer.php',
		'Aws\S3\Enum\Permission' => __DIR__ . '/Aws/S3/Enum/Permission.php',
		'Aws\S3\Enum\Protocol' => __DIR__ . '/Aws/S3/Enum/Protocol.php',
		'Aws\S3\Enum\ServerSideEncryption' => __DIR__ . '/Aws/S3/Enum/ServerSideEncryption.php',
		'Aws\S3\Enum\Status' => __DIR__ . '/Aws/S3/Enum/Status.php',
		'Aws\S3\Enum\Storage' => __DIR__ . '/Aws/S3/Enum/Storage.php',
		'Aws\S3\Enum\StorageClass' => __DIR__ . '/Aws/S3/Enum/StorageClass.php',
		'Aws\S3\Exception\AccessDeniedException' => __DIR__ . '/Aws/S3/Exception/AccessDeniedException.php',
		'Aws\S3\Exception\AccountProblemException' => __DIR__ . '/Aws/S3/Exception/AccountProblemException.php',
		'Aws\S3\Exception\AmbiguousGrantByEmailAddressException' => __DIR__ . '/Aws/S3/Exception/AmbiguousGrantByEmailAddressException.php',
		'Aws\S3\Exception\BadDigestException' => __DIR__ . '/Aws/S3/Exception/BadDigestException.php',
		'Aws\S3\Exception\BucketAlreadyExistsException' => __DIR__ . '/Aws/S3/Exception/BucketAlreadyExistsException.php',
		'Aws\S3\Exception\BucketAlreadyOwnedByYouException' => __DIR__ . '/Aws/S3/Exception/BucketAlreadyOwnedByYouException.php',
		'Aws\S3\Exception\BucketNotEmptyException' => __DIR__ . '/Aws/S3/Exception/BucketNotEmptyException.php',
		'Aws\S3\Exception\CredentialsNotSupportedException' => __DIR__ . '/Aws/S3/Exception/CredentialsNotSupportedException.php',
		'Aws\S3\Exception\CrossLocationLoggingProhibitedException' => __DIR__ . '/Aws/S3/Exception/CrossLocationLoggingProhibitedException.php',
		'Aws\S3\Exception\DeleteMultipleObjectsException' => __DIR__ . '/Aws/S3/Exception/DeleteMultipleObjectsException.php',
		'Aws\S3\Exception\EntityTooLargeException' => __DIR__ . '/Aws/S3/Exception/EntityTooLargeException.php',
		'Aws\S3\Exception\EntityTooSmallException' => __DIR__ . '/Aws/S3/Exception/EntityTooSmallException.php',
		'Aws\S3\Exception\ExpiredTokenException' => __DIR__ . '/Aws/S3/Exception/ExpiredTokenException.php',
		'Aws\S3\Exception\IllegalVersioningConfigurationException' => __DIR__ . '/Aws/S3/Exception/IllegalVersioningConfigurationException.php',
		'Aws\S3\Exception\IncompleteBodyException' => __DIR__ . '/Aws/S3/Exception/IncompleteBodyException.php',
		'Aws\S3\Exception\IncorrectNumberOfFilesInPostRequestException' => __DIR__ . '/Aws/S3/Exception/IncorrectNumberOfFilesInPostRequestException.php',
		'Aws\S3\Exception\InlineDataTooLargeException' => __DIR__ . '/Aws/S3/Exception/InlineDataTooLargeException.php',
		'Aws\S3\Exception\InternalErrorException' => __DIR__ . '/Aws/S3/Exception/InternalErrorException.php',
		'Aws\S3\Exception\InvalidAccessKeyIdException' => __DIR__ . '/Aws/S3/Exception/InvalidAccessKeyIdException.php',
		'Aws\S3\Exception\InvalidAddressingHeaderException' => __DIR__ . '/Aws/S3/Exception/InvalidAddressingHeaderException.php',
		'Aws\S3\Exception\InvalidArgumentException' => __DIR__ . '/Aws/S3/Exception/InvalidArgumentException.php',
		'Aws\S3\Exception\InvalidBucketNameException' => __DIR__ . '/Aws/S3/Exception/InvalidBucketNameException.php',
		'Aws\S3\Exception\InvalidBucketStateException' => __DIR__ . '/Aws/S3/Exception/InvalidBucketStateException.php',
		'Aws\S3\Exception\InvalidDigestException' => __DIR__ . '/Aws/S3/Exception/InvalidDigestException.php',
		'Aws\S3\Exception\InvalidLocationConstraintException' => __DIR__ . '/Aws/S3/Exception/InvalidLocationConstraintException.php',
		'Aws\S3\Exception\InvalidPartException' => __DIR__ . '/Aws/S3/Exception/InvalidPartException.php',
		'Aws\S3\Exception\InvalidPartOrderException' => __DIR__ . '/Aws/S3/Exception/InvalidPartOrderException.php',
		'Aws\S3\Exception\InvalidPayerException' => __DIR__ . '/Aws/S3/Exception/InvalidPayerException.php',
		'Aws\S3\Exception\InvalidPolicyDocumentException' => __DIR__ . '/Aws/S3/Exception/InvalidPolicyDocumentException.php',
		'Aws\S3\Exception\InvalidRangeException' => __DIR__ . '/Aws/S3/Exception/InvalidRangeException.php',
		'Aws\S3\Exception\InvalidRequestException' => __DIR__ . '/Aws/S3/Exception/InvalidRequestException.php',
		'Aws\S3\Exception\InvalidSecurityException' => __DIR__ . '/Aws/S3/Exception/InvalidSecurityException.php',
		'Aws\S3\Exception\InvalidSOAPRequestException' => __DIR__ . '/Aws/S3/Exception/InvalidSOAPRequestException.php',
		'Aws\S3\Exception\InvalidStorageClassException' => __DIR__ . '/Aws/S3/Exception/InvalidStorageClassException.php',
		'Aws\S3\Exception\InvalidTagErrorException' => __DIR__ . '/Aws/S3/Exception/InvalidTagErrorException.php',
		'Aws\S3\Exception\InvalidTargetBucketForLoggingException' => __DIR__ . '/Aws/S3/Exception/InvalidTargetBucketForLoggingException.php',
		'Aws\S3\Exception\InvalidTokenException' => __DIR__ . '/Aws/S3/Exception/InvalidTokenException.php',
		'Aws\S3\Exception\InvalidURIException' => __DIR__ . '/Aws/S3/Exception/InvalidURIException.php',
		'Aws\S3\Exception\KeyTooLongException' => __DIR__ . '/Aws/S3/Exception/KeyTooLongException.php',
		'Aws\S3\Exception\MalformedACLErrorException' => __DIR__ . '/Aws/S3/Exception/MalformedACLErrorException.php',
		'Aws\S3\Exception\MalformedPOSTRequestException' => __DIR__ . '/Aws/S3/Exception/MalformedPOSTRequestException.php',
		'Aws\S3\Exception\MalformedXMLException' => __DIR__ . '/Aws/S3/Exception/MalformedXMLException.php',
		'Aws\S3\Exception\MaxMessageLengthExceededException' => __DIR__ . '/Aws/S3/Exception/MaxMessageLengthExceededException.php',
		'Aws\S3\Exception\MaxPostPreDataLengthExceededErrorException' => __DIR__ . '/Aws/S3/Exception/MaxPostPreDataLengthExceededErrorException.php',
		'Aws\S3\Exception\MetadataTooLargeException' => __DIR__ . '/Aws/S3/Exception/MetadataTooLargeException.php',
		'Aws\S3\Exception\MethodNotAllowedException' => __DIR__ . '/Aws/S3/Exception/MethodNotAllowedException.php',
		'Aws\S3\Exception\MissingAttachmentException' => __DIR__ . '/Aws/S3/Exception/MissingAttachmentException.php',
		'Aws\S3\Exception\MissingContentLengthException' => __DIR__ . '/Aws/S3/Exception/MissingContentLengthException.php',
		'Aws\S3\Exception\MissingRequestBodyErrorException' => __DIR__ . '/Aws/S3/Exception/MissingRequestBodyErrorException.php',
		'Aws\S3\Exception\MissingSecurityElementException' => __DIR__ . '/Aws/S3/Exception/MissingSecurityElementException.php',
		'Aws\S3\Exception\MissingSecurityHeaderException' => __DIR__ . '/Aws/S3/Exception/MissingSecurityHeaderException.php',
		'Aws\S3\Exception\NoLoggingStatusForKeyException' => __DIR__ . '/Aws/S3/Exception/NoLoggingStatusForKeyException.php',
		'Aws\S3\Exception\NoSuchBucketException' => __DIR__ . '/Aws/S3/Exception/NoSuchBucketException.php',
		'Aws\S3\Exception\NoSuchBucketPolicyException' => __DIR__ . '/Aws/S3/Exception/NoSuchBucketPolicyException.php',
		'Aws\S3\Exception\NoSuchCORSConfigurationException' => __DIR__ . '/Aws/S3/Exception/NoSuchCORSConfigurationException.php',
		'Aws\S3\Exception\NoSuchKeyException' => __DIR__ . '/Aws/S3/Exception/NoSuchKeyException.php',
		'Aws\S3\Exception\NoSuchLifecycleConfigurationException' => __DIR__ . '/Aws/S3/Exception/NoSuchLifecycleConfigurationException.php',
		'Aws\S3\Exception\NoSuchTagSetException' => __DIR__ . '/Aws/S3/Exception/NoSuchTagSetException.php',
		'Aws\S3\Exception\NoSuchUploadException' => __DIR__ . '/Aws/S3/Exception/NoSuchUploadException.php',
		'Aws\S3\Exception\NoSuchVersionException' => __DIR__ . '/Aws/S3/Exception/NoSuchVersionException.php',
		'Aws\S3\Exception\NoSuchWebsiteConfigurationException' => __DIR__ . '/Aws/S3/Exception/NoSuchWebsiteConfigurationException.php',
		'Aws\S3\Exception\NotImplementedException' => __DIR__ . '/Aws/S3/Exception/NotImplementedException.php',
		'Aws\S3\Exception\NotSignedUpException' => __DIR__ . '/Aws/S3/Exception/NotSignedUpException.php',
		'Aws\S3\Exception\NotSuchBucketPolicyException' => __DIR__ . '/Aws/S3/Exception/NotSuchBucketPolicyException.php',
		'Aws\S3\Exception\ObjectAlreadyInActiveTierErrorException' => __DIR__ . '/Aws/S3/Exception/ObjectAlreadyInActiveTierErrorException.php',
		'Aws\S3\Exception\ObjectNotInActiveTierErrorException' => __DIR__ . '/Aws/S3/Exception/ObjectNotInActiveTierErrorException.php',
		'Aws\S3\Exception\OperationAbortedException' => __DIR__ . '/Aws/S3/Exception/OperationAbortedException.php',
		'Aws\S3\Exception\Parser\S3ExceptionParser' => __DIR__ . '/Aws/S3/Exception/Parser/S3ExceptionParser.php',
		'Aws\S3\Exception\PermanentRedirectException' => __DIR__ . '/Aws/S3/Exception/PermanentRedirectException.php',
		'Aws\S3\Exception\PreconditionFailedException' => __DIR__ . '/Aws/S3/Exception/PreconditionFailedException.php',
		'Aws\S3\Exception\RedirectException' => __DIR__ . '/Aws/S3/Exception/RedirectException.php',
		'Aws\S3\Exception\RequestIsNotMultiPartContentException' => __DIR__ . '/Aws/S3/Exception/RequestIsNotMultiPartContentException.php',
		'Aws\S3\Exception\RequestTimeoutException' => __DIR__ . '/Aws/S3/Exception/RequestTimeoutException.php',
		'Aws\S3\Exception\RequestTimeTooSkewedException' => __DIR__ . '/Aws/S3/Exception/RequestTimeTooSkewedException.php',
		'Aws\S3\Exception\RequestTorrentOfBucketErrorException' => __DIR__ . '/Aws/S3/Exception/RequestTorrentOfBucketErrorException.php',
		'Aws\S3\Exception\S3Exception' => __DIR__ . '/Aws/S3/Exception/S3Exception.php',
		'Aws\S3\Exception\ServiceUnavailableException' => __DIR__ . '/Aws/S3/Exception/ServiceUnavailableException.php',
		'Aws\S3\Exception\SignatureDoesNotMatchException' => __DIR__ . '/Aws/S3/Exception/SignatureDoesNotMatchException.php',
		'Aws\S3\Exception\SlowDownException' => __DIR__ . '/Aws/S3/Exception/SlowDownException.php',
		'Aws\S3\Exception\TemporaryRedirectException' => __DIR__ . '/Aws/S3/Exception/TemporaryRedirectException.php',
		'Aws\S3\Exception\TokenRefreshRequiredException' => __DIR__ . '/Aws/S3/Exception/TokenRefreshRequiredException.php',
		'Aws\S3\Exception\TooManyBucketsException' => __DIR__ . '/Aws/S3/Exception/TooManyBucketsException.php',
		'Aws\S3\Exception\UnexpectedContentException' => __DIR__ . '/Aws/S3/Exception/UnexpectedContentException.php',
		'Aws\S3\Exception\UnresolvableGrantByEmailAddressException' => __DIR__ . '/Aws/S3/Exception/UnresolvableGrantByEmailAddressException.php',
		'Aws\S3\Exception\UserKeyMustBeSpecifiedException' => __DIR__ . '/Aws/S3/Exception/UserKeyMustBeSpecifiedException.php',
		'Aws\S3\IncompleteMultipartUploadChecker' => __DIR__ . '/Aws/S3/IncompleteMultipartUploadChecker.php',
		'Aws\S3\Iterator\ListBucketsIterator' => __DIR__ . '/Aws/S3/Iterator/ListBucketsIterator.php',
		'Aws\S3\Iterator\ListMultipartUploadsIterator' => __DIR__ . '/Aws/S3/Iterator/ListMultipartUploadsIterator.php',
		'Aws\S3\Iterator\ListObjectsIterator' => __DIR__ . '/Aws/S3/Iterator/ListObjectsIterator.php',
		'Aws\S3\Iterator\ListObjectVersionsIterator' => __DIR__ . '/Aws/S3/Iterator/ListObjectVersionsIterator.php',
		'Aws\S3\Iterator\OpendirIterator' => __DIR__ . '/Aws/S3/Iterator/OpendirIterator.php',
		'Aws\S3\Model\Acp' => __DIR__ . '/Aws/S3/Model/Acp.php',
		'Aws\S3\Model\AcpBuilder' => __DIR__ . '/Aws/S3/Model/AcpBuilder.php',
		'Aws\S3\Model\ClearBucket' => __DIR__ . '/Aws/S3/Model/ClearBucket.php',
		'Aws\S3\Model\DeleteObjectsBatch' => __DIR__ . '/Aws/S3/Model/DeleteObjectsBatch.php',
		'Aws\S3\Model\DeleteObjectsTransfer' => __DIR__ . '/Aws/S3/Model/DeleteObjectsTransfer.php',
		'Aws\S3\Model\Grant' => __DIR__ . '/Aws/S3/Model/Grant.php',
		'Aws\S3\Model\Grantee' => __DIR__ . '/Aws/S3/Model/Grantee.php',
		'Aws\S3\Model\MultipartUpload\AbstractTransfer' => __DIR__ . '/Aws/S3/Model/MultipartUpload/AbstractTransfer.php',
		'Aws\S3\Model\MultipartUpload\ParallelTransfer' => __DIR__ . '/Aws/S3/Model/MultipartUpload/ParallelTransfer.php',
		'Aws\S3\Model\MultipartUpload\SerialTransfer' => __DIR__ . '/Aws/S3/Model/MultipartUpload/SerialTransfer.php',
		'Aws\S3\Model\MultipartUpload\TransferState' => __DIR__ . '/Aws/S3/Model/MultipartUpload/TransferState.php',
		'Aws\S3\Model\MultipartUpload\UploadBuilder' => __DIR__ . '/Aws/S3/Model/MultipartUpload/UploadBuilder.php',
		'Aws\S3\Model\MultipartUpload\UploadId' => __DIR__ . '/Aws/S3/Model/MultipartUpload/UploadId.php',
		'Aws\S3\Model\MultipartUpload\UploadPart' => __DIR__ . '/Aws/S3/Model/MultipartUpload/UploadPart.php',
		'Aws\S3\Model\PostObject' => __DIR__ . '/Aws/S3/Model/PostObject.php',
		'Aws\S3\Resources\s3-2006-03-01' => __DIR__ . '/Aws/S3/Resources/s3-2006-03-01.php',
		'Aws\S3\ResumableDownload' => __DIR__ . '/Aws/S3/ResumableDownload.php',
		'Aws\S3\S3Client' => __DIR__ . '/Aws/S3/S3Client.php',
		'Aws\S3\S3Md5Listener' => __DIR__ . '/Aws/S3/S3Md5Listener.php',
		'Aws\S3\S3Signature' => __DIR__ . '/Aws/S3/S3Signature.php',
		'Aws\S3\S3SignatureInterface' => __DIR__ . '/Aws/S3/S3SignatureInterface.php',
		'Aws\S3\S3SignatureV4' => __DIR__ . '/Aws/S3/S3SignatureV4.php',
		'Aws\S3\SocketTimeoutChecker' => __DIR__ . '/Aws/S3/SocketTimeoutChecker.php',
		'Aws\S3\SseCpkListener' => __DIR__ . '/Aws/S3/SseCpkListener.php',
		'Aws\S3\StreamWrapper' => __DIR__ . '/Aws/S3/StreamWrapper.php',
		'Aws\S3\Sync\AbstractSync' => __DIR__ . '/Aws/S3/Sync/AbstractSync.php',
		'Aws\S3\Sync\AbstractSyncBuilder' => __DIR__ . '/Aws/S3/Sync/AbstractSyncBuilder.php',
		'Aws\S3\Sync\ChangedFilesIterator' => __DIR__ . '/Aws/S3/Sync/ChangedFilesIterator.php',
		'Aws\S3\Sync\DownloadSync' => __DIR__ . '/Aws/S3/Sync/DownloadSync.php',
		'Aws\S3\Sync\DownloadSyncBuilder' => __DIR__ . '/Aws/S3/Sync/DownloadSyncBuilder.php',
		'Aws\S3\Sync\FilenameConverterInterface' => __DIR__ . '/Aws/S3/Sync/FilenameConverterInterface.php',
		'Aws\S3\Sync\KeyConverter' => __DIR__ . '/Aws/S3/Sync/KeyConverter.php',
		'Aws\S3\Sync\UploadSync' => __DIR__ . '/Aws/S3/Sync/UploadSync.php',
		'Aws\S3\Sync\UploadSyncBuilder' => __DIR__ . '/Aws/S3/Sync/UploadSyncBuilder.php',
		'Aws\Ses\Enum\IdentityType' => __DIR__ . '/Aws/Ses/Enum/IdentityType.php',
		'Aws\Ses\Enum\MailboxSimulator' => __DIR__ . '/Aws/Ses/Enum/MailboxSimulator.php',
		'Aws\Ses\Enum\NotificationType' => __DIR__ . '/Aws/Ses/Enum/NotificationType.php',
		'Aws\Ses\Enum\VerificationStatus' => __DIR__ . '/Aws/Ses/Enum/VerificationStatus.php',
		'Aws\Ses\Exception\MessageRejectedException' => __DIR__ . '/Aws/Ses/Exception/MessageRejectedException.php',
		'Aws\Ses\Exception\SesException' => __DIR__ . '/Aws/Ses/Exception/SesException.php',
		'Aws\Ses\Resources\ses-2010-12-01' => __DIR__ . '/Aws/Ses/Resources/ses-2010-12-01.php',
		'Aws\Ses\SesClient' => __DIR__ . '/Aws/Ses/SesClient.php',
		'Aws\SimpleDb\Exception\AttributeDoesNotExistException' => __DIR__ . '/Aws/SimpleDb/Exception/AttributeDoesNotExistException.php',
		'Aws\SimpleDb\Exception\DuplicateItemNameException' => __DIR__ . '/Aws/SimpleDb/Exception/DuplicateItemNameException.php',
		'Aws\SimpleDb\Exception\InvalidNextTokenException' => __DIR__ . '/Aws/SimpleDb/Exception/InvalidNextTokenException.php',
		'Aws\SimpleDb\Exception\InvalidNumberPredicatesException' => __DIR__ . '/Aws/SimpleDb/Exception/InvalidNumberPredicatesException.php',
		'Aws\SimpleDb\Exception\InvalidNumberValueTestsException' => __DIR__ . '/Aws/SimpleDb/Exception/InvalidNumberValueTestsException.php',
		'Aws\SimpleDb\Exception\InvalidParameterValueException' => __DIR__ . '/Aws/SimpleDb/Exception/InvalidParameterValueException.php',
		'Aws\SimpleDb\Exception\InvalidQueryExpressionException' => __DIR__ . '/Aws/SimpleDb/Exception/InvalidQueryExpressionException.php',
		'Aws\SimpleDb\Exception\MissingParameterException' => __DIR__ . '/Aws/SimpleDb/Exception/MissingParameterException.php',
		'Aws\SimpleDb\Exception\NoSuchDomainException' => __DIR__ . '/Aws/SimpleDb/Exception/NoSuchDomainException.php',
		'Aws\SimpleDb\Exception\NumberDomainAttributesExceededException' => __DIR__ . '/Aws/SimpleDb/Exception/NumberDomainAttributesExceededException.php',
		'Aws\SimpleDb\Exception\NumberDomainBytesExceededException' => __DIR__ . '/Aws/SimpleDb/Exception/NumberDomainBytesExceededException.php',
		'Aws\SimpleDb\Exception\NumberDomainsExceededException' => __DIR__ . '/Aws/SimpleDb/Exception/NumberDomainsExceededException.php',
		'Aws\SimpleDb\Exception\NumberItemAttributesExceededException' => __DIR__ . '/Aws/SimpleDb/Exception/NumberItemAttributesExceededException.php',
		'Aws\SimpleDb\Exception\NumberSubmittedAttributesExceededException' => __DIR__ . '/Aws/SimpleDb/Exception/NumberSubmittedAttributesExceededException.php',
		'Aws\SimpleDb\Exception\NumberSubmittedItemsExceededException' => __DIR__ . '/Aws/SimpleDb/Exception/NumberSubmittedItemsExceededException.php',
		'Aws\SimpleDb\Exception\RequestTimeoutException' => __DIR__ . '/Aws/SimpleDb/Exception/RequestTimeoutException.php',
		'Aws\SimpleDb\Exception\SimpleDbException' => __DIR__ . '/Aws/SimpleDb/Exception/SimpleDbException.php',
		'Aws\SimpleDb\Exception\TooManyRequestedAttributesException' => __DIR__ . '/Aws/SimpleDb/Exception/TooManyRequestedAttributesException.php',
		'Aws\SimpleDb\Resources\simpledb-2009-04-15' => __DIR__ . '/Aws/SimpleDb/Resources/simpledb-2009-04-15.php',
		'Aws\SimpleDb\SimpleDbClient' => __DIR__ . '/Aws/SimpleDb/SimpleDbClient.php',
		'Aws\Sns\Exception\AuthorizationErrorException' => __DIR__ . '/Aws/Sns/Exception/AuthorizationErrorException.php',
		'Aws\Sns\Exception\EndpointDisabledException' => __DIR__ . '/Aws/Sns/Exception/EndpointDisabledException.php',
		'Aws\Sns\Exception\InternalErrorException' => __DIR__ . '/Aws/Sns/Exception/InternalErrorException.php',
		'Aws\Sns\Exception\InvalidParameterException' => __DIR__ . '/Aws/Sns/Exception/InvalidParameterException.php',
		'Aws\Sns\Exception\NotFoundException' => __DIR__ . '/Aws/Sns/Exception/NotFoundException.php',
		'Aws\Sns\Exception\PlatformApplicationDisabledException' => __DIR__ . '/Aws/Sns/Exception/PlatformApplicationDisabledException.php',
		'Aws\Sns\Exception\SnsException' => __DIR__ . '/Aws/Sns/Exception/SnsException.php',
		'Aws\Sns\Exception\SubscriptionLimitExceededException' => __DIR__ . '/Aws/Sns/Exception/SubscriptionLimitExceededException.php',
		'Aws\Sns\Exception\TopicLimitExceededException' => __DIR__ . '/Aws/Sns/Exception/TopicLimitExceededException.php',
		'Aws\Sns\MessageValidator\Exception\CannotGetPublicKeyFromCertificateException' => __DIR__ . '/Aws/Sns/MessageValidator/Exception/CannotGetPublicKeyFromCertificateException.php',
		'Aws\Sns\MessageValidator\Exception\CertificateFromUnrecognizedSourceException' => __DIR__ . '/Aws/Sns/MessageValidator/Exception/CertificateFromUnrecognizedSourceException.php',
		'Aws\Sns\MessageValidator\Exception\InvalidMessageSignatureException' => __DIR__ . '/Aws/Sns/MessageValidator/Exception/InvalidMessageSignatureException.php',
		'Aws\Sns\MessageValidator\Exception\SnsMessageValidatorException' => __DIR__ . '/Aws/Sns/MessageValidator/Exception/SnsMessageValidatorException.php',
		'Aws\Sns\MessageValidator\Message' => __DIR__ . '/Aws/Sns/MessageValidator/Message.php',
		'Aws\Sns\MessageValidator\MessageValidator' => __DIR__ . '/Aws/Sns/MessageValidator/MessageValidator.php',
		'Aws\Sns\Resources\sns-2010-03-31' => __DIR__ . '/Aws/Sns/Resources/sns-2010-03-31.php',
		'Aws\Sns\SnsClient' => __DIR__ . '/Aws/Sns/SnsClient.php',
		'Aws\Sqs\Enum\MessageAttribute' => __DIR__ . '/Aws/Sqs/Enum/MessageAttribute.php',
		'Aws\Sqs\Enum\QueueAttribute' => __DIR__ . '/Aws/Sqs/Enum/QueueAttribute.php',
		'Aws\Sqs\Exception\SqsException' => __DIR__ . '/Aws/Sqs/Exception/SqsException.php',
		'Aws\Sqs\Md5ValidatorListener' => __DIR__ . '/Aws/Sqs/Md5ValidatorListener.php',
		'Aws\Sqs\QueueUrlListener' => __DIR__ . '/Aws/Sqs/QueueUrlListener.php',
		'Aws\Sqs\Resources\sqs-2012-11-05' => __DIR__ . '/Aws/Sqs/Resources/sqs-2012-11-05.php',
		'Aws\Sqs\SqsClient' => __DIR__ . '/Aws/Sqs/SqsClient.php',
		'Aws\Ssm\Exception\SsmException' => __DIR__ . '/Aws/Ssm/Exception/SsmException.php',
		'Aws\Ssm\Resources\ssm-2014-11-06' => __DIR__ . '/Aws/Ssm/Resources/ssm-2014-11-06.php',
		'Aws\Ssm\SsmClient' => __DIR__ . '/Aws/Ssm/SsmClient.php',
		'Aws\StorageGateway\Enum\BandwidthType' => __DIR__ . '/Aws/StorageGateway/Enum/BandwidthType.php',
		'Aws\StorageGateway\Enum\DiskAllocationType' => __DIR__ . '/Aws/StorageGateway/Enum/DiskAllocationType.php',
		'Aws\StorageGateway\Enum\ErrorCode' => __DIR__ . '/Aws/StorageGateway/Enum/ErrorCode.php',
		'Aws\StorageGateway\Enum\GatewayState' => __DIR__ . '/Aws/StorageGateway/Enum/GatewayState.php',
		'Aws\StorageGateway\Enum\GatewayTimezone' => __DIR__ . '/Aws/StorageGateway/Enum/GatewayTimezone.php',
		'Aws\StorageGateway\Enum\GatewayType' => __DIR__ . '/Aws/StorageGateway/Enum/GatewayType.php',
		'Aws\StorageGateway\Enum\VolumeStatus' => __DIR__ . '/Aws/StorageGateway/Enum/VolumeStatus.php',
		'Aws\StorageGateway\Enum\VolumeType' => __DIR__ . '/Aws/StorageGateway/Enum/VolumeType.php',
		'Aws\StorageGateway\Exception\InternalServerErrorException' => __DIR__ . '/Aws/StorageGateway/Exception/InternalServerErrorException.php',
		'Aws\StorageGateway\Exception\InvalidGatewayRequestException' => __DIR__ . '/Aws/StorageGateway/Exception/InvalidGatewayRequestException.php',
		'Aws\StorageGateway\Exception\StorageGatewayException' => __DIR__ . '/Aws/StorageGateway/Exception/StorageGatewayException.php',
		'Aws\StorageGateway\Resources\storagegateway-2013-06-30' => __DIR__ . '/Aws/StorageGateway/Resources/storagegateway-2013-06-30.php',
		'Aws\StorageGateway\StorageGatewayClient' => __DIR__ . '/Aws/StorageGateway/StorageGatewayClient.php',
		'Aws\Sts\Exception\ExpiredTokenException' => __DIR__ . '/Aws/Sts/Exception/ExpiredTokenException.php',
		'Aws\Sts\Exception\IDPCommunicationErrorException' => __DIR__ . '/Aws/Sts/Exception/IDPCommunicationErrorException.php',
		'Aws\Sts\Exception\IDPRejectedClaimException' => __DIR__ . '/Aws/Sts/Exception/IDPRejectedClaimException.php',
		'Aws\Sts\Exception\IncompleteSignatureException' => __DIR__ . '/Aws/Sts/Exception/IncompleteSignatureException.php',
		'Aws\Sts\Exception\InternalFailureException' => __DIR__ . '/Aws/Sts/Exception/InternalFailureException.php',
		'Aws\Sts\Exception\InvalidActionException' => __DIR__ . '/Aws/Sts/Exception/InvalidActionException.php',
		'Aws\Sts\Exception\InvalidAuthorizationMessageException' => __DIR__ . '/Aws/Sts/Exception/InvalidAuthorizationMessageException.php',
		'Aws\Sts\Exception\InvalidClientTokenIdException' => __DIR__ . '/Aws/Sts/Exception/InvalidClientTokenIdException.php',
		'Aws\Sts\Exception\InvalidIdentityTokenException' => __DIR__ . '/Aws/Sts/Exception/InvalidIdentityTokenException.php',
		'Aws\Sts\Exception\InvalidParameterCombinationException' => __DIR__ . '/Aws/Sts/Exception/InvalidParameterCombinationException.php',
		'Aws\Sts\Exception\InvalidParameterValueException' => __DIR__ . '/Aws/Sts/Exception/InvalidParameterValueException.php',
		'Aws\Sts\Exception\InvalidQueryParameterException' => __DIR__ . '/Aws/Sts/Exception/InvalidQueryParameterException.php',
		'Aws\Sts\Exception\MalformedPolicyDocumentException' => __DIR__ . '/Aws/Sts/Exception/MalformedPolicyDocumentException.php',
		'Aws\Sts\Exception\MalformedQueryStringException' => __DIR__ . '/Aws/Sts/Exception/MalformedQueryStringException.php',
		'Aws\Sts\Exception\MissingActionException' => __DIR__ . '/Aws/Sts/Exception/MissingActionException.php',
		'Aws\Sts\Exception\MissingAuthenticationTokenException' => __DIR__ . '/Aws/Sts/Exception/MissingAuthenticationTokenException.php',
		'Aws\Sts\Exception\MissingParameterException' => __DIR__ . '/Aws/Sts/Exception/MissingParameterException.php',
		'Aws\Sts\Exception\OptInRequiredException' => __DIR__ . '/Aws/Sts/Exception/OptInRequiredException.php',
		'Aws\Sts\Exception\PackedPolicyTooLargeException' => __DIR__ . '/Aws/Sts/Exception/PackedPolicyTooLargeException.php',
		'Aws\Sts\Exception\RequestExpiredException' => __DIR__ . '/Aws/Sts/Exception/RequestExpiredException.php',
		'Aws\Sts\Exception\ServiceUnavailableException' => __DIR__ . '/Aws/Sts/Exception/ServiceUnavailableException.php',
		'Aws\Sts\Exception\StsException' => __DIR__ . '/Aws/Sts/Exception/StsException.php',
		'Aws\Sts\Exception\ThrottlingException' => __DIR__ . '/Aws/Sts/Exception/ThrottlingException.php',
		'Aws\Sts\Resources\sts-2011-06-15' => __DIR__ . '/Aws/Sts/Resources/sts-2011-06-15.php',
		'Aws\Sts\StsClient' => __DIR__ . '/Aws/Sts/StsClient.php',
		'Aws\Support\Exception\CaseCreationLimitExceededException' => __DIR__ . '/Aws/Support/Exception/CaseCreationLimitExceededException.php',
		'Aws\Support\Exception\CaseIdNotFoundException' => __DIR__ . '/Aws/Support/Exception/CaseIdNotFoundException.php',
		'Aws\Support\Exception\InternalServerErrorException' => __DIR__ . '/Aws/Support/Exception/InternalServerErrorException.php',
		'Aws\Support\Exception\SupportException' => __DIR__ . '/Aws/Support/Exception/SupportException.php',
		'Aws\Support\Resources\support-2013-04-15' => __DIR__ . '/Aws/Support/Resources/support-2013-04-15.php',
		'Aws\Support\SupportClient' => __DIR__ . '/Aws/Support/SupportClient.php',
		'Aws\Swf\Enum\ActivityTaskTimeoutType' => __DIR__ . '/Aws/Swf/Enum/ActivityTaskTimeoutType.php',
		'Aws\Swf\Enum\ChildPolicy' => __DIR__ . '/Aws/Swf/Enum/ChildPolicy.php',
		'Aws\Swf\Enum\CloseStatus' => __DIR__ . '/Aws/Swf/Enum/CloseStatus.php',
		'Aws\Swf\Enum\DecisionTaskTimeoutType' => __DIR__ . '/Aws/Swf/Enum/DecisionTaskTimeoutType.php',
		'Aws\Swf\Enum\DecisionType' => __DIR__ . '/Aws/Swf/Enum/DecisionType.php',
		'Aws\Swf\Enum\EventType' => __DIR__ . '/Aws/Swf/Enum/EventType.php',
		'Aws\Swf\Enum\ExecutionStatus' => __DIR__ . '/Aws/Swf/Enum/ExecutionStatus.php',
		'Aws\Swf\Enum\RegistrationStatus' => __DIR__ . '/Aws/Swf/Enum/RegistrationStatus.php',
		'Aws\Swf\Enum\WorkflowExecutionTimeoutType' => __DIR__ . '/Aws/Swf/Enum/WorkflowExecutionTimeoutType.php',
		'Aws\Swf\Exception\DefaultUndefinedException' => __DIR__ . '/Aws/Swf/Exception/DefaultUndefinedException.php',
		'Aws\Swf\Exception\DomainAlreadyExistsException' => __DIR__ . '/Aws/Swf/Exception/DomainAlreadyExistsException.php',
		'Aws\Swf\Exception\DomainDeprecatedException' => __DIR__ . '/Aws/Swf/Exception/DomainDeprecatedException.php',
		'Aws\Swf\Exception\LimitExceededException' => __DIR__ . '/Aws/Swf/Exception/LimitExceededException.php',
		'Aws\Swf\Exception\OperationNotPermittedException' => __DIR__ . '/Aws/Swf/Exception/OperationNotPermittedException.php',
		'Aws\Swf\Exception\SwfException' => __DIR__ . '/Aws/Swf/Exception/SwfException.php',
		'Aws\Swf\Exception\TypeAlreadyExistsException' => __DIR__ . '/Aws/Swf/Exception/TypeAlreadyExistsException.php',
		'Aws\Swf\Exception\TypeDeprecatedException' => __DIR__ . '/Aws/Swf/Exception/TypeDeprecatedException.php',
		'Aws\Swf\Exception\UnknownResourceException' => __DIR__ . '/Aws/Swf/Exception/UnknownResourceException.php',
		'Aws\Swf\Exception\WorkflowExecutionAlreadyStartedException' => __DIR__ . '/Aws/Swf/Exception/WorkflowExecutionAlreadyStartedException.php',
		'Aws\Swf\Resources\swf-2012-01-25' => __DIR__ . '/Aws/Swf/Resources/swf-2012-01-25.php',
		'Aws\Swf\SwfClient' => __DIR__ . '/Aws/Swf/SwfClient.php',
		'Aws\WorkSpaces\Exception\WorkSpacesException' => __DIR__ . '/Aws/WorkSpaces/Exception/WorkSpacesException.php',
		'Aws\WorkSpaces\Resources\workspaces-2015-04-08' => __DIR__ . '/Aws/WorkSpaces/Resources/workspaces-2015-04-08.php',
		'Aws\WorkSpaces\WorkSpacesClient' => __DIR__ . '/Aws/WorkSpaces/WorkSpacesClient.php',
		'Doctrine\Common\Cache\ApcCache' => __DIR__ . '/Doctrine/Common/Cache/ApcCache.php',
		'Doctrine\Common\Cache\ArrayCache' => __DIR__ . '/Doctrine/Common/Cache/ArrayCache.php',
		'Doctrine\Common\Cache\Cache' => __DIR__ . '/Doctrine/Common/Cache/Cache.php',
		'Doctrine\Common\Cache\CacheProvider' => __DIR__ . '/Doctrine/Common/Cache/CacheProvider.php',
		'Doctrine\Common\Cache\ChainCache' => __DIR__ . '/Doctrine/Common/Cache/ChainCache.php',
		'Doctrine\Common\Cache\ClearableCache' => __DIR__ . '/Doctrine/Common/Cache/ClearableCache.php',
		'Doctrine\Common\Cache\CouchbaseCache' => __DIR__ . '/Doctrine/Common/Cache/CouchbaseCache.php',
		'Doctrine\Common\Cache\FileCache' => __DIR__ . '/Doctrine/Common/Cache/FileCache.php',
		'Doctrine\Common\Cache\FilesystemCache' => __DIR__ . '/Doctrine/Common/Cache/FilesystemCache.php',
		'Doctrine\Common\Cache\FlushableCache' => __DIR__ . '/Doctrine/Common/Cache/FlushableCache.php',
		'Doctrine\Common\Cache\MemcacheCache' => __DIR__ . '/Doctrine/Common/Cache/MemcacheCache.php',
		'Doctrine\Common\Cache\MemcachedCache' => __DIR__ . '/Doctrine/Common/Cache/MemcachedCache.php',
		'Doctrine\Common\Cache\MongoDBCache' => __DIR__ . '/Doctrine/Common/Cache/MongoDBCache.php',
		'Doctrine\Common\Cache\MultiGetCache' => __DIR__ . '/Doctrine/Common/Cache/MultiGetCache.php',
		'Doctrine\Common\Cache\PhpFileCache' => __DIR__ . '/Doctrine/Common/Cache/PhpFileCache.php',
		'Doctrine\Common\Cache\PredisCache' => __DIR__ . '/Doctrine/Common/Cache/PredisCache.php',
		'Doctrine\Common\Cache\RedisCache' => __DIR__ . '/Doctrine/Common/Cache/RedisCache.php',
		'Doctrine\Common\Cache\RiakCache' => __DIR__ . '/Doctrine/Common/Cache/RiakCache.php',
		'Doctrine\Common\Cache\SQLite3Cache' => __DIR__ . '/Doctrine/Common/Cache/SQLite3Cache.php',
		'Doctrine\Common\Cache\Version' => __DIR__ . '/Doctrine/Common/Cache/Version.php',
		'Doctrine\Common\Cache\VoidCache' => __DIR__ . '/Doctrine/Common/Cache/VoidCache.php',
		'Doctrine\Common\Cache\WinCacheCache' => __DIR__ . '/Doctrine/Common/Cache/WinCacheCache.php',
		'Doctrine\Common\Cache\XcacheCache' => __DIR__ . '/Doctrine/Common/Cache/XcacheCache.php',
		'Doctrine\Common\Cache\ZendDataCache' => __DIR__ . '/Doctrine/Common/Cache/ZendDataCache.php',
		'Guzzle\Batch\AbstractBatchDecorator' => __DIR__ . '/Guzzle/Batch/AbstractBatchDecorator.php',
		'Guzzle\Batch\Batch' => __DIR__ . '/Guzzle/Batch/Batch.php',
		'Guzzle\Batch\BatchBuilder' => __DIR__ . '/Guzzle/Batch/BatchBuilder.php',
		'Guzzle\Batch\BatchClosureDivisor' => __DIR__ . '/Guzzle/Batch/BatchClosureDivisor.php',
		'Guzzle\Batch\BatchClosureTransfer' => __DIR__ . '/Guzzle/Batch/BatchClosureTransfer.php',
		'Guzzle\Batch\BatchCommandTransfer' => __DIR__ . '/Guzzle/Batch/BatchCommandTransfer.php',
		'Guzzle\Batch\BatchDivisorInterface' => __DIR__ . '/Guzzle/Batch/BatchDivisorInterface.php',
		'Guzzle\Batch\BatchInterface' => __DIR__ . '/Guzzle/Batch/BatchInterface.php',
		'Guzzle\Batch\BatchRequestTransfer' => __DIR__ . '/Guzzle/Batch/BatchRequestTransfer.php',
		'Guzzle\Batch\BatchSizeDivisor' => __DIR__ . '/Guzzle/Batch/BatchSizeDivisor.php',
		'Guzzle\Batch\BatchTransferInterface' => __DIR__ . '/Guzzle/Batch/BatchTransferInterface.php',
		'Guzzle\Batch\Exception\BatchTransferException' => __DIR__ . '/Guzzle/Batch/Exception/BatchTransferException.php',
		'Guzzle\Batch\ExceptionBufferingBatch' => __DIR__ . '/Guzzle/Batch/ExceptionBufferingBatch.php',
		'Guzzle\Batch\FlushingBatch' => __DIR__ . '/Guzzle/Batch/FlushingBatch.php',
		'Guzzle\Batch\HistoryBatch' => __DIR__ . '/Guzzle/Batch/HistoryBatch.php',
		'Guzzle\Batch\NotifyingBatch' => __DIR__ . '/Guzzle/Batch/NotifyingBatch.php',
		'Guzzle\Cache\AbstractCacheAdapter' => __DIR__ . '/Guzzle/Cache/AbstractCacheAdapter.php',
		'Guzzle\Cache\CacheAdapterFactory' => __DIR__ . '/Guzzle/Cache/CacheAdapterFactory.php',
		'Guzzle\Cache\CacheAdapterInterface' => __DIR__ . '/Guzzle/Cache/CacheAdapterInterface.php',
		'Guzzle\Cache\ClosureCacheAdapter' => __DIR__ . '/Guzzle/Cache/ClosureCacheAdapter.php',
		'Guzzle\Cache\DoctrineCacheAdapter' => __DIR__ . '/Guzzle/Cache/DoctrineCacheAdapter.php',
		'Guzzle\Cache\NullCacheAdapter' => __DIR__ . '/Guzzle/Cache/NullCacheAdapter.php',
		'Guzzle\Cache\Zf1CacheAdapter' => __DIR__ . '/Guzzle/Cache/Zf1CacheAdapter.php',
		'Guzzle\Cache\Zf2CacheAdapter' => __DIR__ . '/Guzzle/Cache/Zf2CacheAdapter.php',
		'Guzzle\Common\AbstractHasDispatcher' => __DIR__ . '/Guzzle/Common/AbstractHasDispatcher.php',
		'Guzzle\Common\Collection' => __DIR__ . '/Guzzle/Common/Collection.php',
		'Guzzle\Common\Event' => __DIR__ . '/Guzzle/Common/Event.php',
		'Guzzle\Common\Exception\BadMethodCallException' => __DIR__ . '/Guzzle/Common/Exception/BadMethodCallException.php',
		'Guzzle\Common\Exception\ExceptionCollection' => __DIR__ . '/Guzzle/Common/Exception/ExceptionCollection.php',
		'Guzzle\Common\Exception\GuzzleException' => __DIR__ . '/Guzzle/Common/Exception/GuzzleException.php',
		'Guzzle\Common\Exception\InvalidArgumentException' => __DIR__ . '/Guzzle/Common/Exception/InvalidArgumentException.php',
		'Guzzle\Common\Exception\RuntimeException' => __DIR__ . '/Guzzle/Common/Exception/RuntimeException.php',
		'Guzzle\Common\Exception\UnexpectedValueException' => __DIR__ . '/Guzzle/Common/Exception/UnexpectedValueException.php',
		'Guzzle\Common\FromConfigInterface' => __DIR__ . '/Guzzle/Common/FromConfigInterface.php',
		'Guzzle\Common\HasDispatcherInterface' => __DIR__ . '/Guzzle/Common/HasDispatcherInterface.php',
		'Guzzle\Common\ToArrayInterface' => __DIR__ . '/Guzzle/Common/ToArrayInterface.php',
		'Guzzle\Common\Version' => __DIR__ . '/Guzzle/Common/Version.php',
		'Guzzle\Http\AbstractEntityBodyDecorator' => __DIR__ . '/Guzzle/Http/AbstractEntityBodyDecorator.php',
		'Guzzle\Http\CachingEntityBody' => __DIR__ . '/Guzzle/Http/CachingEntityBody.php',
		'Guzzle\Http\Client' => __DIR__ . '/Guzzle/Http/Client.php',
		'Guzzle\Http\ClientInterface' => __DIR__ . '/Guzzle/Http/ClientInterface.php',
		'Guzzle\Http\Curl\CurlHandle' => __DIR__ . '/Guzzle/Http/Curl/CurlHandle.php',
		'Guzzle\Http\Curl\CurlMulti' => __DIR__ . '/Guzzle/Http/Curl/CurlMulti.php',
		'Guzzle\Http\Curl\CurlMultiInterface' => __DIR__ . '/Guzzle/Http/Curl/CurlMultiInterface.php',
		'Guzzle\Http\Curl\CurlMultiProxy' => __DIR__ . '/Guzzle/Http/Curl/CurlMultiProxy.php',
		'Guzzle\Http\Curl\CurlVersion' => __DIR__ . '/Guzzle/Http/Curl/CurlVersion.php',
		'Guzzle\Http\Curl\RequestMediator' => __DIR__ . '/Guzzle/Http/Curl/RequestMediator.php',
		'Guzzle\Http\EntityBody' => __DIR__ . '/Guzzle/Http/EntityBody.php',
		'Guzzle\Http\EntityBodyInterface' => __DIR__ . '/Guzzle/Http/EntityBodyInterface.php',
		'Guzzle\Http\Exception\BadResponseException' => __DIR__ . '/Guzzle/Http/Exception/BadResponseException.php',
		'Guzzle\Http\Exception\ClientErrorResponseException' => __DIR__ . '/Guzzle/Http/Exception/ClientErrorResponseException.php',
		'Guzzle\Http\Exception\CouldNotRewindStreamException' => __DIR__ . '/Guzzle/Http/Exception/CouldNotRewindStreamException.php',
		'Guzzle\Http\Exception\CurlException' => __DIR__ . '/Guzzle/Http/Exception/CurlException.php',
		'Guzzle\Http\Exception\HttpException' => __DIR__ . '/Guzzle/Http/Exception/HttpException.php',
		'Guzzle\Http\Exception\MultiTransferException' => __DIR__ . '/Guzzle/Http/Exception/MultiTransferException.php',
		'Guzzle\Http\Exception\RequestException' => __DIR__ . '/Guzzle/Http/Exception/RequestException.php',
		'Guzzle\Http\Exception\ServerErrorResponseException' => __DIR__ . '/Guzzle/Http/Exception/ServerErrorResponseException.php',
		'Guzzle\Http\Exception\TooManyRedirectsException' => __DIR__ . '/Guzzle/Http/Exception/TooManyRedirectsException.php',
		'Guzzle\Http\IoEmittingEntityBody' => __DIR__ . '/Guzzle/Http/IoEmittingEntityBody.php',
		'Guzzle\Http\Message\AbstractMessage' => __DIR__ . '/Guzzle/Http/Message/AbstractMessage.php',
		'Guzzle\Http\Message\EntityEnclosingRequest' => __DIR__ . '/Guzzle/Http/Message/EntityEnclosingRequest.php',
		'Guzzle\Http\Message\EntityEnclosingRequestInterface' => __DIR__ . '/Guzzle/Http/Message/EntityEnclosingRequestInterface.php',
		'Guzzle\Http\Message\Header\CacheControl' => __DIR__ . '/Guzzle/Http/Message/Header/CacheControl.php',
		'Guzzle\Http\Message\Header\HeaderCollection' => __DIR__ . '/Guzzle/Http/Message/Header/HeaderCollection.php',
		'Guzzle\Http\Message\Header\HeaderFactory' => __DIR__ . '/Guzzle/Http/Message/Header/HeaderFactory.php',
		'Guzzle\Http\Message\Header\HeaderFactoryInterface' => __DIR__ . '/Guzzle/Http/Message/Header/HeaderFactoryInterface.php',
		'Guzzle\Http\Message\Header\HeaderInterface' => __DIR__ . '/Guzzle/Http/Message/Header/HeaderInterface.php',
		'Guzzle\Http\Message\Header\Link' => __DIR__ . '/Guzzle/Http/Message/Header/Link.php',
		'Guzzle\Http\Message\Header' => __DIR__ . '/Guzzle/Http/Message/Header.php',
		'Guzzle\Http\Message\MessageInterface' => __DIR__ . '/Guzzle/Http/Message/MessageInterface.php',
		'Guzzle\Http\Message\PostFile' => __DIR__ . '/Guzzle/Http/Message/PostFile.php',
		'Guzzle\Http\Message\PostFileInterface' => __DIR__ . '/Guzzle/Http/Message/PostFileInterface.php',
		'Guzzle\Http\Message\Request' => __DIR__ . '/Guzzle/Http/Message/Request.php',
		'Guzzle\Http\Message\RequestFactory' => __DIR__ . '/Guzzle/Http/Message/RequestFactory.php',
		'Guzzle\Http\Message\RequestFactoryInterface' => __DIR__ . '/Guzzle/Http/Message/RequestFactoryInterface.php',
		'Guzzle\Http\Message\RequestInterface' => __DIR__ . '/Guzzle/Http/Message/RequestInterface.php',
		'Guzzle\Http\Message\Response' => __DIR__ . '/Guzzle/Http/Message/Response.php',
		'Guzzle\Http\Mimetypes' => __DIR__ . '/Guzzle/Http/Mimetypes.php',
		'Guzzle\Http\QueryAggregator\CommaAggregator' => __DIR__ . '/Guzzle/Http/QueryAggregator/CommaAggregator.php',
		'Guzzle\Http\QueryAggregator\DuplicateAggregator' => __DIR__ . '/Guzzle/Http/QueryAggregator/DuplicateAggregator.php',
		'Guzzle\Http\QueryAggregator\PhpAggregator' => __DIR__ . '/Guzzle/Http/QueryAggregator/PhpAggregator.php',
		'Guzzle\Http\QueryAggregator\QueryAggregatorInterface' => __DIR__ . '/Guzzle/Http/QueryAggregator/QueryAggregatorInterface.php',
		'Guzzle\Http\QueryString' => __DIR__ . '/Guzzle/Http/QueryString.php',
		'Guzzle\Http\ReadLimitEntityBody' => __DIR__ . '/Guzzle/Http/ReadLimitEntityBody.php',
		'Guzzle\Http\RedirectPlugin' => __DIR__ . '/Guzzle/Http/RedirectPlugin.php',
		'Guzzle\Http\StaticClient' => __DIR__ . '/Guzzle/Http/StaticClient.php',
		'Guzzle\Http\Url' => __DIR__ . '/Guzzle/Http/Url.php',
		'Guzzle\Inflection\Inflector' => __DIR__ . '/Guzzle/Inflection/Inflector.php',
		'Guzzle\Inflection\InflectorInterface' => __DIR__ . '/Guzzle/Inflection/InflectorInterface.php',
		'Guzzle\Inflection\MemoizingInflector' => __DIR__ . '/Guzzle/Inflection/MemoizingInflector.php',
		'Guzzle\Inflection\PreComputedInflector' => __DIR__ . '/Guzzle/Inflection/PreComputedInflector.php',
		'Guzzle\Iterator\AppendIterator' => __DIR__ . '/Guzzle/Iterator/AppendIterator.php',
		'Guzzle\Iterator\ChunkedIterator' => __DIR__ . '/Guzzle/Iterator/ChunkedIterator.php',
		'Guzzle\Iterator\FilterIterator' => __DIR__ . '/Guzzle/Iterator/FilterIterator.php',
		'Guzzle\Iterator\MapIterator' => __DIR__ . '/Guzzle/Iterator/MapIterator.php',
		'Guzzle\Iterator\MethodProxyIterator' => __DIR__ . '/Guzzle/Iterator/MethodProxyIterator.php',
		'Guzzle\Log\AbstractLogAdapter' => __DIR__ . '/Guzzle/Log/AbstractLogAdapter.php',
		'Guzzle\Log\ArrayLogAdapter' => __DIR__ . '/Guzzle/Log/ArrayLogAdapter.php',
		'Guzzle\Log\ClosureLogAdapter' => __DIR__ . '/Guzzle/Log/ClosureLogAdapter.php',
		'Guzzle\Log\LogAdapterInterface' => __DIR__ . '/Guzzle/Log/LogAdapterInterface.php',
		'Guzzle\Log\MessageFormatter' => __DIR__ . '/Guzzle/Log/MessageFormatter.php',
		'Guzzle\Log\MonologLogAdapter' => __DIR__ . '/Guzzle/Log/MonologLogAdapter.php',
		'Guzzle\Log\PsrLogAdapter' => __DIR__ . '/Guzzle/Log/PsrLogAdapter.php',
		'Guzzle\Log\Zf1LogAdapter' => __DIR__ . '/Guzzle/Log/Zf1LogAdapter.php',
		'Guzzle\Log\Zf2LogAdapter' => __DIR__ . '/Guzzle/Log/Zf2LogAdapter.php',
		'Guzzle\Parser\Cookie\CookieParser' => __DIR__ . '/Guzzle/Parser/Cookie/CookieParser.php',
		'Guzzle\Parser\Cookie\CookieParserInterface' => __DIR__ . '/Guzzle/Parser/Cookie/CookieParserInterface.php',
		'Guzzle\Parser\Message\AbstractMessageParser' => __DIR__ . '/Guzzle/Parser/Message/AbstractMessageParser.php',
		'Guzzle\Parser\Message\MessageParser' => __DIR__ . '/Guzzle/Parser/Message/MessageParser.php',
		'Guzzle\Parser\Message\MessageParserInterface' => __DIR__ . '/Guzzle/Parser/Message/MessageParserInterface.php',
		'Guzzle\Parser\Message\PeclHttpMessageParser' => __DIR__ . '/Guzzle/Parser/Message/PeclHttpMessageParser.php',
		'Guzzle\Parser\ParserRegistry' => __DIR__ . '/Guzzle/Parser/ParserRegistry.php',
		'Guzzle\Parser\UriTemplate\PeclUriTemplate' => __DIR__ . '/Guzzle/Parser/UriTemplate/PeclUriTemplate.php',
		'Guzzle\Parser\UriTemplate\UriTemplate' => __DIR__ . '/Guzzle/Parser/UriTemplate/UriTemplate.php',
		'Guzzle\Parser\UriTemplate\UriTemplateInterface' => __DIR__ . '/Guzzle/Parser/UriTemplate/UriTemplateInterface.php',
		'Guzzle\Parser\Url\UrlParser' => __DIR__ . '/Guzzle/Parser/Url/UrlParser.php',
		'Guzzle\Parser\Url\UrlParserInterface' => __DIR__ . '/Guzzle/Parser/Url/UrlParserInterface.php',
		'Guzzle\Plugin\Async\AsyncPlugin' => __DIR__ . '/Guzzle/Plugin/Async/AsyncPlugin.php',
		'Guzzle\Plugin\Backoff\AbstractBackoffStrategy' => __DIR__ . '/Guzzle/Plugin/Backoff/AbstractBackoffStrategy.php',
		'Guzzle\Plugin\Backoff\AbstractErrorCodeBackoffStrategy' => __DIR__ . '/Guzzle/Plugin/Backoff/AbstractErrorCodeBackoffStrategy.php',
		'Guzzle\Plugin\Backoff\BackoffLogger' => __DIR__ . '/Guzzle/Plugin/Backoff/BackoffLogger.php',
		'Guzzle\Plugin\Backoff\BackoffPlugin' => __DIR__ . '/Guzzle/Plugin/Backoff/BackoffPlugin.php',
		'Guzzle\Plugin\Backoff\BackoffStrategyInterface' => __DIR__ . '/Guzzle/Plugin/Backoff/BackoffStrategyInterface.php',
		'Guzzle\Plugin\Backoff\CallbackBackoffStrategy' => __DIR__ . '/Guzzle/Plugin/Backoff/CallbackBackoffStrategy.php',
		'Guzzle\Plugin\Backoff\ConstantBackoffStrategy' => __DIR__ . '/Guzzle/Plugin/Backoff/ConstantBackoffStrategy.php',
		'Guzzle\Plugin\Backoff\CurlBackoffStrategy' => __DIR__ . '/Guzzle/Plugin/Backoff/CurlBackoffStrategy.php',
		'Guzzle\Plugin\Backoff\ExponentialBackoffStrategy' => __DIR__ . '/Guzzle/Plugin/Backoff/ExponentialBackoffStrategy.php',
		'Guzzle\Plugin\Backoff\HttpBackoffStrategy' => __DIR__ . '/Guzzle/Plugin/Backoff/HttpBackoffStrategy.php',
		'Guzzle\Plugin\Backoff\LinearBackoffStrategy' => __DIR__ . '/Guzzle/Plugin/Backoff/LinearBackoffStrategy.php',
		'Guzzle\Plugin\Backoff\ReasonPhraseBackoffStrategy' => __DIR__ . '/Guzzle/Plugin/Backoff/ReasonPhraseBackoffStrategy.php',
		'Guzzle\Plugin\Backoff\TruncatedBackoffStrategy' => __DIR__ . '/Guzzle/Plugin/Backoff/TruncatedBackoffStrategy.php',
		'Guzzle\Plugin\Cache\CacheKeyProviderInterface' => __DIR__ . '/Guzzle/Plugin/Cache/CacheKeyProviderInterface.php',
		'Guzzle\Plugin\Cache\CachePlugin' => __DIR__ . '/Guzzle/Plugin/Cache/CachePlugin.php',
		'Guzzle\Plugin\Cache\CacheStorageInterface' => __DIR__ . '/Guzzle/Plugin/Cache/CacheStorageInterface.php',
		'Guzzle\Plugin\Cache\CallbackCanCacheStrategy' => __DIR__ . '/Guzzle/Plugin/Cache/CallbackCanCacheStrategy.php',
		'Guzzle\Plugin\Cache\CanCacheStrategyInterface' => __DIR__ . '/Guzzle/Plugin/Cache/CanCacheStrategyInterface.php',
		'Guzzle\Plugin\Cache\DefaultCacheKeyProvider' => __DIR__ . '/Guzzle/Plugin/Cache/DefaultCacheKeyProvider.php',
		'Guzzle\Plugin\Cache\DefaultCacheStorage' => __DIR__ . '/Guzzle/Plugin/Cache/DefaultCacheStorage.php',
		'Guzzle\Plugin\Cache\DefaultCanCacheStrategy' => __DIR__ . '/Guzzle/Plugin/Cache/DefaultCanCacheStrategy.php',
		'Guzzle\Plugin\Cache\DefaultRevalidation' => __DIR__ . '/Guzzle/Plugin/Cache/DefaultRevalidation.php',
		'Guzzle\Plugin\Cache\DenyRevalidation' => __DIR__ . '/Guzzle/Plugin/Cache/DenyRevalidation.php',
		'Guzzle\Plugin\Cache\RevalidationInterface' => __DIR__ . '/Guzzle/Plugin/Cache/RevalidationInterface.php',
		'Guzzle\Plugin\Cache\SkipRevalidation' => __DIR__ . '/Guzzle/Plugin/Cache/SkipRevalidation.php',
		'Guzzle\Plugin\Cookie\Cookie' => __DIR__ . '/Guzzle/Plugin/Cookie/Cookie.php',
		'Guzzle\Plugin\Cookie\CookieJar\ArrayCookieJar' => __DIR__ . '/Guzzle/Plugin/Cookie/CookieJar/ArrayCookieJar.php',
		'Guzzle\Plugin\Cookie\CookieJar\CookieJarInterface' => __DIR__ . '/Guzzle/Plugin/Cookie/CookieJar/CookieJarInterface.php',
		'Guzzle\Plugin\Cookie\CookieJar\FileCookieJar' => __DIR__ . '/Guzzle/Plugin/Cookie/CookieJar/FileCookieJar.php',
		'Guzzle\Plugin\Cookie\CookiePlugin' => __DIR__ . '/Guzzle/Plugin/Cookie/CookiePlugin.php',
		'Guzzle\Plugin\Cookie\Exception\InvalidCookieException' => __DIR__ . '/Guzzle/Plugin/Cookie/Exception/InvalidCookieException.php',
		'Guzzle\Plugin\CurlAuth\CurlAuthPlugin' => __DIR__ . '/Guzzle/Plugin/CurlAuth/CurlAuthPlugin.php',
		'Guzzle\Plugin\ErrorResponse\ErrorResponseExceptionInterface' => __DIR__ . '/Guzzle/Plugin/ErrorResponse/ErrorResponseExceptionInterface.php',
		'Guzzle\Plugin\ErrorResponse\ErrorResponsePlugin' => __DIR__ . '/Guzzle/Plugin/ErrorResponse/ErrorResponsePlugin.php',
		'Guzzle\Plugin\ErrorResponse\Exception\ErrorResponseException' => __DIR__ . '/Guzzle/Plugin/ErrorResponse/Exception/ErrorResponseException.php',
		'Guzzle\Plugin\History\HistoryPlugin' => __DIR__ . '/Guzzle/Plugin/History/HistoryPlugin.php',
		'Guzzle\Plugin\Log\LogPlugin' => __DIR__ . '/Guzzle/Plugin/Log/LogPlugin.php',
		'Guzzle\Plugin\Md5\CommandContentMd5Plugin' => __DIR__ . '/Guzzle/Plugin/Md5/CommandContentMd5Plugin.php',
		'Guzzle\Plugin\Md5\Md5ValidatorPlugin' => __DIR__ . '/Guzzle/Plugin/Md5/Md5ValidatorPlugin.php',
		'Guzzle\Plugin\Mock\MockPlugin' => __DIR__ . '/Guzzle/Plugin/Mock/MockPlugin.php',
		'Guzzle\Plugin\Oauth\OauthPlugin' => __DIR__ . '/Guzzle/Plugin/Oauth/OauthPlugin.php',
		'Guzzle\Service\AbstractConfigLoader' => __DIR__ . '/Guzzle/Service/AbstractConfigLoader.php',
		'Guzzle\Service\Builder\ServiceBuilder' => __DIR__ . '/Guzzle/Service/Builder/ServiceBuilder.php',
		'Guzzle\Service\Builder\ServiceBuilderInterface' => __DIR__ . '/Guzzle/Service/Builder/ServiceBuilderInterface.php',
		'Guzzle\Service\Builder\ServiceBuilderLoader' => __DIR__ . '/Guzzle/Service/Builder/ServiceBuilderLoader.php',
		'Guzzle\Service\CachingConfigLoader' => __DIR__ . '/Guzzle/Service/CachingConfigLoader.php',
		'Guzzle\Service\Client' => __DIR__ . '/Guzzle/Service/Client.php',
		'Guzzle\Service\ClientInterface' => __DIR__ . '/Guzzle/Service/ClientInterface.php',
		'Guzzle\Service\Command\AbstractCommand' => __DIR__ . '/Guzzle/Service/Command/AbstractCommand.php',
		'Guzzle\Service\Command\ClosureCommand' => __DIR__ . '/Guzzle/Service/Command/ClosureCommand.php',
		'Guzzle\Service\Command\CommandInterface' => __DIR__ . '/Guzzle/Service/Command/CommandInterface.php',
		'Guzzle\Service\Command\CreateResponseClassEvent' => __DIR__ . '/Guzzle/Service/Command/CreateResponseClassEvent.php',
		'Guzzle\Service\Command\DefaultRequestSerializer' => __DIR__ . '/Guzzle/Service/Command/DefaultRequestSerializer.php',
		'Guzzle\Service\Command\DefaultResponseParser' => __DIR__ . '/Guzzle/Service/Command/DefaultResponseParser.php',
		'Guzzle\Service\Command\Factory\AliasFactory' => __DIR__ . '/Guzzle/Service/Command/Factory/AliasFactory.php',
		'Guzzle\Service\Command\Factory\CompositeFactory' => __DIR__ . '/Guzzle/Service/Command/Factory/CompositeFactory.php',
		'Guzzle\Service\Command\Factory\ConcreteClassFactory' => __DIR__ . '/Guzzle/Service/Command/Factory/ConcreteClassFactory.php',
		'Guzzle\Service\Command\Factory\FactoryInterface' => __DIR__ . '/Guzzle/Service/Command/Factory/FactoryInterface.php',
		'Guzzle\Service\Command\Factory\MapFactory' => __DIR__ . '/Guzzle/Service/Command/Factory/MapFactory.php',
		'Guzzle\Service\Command\Factory\ServiceDescriptionFactory' => __DIR__ . '/Guzzle/Service/Command/Factory/ServiceDescriptionFactory.php',
		'Guzzle\Service\Command\LocationVisitor\Request\AbstractRequestVisitor' => __DIR__ . '/Guzzle/Service/Command/LocationVisitor/Request/AbstractRequestVisitor.php',
		'Guzzle\Service\Command\LocationVisitor\Request\BodyVisitor' => __DIR__ . '/Guzzle/Service/Command/LocationVisitor/Request/BodyVisitor.php',
		'Guzzle\Service\Command\LocationVisitor\Request\HeaderVisitor' => __DIR__ . '/Guzzle/Service/Command/LocationVisitor/Request/HeaderVisitor.php',
		'Guzzle\Service\Command\LocationVisitor\Request\JsonVisitor' => __DIR__ . '/Guzzle/Service/Command/LocationVisitor/Request/JsonVisitor.php',
		'Guzzle\Service\Command\LocationVisitor\Request\PostFieldVisitor' => __DIR__ . '/Guzzle/Service/Command/LocationVisitor/Request/PostFieldVisitor.php',
		'Guzzle\Service\Command\LocationVisitor\Request\PostFileVisitor' => __DIR__ . '/Guzzle/Service/Command/LocationVisitor/Request/PostFileVisitor.php',
		'Guzzle\Service\Command\LocationVisitor\Request\QueryVisitor' => __DIR__ . '/Guzzle/Service/Command/LocationVisitor/Request/QueryVisitor.php',
		'Guzzle\Service\Command\LocationVisitor\Request\RequestVisitorInterface' => __DIR__ . '/Guzzle/Service/Command/LocationVisitor/Request/RequestVisitorInterface.php',
		'Guzzle\Service\Command\LocationVisitor\Request\ResponseBodyVisitor' => __DIR__ . '/Guzzle/Service/Command/LocationVisitor/Request/ResponseBodyVisitor.php',
		'Guzzle\Service\Command\LocationVisitor\Request\XmlVisitor' => __DIR__ . '/Guzzle/Service/Command/LocationVisitor/Request/XmlVisitor.php',
		'Guzzle\Service\Command\LocationVisitor\Response\AbstractResponseVisitor' => __DIR__ . '/Guzzle/Service/Command/LocationVisitor/Response/AbstractResponseVisitor.php',
		'Guzzle\Service\Command\LocationVisitor\Response\BodyVisitor' => __DIR__ . '/Guzzle/Service/Command/LocationVisitor/Response/BodyVisitor.php',
		'Guzzle\Service\Command\LocationVisitor\Response\HeaderVisitor' => __DIR__ . '/Guzzle/Service/Command/LocationVisitor/Response/HeaderVisitor.php',
		'Guzzle\Service\Command\LocationVisitor\Response\JsonVisitor' => __DIR__ . '/Guzzle/Service/Command/LocationVisitor/Response/JsonVisitor.php',
		'Guzzle\Service\Command\LocationVisitor\Response\ReasonPhraseVisitor' => __DIR__ . '/Guzzle/Service/Command/LocationVisitor/Response/ReasonPhraseVisitor.php',
		'Guzzle\Service\Command\LocationVisitor\Response\ResponseVisitorInterface' => __DIR__ . '/Guzzle/Service/Command/LocationVisitor/Response/ResponseVisitorInterface.php',
		'Guzzle\Service\Command\LocationVisitor\Response\StatusCodeVisitor' => __DIR__ . '/Guzzle/Service/Command/LocationVisitor/Response/StatusCodeVisitor.php',
		'Guzzle\Service\Command\LocationVisitor\Response\XmlVisitor' => __DIR__ . '/Guzzle/Service/Command/LocationVisitor/Response/XmlVisitor.php',
		'Guzzle\Service\Command\LocationVisitor\VisitorFlyweight' => __DIR__ . '/Guzzle/Service/Command/LocationVisitor/VisitorFlyweight.php',
		'Guzzle\Service\Command\OperationCommand' => __DIR__ . '/Guzzle/Service/Command/OperationCommand.php',
		'Guzzle\Service\Command\OperationResponseParser' => __DIR__ . '/Guzzle/Service/Command/OperationResponseParser.php',
		'Guzzle\Service\Command\RequestSerializerInterface' => __DIR__ . '/Guzzle/Service/Command/RequestSerializerInterface.php',
		'Guzzle\Service\Command\ResponseClassInterface' => __DIR__ . '/Guzzle/Service/Command/ResponseClassInterface.php',
		'Guzzle\Service\Command\ResponseParserInterface' => __DIR__ . '/Guzzle/Service/Command/ResponseParserInterface.php',
		'Guzzle\Service\ConfigLoaderInterface' => __DIR__ . '/Guzzle/Service/ConfigLoaderInterface.php',
		'Guzzle\Service\Description\Operation' => __DIR__ . '/Guzzle/Service/Description/Operation.php',
		'Guzzle\Service\Description\OperationInterface' => __DIR__ . '/Guzzle/Service/Description/OperationInterface.php',
		'Guzzle\Service\Description\Parameter' => __DIR__ . '/Guzzle/Service/Description/Parameter.php',
		'Guzzle\Service\Description\SchemaFormatter' => __DIR__ . '/Guzzle/Service/Description/SchemaFormatter.php',
		'Guzzle\Service\Description\SchemaValidator' => __DIR__ . '/Guzzle/Service/Description/SchemaValidator.php',
		'Guzzle\Service\Description\ServiceDescription' => __DIR__ . '/Guzzle/Service/Description/ServiceDescription.php',
		'Guzzle\Service\Description\ServiceDescriptionInterface' => __DIR__ . '/Guzzle/Service/Description/ServiceDescriptionInterface.php',
		'Guzzle\Service\Description\ServiceDescriptionLoader' => __DIR__ . '/Guzzle/Service/Description/ServiceDescriptionLoader.php',
		'Guzzle\Service\Description\ValidatorInterface' => __DIR__ . '/Guzzle/Service/Description/ValidatorInterface.php',
		'Guzzle\Service\Exception\CommandException' => __DIR__ . '/Guzzle/Service/Exception/CommandException.php',
		'Guzzle\Service\Exception\CommandTransferException' => __DIR__ . '/Guzzle/Service/Exception/CommandTransferException.php',
		'Guzzle\Service\Exception\DescriptionBuilderException' => __DIR__ . '/Guzzle/Service/Exception/DescriptionBuilderException.php',
		'Guzzle\Service\Exception\InconsistentClientTransferException' => __DIR__ . '/Guzzle/Service/Exception/InconsistentClientTransferException.php',
		'Guzzle\Service\Exception\ResponseClassException' => __DIR__ . '/Guzzle/Service/Exception/ResponseClassException.php',
		'Guzzle\Service\Exception\ServiceBuilderException' => __DIR__ . '/Guzzle/Service/Exception/ServiceBuilderException.php',
		'Guzzle\Service\Exception\ServiceNotFoundException' => __DIR__ . '/Guzzle/Service/Exception/ServiceNotFoundException.php',
		'Guzzle\Service\Exception\ValidationException' => __DIR__ . '/Guzzle/Service/Exception/ValidationException.php',
		'Guzzle\Service\Resource\AbstractResourceIteratorFactory' => __DIR__ . '/Guzzle/Service/Resource/AbstractResourceIteratorFactory.php',
		'Guzzle\Service\Resource\CompositeResourceIteratorFactory' => __DIR__ . '/Guzzle/Service/Resource/CompositeResourceIteratorFactory.php',
		'Guzzle\Service\Resource\MapResourceIteratorFactory' => __DIR__ . '/Guzzle/Service/Resource/MapResourceIteratorFactory.php',
		'Guzzle\Service\Resource\Model' => __DIR__ . '/Guzzle/Service/Resource/Model.php',
		'Guzzle\Service\Resource\ResourceIterator' => __DIR__ . '/Guzzle/Service/Resource/ResourceIterator.php',
		'Guzzle\Service\Resource\ResourceIteratorApplyBatched' => __DIR__ . '/Guzzle/Service/Resource/ResourceIteratorApplyBatched.php',
		'Guzzle\Service\Resource\ResourceIteratorClassFactory' => __DIR__ . '/Guzzle/Service/Resource/ResourceIteratorClassFactory.php',
		'Guzzle\Service\Resource\ResourceIteratorFactoryInterface' => __DIR__ . '/Guzzle/Service/Resource/ResourceIteratorFactoryInterface.php',
		'Guzzle\Service\Resource\ResourceIteratorInterface' => __DIR__ . '/Guzzle/Service/Resource/ResourceIteratorInterface.php',
		'Guzzle\Stream\PhpStreamRequestFactory' => __DIR__ . '/Guzzle/Stream/PhpStreamRequestFactory.php',
		'Guzzle\Stream\Stream' => __DIR__ . '/Guzzle/Stream/Stream.php',
		'Guzzle\Stream\StreamInterface' => __DIR__ . '/Guzzle/Stream/StreamInterface.php',
		'Guzzle\Stream\StreamRequestFactoryInterface' => __DIR__ . '/Guzzle/Stream/StreamRequestFactoryInterface.php',
		'Monolog\ErrorHandler' => __DIR__ . '/Monolog/ErrorHandler.php',
		'Monolog\Formatter\ChromePHPFormatter' => __DIR__ . '/Monolog/Formatter/ChromePHPFormatter.php',
		'Monolog\Formatter\ElasticaFormatter' => __DIR__ . '/Monolog/Formatter/ElasticaFormatter.php',
		'Monolog\Formatter\FlowdockFormatter' => __DIR__ . '/Monolog/Formatter/FlowdockFormatter.php',
		'Monolog\Formatter\FormatterInterface' => __DIR__ . '/Monolog/Formatter/FormatterInterface.php',
		'Monolog\Formatter\GelfMessageFormatter' => __DIR__ . '/Monolog/Formatter/GelfMessageFormatter.php',
		'Monolog\Formatter\HtmlFormatter' => __DIR__ . '/Monolog/Formatter/HtmlFormatter.php',
		'Monolog\Formatter\JsonFormatter' => __DIR__ . '/Monolog/Formatter/JsonFormatter.php',
		'Monolog\Formatter\LineFormatter' => __DIR__ . '/Monolog/Formatter/LineFormatter.php',
		'Monolog\Formatter\LogglyFormatter' => __DIR__ . '/Monolog/Formatter/LogglyFormatter.php',
		'Monolog\Formatter\LogstashFormatter' => __DIR__ . '/Monolog/Formatter/LogstashFormatter.php',
		'Monolog\Formatter\MongoDBFormatter' => __DIR__ . '/Monolog/Formatter/MongoDBFormatter.php',
		'Monolog\Formatter\NormalizerFormatter' => __DIR__ . '/Monolog/Formatter/NormalizerFormatter.php',
		'Monolog\Formatter\ScalarFormatter' => __DIR__ . '/Monolog/Formatter/ScalarFormatter.php',
		'Monolog\Formatter\WildfireFormatter' => __DIR__ . '/Monolog/Formatter/WildfireFormatter.php',
		'Monolog\Handler\AbstractHandler' => __DIR__ . '/Monolog/Handler/AbstractHandler.php',
		'Monolog\Handler\AbstractProcessingHandler' => __DIR__ . '/Monolog/Handler/AbstractProcessingHandler.php',
		'Monolog\Handler\AbstractSyslogHandler' => __DIR__ . '/Monolog/Handler/AbstractSyslogHandler.php',
		'Monolog\Handler\AmqpHandler' => __DIR__ . '/Monolog/Handler/AmqpHandler.php',
		'Monolog\Handler\BrowserConsoleHandler' => __DIR__ . '/Monolog/Handler/BrowserConsoleHandler.php',
		'Monolog\Handler\BufferHandler' => __DIR__ . '/Monolog/Handler/BufferHandler.php',
		'Monolog\Handler\ChromePHPHandler' => __DIR__ . '/Monolog/Handler/ChromePHPHandler.php',
		'Monolog\Handler\CouchDBHandler' => __DIR__ . '/Monolog/Handler/CouchDBHandler.php',
		'Monolog\Handler\CubeHandler' => __DIR__ . '/Monolog/Handler/CubeHandler.php',
		'Monolog\Handler\Curl\Util' => __DIR__ . '/Monolog/Handler/Curl/Util.php',
		'Monolog\Handler\DoctrineCouchDBHandler' => __DIR__ . '/Monolog/Handler/DoctrineCouchDBHandler.php',
		'Monolog\Handler\DynamoDbHandler' => __DIR__ . '/Monolog/Handler/DynamoDbHandler.php',
		'Monolog\Handler\ElasticSearchHandler' => __DIR__ . '/Monolog/Handler/ElasticSearchHandler.php',
		'Monolog\Handler\ErrorLogHandler' => __DIR__ . '/Monolog/Handler/ErrorLogHandler.php',
		'Monolog\Handler\FilterHandler' => __DIR__ . '/Monolog/Handler/FilterHandler.php',
		'Monolog\Handler\FingersCrossed\ActivationStrategyInterface' => __DIR__ . '/Monolog/Handler/FingersCrossed/ActivationStrategyInterface.php',
		'Monolog\Handler\FingersCrossed\ChannelLevelActivationStrategy' => __DIR__ . '/Monolog/Handler/FingersCrossed/ChannelLevelActivationStrategy.php',
		'Monolog\Handler\FingersCrossed\ErrorLevelActivationStrategy' => __DIR__ . '/Monolog/Handler/FingersCrossed/ErrorLevelActivationStrategy.php',
		'Monolog\Handler\FingersCrossedHandler' => __DIR__ . '/Monolog/Handler/FingersCrossedHandler.php',
		'Monolog\Handler\FirePHPHandler' => __DIR__ . '/Monolog/Handler/FirePHPHandler.php',
		'Monolog\Handler\FleepHookHandler' => __DIR__ . '/Monolog/Handler/FleepHookHandler.php',
		'Monolog\Handler\FlowdockHandler' => __DIR__ . '/Monolog/Handler/FlowdockHandler.php',
		'Monolog\Handler\GelfHandler' => __DIR__ . '/Monolog/Handler/GelfHandler.php',
		'Monolog\Handler\GroupHandler' => __DIR__ . '/Monolog/Handler/GroupHandler.php',
		'Monolog\Handler\HandlerInterface' => __DIR__ . '/Monolog/Handler/HandlerInterface.php',
		'Monolog\Handler\HipChatHandler' => __DIR__ . '/Monolog/Handler/HipChatHandler.php',
		'Monolog\Handler\IFTTTHandler' => __DIR__ . '/Monolog/Handler/IFTTTHandler.php',
		'Monolog\Handler\LogEntriesHandler' => __DIR__ . '/Monolog/Handler/LogEntriesHandler.php',
		'Monolog\Handler\LogglyHandler' => __DIR__ . '/Monolog/Handler/LogglyHandler.php',
		'Monolog\Handler\MailHandler' => __DIR__ . '/Monolog/Handler/MailHandler.php',
		'Monolog\Handler\MandrillHandler' => __DIR__ . '/Monolog/Handler/MandrillHandler.php',
		'Monolog\Handler\MissingExtensionException' => __DIR__ . '/Monolog/Handler/MissingExtensionException.php',
		'Monolog\Handler\MongoDBHandler' => __DIR__ . '/Monolog/Handler/MongoDBHandler.php',
		'Monolog\Handler\NativeMailerHandler' => __DIR__ . '/Monolog/Handler/NativeMailerHandler.php',
		'Monolog\Handler\NewRelicHandler' => __DIR__ . '/Monolog/Handler/NewRelicHandler.php',
		'Monolog\Handler\NullHandler' => __DIR__ . '/Monolog/Handler/NullHandler.php',
		'Monolog\Handler\PHPConsoleHandler' => __DIR__ . '/Monolog/Handler/PHPConsoleHandler.php',
		'Monolog\Handler\PsrHandler' => __DIR__ . '/Monolog/Handler/PsrHandler.php',
		'Monolog\Handler\PushoverHandler' => __DIR__ . '/Monolog/Handler/PushoverHandler.php',
		'Monolog\Handler\RavenHandler' => __DIR__ . '/Monolog/Handler/RavenHandler.php',
		'Monolog\Handler\RedisHandler' => __DIR__ . '/Monolog/Handler/RedisHandler.php',
		'Monolog\Handler\RollbarHandler' => __DIR__ . '/Monolog/Handler/RollbarHandler.php',
		'Monolog\Handler\RotatingFileHandler' => __DIR__ . '/Monolog/Handler/RotatingFileHandler.php',
		'Monolog\Handler\SamplingHandler' => __DIR__ . '/Monolog/Handler/SamplingHandler.php',
		'Monolog\Handler\SlackHandler' => __DIR__ . '/Monolog/Handler/SlackHandler.php',
		'Monolog\Handler\SocketHandler' => __DIR__ . '/Monolog/Handler/SocketHandler.php',
		'Monolog\Handler\StreamHandler' => __DIR__ . '/Monolog/Handler/StreamHandler.php',
		'Monolog\Handler\SwiftMailerHandler' => __DIR__ . '/Monolog/Handler/SwiftMailerHandler.php',
		'Monolog\Handler\SyslogHandler' => __DIR__ . '/Monolog/Handler/SyslogHandler.php',
		'Monolog\Handler\SyslogUdp\UdpSocket' => __DIR__ . '/Monolog/Handler/SyslogUdp/UdpSocket.php',
		'Monolog\Handler\SyslogUdpHandler' => __DIR__ . '/Monolog/Handler/SyslogUdpHandler.php',
		'Monolog\Handler\TestHandler' => __DIR__ . '/Monolog/Handler/TestHandler.php',
		'Monolog\Handler\WhatFailureGroupHandler' => __DIR__ . '/Monolog/Handler/WhatFailureGroupHandler.php',
		'Monolog\Handler\ZendMonitorHandler' => __DIR__ . '/Monolog/Handler/ZendMonitorHandler.php',
		'Monolog\Logger' => __DIR__ . '/Monolog/Logger.php',
		'Monolog\Processor\GitProcessor' => __DIR__ . '/Monolog/Processor/GitProcessor.php',
		'Monolog\Processor\IntrospectionProcessor' => __DIR__ . '/Monolog/Processor/IntrospectionProcessor.php',
		'Monolog\Processor\MemoryPeakUsageProcessor' => __DIR__ . '/Monolog/Processor/MemoryPeakUsageProcessor.php',
		'Monolog\Processor\MemoryProcessor' => __DIR__ . '/Monolog/Processor/MemoryProcessor.php',
		'Monolog\Processor\MemoryUsageProcessor' => __DIR__ . '/Monolog/Processor/MemoryUsageProcessor.php',
		'Monolog\Processor\ProcessIdProcessor' => __DIR__ . '/Monolog/Processor/ProcessIdProcessor.php',
		'Monolog\Processor\PsrLogMessageProcessor' => __DIR__ . '/Monolog/Processor/PsrLogMessageProcessor.php',
		'Monolog\Processor\TagProcessor' => __DIR__ . '/Monolog/Processor/TagProcessor.php',
		'Monolog\Processor\UidProcessor' => __DIR__ . '/Monolog/Processor/UidProcessor.php',
		'Monolog\Processor\WebProcessor' => __DIR__ . '/Monolog/Processor/WebProcessor.php',
		'Monolog\Registry' => __DIR__ . '/Monolog/Registry.php',
		'Psr\Log\AbstractLogger' => __DIR__ . '/Psr/Log/AbstractLogger.php',
		'Psr\Log\InvalidArgumentException' => __DIR__ . '/Psr/Log/InvalidArgumentException.php',
		'Psr\Log\LoggerAwareInterface' => __DIR__ . '/Psr/Log/LoggerAwareInterface.php',
		'Psr\Log\LoggerAwareTrait' => __DIR__ . '/Psr/Log/LoggerAwareTrait.php',
		'Psr\Log\LoggerInterface' => __DIR__ . '/Psr/Log/LoggerInterface.php',
		'Psr\Log\LoggerTrait' => __DIR__ . '/Psr/Log/LoggerTrait.php',
		'Psr\Log\LogLevel' => __DIR__ . '/Psr/Log/LogLevel.php',
		'Psr\Log\NullLogger' => __DIR__ . '/Psr/Log/NullLogger.php',
		'Psr\Log\Test\LoggerInterfaceTest' => __DIR__ . '/Psr/Log/Test/LoggerInterfaceTest.php',
		'Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher' => __DIR__ . '/Symfony/Component/EventDispatcher/ContainerAwareEventDispatcher.php',
		'Symfony\Component\EventDispatcher\Debug\TraceableEventDispatcher' => __DIR__ . '/Symfony/Component/EventDispatcher/Debug/TraceableEventDispatcher.php',
		'Symfony\Component\EventDispatcher\Debug\TraceableEventDispatcherInterface' => __DIR__ . '/Symfony/Component/EventDispatcher/Debug/TraceableEventDispatcherInterface.php',
		'Symfony\Component\EventDispatcher\Debug\WrappedListener' => __DIR__ . '/Symfony/Component/EventDispatcher/Debug/WrappedListener.php',
		'Symfony\Component\EventDispatcher\DependencyInjection\RegisterListenersPass' => __DIR__ . '/Symfony/Component/EventDispatcher/DependencyInjection/RegisterListenersPass.php',
		'Symfony\Component\EventDispatcher\Event' => __DIR__ . '/Symfony/Component/EventDispatcher/Event.php',
		'Symfony\Component\EventDispatcher\EventDispatcher' => __DIR__ . '/Symfony/Component/EventDispatcher/EventDispatcher.php',
		'Symfony\Component\EventDispatcher\EventDispatcherInterface' => __DIR__ . '/Symfony/Component/EventDispatcher/EventDispatcherInterface.php',
		'Symfony\Component\EventDispatcher\EventSubscriberInterface' => __DIR__ . '/Symfony/Component/EventDispatcher/EventSubscriberInterface.php',
		'Symfony\Component\EventDispatcher\GenericEvent' => __DIR__ . '/Symfony/Component/EventDispatcher/GenericEvent.php',
		'Symfony\Component\EventDispatcher\ImmutableEventDispatcher' => __DIR__ . '/Symfony/Component/EventDispatcher/ImmutableEventDispatcher.php',
		'Symfony\Component\EventDispatcher\Tests\AbstractEventDispatcherTest' => __DIR__ . '/Symfony/Component/EventDispatcher/Tests/AbstractEventDispatcherTest.php',
		'Symfony\Component\EventDispatcher\Tests\ContainerAwareEventDispatcherTest' => __DIR__ . '/Symfony/Component/EventDispatcher/Tests/ContainerAwareEventDispatcherTest.php',
		'Symfony\Component\EventDispatcher\Tests\Debug\TraceableEventDispatcherTest' => __DIR__ . '/Symfony/Component/EventDispatcher/Tests/Debug/TraceableEventDispatcherTest.php',
		'Symfony\Component\EventDispatcher\Tests\DependencyInjection\RegisterListenersPassTest' => __DIR__ . '/Symfony/Component/EventDispatcher/Tests/DependencyInjection/RegisterListenersPassTest.php',
		'Symfony\Component\EventDispatcher\Tests\EventDispatcherTest' => __DIR__ . '/Symfony/Component/EventDispatcher/Tests/EventDispatcherTest.php',
		'Symfony\Component\EventDispatcher\Tests\EventTest' => __DIR__ . '/Symfony/Component/EventDispatcher/Tests/EventTest.php',
		'Symfony\Component\EventDispatcher\Tests\GenericEventTest' => __DIR__ . '/Symfony/Component/EventDispatcher/Tests/GenericEventTest.php',
		'Symfony\Component\EventDispatcher\Tests\ImmutableEventDispatcherTest' => __DIR__ . '/Symfony/Component/EventDispatcher/Tests/ImmutableEventDispatcherTest.php',
	);
	
	function dup_pro_aws_autoload($class)
	{
		$dup_pro_aws_mapping = $GLOBALS['dup_pro_aws_mapping'];

		if (isset($dup_pro_aws_mapping[$class]))
		{
			require $dup_pro_aws_mapping[$class];
		}
	}

	spl_autoload_register('dup_pro_aws_autoload', true);
}