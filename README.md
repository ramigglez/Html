# html

## Individual functions

<ol>
    <li>doctype ()</li>
    <li>head ($content = null)</li>
    <li>mixedAttrList ($mixed = [])</li>
    <li>mixAttrTag ($tag,$attrs,$or = 0)</li>
    <li>tag ($tag,$attrs = null,$content = null)</li>
    <li>body (array $atttributes = [],$content = null)</li>
    <li>page ($headContent = null,$bodyContent = null,array $bodyAttrs = [])</li>
</ol>

## functions that you need to use
<ol>
    <li>page ($headContent = null,$bodyContent = null,array $bodyAttrs = [])</li>
    <li>tag ($tag,$attrs = null,$content = null)</li>
</ol>

## Index example
<pre>

require_once './Strings/Strings.php';
require_once './html/html.php';

page(

    tag('meta',[
        'keyval' => ['charset' => 'UTF-8'],
        'inline' => []
    ]),//head content (array || string || null)

    tag('div',[
        'keyval' => [],
        'inline' => []
    ],'hello world.'),//body content (array || string || null)

    ['id'=>'wrap']//body attributes (array)
    
);

</pre>
