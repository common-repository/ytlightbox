# YTLightbox

A WordPress plugin to trigger a lightbox after a Youtube video ends, handled via the Youtube API.
Check the <a href="http://www.tuxxus.com/projects/ytlightbox">project page</a> for demo, To-do, documentation and better undestanding.

Warning!: code not 100% polished! Work in progress. Use at you own risk, and pull!

<h2>Usage</h2>
```
[ytlight video="9Xd6IdalIws"]
```
```
[ytlight video="9Xd6IdalIws" height="150"]
```

<h2>Demo</h2>
http://www.tuxxus.com/projects/ytlightbox#demo

<h2>ToDo</h2>
<ul class="task-list">
    <li>Create an option in the backend to disable/enable scrolling when the modal is active</li>
    <li>Create an option to disable/enable the close buttons, and actions. This way you only close it by clicking on share.</li>
    <li>Define an option box for alternative styles</li>
    <li>Load once single modal box html structure</li>
    <li>Internationalization: https://codex.wordpress.org/I18n_for_WordPress_Developers</li> 
    <li>Add logo to the Wordpress repository and header image</li>                                                  
    <li>Wrap the plugin inside a class</li>
</ul>

<h2>Changelog</h2>
<h3>Version 0.2.3 - 2015-11-18</h3>
<ul class="task-list">
    <li>Create a better backend structure</li>       
    <li>Option to disable/enable share buttons</i>
    <li>Better share buttons. Fixed twitter share url and text problem.</i>
</ul>

<h3>Version 0.2.2 - 2015-05-28</h3>
<ul class="task-list">
    <li>Remove fancybox library for modal (including demo folders), and replace it with a ytlightbox-custom css implementation of a modal (to be enhanced).</li>
    <li>Remove ugly global constant</li>
    <li>Bug fix regarding video width and height handling</li>
    <li>Remove the Google MIT library used to display the Youtube Video, to make the plugin GPL compatible.</li>
    <li>Double check "wp_enqueue_script" calls.</li>
</ul>


<h3>Version 0.2.1 - 2015-05-12</h3>
<ul class="task-list">
<li>Change version number model to <a href="https://docs.npmjs.com/getting-started/semantic-versioning">semantic versioning</a></li>
</ul>

<h3>Version 0.1 - 2015-04-27</h3>
<ul class="task-list">
<li>First release</li>
</ul>
