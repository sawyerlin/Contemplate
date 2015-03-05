###ChangeLog

__0.8.2.1__
* Contemplate.js remove Function.bind dependency
* tag new version

__0.8.2__
* InlineTemplate.multisplit_re method, split inlineTpl using regexps
* Contemplate.php fix undefined __currentblock
* minor changes

__0.8.1__
* even faster rendering optimisations (esp. for javascript, reduce rendering function calls by one)
* minor changes

__0.8__
* new template function %echo (similar to php function that echoes strings to the output) 
* %tpl (alias of %template, %template to be deprecated?)
* %tpl, %template, %include, %extends, %block constructs/functions accept literal strings as (1st) argument (see examples)
* minor edits
* various optimisations, faster, more refined compilation and rendering

__0.7.1__
* handle loop variables as local (block-scoped) variables (not added or accessed to/from passed data)
* various optimisations
* (re-uploaded) fix inline templates rendering issue

__0.7__
* inline templates both in Contemplate templates (e.g as parameters to other functions) or in code
* %inline template function, creates/renders inline templates
* templates classes extend Contemplate.Tpl template class (Contemplate.InlineTpl also?)
* minor updates

__0.6.12__
* python-style for-loops contructs (see manual and examples)

__0.6.11__
* remove *Contemplate.addInline* method, *Contemplate.add* handles both references and literal/inline templates
* minor changes/updates

__0.6.10__
* optimise custom html esc method (Contemplate.js)

__0.6.9__
* enable plugin code inlining inside the compiled template
* add a custom simpler/faster html escape function **%e**
* minimise plugin naming convention (%plugin_pluginName, %plg_pluginName)
* add html entinties escape mode as parameter (default= "ENT_COMPAT")
* optimise "htmlentities", "count" etc. methods from phpjs (Contemplate.js)


__0.6.8__
* option to create a template instance from pre-parsed template code returned from *Contemplate.parseTpl* method
* minor changes


__0.6.7__
* make parse method public as Contemplate.parseTpl( tpl, options )


__0.6.6__
* remove render data initialisation/copy/isolation code from inside tpl.render methods (makes rendering a lot faster), user can copy data (once) using Contemplate.data method if needed as needed
* minor edits/optimizations (e.g in loops)


__0.6.5__
* enable associative and non-associative **for** loops (see examples) i.e *for(o as k=>v)* *for(o as v)*
* minor edits/optimizations


__0.6.4__
* make faster and more precise (internal) template parsing/rendering
* make faster and more precise blocks and nested block parsing
* Contemplate for Node.js is **not** global anymore
* refactor/optimize


__0.6.3__
* add more options (e.g 'autoUpdate') per single template
* fix some typos


__0.6.2__
* parse nested blocks
* **escape** parse option (true by default), options syntax change (see manual)


__0.6.1__
* enable template separators to be defined **inside** a template or passed as **paramaters**


__0.6__
* define template separators in the 1st line of a template (each tpl can define its own separators)
* micro edits/changes


__0.5.3, 0.5.4__
* add %isset directive
* change %has_key template function to %haskey
* template directives parsing edits (accomodate nested directives in arguments)


__0.5.2__
* enable literal data to be used as a loop object (see examples)
* php data func (deep object) fixed


__0.5.1__
* add %addslashes, %stripslashes tpl functions
* updates / edits


__0.5__
* add support for custom (user-defined) plugins as template functions with addPlugin(name, handler) method
* add support for setting/unsetting custom variables inside template (on-the-fly) with %set(var, val), %unset(var) directives
* refine/optimize template parsing for strings and variables
* support literal data notation with template functions and plugins also
* updates / edits


__0.4.10__
* add custom codePrefix in cached templates


__0.4.9__
* add %uuid function (generate universal unique id)


__0.4.8__
* change %pluralise signature, unify Contemplate.add, Contemplate.addInline methods, edits, optimizations


__0.4.7__
* add %pluralise function, clearLocaleStrings, setPlurals, clearPlurals methods


__0.4.6__
* add %lowercase, %uppercase, %camelcase, %snakecase template functions (see manual)

__0.4.5__
* add %has_key template function (see manual)

__0.4.4__
* escape single quotes and parse template variables accurately


__0.4.3__
* Contemplate Engine for Python 2.x and 3.x
* minor edits, generate formatted and anotated cached template code (better for debug)
* tidy up repo
* project stopped


__0.4.2__
* add clear (memory) method _clearCache()_
* allow inline templates with _addInline()_ method (see examples)
* allow _for()_ directive to handle an expression in place of an object ( so _%for($data["subdata"] as $key=>$val)_ or other expressions WILL work)
* allow to refresh the (memory) cache for a specific template (ie. _Contemplate.tpl(tpl_id, data, refresh)_ ) refresh = true will refresh the (memory) cache (default __false__ )


__0.4.1__
* parse template tags a little more accurately
* minor edits/optimizations


__0.4__
* add template inheritance and block definitions
* allow client-js template engine to load templates via ajax
* add basic html/url escaping ( *htmlentities* , *urlencode* )
* minor edits/optimizations


__0.3.3__
* make Contemplate.js work with Nodejs , add nodejs server example (test.js)
* add *%count* function (number of items in an array/object)


__0.3.2__
* make *%htmltable* *%htmlselect* constructs instead of functions (so literal data can be used also)
* add *%ltrim* , *%rtrim* functions
* minor fixes, edits


__0.3.1__
* add *%q* *%dq* functions (quote, double quote)
* add *%htmltable* *%htmlselect* functions (render a html table with options, render a html select with options)
* minor fixes, edits


__0.3__
* add *%template* directive
* add template functions to manipulate dates and localized dates
* add some javascript methods from [phpjs](https://github.com/kvz/phpjs) project, (trim, sprintf, time, date), these are available as template functions (eg %sprintf, %trim, etc..)
* make the Contemplate.js class compatible with both browser, node.js and requirejs configurations


__0.2__
* add *%include* directive
* make template separators configurable (defaults are '<%' and '%>')
* add filesystem caching, refactor, optimize


__0.1__
* add localization options and template functions
* initial release
