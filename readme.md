# PyroStreams Timezone Field Type

Timezone field type for PyroStreams. Allows you to select from a list of timezones in a drop down, and use the timezone code and full name in your templates.

## Installation

Unzip the folder, rename it 'timezone', and put it in your _addons/<site\_ref>/field\_types_ folder or _addons/shared\_addons/field\_types_ folder. It will now be available for use with PyroStreams and Streams-enabled modules.

## Usage

The field type provides a drop down of timezones (using the CodeIgniter timezone dropdown function).

In your templates, you can use access the timezone code and the timezone full name:

	{{ field_slug:code }} {{ field_slug:name }}

## Changelog

*1.1 - August 30, 2012*

* Updated to latest PyroStreams field type syntax.
* Updated to work with is_required.
* Added code and name variables.