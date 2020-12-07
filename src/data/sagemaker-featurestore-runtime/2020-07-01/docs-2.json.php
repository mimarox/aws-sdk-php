<?php
// This file was auto-generated from sdk-root/src/data/sagemaker-featurestore-runtime/2020-07-01/docs-2.json
return [ 'version' => '2.0', 'service' => '<p>Contains all data plane API operations and data types for the Amazon SageMaker Feature Store. Use this API to put, delete, and retrieve (get) features from a feature store.</p> <p>Use the following operations to configure your <code>OnlineStore</code> and <code>OfflineStore</code> features, and to create and manage feature groups:</p> <ul> <li> <p> <a href="https://docs.aws.amazon.com/sagemaker/latest/APIReference/API_CreateFeatureGroup.html">CreateFeatureGroup</a> </p> </li> <li> <p> <a href="https://docs.aws.amazon.com/sagemaker/latest/APIReference/API_DeleteFeatureGroup.html">DeleteFeatureGroup</a> </p> </li> <li> <p> <a href="https://docs.aws.amazon.com/sagemaker/latest/APIReference/API_DescribeFeatureGroup.html">DescribeFeatureGroup</a> </p> </li> <li> <p> <a href="https://docs.aws.amazon.com/sagemaker/latest/APIReference/API_ListFeatureGroups.html">ListFeatureGroups</a> </p> </li> </ul>', 'operations' => [ 'DeleteRecord' => '<p>Deletes a <code>Record</code> from a <code>FeatureGroup</code>. A new record will show up in the <code>OfflineStore</code> when the <code>DeleteRecord</code> API is called. This record will have a value of <code>True</code> in the <code>is_deleted</code> column.</p>', 'GetRecord' => '<p>Use for <code>OnlineStore</code> serving from a <code>FeatureStore</code>. Only the latest records stored in the <code>OnlineStore</code> can be retrieved. If no Record with <code>RecordIdentifierValue</code> is found, then an empty result is returned. </p>', 'PutRecord' => '<p>Used for data ingestion into the <code>FeatureStore</code>. The <code>PutRecord</code> API writes to both the <code>OnlineStore</code> and <code>OfflineStore</code>. If the record is the latest record for the <code>recordIdentifier</code>, the record is written to both the <code>OnlineStore</code> and <code>OfflineStore</code>. If the record is a historic record, it is written only to the <code>OfflineStore</code>.</p>', ], 'shapes' => [ 'AccessForbidden' => [ 'base' => '<p>You do not have permission to perform an action.</p>', 'refs' => [], ], 'DeleteRecordRequest' => [ 'base' => NULL, 'refs' => [], ], 'FeatureGroupName' => [ 'base' => NULL, 'refs' => [ 'DeleteRecordRequest$FeatureGroupName' => '<p>The name of the feature group to delete the record from. </p>', 'GetRecordRequest$FeatureGroupName' => '<p>The name of the feature group in which you want to put the records.</p>', 'PutRecordRequest$FeatureGroupName' => '<p>The name of the feature group that you want to insert the record into.</p>', ], ], 'FeatureName' => [ 'base' => NULL, 'refs' => [ 'FeatureNames$member' => NULL, 'FeatureValue$FeatureName' => '<p>The name of a feature that a feature value corresponds to.</p>', ], ], 'FeatureNames' => [ 'base' => NULL, 'refs' => [ 'GetRecordRequest$FeatureNames' => '<p>List of names of Features to be retrieved. If not specified, the latest value for all the Features are returned.</p>', ], ], 'FeatureValue' => [ 'base' => '<p>The value associated with a feature.</p>', 'refs' => [ 'Record$member' => NULL, ], ], 'GetRecordRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetRecordResponse' => [ 'base' => NULL, 'refs' => [], ], 'InternalFailure' => [ 'base' => '<p>An internal failure occurred. Try your request again. If the problem persists, contact AWS customer support.</p>', 'refs' => [], ], 'Message' => [ 'base' => NULL, 'refs' => [ 'AccessForbidden$Message' => NULL, 'InternalFailure$Message' => NULL, 'ResourceNotFound$Message' => NULL, 'ServiceUnavailable$Message' => NULL, 'ValidationError$Message' => NULL, ], ], 'PutRecordRequest' => [ 'base' => NULL, 'refs' => [], ], 'Record' => [ 'base' => NULL, 'refs' => [ 'GetRecordResponse$Record' => '<p>The record you requested. A list of <code>FeatureValues</code>.</p>', 'PutRecordRequest$Record' => '<p>List of FeatureValues to be inserted. This will be a full over-write. If you only want to update few of the feature values, do the following:</p> <ul> <li> <p>Use <code>GetRecord</code> to retrieve the latest record.</p> </li> <li> <p>Update the record returned from <code>GetRecord</code>. </p> </li> <li> <p>Use <code>PutRecord</code> to update feature values.</p> </li> </ul>', ], ], 'ResourceNotFound' => [ 'base' => '<p>A resource that is required to perform an action was not found.</p>', 'refs' => [], ], 'ServiceUnavailable' => [ 'base' => '<p>The service is currently unavailable.</p>', 'refs' => [], ], 'ValidationError' => [ 'base' => '<p>There was an error validating your request.</p>', 'refs' => [], ], 'ValueAsString' => [ 'base' => NULL, 'refs' => [ 'DeleteRecordRequest$RecordIdentifierValueAsString' => '<p>The value for the <code>RecordIdentifier</code> that uniquely identifies the record, in string format. </p>', 'DeleteRecordRequest$EventTime' => '<p>Timestamp indicating when the deletion event occurred. <code>EventTime</code> can be used to query data at a certain point in time.</p>', 'FeatureValue$ValueAsString' => '<p>The value associated with a feature, in string format. Note that features types can be String, Integral, or Fractional. This value represents all three types as a string.</p>', 'GetRecordRequest$RecordIdentifierValueAsString' => '<p>The value that corresponds to <code>RecordIdentifier</code> type and uniquely identifies the record in the <code>FeatureGroup</code>. </p>', ], ], ],];