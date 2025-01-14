# # SentEmailDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | ID of sent email |
**user_id** | **string** | User ID |
**inbox_id** | **string** | Inbox ID email was sent from |
**domain_id** | **string** | Domain ID | [optional]
**to** | **string[]** | Recipients email was sent to | [optional]
**from** | **string** |  | [optional]
**reply_to** | **string** |  | [optional]
**cc** | **string[]** |  | [optional]
**bcc** | **string[]** |  | [optional]
**attachments** | **string[]** | Array of IDs of attachments that were sent with this email | [optional]
**subject** | **string** |  | [optional]
**body_md5_hash** | **string** | MD5 Hash | [optional]
**body** | **string** |  | [optional]
**to_contacts** | **string[]** |  | [optional]
**to_group** | **string** |  | [optional]
**charset** | **string** |  | [optional]
**is_html** | **bool** |  | [optional]
**sent_at** | [**\DateTime**](\DateTime) |  |
**pixel_ids** | **string[]** |  | [optional]
**message_id** | **string** |  | [optional]
**message_ids** | **string[]** |  | [optional]
**virtual_send** | **bool** |  | [optional]
**template_id** | **string** |  | [optional]
**template_variables** | **array<string,object>** |  | [optional]
**html** | **bool** |  | [optional]

[[Back to Model list]](../../README#models) [[Back to API list]](../../README#endpoints) [[Back to README]](../../README)
