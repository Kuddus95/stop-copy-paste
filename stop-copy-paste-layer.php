<?php


class qa_html_theme_layer extends qa_html_theme_base {

	function head_script()
{
    parent::head_script();

    $this->output_raw('<script>
document.addEventListener('contextmenu', event => event.preventDefault());
document.onkeydown = function (e) {
  e = e || window.event; //Get event
  if (e.ctrlKey) {
    var c = e.which || e.keyCode; //Get key code
    switch (c) {
      case 83: //Block Ctrl+S
      case 87: //Block Ctrl+W
      case 73: //Block Ctrl+I
      case 86: //Block Ctrl+V
      case 67: //Block Ctrl+C
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
