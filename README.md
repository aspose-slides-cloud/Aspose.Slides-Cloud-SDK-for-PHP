![](https://img.shields.io/badge/api-v3.0-lightgrey) ![Packagist Version](https://img.shields.io/packagist/v/aspose/slides-sdk-php) ![Packagist PHP Version Support](https://img.shields.io/packagist/php-v/aspose/slides-sdk-php) [![GitHub license](https://img.shields.io/github/license/aspose-slides-cloud/Aspose.Slides-Cloud-SDK-for-PHP)](https://github.com/aspose-slides-cloud/Aspose.Slides-Cloud-SDK-for-PHP/blob/master/LICENSE)

# PHP REST API to Process Presentation in Cloud
This repository contains Aspose.Slides Cloud SDK for PHP source code. This SDK allows you to [process & manipulate PPT, PPTX, ODP, OTP](https://products.aspose.cloud/slides/php) using Aspose.slides Cloud REST APIs in your PHP applications.

You may want to check out Aspose free [Powerpoint to PDF](https://products.aspose.app/slides/conversion), [Powerpoint to Word](https://products.aspose.app/slides/conversion/ppt-to-word), [Powerpoint to JPG](https://products.aspose.app/slides/conversion/ppt-to-jpg), [Powerpoint to PNG](https://products.aspose.app/slides/conversion/ppt-to-png), [PDF to Powerpoint](https://products.aspose.app/slides/import/pdf-to-powerpoint), [JPG to Powerpoint](https://products.aspose.app/slides/import/jpg-to-ppt), and [PNG to Powerpoint](https://products.aspose.app/slides/import/png-to-ppt) converters because they are live implementations of popular conversion processes.

## Presentation Processing Features

- Fetch presentation images in any of the supported file formats.
- Copy the layout side or clone the master slide from the source presentation.
- Process slides shapes, slides notes, placeholders, colors & font theme info.
- Programmatically create a presentation from HTML & export it to various formats.
- Merge multiple presentations or split the single presentation into multiple ones.
- Extract and replace text from a specific slide or an entire presentation.

## Read & Write Presentation Formats

**Microsoft PowerPoint:** PPT, PPTX, PPS, PPSX, PPTM, PPSM, POTX, POTM
**OpenOffice:** ODP, OTP, FODP
**Other**: PDF, PDF/A

## Save Presentation As

**Fixed Layout:** XPS
**Images:** JPEG, PNG, BMP, TIFF, GIF, EMF, SVG
**Web:** HTML/HTML5
**Other:** MPEG4, SWF (export whole presentations)

## Enhancements in Version 26.10

* New **downloadParagraph** and **saveParagraph** methods to render a paragraph to an image (JPEG, PNG, GIF, BMP or TIFF) and return it in the response or save it to a storage.
* New **downloadTableCellParagraph** and **saveTableCellParagraph** methods to render a table cell paragraph to an image.
* Added **picturesCompression** property to **Html5ExportOptions** class. It specifies the compression level for pictures in the HTML5 output.

## Enhancements in Version 26.6

* Added **cloneFromSlide** parameter to **createShape** and **createSpecialSlideShape** methods, enabling cross-slide shape cloning.
* New **importChartFromWorkbook** and **importTableFromWorkbook** methods to import charts and tables from an Excel workbook.
* Enriched **SmartArt** and **SmartArtNode** with **defaultParagraphFormat** write-only property. You can specify paragraph formatting for a smart art shape and individual nodes.
* Added **compressionLevel** property to **PptxExportOptions** class. It controls the ZIP compression used when saving a PPTX file.
* Added **getLogger**/**setLogger** functions to **Configuration** for specifying a custom logging function.

## Licensing
All Aspose.Slides Cloud SDKs are licensed under MIT License.

## How to use the SDK?
The complete source code is available in this repository folder. You can either directly use it in your project via source code or get [composer package](https://packagist.org/packages/aspose/slides-sdk-php) (recommended).

## Prerequisites
To use Aspose Slides Cloud PHP SDK you need to register an account with [Aspose Cloud](https://www.aspose.cloud/) and lookup/create App Key and SID at [Cloud Dashboard](https://dashboard.aspose.cloud/#/apps). There is free quota available. For more details, see [Aspose Cloud Pricing](https://purchase.aspose.cloud/pricing).

### Installation

From the command line:

	composer require aspose/slides-sdk-php

### Sample usage

The example code below converts a PowerPoint document to PDF format using slides-sdk-php library:
```php
use Aspose\Slides\Cloud\Sdk\Api\Configuration;
use Aspose\Slides\Cloud\Sdk\Api\SlidesApi;
use Aspose\Slides\Cloud\Sdk\Model\ExportFormat;

$config = new Configuration();
$config->setAppSid("MyClientId");
$config->setAppKey("MyClientSecret");
$api = new SlidesApi(null, $config);
$result = $api->Convert(fopen("MyPresentation.pptx", 'r'), ExportFormat::PDF);
echo "My PDF was saved to " . $result->getPathname();
```


## Aspose.Slides Cloud SDKs in Popular Languages

| .NET | Java | PHP | Python | Ruby | Node.js | Android | Swift|Perl|Go|
|---|---|---|---|---|---|---|--|--|--|
| [GitHub](https://github.com/aspose-slides-cloud/Aspose.Slides-Cloud-SDK-for-.NET) | [GitHub](https://github.com/aspose-slides-cloud/Aspose.Slides-Cloud-SDK-for-Java) | [GitHub](https://github.com/aspose-slides-cloud/Aspose.Slides-Cloud-SDK-for-PHP) | [GitHub](https://github.com/aspose-slides-cloud/Aspose.Slides-Cloud-SDK-for-Python) | [GitHub](https://github.com/aspose-slides-cloud/Aspose.Slides-Cloud-SDK-for-Ruby)  | [GitHub](https://github.com/aspose-slides-cloud/Aspose.Slides-Cloud-SDK-for-Node.js) | [GitHub](https://github.com/aspose-slides-cloud/Aspose.Slides-Cloud-SDK-for-Android) | [GitHub](https://github.com/aspose-slides-cloud/Aspose.Slides-Cloud-SDK-for-Swift)|[GitHub](https://github.com/aspose-slides-cloud/Aspose.Slides-Cloud-SDK-for-Perl) |[GitHub](https://github.com/aspose-slides-cloud/Aspose.Slides-Cloud-SDK-for-Go) |
| [NuGet](https://www.nuget.org/packages/Aspose.slides-Cloud/) | [Maven](https://repository.aspose.cloud/webapp/#/artifacts/browse/tree/General/repo/com/aspose/aspose-slides-cloud) | [Composer](https://packagist.org/packages/aspose/slides-sdk-php) | [PIP](https://pypi.org/project/asposeslidescloud/) | [GEM](https://rubygems.org/gems/aspose_slides_cloud)  | [NPM](https://www.npmjs.com/package/asposeslidescloud) | [Maven](https://repository.aspose.cloud/webapp/#/artifacts/browse/tree/General/repo/com/aspose/aspose-slides-cloud) | [Cocoapods](https://cocoapods.org/pods/AsposeslidesCloud)|[Meta Cpan](https://metacpan.org/release/AsposeSlidesCloud-SlidesApi) | [Go.Dev](https://pkg.go.dev/github.com/aspose-slides-cloud/Aspose.Slides-Cloud-SDK-for-Go/) |

[Product Page](https://products.aspose.cloud/slides/php) | [Documentation](https://docs.aspose.cloud/display/slidescloud/Home) | [API Reference](https://apireference.aspose.cloud/slides/) | [Code Samples](https://github.com/aspose-slides-cloud/Aspose.Slides-Cloud-SDK-for-PHP) | [Blog](https://blog.aspose.cloud/category/slides/) | [Free Support](https://forum.aspose.cloud/c/slides) | [Free Trial](https://dashboard.aspose.cloud/#/apps)
