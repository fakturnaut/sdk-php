# ApiKeyResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**createdAt** | **\DateTime** | creation time | [optional]
**id** | **string** | identifier | [optional]
**key** | **string** | the full key; only present in the response that created it | [optional]
**lastUsedAt** | **\DateTime** | last use (minute precision) | [optional]
**mode** | **string** | &lt;code&gt;live&lt;/code&gt; or &lt;code&gt;test&lt;/code&gt; (sandbox only, ADR 0038) | [optional]
**name** | **string** | name | [optional]
**prefix** | **string** | public prefix, e.g. &lt;code&gt;fkn_ab12cd34ef56&lt;/code&gt; | [optional]
**revokedAt** | **\DateTime** | revocation time | [optional]
**scopes** | **string[]** | what the key may do: &lt;code&gt;invoices&lt;/code&gt; and/or &lt;code&gt;admin&lt;/code&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
