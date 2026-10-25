# ApiKeyRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**mode** | **string** | &lt;code&gt;live&lt;/code&gt; (default) or &lt;code&gt;test&lt;/code&gt;: a test key (&lt;code&gt;fkn_test_...&lt;/code&gt;) reaches only the sandbox      (ADR 0038) and has scope &lt;code&gt;invoices&lt;/code&gt; | [optional]
**name** | **string** | human-readable name, e.g. \&quot;production\&quot; |
**scopes** | **string[]** | &lt;code&gt;invoices&lt;/code&gt; and/or &lt;code&gt;admin&lt;/code&gt;; omitted or empty means &lt;code&gt;invoices&lt;/code&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
