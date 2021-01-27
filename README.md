# Sanitizers
Quickly Sanitize user data

<p align="center">
  <i><u>v1.1</u></i>
  <br><br>
    <a href="https://github.com/PuneetGopinath/Sanitizers/issues/new?template=bug_report.md">Report bug</a> • 
    <a href="https://github.com/PuneetGopinath/Sanitizers/issues/new?template=feature_request.md">Request feature</a>
</p>

[![Github All Releases](https://img.shields.io/github/downloads/PuneetGopinath/Sanitizers/total.svg)]()
[![GitHub stars](https://img.shields.io/github/stars/PuneetGopinath/Sanitizers)](https://github.com/PuneetGopinath/Sanitizers/stargazers)
[![GitHub issues](https://img.shields.io/github/issues/PuneetGopinath/Sanitizers)](https://github.com/PuneetGopinath/Sanitizers/issues)
[![GitHub license](https://img.shields.io/github/license/PuneetGopinath/Sanitizers)](https://github.com/PuneetGopinath/Sanitizers/blob/main/LICENSE)
[![GitHub package.json dynamic](https://img.shields.io/github/package-json/description/PuneetGopinath/Sanitizers)]()
[![GitHub release (latest by date)](https://img.shields.io/github/v/release/PuneetGopinath/Sanitizers)]()
![Snyk Vulnerabilities for GitHub Repo](https://img.shields.io/snyk/vulnerabilities/github/PuneetGopinath/Sanitizers)
[![GitHub top language](https://img.shields.io/github/languages/top/PuneetGopinath/Sanitizers)]()
[![GitHub code size in bytes](https://img.shields.io/github/languages/code-size/PuneetGopinath/Sanitizers)]()
[![GitHub language count](https://img.shields.io/github/languages/count/PuneetGopinath/Sanitizers)]()
[![GitHub package.json dynamic](https://img.shields.io/github/package-json/keywords/PuneetGopinath/Sanitizers)]()
![GitHub repo size](https://img.shields.io/github/repo-size/PuneetGopinath/Sanitizers)

### What is Sanitize ??
Sanitize is a function to check (and remove) harmful data from user input which can harm the software.

This is the most secure method of input validation to strip out anything that is not on the whitelist.

## Usage
Just require the file and Sanitize the user input.
Example Usage in php:

    <?php
    require("Sanitizers.php");

    $sanitize = new Sanitizer();
    echo $sanitize->Username($_GET['username']);
    ?>

## PHP Support
#### Versions Which have no problem - 5.0.0 - 5.0.5, 5.1.0 - 5.1.6, 5.2.0 - 5.2.17, 5.3.0 - 5.3.29, 5.4.0 - 5.4.45, 5.5.0 - 5.5.38, 5.6.0 - 5.6.40, 7.0.0 - 7.0.33, 7.1.0 - 7.1.33, 7.2.0 - 7.2.34, 7.3.0 - 7.3.26, 7.4.0 - 7.4.14, 8.0.0 - 8.0.1

#### Output for 4.4.2 - 4.4.9
    Parse error: syntax error, unexpected T_STRING, expecting T_OLD_FUNCTION or T_FUNCTION or T_VAR or '}' in /in/eQP7g on line 8
    Process exited with code 255.

#### Output for 4.3.0 - 4.3.1, 4.3.5 - 4.3.11, 4.4.0 - 4.4.1
    Parse error: parse error, unexpected T_STRING, expecting T_OLD_FUNCTION or T_FUNCTION or T_VAR or '}' in /in/eQP7g on line 8
    Process exited with code 255.

#### Output for 4.3.2 - 4.3.4
    Parse error: parse error, expecting `T_OLD_FUNCTION' or `T_FUNCTION' or `T_VAR' or `'}'' in /in/eQP7g on line 8
    Process exited with code 255.

## Contributing
See the [CONTRIBUTING.md](https://github.com/PuneetGopinath/Sanitizers/tree/main/.github/CONTRIBUTING.md) file for more info.
