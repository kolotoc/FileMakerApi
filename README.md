# FileMaker PHP API

FileMaker PHP API, namespaced, clean and completely error-free. This implementation of FileMaker API resolves
  - Namespaces - whole solution is wraped into namespace
  - Errors - all staticly called method are really static
  - Code - code is cleaned up and writen for php 5.3

Complete documentation for API is here https://fmhelp.filemaker.com/docs/14/en/fms14_cwp_guide.pdf

### Basic usage

```sh
use Kolotoc\FileMakerApi\FileMaker;
$fm = new FileMaker();
$fm->setProperty('database', DATABASE);
$fm->setProperty('hostspec', HOSTSPEC);
$fm->setProperty('username', USERNAME);
$fm->setProperty('password', PASSWORD);
```