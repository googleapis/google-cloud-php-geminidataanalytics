<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/geminidataanalytics/v1beta/data_chat_service.proto

namespace Google\Cloud\GeminiDataAnalytics\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A message produced during data retrieval.
 *
 * Generated from protobuf message <code>google.cloud.geminidataanalytics.v1beta.DataMessage</code>
 */
class DataMessage extends \Google\Protobuf\Internal\Message
{
    protected $kind;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\GeminiDataAnalytics\V1beta\DataQuery $query
     *           A data retrieval query.
     *     @type string $generated_sql
     *           SQL generated by the system to retrieve data.
     *     @type \Google\Cloud\GeminiDataAnalytics\V1beta\DataResult $result
     *           Retrieved data.
     *     @type \Google\Cloud\GeminiDataAnalytics\V1beta\LookerQuery $generated_looker_query
     *           Looker Query generated by the system to retrieve data.
     *     @type \Google\Cloud\GeminiDataAnalytics\V1beta\BigQueryJob $big_query_job
     *           A BigQuery job executed by the system to retrieve data.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Geminidataanalytics\V1Beta\DataChatService::initOnce();
        parent::__construct($data);
    }

    /**
     * A data retrieval query.
     *
     * Generated from protobuf field <code>.google.cloud.geminidataanalytics.v1beta.DataQuery query = 1;</code>
     * @return \Google\Cloud\GeminiDataAnalytics\V1beta\DataQuery|null
     */
    public function getQuery()
    {
        return $this->readOneof(1);
    }

    public function hasQuery()
    {
        return $this->hasOneof(1);
    }

    /**
     * A data retrieval query.
     *
     * Generated from protobuf field <code>.google.cloud.geminidataanalytics.v1beta.DataQuery query = 1;</code>
     * @param \Google\Cloud\GeminiDataAnalytics\V1beta\DataQuery $var
     * @return $this
     */
    public function setQuery($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GeminiDataAnalytics\V1beta\DataQuery::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * SQL generated by the system to retrieve data.
     *
     * Generated from protobuf field <code>string generated_sql = 2;</code>
     * @return string
     */
    public function getGeneratedSql()
    {
        return $this->readOneof(2);
    }

    public function hasGeneratedSql()
    {
        return $this->hasOneof(2);
    }

    /**
     * SQL generated by the system to retrieve data.
     *
     * Generated from protobuf field <code>string generated_sql = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setGeneratedSql($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Retrieved data.
     *
     * Generated from protobuf field <code>.google.cloud.geminidataanalytics.v1beta.DataResult result = 3;</code>
     * @return \Google\Cloud\GeminiDataAnalytics\V1beta\DataResult|null
     */
    public function getResult()
    {
        return $this->readOneof(3);
    }

    public function hasResult()
    {
        return $this->hasOneof(3);
    }

    /**
     * Retrieved data.
     *
     * Generated from protobuf field <code>.google.cloud.geminidataanalytics.v1beta.DataResult result = 3;</code>
     * @param \Google\Cloud\GeminiDataAnalytics\V1beta\DataResult $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GeminiDataAnalytics\V1beta\DataResult::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Looker Query generated by the system to retrieve data.
     *
     * Generated from protobuf field <code>.google.cloud.geminidataanalytics.v1beta.LookerQuery generated_looker_query = 4;</code>
     * @return \Google\Cloud\GeminiDataAnalytics\V1beta\LookerQuery|null
     */
    public function getGeneratedLookerQuery()
    {
        return $this->readOneof(4);
    }

    public function hasGeneratedLookerQuery()
    {
        return $this->hasOneof(4);
    }

    /**
     * Looker Query generated by the system to retrieve data.
     *
     * Generated from protobuf field <code>.google.cloud.geminidataanalytics.v1beta.LookerQuery generated_looker_query = 4;</code>
     * @param \Google\Cloud\GeminiDataAnalytics\V1beta\LookerQuery $var
     * @return $this
     */
    public function setGeneratedLookerQuery($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GeminiDataAnalytics\V1beta\LookerQuery::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * A BigQuery job executed by the system to retrieve data.
     *
     * Generated from protobuf field <code>.google.cloud.geminidataanalytics.v1beta.BigQueryJob big_query_job = 5;</code>
     * @return \Google\Cloud\GeminiDataAnalytics\V1beta\BigQueryJob|null
     */
    public function getBigQueryJob()
    {
        return $this->readOneof(5);
    }

    public function hasBigQueryJob()
    {
        return $this->hasOneof(5);
    }

    /**
     * A BigQuery job executed by the system to retrieve data.
     *
     * Generated from protobuf field <code>.google.cloud.geminidataanalytics.v1beta.BigQueryJob big_query_job = 5;</code>
     * @param \Google\Cloud\GeminiDataAnalytics\V1beta\BigQueryJob $var
     * @return $this
     */
    public function setBigQueryJob($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GeminiDataAnalytics\V1beta\BigQueryJob::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getKind()
    {
        return $this->whichOneof("kind");
    }

}

