# FindingDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**location** | **string** | business term or XPath the finding refers to | [optional]
**message** | [**\Fakturnaut\Sdk\Model\LocalizedText**](LocalizedText.md) | plain-language explanation in German and English | [optional]
**ruleId** | **string** | official or engine rule identifier, e.g. &lt;code&gt;BR-CO-10&lt;/code&gt; | [optional]
**severity** | **string** | &lt;code&gt;ERROR&lt;/code&gt;, &lt;code&gt;WARNING&lt;/code&gt; or &lt;code&gt;INFO&lt;/code&gt; | [optional]
**source** | **string** | &lt;code&gt;BUSINESS_RULES&lt;/code&gt;, &lt;code&gt;XML_SCHEMA&lt;/code&gt;, &lt;code&gt;SCHEMATRON&lt;/code&gt; or &lt;code&gt;DOCUMENT&lt;/code&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
