# TYPO3 Extension ``pb_news_jobs`` 


## Description

This extension extends the Extension “news” with additional fields for jobs offers.


## Users manual

After installing the extension you have the following additional fields for a news-record in the backend:

* Entry Date
* Location
* Area
* Position
* Job Number
* Payment
* Tasks
* Requirements
* Contact

## Installation


Install this extension via composer

    composer req peterbenke/pb-news-jobs

Edit your template-record and include static template from extension “News Jobs (pb_news-jobs)”


## Configuration

### Template markers

Now you have the following new template markers.
Wrap them in your template with the Fluid-format.html-Viewhelper, for example:

    <f:format.html>{newsItem.txPbnewsjobsTasks}</f:format.html>


| Title                                            | Marker                              |
|--------------------------------------------------|-------------------------------------|
| Entry Date                                       | {newsItem.txPbnewsjobsEntrydate}    |
| Location                                         | {newsItem.txPbnewsjobsLocation}     |
| Area                                             | {newsItem.txPbnewsjobsArea}         |
| Position                                         | {newsItem.txPbnewsjobsPosition}     |
| Job Number                                       | {newsItem.txPbnewsjobsJobnumber}    |
| Payment                                          | {newsItem.txPbnewsjobsPayment}      |
| Tasks                                            | {newsItem.txPbnewsjobsTasks}        |
| Requirements                                     | {newsItem.txPbnewsjobsRequirements} |
| Contact                                          | {newsItem.txPbnewsjobsContact}      |


## KnownProblems

None at the moment.

## Change log

| Version | Changes                                                      |
|---------|--------------------------------------------------------------|
| 12.4.2  | Fix nullable model properties                                |
| 12.4.1  | Update documentation                                         |
| 12.4.0  | Compatibility to TYPO3 12.4                                  |
| 10.4.0  | Compatibility to TYPO3 10.4                                  |
| 3.0.0   | Compatibility to TYPO3 9.5                                   |
| 2.1.1   | Move TCA-Override into correct folder / Update documentation |
| 2.1.0   | Compatibility to TYPO3 8.7                                   |
| 2.0.1   | Bugfix TCA                                                   |
| 2.0.0   | Compatibility to TYPO3 7.6                                   |     
| 1.1.0   | Compatibility to TYPO3 6.2                                   |     
| 1.0.0   | Init Version                                                 |            