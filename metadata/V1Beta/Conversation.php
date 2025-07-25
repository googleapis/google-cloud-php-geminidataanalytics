<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/geminidataanalytics/v1beta/conversation.proto

namespace GPBMetadata\Google\Cloud\Geminidataanalytics\V1Beta;

class Conversation
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\FieldInfo::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
:google/cloud/geminidataanalytics/v1beta/conversation.proto\'google.cloud.geminidataanalytics.v1betagoogle/api/field_info.protogoogle/api/resource.protogoogle/protobuf/timestamp.proto"�
Conversation
name (	B�A�A
agents (	B�A4
create_time (2.google.protobuf.TimestampB�A7
last_used_time (2.google.protobuf.TimestampB�AV
labels	 (2A.google.cloud.geminidataanalytics.v1beta.Conversation.LabelsEntryB�A-
LabelsEntry
key (	
value (	:8:��A�
/geminidataanalytics.googleapis.com/ConversationDprojects/{project}/locations/{location}/conversations/{conversation}*conversations2conversation"�
CreateConversationRequestG
parent (	B7�A�A1/geminidataanalytics.googleapis.com/Conversation
conversation_id (	B�AP
conversation (25.google.cloud.geminidataanalytics.v1beta.ConversationB�A

request_id (	B�A���"_
GetConversationRequestE
name (	B7�A�A1
/geminidataanalytics.googleapis.com/Conversation"�
ListConversationsRequestG
parent (	B7�A�A1/geminidataanalytics.googleapis.com/Conversation
	page_size (B�A

page_token (	B�A
filter (	B�A"�
ListConversationsResponseL
conversations (25.google.cloud.geminidataanalytics.v1beta.Conversation
next_page_token (	B�
+com.google.cloud.geminidataanalytics.v1betaBConversationProtoPZ]cloud.google.com/go/geminidataanalytics/apiv1beta/geminidataanalyticspb;geminidataanalyticspb�\'Google.Cloud.GeminiDataAnalytics.V1Beta�\'Google\\Cloud\\GeminiDataAnalytics\\V1beta�*Google::Cloud::GeminiDataAnalytics::V1betabproto3'
        , true);

        static::$is_initialized = true;
    }
}

