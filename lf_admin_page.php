<?php
/**
* Class and Function List:
* Function list:
* - language_field_plugin_menu()
* - language_field_options()
* Classes list:
*/
add_action('admin_menu', 'language_field_plugin_menu');

function language_field_plugin_menu()
{
    add_options_page("Language Field", "Language Field", "delete_users", "language-field", "language_field_options");
}

function language_field_options()
{

    if (isset($_POST['addlflang']))
    {
        update_option("language_fields", $_POST);
    }

?>
<div class="wrap">
<?php screen_icon(); ?>
<h2><?php _e('Language Field Admin Page'); ?></h2>

<div id="container">

		
		<section id="main">

		<?php
    _e('<br>Welcome to the Language Field Plugin.<bR>Start adding your Languages<bR>');
    _e('the format is: <br><b>first:</b> Language locale like de-DE <b>second:</b> shortform like de <b>third:</b> long name');
    $language_fields = get_option("language_fields");

    //print_r($language_fields);
    
?><form method="POST" action="">
		<?php
    $arr             = $language_fields;
    $num             = 1;
    $num1            = 0;
    //if(get_option("language_fields")==true){
    foreach ($arr as $key => $value)
    {

        if (strstr($key, "language_shortcode"))
        {

            //echo '<input type="text" name="' .$key.'" id="var'.$num.'" value="'.$value.'">';
            echo ' Language Shortcode: <input type="text" name="' . $key . '" id="var' . $num . '" value="' . $value . '">';

        }
        else if (strstr($key, "language_name"))
        {

            //echo '<input type="text" name="' .$key.'" id="var'.$num.'" value="'.$value.'"><br />';
            echo ' Language Name: <input type="text" name="' . $key . '" id="var' . $num . '" value="' . $value . '"> <span class="removeVar button button-small">Remove Language</span></p>';
            $num++;
        }
        else if ($key == "addlflang")
        {
        }

        else if (strstr($key, "language_code"))
        {

            //echo '<input type="text" name="' .$key.'" id="var'.$num.'" value="'.$value.'">';
            echo '<p><label for="var' . $num . '">Language: </label><input type="text" name="' . $key . '" id="var' . $num . '" value="' . $value . '">';
        }
        $num1 = $num;
        //echo "Key: $key; Value: $value<br />\n";
        
    }
    //}
    
?>

		
		
		<?php
    //print_r($num);
    /*
    Dynamic field code is by
    http://www.mustbebuilt.co.uk/2012/07/27/adding-form-fields-dynamically-with-jquery/
    */

?>
		<p> 
		            <span class="button button-small" id="addVar">Add Language</span>
		</p>


		<p class="alignRight">
		<input type="hidden" name="addlflang">
		<input type="submit" class="button button-primary button-large" value="Save changes">
		</p>
	
		
		</form>

	<?php //echo "num1 ".$num1;
    
?>
	</div><!--!/#container -->

	<script>
	//initialize with 3
	//var startingNo = 1 ;
	<?php
    echo "var startingNo = " . ($num1 + 2) . ";";
?>
	var $node = "";
	for(varCount=0;varCount<=startingNo;varCount++){
		var displayCount = <?php echo '' . ($num1 + 2) . ''; ?>;
		displayCount++;
		$node += '<p><label for="var'+displayCount+'">Language: </label><input type="text" name="language_code_'+displayCount+'" id="var'+displayCount+'"> Language Shortcode: <input type="text" name="language_shortcode_'+displayCount+'" id="var'+displayCount+'"> Language Name: <input type="text" name="language_name_'+varCount+'" id="var'+varCount+'"> <span class="removeVar button button-small">Remove Language</span></p>';
	}
	//$('form').prepend($node);
	jQuery('form').on('click', '.removeVar', function(){
		$(this).parent().remove();
		//varCount--;
	});

	jQuery('#addVar').on('click', function(){
		//new node
		varCount++;
		$node = '<p><label for="var'+varCount+'">Language: </label><input type="text" name="language_code_'+varCount+'" id="var'+varCount+'"> Language Shortcode: <input type="text" name="language_shortcode_'+varCount+'" id="var'+varCount+'"> Language Name: <input type="text" name="language_name_'+varCount+'" id="var'+varCount+'"> <span class="removeVar button button-small">Remove Language</span></p>';
		jQuery(this).parent().before($node);
	});
	
	
	</script>







<?php
}
?>