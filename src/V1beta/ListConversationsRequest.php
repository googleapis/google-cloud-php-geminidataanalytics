<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/geminidataanalytics/v1beta/conversation.proto

namespace Google\Cloud\GeminiDataAnalytics\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for listing conversations based on parent.
 *
 * Generated from protobuf message <code>google.cloud.geminidataanalytics.v1beta.ListConversationsRequest</code>
 */
class ListConversationsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Parent value for ListConversationsRequest.
     * Format: `projects/{project}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Optional. Requested page size. Server may return fewer items than
     * requested. The max page size is 100. All larger page sizes will be coerced
     * to 100. If unspecified, server will pick 50 as an approperiate default.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_size = 0;
    /**
     * Optional. A token identifying a page of results the server should return.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_token = '';
    /**
     * Optional. Returned conversations will match criteria specified within the
     * filter. ListConversations allows filtering by:
     *  * agent_id
     *  * labels
     *
     * Generated from protobuf field <code>string filter = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $filter = '';

    /**
     * @param string $parent Required. Parent value for ListConversationsRequest.
     *                       Format: `projects/{project}/locations/{location}`
     *                       Please see {@see DataChatServiceClient::locationName()} for help formatting this field.
     *
     * @return \Google\Cloud\GeminiDataAnalytics\V1beta\ListConversationsRequest
     *
     * @experimental
     */
    public static function build(string $parent): self
    {
        return (new self())
            ->setParent($parent);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Parent value for ListConversationsRequest.
     *           Format: `projects/{project}/locations/{location}`
     *     @type int $page_size
     *           Optional. Requested page size. Server may return fewer items than
     *           requested. The max page size is 100. All larger page sizes will be coerced
     *           to 100. If unspecified, server will pick 50 as an approperiate default.
     *     @type string $page_token
     *           Optional. A token identifying a page of results the server should return.
     *     @type string $filter
     *           Optional. Returned conversations will match criteria specified within the
     *           filter. ListConversations allows filtering by:
     *            * agent_id
     *            * labels
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Geminidataanalytics\V1Beta\Conversation::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Parent value for ListConversationsRequest.
     * Format: `projects/{project}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Parent value for ListConversationsRequest.
     * Format: `projects/{project}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Optional. Requested page size. Server may return fewer items than
     * requested. The max page size is 100. All larger page sizes will be coerced
     * to 100. If unspecified, server will pick 50 as an approperiate default.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. Requested page size. Server may return fewer items than
     * requested. The max page size is 100. All larger page sizes will be coerced
     * to 100. If unspecified, server will pick 50 as an approperiate default.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Optional. A token identifying a page of results the server should return.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. A token identifying a page of results the server should return.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * Optional. Returned conversations will match criteria specified within the
     * filter. ListConversations allows filtering by:
     *  * agent_id
     *  * labels
     *
     * Generated from protobuf field <code>string filter = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Optional. Returned conversations will match criteria specified within the
     * filter. ListConversations allows filtering by:
     *  * agent_id
     *  * labels
     *
     * Generated from protobuf field <code>string filter = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

}

