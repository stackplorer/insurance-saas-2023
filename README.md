# Project Title
<!-- One paragraph of your project's description goes here. Describe what your project is, what problem it solves, how it solves the problem, and the architecture. -->


## Topics

1. [Introduction](#introduction)
2. [link](#link)
3. [Running the tests](#running-the-tests)
4. [Deployment](#deployment)
5. [link](#link)




### Introduction

[Insurance Broker]() is a CRM for insurance sales agents built on opensource technologies such as [Laravel](), [Vue.js](), [Tailwind]().

## Getting Started

### Running the tests

```
$ php artisan test
```

If you wish to run only the tests in a specific directory such as `tests/Feature/Policies/`, you would run:

```
$ vendor/bin/phpunit --filter Policies
```

### Deployment

# Visit our live [Demo](https://demo.mydomain.com)

## Features

##### Users, Teams

##### Roles & Permissions

##### Leads and Contact management

##### Insurer, Rates (find the best coverage)

##### Policies, Claims

##### Accounting, Billing, Quotes, Invoice & Recurring Invoices

##### Reporting & Informative Dashboard

##### Tasks, Events, Calendars

##### global and advanced search

##### Multi-Tenancy
<!-- It is possible that there are multiple records for the same person. For example suppose John Doe buys a policy from Insurer A and a policy from Insurer B. Both insurer A and insurer B register John Doe on the system and a separate record is kept for both insurers like this they can manage their own data. -->

##### Multi-Lingual support

##### Multi-Theme support

##### export and import data

## Database Entities

### User



### Team

Each `User` belongs to exactly one `Team`.

Teams can be thought of as sales channels.

Insurance companies distribute their products through sales channels such as insurance agents, insurance brokerages, and direct sales.

A `Team` can be any of the following:

|Type|description|
|-|-|
|Brokerage|represents multiple insurance companies|
|Agency|represents one insurance company and its products|
|TII||
|Price Aggregator||
|Direct|the insurance company itself|

### Insurer

### Person

A person can either be a natural person (_i.e._, an individual human being) or a juridical person (_e.g.,_ corporation, government, or charity).

The following stakeholders are all stored in the `persons` table:

| Person        | created by user |
|---------------|-----------------|
| policyholder  | sales agent     |
| damaged party | claims adjuster |


### Policy

An insurance policy


------------------------------------------------------------------
README Dev!
==================================================================

### Create reusable Vue components

Create reusable custom Vue components in `resources/js/Components` so that you will have a consistent UI

### OOP Inheritance & extension tables

Extension tables should follow the naming convention `goos__foo` where `class Foo extends Goo`.

### Comments tags

You will come across comments containing the following tags such as `*PENDING*`, `*TEMP*`, `*FIX*`, `*REFACTOR*`, `*OPT*`; these indicate that the code needs to be revised.



------------------------------------------------------------------
Insurance Basics
==================================================================

- [Named Perils vs. All-Risk Policies]()
- [Understanding Insurance vs. Excess Insurance vs. Reinsurance](https://www.investopedia.com/articles/personal-finance/081116/insurance-excess-insurance-and-reinsurance-whats-difference-all.asp)
- [What Is the Difference Between Primary and Excess Coverage?](https://www.stalterlaw.com/blog/what-is-the-difference-between-primary-and-excess-coverage/)
