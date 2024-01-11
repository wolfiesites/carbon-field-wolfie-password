# carbon field: wolfie_password
* created as extension to carbon fields
* Adds password input field to carbon fields

## usage
1. first download carbon fields via composer  `composer require htmlburger/carbon-fields`
2. download this repo via composer: `composer require wolfiesites/carbon-fields-password`
3. register this field after loading carbon fields: `Carbon_Field_Wolfie_Password\Wolfie_Password_Field::register()`
4. while defining fields use `wolfie_password` to display the field like this:
```
Field::make( 'wolfie_password', 'crb_pass', 'Password' )
```
