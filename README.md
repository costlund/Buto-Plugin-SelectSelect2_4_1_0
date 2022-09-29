# Buto-Plugin-SelectSelect2_4_1_0
Transform selectbox to searchable selectbox.

## Include
```
type: widget
data:
  plugin: 'select/select2_4_1_0'
  method: include
```

## Usage
```
type: script
innerHTML: |
  $(document).ready(function() {
      if('select2' in $('#my_form_coworker')){
        $('#my_form_coworker').select2();
      }
  });
```
If dropdown list apears behind a modal one could add parameter dropdownParent.
```
$('#my_form_coworker').select2({dropdownParent: $('.modal')});
```

## From site
```
https://select2.org/
```
