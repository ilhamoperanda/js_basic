<!DOCTYPE html>
  <html> 
  <head>
  <title>JavaScript basic animation</title>
  <script type="text/javascript">
  </script>
  </head> <body onload="animate_string('target')"
  <pre id="target">w3resource </pre>

  <script type="text/javascript">
    
function animate_string(id) 
{
    var element = document.getElementById(id);
    var textNode = element.childNodes[0]; // assuming no other children
    var text = textNode.data;

setInterval(function () 
{
 text = text[text.length - 1] + text.substring(0, text.length - 1);
  textNode.data = text;
}, 100);
}
  </script>
  </body> 
  </html>
