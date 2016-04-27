# Another Date ![Statamic v1](https://img.shields.io/badge/statamic-v1-lightgrey.svg?style=flat-square)

Display a date other than the current date on your Statamic site. (Note that you can also display the current date with this add-on.)

## Installation

Drop this repository's `another_date` folder into your site's `_add-ons` folder.


## Usage

```html
Yesterday was {{ another_date when="yesterday" format="F j, Y" }}.
```

## Parameters

- `when` is the date to display, this gets run through PHP's `strtotime` function, so relative dates and any dates that accept will work here (for example: `tomorrow`, `+24 days`, `April 2, 2014`), by default, this will use the current date/time
- `format` is the date formatting to use, again, based on PHP's date formatting, by default this will use your site's configured `_date_format`
