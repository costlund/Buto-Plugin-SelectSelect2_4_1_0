# Buto-Plugin-SelectSelect2_4_1_0

<ul>
<li>Transform selectbox to searchable selectbox.</li>
<li>From: <a href="https://select2.org/">https://select2.org/</a></li>
</ul>

<a name="key_0"></a>

## Usage



<a name="key_0_0"></a>

### Script

<pre><code>type: script
innerHTML: |
  $(document).ready(function() {
      if('select2' in $('#my_form_element')){
        $('#my_form_element').select2();
      }
  });</code></pre>
<p>If dropdown list apears behind a modal one could add parameter dropdownParent.</p>
<pre><code>$('#my_form_coworker').select2({dropdownParent: $('#my_modal_id')});</code></pre>

<a name="key_0_1"></a>

### Handling

<p>On focus hit space to show options or click on element.</p>

<a name="key_1"></a>

## Widgets



<a name="key_1_0"></a>

### widget_include

<p>Include in document head.</p>
<pre><code>type: widget
data:
  plugin: 'select/select2_4_1_0'
  method: include</code></pre>

