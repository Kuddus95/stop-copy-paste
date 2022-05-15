<?php


class qa_html_theme_layer extends qa_html_theme_base {

	function head_script()
{
    parent::head_script();

    $this->output_raw('<script>
document.addEventListener("contextmenu", function (e){
    e.preventDefault();
}, false); 
document.onkeydown = function (e) {
  e = e || window.event; //Get event
  if (e.ctrlKey) {
    var c = e.which || e.keyCode; //Get key code
    switch (c) {
      case 83: 
      case 87: 
      case 73: 
      case 86: 
      case 67: 
        e.preventDefault();
        e.stopPropagation();
        break;
    }
  }
};    
</script>
<style>
body{
user-select:none;
}
</style>
');
}
	
}
/*
   Omit PHP closing tag to help avoid accidental output
 */
